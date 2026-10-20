<?php

namespace Tests\Feature;

use App\Models\Post;
use App\Models\PostCategory;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class BlogCommentTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        Http::preventStrayRequests();
        config([
            'services.recaptcha.site_key' => 'test-site-key',
            'services.recaptcha.secret_key' => 'test-secret-key',
        ]);
    }

    public function test_blog_comment_requires_and_verifies_recaptcha_before_saving(): void
    {
        Http::fake(['www.google.com/recaptcha/*' => Http::response([
            'success' => true,
            'action' => 'blog_comment',
            'score' => 0.9,
        ])]);

        $post = $this->createPost();
        $url = url("/en/blog/{$post->id}/comment-test");

        $this->post("/comment/{$post->id}", $this->payload($url))
            ->assertRedirect($url.'#reply-title')
            ->assertSessionHas('success');

        $this->assertDatabaseHas('comments', [
            'post_id' => $post->id,
            'name' => 'Commenter',
            'email' => 'commenter@example.com',
            'comment' => 'Helpful article.',
        ]);

        Http::assertSent(fn ($request) =>
            $request->url() === 'https://www.google.com/recaptcha/api/siteverify'
            && $request['response'] === 'valid-token'
        );
    }

    public function test_invalid_recaptcha_and_honeypot_comments_are_not_saved(): void
    {
        $post = $this->createPost();
        $url = url("/en/blog/{$post->id}/comment-test");

        Http::fake(['www.google.com/recaptcha/*' => Http::response([
            'success' => true,
            'action' => 'contact_form',
            'score' => 0.9,
        ])]);
        $this->post("/comment/{$post->id}", $this->payload($url))
            ->assertSessionHas('comment_error');

        $this->post("/comment/{$post->id}", array_replace($this->payload($url), ['website' => 'spam']))
            ->assertSessionHasErrors('website');

        $this->post("/comment/{$post->id}", array_replace($this->payload($url), [
            'page_url' => 'https://example.com/phishing',
        ]))
            ->assertRedirect(url('/').'#reply-title')
            ->assertSessionHasErrors('page_url');

        $this->assertDatabaseCount('comments', 0);
    }

    public function test_blog_detail_renders_recaptcha_fields_when_configured(): void
    {
        $post = $this->createPost();

        $this->get("/en/blog/{$post->id}/comment-test")
            ->assertOk()
            ->assertSee('js-blog-comment-form', false)
            ->assertSee('name="recaptcha_action" value="blog_comment"', false)
            ->assertSee('name="g-recaptcha-response"', false)
            ->assertSee('api.js?render=test-site-key', false);
    }

    private function payload(string $url): array
    {
        return [
            'name' => 'Commenter',
            'email' => 'commenter@example.com',
            'comment' => 'Helpful article.',
            'page_url' => $url,
            'website' => '',
            'g-recaptcha-response' => 'valid-token',
            'recaptcha_action' => 'blog_comment',
        ];
    }

    private function createPost(): Post
    {
        $category = PostCategory::create([
            'name_en' => 'Restoration Guides',
            'name_zh' => '修复指南',
            'is_active' => true,
        ]);

        return Post::create([
            'language' => Post::LANGUAGE_ENGLISH,
            'slug' => 'comment-test',
            'post_category_id' => $category->id,
            'title' => 'Comment test article',
            'subtitle' => 'Article subtitle',
            'keywords' => 'restoration',
            'content' => '<p>Article content.</p>',
            'user_id' => User::factory()->create()->id,
            'image' => '/img/water-damage.jpeg',
            'is_active' => true,
        ]);
    }
}
