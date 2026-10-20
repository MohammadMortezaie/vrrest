<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class MoldRemediationPageTest extends TestCase
{
    use RefreshDatabase;

    public function test_mold_redesign_preserves_localized_seo_faq_and_contact_paths(): void
    {
        foreach (['en', 'zh'] as $locale) {
            $html = $this->get('/'.$locale.'/mold-remediation?ref=preview')->assertOk()->getContent();
            $dom = new \DOMDocument;
            @$dom->loadHTML('<?xml encoding="UTF-8">'.$html);
            $xpath = new \DOMXPath($dom);
            $this->assertSame(1, $xpath->query('//h1')->length);
            $this->assertSame('https://vrrestoration.ca/'.$locale.'/mold-remediation', $xpath->evaluate('string(//link[@rel="canonical"]/@href)'));
            $this->assertNotEmpty($xpath->evaluate('string(//meta[@name="description"]/@content)'));
            $this->assertStringNotContainsString('noindex', $xpath->evaluate('string(//meta[@name="robots"]/@content)'));
            $this->assertSame(2, $xpath->query('//link[@rel="alternate" and @hreflang]')->length);
            $this->assertSame(18, $xpath->query('//*[@id="faq"]//details')->length);
            $this->assertSame(1, $xpath->query('//form[contains(@class,"js-contact-form")]')->length);
            $this->assertSame('eager', $xpath->evaluate('string(//figure[contains(@class,"wd-hero-image")]/img/@loading)'));
            $this->assertSame('high', $xpath->evaluate('string(//figure[contains(@class,"wd-hero-image")]/img/@fetchpriority)'));

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
                if (($schema['@type'] ?? null) === 'FAQPage') {
                    $this->assertCount(18, $schema['mainEntity']);
                    foreach ($schema['mainEntity'] as $faq) {
                        $this->assertStringContainsString($faq['name'], $xpath->query('//*[@id="faq"]')->item(0)->textContent);
                        $this->assertStringContainsString($faq['acceptedAnswer']['text'], $xpath->query('//*[@id="faq"]')->item(0)->textContent);
                    }
                }
            }
            $this->assertContains('Service', $types);
            $this->assertContains('FAQPage', $types);
            $this->assertContains('BreadcrumbList', $types);
            $this->assertDoesNotMatchRegularExpression('/\bMD (Hero|Photo|Services|Gallery|FAQ|Related)/', $html);
        }
    }
}
