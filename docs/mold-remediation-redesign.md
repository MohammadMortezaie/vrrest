# Mold remediation redesign

Uses the same design system as Water Damage, following [MengTo's design-first UI skill](https://github.com/MengTo/Skills/blob/main/agent-skills/ui/design-first-ui-prompting/SKILL.md). Warm neutral backgrounds, charcoal-green text, yellow actions, generous spacing and consistent typography establish a clear reading order.

## Content and interactions

1. One H1, concise introduction, emergency phone action and assessment-form link.
2. One credentials/community strip, with no duplicated hero logos.
3. Section navigation and an inspection/testing/remediation comparison.
4. Six service categories and an assessment action.
5. Eight expandable process steps, consolidating the previous repeated process sections.
6. Five-photo gallery with arrows, thumbnails, keyboard support, photo count and another form action.
7. Company background and the existing mold-related Google reviews.
8. Cost, illustrative timeline and insurance documentation.
9. Causes, signs, hidden growth locations and another assessment action.
10. Mold identification information, Health Canada guidance and supplemental fogging information.
11. Service areas, all 18 existing FAQ entries, the original contact form and related links.

The existing four remotely hosted photos are now included in `public/img/mold-remediation/`; the refrigerator comparison uses the existing local asset. Alt text was corrected to match visible image content. The hero loads eagerly with high priority; lower images are lazy-loaded with reserved dimensions. Gallery photos remain fully visible without cropping their before/after labels, with captions below the image. No new AI-generated photos are used.

Existing service descriptions, locations, detailed remediation stages, costs, testing guidance, FAQs and form endpoint remain available. Repetitive marketing introductions and repeated process summaries were consolidated. The new introduction avoids the old fixed arrival-time promise and VRCA certification wording; the retained company text correctly describes VRCA membership. The timeline is labelled illustrative and insurance eligibility is left to the insurer.

## SEO and accessibility

The existing page URLs, H1, titles, descriptions, Service schema and all 18 FAQ question/answer pairs are retained. FAQ HTML and JSON-LD use the same data. Production canonicals now exclude query parameters; both language alternates include self references. Added BreadcrumbList matching the visible breadcrumb. Content and native details remain usable without animation JavaScript.

The emergency dot uses a gentle CSS pulse; entry fades and gallery fades respect reduced-motion preferences. Native form anchors work without JS. Existing review buttons retain white text on dark backgrounds. Existing Health Canada guidance is linked from the assessment and mold-identification sections: https://www.canada.ca/en/health-canada/services/publications/healthy-living/addressing-moisture-mould-your-home.html

## Shared implementation and deployment

Water and Mold now use `public/css/restoration-service.css`, `public/js/restoration-service.js` and the `restoration-credentials`, `restoration-gallery`, and `restoration-contact-cta` Blade partials. Deploy both updated page templates, these shared assets/partials, translations, controller changes and the four new images together. No migration, dependency install or npm build is needed. Run `php artisan view:clear` if production views are cached.

Automated tests cover both locales, canonical/query behavior, metadata, language alternates, all FAQ/schema matches, existing form presence, anchor targets, unique IDs and hero priority. The full suite passes: 17 tests, 424 assertions; one test reports existing vendor deprecations on PHP 8.4. Browser checks include desktop, 390px mobile, Chinese tablet, gallery next/previous/keyboard/wrap, contact-form scroll, credential counts and review-button contrast. No real contact form was submitted.

Search rankings and AI citations cannot be inferred from local checks; inspect the production page after release.
