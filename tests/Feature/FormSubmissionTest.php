<?php

namespace Tests\Feature;

use App\Models\FormSubmission;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

class FormSubmissionTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        Http::preventStrayRequests();
        Http::fake(['www.google.com/recaptcha/*' => Http::response([
            'success' => true, 'action' => 'contact_form', 'score' => 0.9,
        ])]);
        config(['services.contact.to' => 'admin@example.com', 'services.contact.from' => 'site@example.com']);
    }

    private function payload(): array
    {
        return [
            'name' => 'Customer Test', 'email' => 'customer@example.com',
            'phone' => '6045551234', 'message' => "Water damage\nPlease call.",
            'source' => 'Water Damage', 'page_url' => 'https://vrrestoration.ca/en/water-damage',
            'website' => '', 'g-recaptcha-response' => 'test-token', 'recaptcha_action' => 'contact_form',
        ];
    }

    public function test_valid_submission_is_saved_and_email_is_sent(): void
    {
        config(['mail.default' => 'array']);
        $this->post('/en/contact-submit', $this->payload())->assertSessionHas('contact_success');
        $this->assertDatabaseHas('form_submissions', [
            'email' => 'customer@example.com', 'source' => 'Water Damage',
            'locale' => 'en', 'email_status' => 'sent', 'message' => "Water damage\nPlease call.",
        ]);
        $this->assertNotNull(FormSubmission::first()->email_sent_at);
    }

    public function test_email_failure_does_not_lose_the_submission_or_ask_customer_to_resubmit(): void
    {
        Mail::shouldReceive('send')->once()->andThrow(new \RuntimeException('SMTP unavailable'));
        $this->post('/zh/contact-submit', $this->payload())
            ->assertSessionHas('contact_success')->assertSessionMissing('contact_error');
        $this->assertDatabaseHas('form_submissions', ['email_status' => 'failed', 'locale' => 'zh', 'email_sent_at' => null]);
    }

    public function test_invalid_and_spam_submissions_are_not_saved(): void
    {
        Mail::shouldReceive('send')->never();
        $this->post('/en/contact-submit', array_replace($this->payload(), ['email' => 'invalid']))->assertSessionHasErrors('email');
        $this->post('/en/contact-submit', array_replace($this->payload(), ['website' => 'spam']))->assertSessionHasErrors('website');
        Http::swap(new \Illuminate\Http\Client\Factory);
        Http::fake(['www.google.com/recaptcha/*' => Http::response(['success' => false])]);
        $this->post('/en/contact-submit', $this->payload())->assertSessionHas('contact_error');
        $this->assertDatabaseCount('form_submissions', 0);
    }

    public function test_database_failure_does_not_report_success_or_send_email(): void
    {
        Schema::drop('form_submissions');
        Mail::shouldReceive('send')->never();
        $this->post('/en/contact-submit', $this->payload())
            ->assertSessionHas('contact_error')->assertSessionMissing('contact_success');
    }

    public function test_only_active_admins_can_access_list_and_details(): void
    {
        $submission = FormSubmission::create(array_merge(
            array_intersect_key($this->payload(), array_flip(['name', 'email', 'phone', 'message', 'source', 'page_url'])),
            ['locale' => 'en', 'email_status' => 'sent']
        ));
        foreach (['/vr/form-submissions', '/vr/form-submissions/'.$submission->id] as $url) {
            $this->get($url)->assertRedirect(route('login'));
            $this->actingAs(User::factory()->create(['is_admin' => false]))->get($url)->assertForbidden();
            $this->actingAs(User::factory()->create(['is_admin' => true, 'is_active' => false]))->get($url)->assertForbidden();
            $this->actingAs(User::factory()->create(['is_admin' => true, 'is_active' => true]))->get($url)->assertOk()->assertSee('Customer Test');
            auth()->forgetGuards();
        }
    }

    public function test_admin_views_escape_messages_and_paginate_newest_first(): void
    {
        $admin = User::factory()->create(['is_admin' => true, 'is_active' => true]);
        for ($i = 1; $i <= 26; $i++) {
            $submission = FormSubmission::create([
                'name' => 'Customer '.$i, 'email' => 'customer@example.com', 'phone' => '123',
                'message' => '<script>alert(1)</script>', 'locale' => 'en',
            ]);
        }
        $this->actingAs($admin)->get('/vr/form-submissions')->assertOk()
            ->assertViewHas('submissions', fn ($rows) => $rows->count() === 25 && $rows->first()->id === $submission->id);
        $this->get('/vr/form-submissions/'.$submission->id)->assertOk()
            ->assertSee('&lt;script&gt;alert(1)&lt;/script&gt;', false)
            ->assertDontSee('<script>alert(1)</script>', false);
        $this->get('/vr/form-submissions/999999')->assertNotFound();
    }

    public function test_installer_is_repeatable_and_preserves_existing_data(): void
    {
        Schema::drop('form_submissions');
        \Illuminate\Support\Facades\DB::table('migrations')
            ->where('migration', '2026_10_15_000000_create_form_submissions_table')->delete();
        $user = User::factory()->create();
        $this->artisan('install:forms')->assertSuccessful();
        $submission = FormSubmission::create([
            'name' => 'Keep me', 'email' => 'keep@example.com', 'phone' => '123',
            'message' => 'Preserve this message', 'locale' => 'en',
        ]);
        $this->artisan('install:forms')->assertSuccessful();
        $this->assertDatabaseHas('form_submissions', ['id' => $submission->id, 'message' => 'Preserve this message']);
        $this->assertDatabaseHas('users', ['id' => $user->id]);
        $this->assertTrue(Schema::hasTable('form_submissions'));
        $this->assertTrue(Schema::hasTable('users'));
    }
}
