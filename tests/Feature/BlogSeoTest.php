<?php

namespace Tests\Feature;

use App\Models\Post;
use App\Models\PostCategory;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BlogSeoTest extends TestCase
{
    use RefreshDatabase;

    public function test_english_blog_hub_has_complete_metadata_and_only_english_posts(): void
    {
        $english = $this->createPost('en', 'english-guide', 'English guide');
        $chinese = $this->createPost('zh', 'chinese-guide', '中文指南');

        $response = $this->get('/en/blog');

        $response->assertOk()
            ->assertSee('Restoration Blog | Water, Fire &amp; Mold Damage Advice', false)
            ->assertSee('name="description"', false)
            ->assertSee('rel="canonical" href="https://vrrestoration.ca/en/blog"', false)
            ->assertSee('property="og:title"', false)
            ->assertSee('property="og:type" content="website"', false)
            ->assertSee('hreflang="en" href="https://vrrestoration.ca/en/blog"', false)
            ->assertSee('hreflang="zh" href="https://vrrestoration.ca/zh/blog"', false)
            ->assertSee('"@type":"CollectionPage"', false)
            ->assertSee('"@type":"Blog"', false)
            ->assertSee($english->title)
            ->assertDontSee($chinese->title);
    }

    public function test_wrong_language_article_url_redirects_to_its_real_canonical(): void
    {
        $post = $this->createPost('en', 'water-damage-guide', 'Water damage guide');

        $this->get("/zh/blog/{$post->id}/water-damage-guide")
            ->assertRedirect('https://vrrestoration.ca/en/blog/'.$post->id.'/water-damage-guide')
            ->assertStatus(301);
    }

    public function test_article_outputs_article_open_graph_dates_and_valid_publisher_schema(): void
    {
        $post = $this->createPost('en', 'water-damage-guide', 'Water damage guide');

        $response = $this->get("/en/blog/{$post->id}/water-damage-guide");

        $response->assertOk()
            ->assertSee('rel="canonical" href="https://vrrestoration.ca/en/blog/'.$post->id.'/water-damage-guide"', false)
            ->assertSee('property="og:type" content="article"', false)
            ->assertSee('property="article:published_time"', false)
            ->assertSee('property="article:modified_time"', false)
            ->assertSee('hreflang="en"', false)
            ->assertSee('"@type":"BlogPosting"', false)
            ->assertSee('https:\/\/vrrestoration.ca\/android-chrome-512x512.png', false)
            ->assertDontSee('an droid-chrome');
    }

    public function test_empty_chinese_blog_redirects_instead_of_repeating_english_content(): void
    {
        $this->createPost('en', 'english-only', 'English only');

        $this->get('/zh/blog')
            ->assertRedirect('https://vrrestoration.ca/en/blog')
            ->assertStatus(301);
    }

    public function test_sitemap_uses_production_urls_and_each_posts_assigned_language(): void
    {
        $english = $this->createPost('en', 'english-guide', 'English guide');
        $chinese = $this->createPost('zh', 'chinese-guide', '中文指南');
        $inactive = $this->createPost('en', 'inactive-guide', 'Inactive guide', false);

        $response = $this->get('/sitemap.xml');
        $legacyResponse = $this->get('/sitemap');

        $response->assertOk()
            ->assertHeader('content-type', 'text/xml; charset=UTF-8')
            ->assertSee("https://vrrestoration.ca/en/blog/{$english->id}/english-guide", false)
            ->assertSee("https://vrrestoration.ca/zh/blog/{$chinese->id}/chinese-guide", false)
            ->assertDontSee("https://vrrestoration.ca/zh/blog/{$english->id}/english-guide", false)
            ->assertDontSee("https://vrrestoration.ca/en/blog/{$chinese->id}/chinese-guide", false)
            ->assertDontSee($inactive->slug)
            ->assertDontSee('127.0.0.1');

        $legacyResponse->assertOk()
            ->assertHeader('content-type', 'text/xml; charset=UTF-8');
        $this->assertSame($response->getContent(), $legacyResponse->getContent());
    }

    private function createPost(string $locale, string $slug, string $title, bool $active = true): Post
    {
        $user = User::factory()->create();
        $category = PostCategory::create([
            'name_en' => 'Water Damage',
            'name_zh' => '水灾修复',
            'is_active' => true,
        ]);

        return Post::create([
            'language' => Post::languageIdForLocale($locale),
            'slug' => $slug,
            'post_category_id' => $category->id,
            'title' => $title,
            'subtitle' => 'Practical restoration advice for homeowners.',
            'keywords' => 'water damage,restoration,Vancouver',
            'content' => '<p>Detailed restoration advice.</p>',
            'user_id' => $user->id,
            'image' => '/img/water-damage.jpeg',
            'is_active' => $active,
        ]);
    }
}
