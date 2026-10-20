<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class WaterDamagePageTest extends TestCase
{
    use RefreshDatabase;

    public function test_redesign_preserves_indexable_content_and_metadata_in_both_languages(): void
    {
        foreach (['en', 'zh'] as $locale) {
            $response = $this->get('/'.$locale.'/water-damage?ref=preview')->assertOk();
            $html = $response->getContent();
            $dom = new \DOMDocument;
            @$dom->loadHTML('<?xml encoding="UTF-8">'.$html);
            $xpath = new \DOMXPath($dom);

            $this->assertSame(1, $xpath->query('//h1')->length);
            $this->assertSame('https://vrrestoration.ca/'.$locale.'/water-damage', $xpath->evaluate('string(//link[@rel="canonical"]/@href)'));
            $this->assertNotEmpty($xpath->evaluate('string(//meta[@name="description"]/@content)'));
            $this->assertStringNotContainsString('noindex', $xpath->evaluate('string(//meta[@name="robots"]/@content)'));
            $this->assertSame(2, $xpath->query('//link[@rel="alternate" and @hreflang]')->length);
            $this->assertSame(1, $xpath->query('//form[contains(@class,"js-contact-form")]')->length);
            $this->assertGreaterThanOrEqual(10, $xpath->query('//*[@id="faq"]//details')->length);
            $this->assertSame(8, $xpath->query('//*[@id="water-damage-process"]//details')->length);
            $this->assertSame('eager', $xpath->evaluate('string(//figure[contains(@class,"wd-hero-image")]/img/@loading)'));
            $this->assertSame('high', $xpath->evaluate('string(//figure[contains(@class,"wd-hero-image")]/img/@fetchpriority)'));

            $ids = [];
            foreach ($xpath->query('//*[@id]') as $node) {
                $id = $node->getAttribute('id');
                $this->assertNotContains($id, $ids, 'Duplicate ID: '.$id);
                $ids[] = $id;
            }
            foreach ($xpath->query('//nav[contains(@class,"wd-jumpnav")]//a') as $link) {
                $this->assertContains(substr($link->getAttribute('href'), 1), $ids);
            }

            $types = [];
            foreach ($xpath->query('//script[@type="application/ld+json"]') as $script) {
                $schema = json_decode($script->textContent, true, 512, JSON_THROW_ON_ERROR);
                $types[] = $schema['@type'] ?? null;
                if (($schema['@type'] ?? null) === 'HomeAndConstructionBusiness') {
                    $this->assertSame((string) config('google_reviews.review_count'), $schema['aggregateRating']['reviewCount']);
                }
                if (($schema['@type'] ?? null) === 'FAQPage') {
                    foreach ($schema['mainEntity'] as $faq) {
                        $this->assertStringContainsString($faq['name'], $xpath->query('//*[@id="faq"]')->item(0)->textContent);
                        $this->assertStringContainsString($faq['acceptedAnswer']['text'], $xpath->query('//*[@id="faq"]')->item(0)->textContent);
                    }
                }
            }
            $this->assertContains('Service', $types);
            $this->assertContains('FAQPage', $types);
            $this->assertContains('BreadcrumbList', $types);
            $this->assertStringNotContainsString('WD Hero Intro', $html);
        }
    }
}
