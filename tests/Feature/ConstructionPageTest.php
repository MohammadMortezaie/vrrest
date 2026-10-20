<?php

namespace Tests\Feature;

use DOMDocument;
use DOMXPath;
use Tests\TestCase;

class ConstructionPageTest extends TestCase
{
    public function test_construction_page_has_localized_content_and_complete_seo_markup(): void
    {
        foreach (['en', 'zh'] as $locale) {
            $html = $this->get('/'.$locale.'/construction')->assertOk()->getContent();
            $xpath = $this->xpath($html);

            $this->assertSame(1, $xpath->query('//main//h1')->length);
            $this->assertSame('https://vrrestoration.ca/'.$locale.'/construction', $xpath->evaluate('string(//link[@rel="canonical"]/@href)'));
            $this->assertSame(2, $xpath->query('//link[@rel="alternate" and @hreflang]')->length);
            $this->assertNotEmpty($xpath->evaluate('string(//meta[@name="description"]/@content)'));
            $this->assertStringNotContainsString('noindex', $xpath->evaluate('string(//meta[@name="robots"]/@content)'));
            $this->assertSame(4, $xpath->query('//main//img[contains(@src,"/img/construction/") and contains(@src,".webp")]')->length);
            $this->assertSame(1, $xpath->query('//*[@id="faq" and contains(concat(" ", normalize-space(@class), " "), " faq ")]')->length);
            $this->assertSame(6, $xpath->query('//*[@id="faq"]//*[contains(concat(" ", normalize-space(@class), " "), " faq-item ")]')->length);
            $this->assertSame(1, $xpath->query('//form[contains(@class,"js-contact-form")]')->length);
            $this->assertSame(1, $xpath->query('//a[contains(@href,"vancouver.ca/home-property-development/when-you-need-a-permit.aspx")]')->length);

            $types = [];
            foreach ($xpath->query('//script[@type="application/ld+json"]') as $script) {
                $schema = json_decode($script->textContent, true, 512, JSON_THROW_ON_ERROR);
                $types[] = $schema['@type'] ?? null;

                if (($schema['@type'] ?? null) === 'FAQPage') {
                    $this->assertCount(6, $schema['mainEntity']);
                }
            }

            $this->assertContains('Service', $types);
            $this->assertContains('FAQPage', $types);
            $this->assertContains('BreadcrumbList', $types);
            $this->assertStringNotContainsString('Construction Hero Title', $html);
        }
    }

    private function xpath(string $html): DOMXPath
    {
        $document = new DOMDocument();
        @$document->loadHTML('<?xml encoding="UTF-8">'.$html);

        return new DOMXPath($document);
    }
}
