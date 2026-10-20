<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class AdminLoginSecurityTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        Http::preventStrayRequests();
        config([
            'services.recaptcha.site_key' => 'admin-test-site-key',
            'services.recaptcha.secret_key' => 'admin-test-secret-key',
        ]);
    }

    public function test_admin_login_is_noindex_not_cached_and_contains_recaptcha(): void
    {
        $this->get('/vr/login')
            ->assertOk()
            ->assertHeader('X-Robots-Tag', 'noindex, nofollow, noarchive, nosnippet')
            ->assertHeader('Cache-Control', 'no-store, private')
            ->assertSee('<meta name="robots" content="noindex, nofollow, noarchive, nosnippet">', false)
            ->assertSee('name="recaptcha_action" value="admin_login"', false)
            ->assertSee('name="g-recaptcha-response"', false)
            ->assertSee('api.js?render=admin-test-site-key', false);
    }

    public function test_public_admin_registration_is_disabled(): void
    {
        $this->get('/vr/register')->assertNotFound();
    }

    public function test_login_rejects_missing_or_invalid_recaptcha(): void
    {
        $payload = [
            'email' => 'admin@example.com',
            'password' => 'password',
            'website' => '',
            'recaptcha_action' => 'admin_login',
        ];

        $this->post('/vr/login', $payload)
            ->assertSessionHasErrors('g-recaptcha-response');

        Http::fake(['www.google.com/recaptcha/*' => Http::response([
            'success' => true,
            'action' => 'contact_form',
            'score' => 0.9,
        ])]);

        $this->post('/vr/login', array_merge($payload, [
            'g-recaptcha-response' => 'wrong-action-token',
        ]))->assertSessionHasErrors('g-recaptcha-response');

        $this->assertGuest();
    }

    public function test_valid_recaptcha_allows_valid_admin_login(): void
    {
        $user = User::factory()->create([
            'email' => 'admin@example.com',
            'password' => Hash::make('secure-password'),
        ]);

        Http::fake(['www.google.com/recaptcha/*' => Http::response([
            'success' => true,
            'action' => 'admin_login',
            'score' => 0.9,
        ])]);

        $this->post('/vr/login', [
            'email' => $user->email,
            'password' => 'secure-password',
            'website' => '',
            'recaptcha_action' => 'admin_login',
            'g-recaptcha-response' => 'valid-admin-token',
        ])->assertRedirect('/vr/home');

        $this->assertAuthenticatedAs($user);
        Http::assertSent(fn ($request) =>
            $request->url() === 'https://www.google.com/recaptcha/api/siteverify'
            && $request['secret'] === 'admin-test-secret-key'
            && $request['response'] === 'valid-admin-token'
        );
    }
}
