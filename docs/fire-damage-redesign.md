# Fire Damage page redesign

Uses the approved Water/Mold design system and shared `restoration-service.css`, `restoration-service.js`, credentials, gallery and contact CTA partials. Follows the established MengTo [design-first UI skill](https://github.com/MengTo/Skills/blob/main/agent-skills/ui/design-first-ui-prompting/SKILL.md).

## Layout and behavior

Order: emergency introduction and contact actions; one credential row; section navigation; immediate steps and safety; six services; eight detailed process steps; photo gallery; company information and existing general restoration reviews; cost, timeline and insurance documentation; smoke/soot/water damage; service areas; FAQs; request form; related services and advice.

Includes the availability pulse, reduced-motion-aware entry fades, slideshow arrows/thumbnails/keyboard navigation and multiple native links to the contact form. The shared review button keeps white text on a dark background. The form uses the existing contact submission endpoint and identifies submissions as Fire Damage Page; no database changes are needed.

Uses existing fire-response, water-drying and interior-renovation images. Captions describe the actual content, and the introduction identifies different properties/situations; these are not presented as a documented single fire-loss project. The fire image is eager/high priority, lower photos lazy-load, and gallery images are uncropped with captions below.

## Content and SEO

Preserves the existing URLs, H1, page titles/descriptions, detailed restoration stages, coverage areas, related Water Damage link and original five FAQ topics. Adds three FAQs for cost, timeline and smoke odors. The first immediate-action answer now prioritizes emergency services and authorized re-entry; the old unqualified DIY utility/HVAC instructions were replaced with clearer safety steps. Reference: [Canadian Red Cross guidance](https://www.redcross.ca/blog/2022/1/preparing-to-return-home-after-a-house-fire).

All eight FAQ answers and their JSON-LD come from one localized source. This replaces the previous Chinese-only FAQ schema that did not match visible questions. Both locales retain business schema, now with the business name and URL, and gain matching Service/BreadcrumbList schemas, query-free production canonicals and self/alternate hreflang links. Native details and server-rendered copy remain readable without animation JS. Existing general restoration reviews are labelled as such; no fire-specific testimonials or ratings were fabricated.

## Verification and deployment

Full suite: 18 tests, 568 assertions, no failures. One test reports existing PHP 8.4 vendor deprecations. Coverage includes English/Chinese metadata, canonicals, hreflang, FAQ/schema consistency, unique IDs, anchor targets, hero priority, form action and form source.

Desktop and 390px mobile checked visually; next/previous/wrap/keyboard gallery controls and contact-form scrolling verified. Chinese 768px tablet layout checked. No production form was submitted.

Deploy the Fire template, controller, translations and updated shared CSS alongside the shared assets and Blade partials from the Water/Mold redesign. No npm build or new migration. Run `php artisan view:clear` if production views are cached. Production search rankings and AI citations require monitoring after deployment.
