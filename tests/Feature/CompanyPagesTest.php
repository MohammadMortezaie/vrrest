<?php

namespace Tests\Feature;

use DOMDocument;
use DOMXPath;
use Tests\TestCase;

class CompanyPagesTest extends TestCase
{
    public function test_contact_page_has_accessible_contact_paths_and_local_offices(): void
    {
        foreach (['en', 'zh'] as $locale) {
            $response = $this->get("/{$locale}/contact-us")->assertOk();
            $xpath = $this->xpath($response->getContent());

            $this->assertSame(1, $xpath->query('//main//h1')->length);
            $this->assertSame(1, $xpath->query('//form[contains(@class,"js-contact-form")]')->length);
            $this->assertSame(4, $xpath->query('//a[contains(@class,"contact-location-card")]')->length);
            $this->assertSame(4, $xpath->query('//a[contains(@class,"contact-location-card") and @href="https://share.google/r4scdAGmnOKdOX6NW"]')->length);
            $this->assertSame(1, $xpath->query('//img[contains(@src,"emergency-water-damage-drying-vancouver.webp")]')->length);
        }
    }

    public function test_team_page_lists_every_member_with_webp_portraits(): void
    {
        foreach (['en', 'zh'] as $locale) {
            $response = $this->get("/{$locale}/our-team")->assertOk();
            $html = $response->getContent();
            $xpath = $this->xpath($html);

            $this->assertSame(1, $xpath->query('//main//h1')->length);
            $this->assertSame(6, $xpath->query('//article[contains(@class,"team-member-card")]')->length);
            $this->assertSame(6, $xpath->query('//article[contains(@class,"team-member-card")]//img[contains(@src,".webp")]')->length);
            $this->assertStringContainsString('Sasan Ghanbari', $html);
            $this->assertStringContainsString('Saman Ghanbari', $html);
            $this->assertStringContainsString('Milad Mohammadi', $html);
            $this->assertStringContainsString('Moe Ghanbari', $html);
            $this->assertStringContainsString('Moe Mortezaei', $html);
            $this->assertStringContainsString('Nirvana Asadi', $html);
        }
    }

    private function xpath(string $html): DOMXPath
    {
        $document = new DOMDocument();
        @$document->loadHTML($html);

        return new DOMXPath($document);
    }
}
