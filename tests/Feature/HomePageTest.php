<?php

namespace Tests\Feature;

use App\Models\Post;
use App\Models\PostCategory;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class HomePageTest extends TestCase
{
    use RefreshDatabase;

    public function test_homepage_preserves_indexable_content_localization_and_contact_paths(): void
    {
        foreach (['en', 'zh'] as $locale) {
            $html = $this->get('/'.$locale.'?ref=preview')->assertOk()->getContent();
            $dom = new \DOMDocument;
            @$dom->loadHTML('<?xml encoding="UTF-8">'.$html);
            $xpath = new \DOMXPath($dom);
            $this->assertSame(1, $xpath->query('//h1')->length);
            $this->assertSame('https://vrrestoration.ca/'.$locale, $xpath->evaluate('string(//link[@rel="canonical"]/@href)'));
            $this->assertSame(2, $xpath->query('//link[@rel="alternate" and @hreflang]')->length);
            $this->assertNotEmpty($xpath->evaluate('string(//meta[@name="description"]/@content)'));
            $this->assertStringNotContainsString('noindex', $xpath->evaluate('string(//meta[@name="robots"]/@content)'));
            $this->assertSame(8, $xpath->query('//*[contains(@class,"card-card-avatar")]/img')->length);
            $this->assertSame(5, $xpath->query('//*[contains(@class,"hp-project-mosaic")]/figure/img')->length);
            $this->assertSame(4, $xpath->query('//a[contains(@class,"hp-location-card") and @href="https://share.google/r4scdAGmnOKdOX6NW"]')->length);
            $this->assertSame(3, $xpath->query('//a[contains(@href,"linkedin.com/company/vr-plus-construction-and-restoration")]')->length);
            $this->assertSame(1, $xpath->query('//a[@href="https://webpulse.ca" and contains(normalize-space(.),"Design & Develop by WebPulse.ca")]')->length);
            $this->assertSame(1, $xpath->query('//*[contains(@class,"hp-service-marquee")]')->length);
            $this->assertSame(1, $xpath->query('//*[contains(@class,"hp-journal-carousel")]')->length);
            $this->assertSame(1, $xpath->query('//form[contains(@class,"js-contact-form")]')->length);
            $this->assertSame(route('contact.submit', ['lang' => $locale]), $xpath->evaluate('string(//form[contains(@class,"js-contact-form")]/@action)'));
            $this->assertSame(__('Contact Form Source Home'), $xpath->evaluate('string(//form//input[@name="source"]/@value)'));
            $this->assertSame('high', $xpath->evaluate('string(//figure[contains(@class,"hp-hero-photo")]/img/@fetchpriority)'));
            $this->assertSame('eager', $xpath->evaluate('string(//figure[contains(@class,"hp-hero-photo")]/img/@loading)'));
            $this->assertDoesNotMatchRegularExpression('/\bHP (Hero|FAQ|Feature|About|Services|Step) /', $html);

            $ids = [];
            foreach ($xpath->query('//*[@id]') as $node) {
                $this->assertNotContains($node->getAttribute('id'), $ids);
                $ids[] = $node->getAttribute('id');
            }
            foreach ($xpath->query('//a[starts-with(@href,"#")]') as $link) {
                if ($link->getAttribute('href') !== '#') {
                    $this->assertContains(substr($link->getAttribute('href'), 1), $ids);
                }
            }
            $types = [];
            foreach ($xpath->query('//script[@type="application/ld+json"]') as $script) {
                $schema = json_decode($script->textContent, true, 512, JSON_THROW_ON_ERROR);
                $types[] = $schema['@type'] ?? null;
                if (($schema['@type'] ?? null) === 'LocalBusiness') {
                    $this->assertContains('https://www.linkedin.com/company/vr-plus-construction-and-restoration', $schema['sameAs']);
                    $this->assertSame('https://share.google/r4scdAGmnOKdOX6NW', $schema['hasMap']);
                }
                if (($schema['@type'] ?? null) === 'FAQPage') {
                    $this->assertCount(2, $schema['mainEntity']);
                    foreach ($schema['mainEntity'] as $faq) {
                        $this->assertStringContainsString($faq['name'], $xpath->query('//*[@id="faq"]')->item(0)->textContent);
                        $this->assertStringContainsString($faq['acceptedAnswer']['text'], $xpath->query('//*[@id="faq"]')->item(0)->textContent);
                    }
                }
            }
            $this->assertContains('LocalBusiness', $types);
            $this->assertSame(1, count(array_filter($types, static fn ($type) => $type === 'FAQPage')));
        }
    }

    public function test_journal_uses_published_posts_in_the_right_language_and_updated_slugs(): void
    {
        $user = User::factory()->create();
        $category = PostCategory::create(['name_en' => 'Restoration', 'name_zh' => '修复', 'is_active' => true]);
        $posts = [];
        foreach ([['en', true, 'Published English'], ['zh', true, '已发布的文章'], ['en', false, 'Unpublished draft']] as [$locale, $active, $title]) {
            $posts[] = Post::create([
                'language' => Post::languageIdForLocale($locale), 'slug' => 'guide-'.count($posts),
                'post_category_id' => $category->id, 'title' => $title, 'subtitle' => 'Practical advice.',
                'keywords' => 'restoration', 'content' => '<p>Advice.</p>', 'user_id' => $user->id,
                'image' => '/img/water-damage.jpeg', 'is_active' => $active,
            ]);
        }
        $this->get('/en')->assertOk()->assertSee('Published English')->assertDontSee('已发布的文章')->assertDontSee('Unpublished draft');
        $this->get('/zh')->assertOk()->assertSee('已发布的文章')->assertDontSee('Published English');
        $posts[0]->update(['slug' => 'updated-guide']);
        $this->get('/en')->assertOk()->assertSee('/en/blog/'.$posts[0]->id.'/updated-guide', false)->assertDontSee('/en/blog/'.$posts[0]->id.'/guide-0', false);
    }
}
