# Water Damage page redesign

## Design direction

Applied MengTo's [design-first-ui-prompting skill](https://github.com/MengTo/Skills/blob/main/agent-skills/ui/design-first-ui-prompting/SKILL.md): establish layout, type scale, spacing and one accent before adding detail. The page uses the existing yellow brand accent, deep charcoal-green text, warm neutral backgrounds and real project photos. Styling is scoped to `.restoration-service-page`; the shared header and other service pages are unchanged.

The introduction now presents one H1, a short service summary, a prominent phone action and a direct inspection-form link. The photograph stretches to the copy height on desktop and has a reserved aspect ratio on mobile. The hero image loads eagerly with high fetch priority. Lower images load lazily.

## Page order

1. Emergency introduction and contact actions
2. Existing IICRC, VRCA, Google Guaranteed, BC Housing and Proudly Canadian logos, then jump links and a direct answer about immediate next steps
3. Four core restoration services
4. Eight expandable restoration steps
5. Project gallery with previous/next arrows, thumbnails, keyboard navigation and no autoplay
6. Team qualifications and existing customer reviews
7. Cost factors, insurance documentation and contents handling
8. Damage types and contamination categories
9. Causes, warning signs, equipment and property management
10. Service areas with existing local service links
11. FAQ, contact form, related guides and existing AI trust links

Repeated introductory/CTA blocks have been consolidated. Substantive service, process, category, cost, contents, insurance, causes, signs and FAQ content remains rendered on the server. Native `details` elements expose longer explanations without depending on JavaScript. The form uses the same endpoint and fields as before. Text and section introductions animate once with a short fade/16px rise when entering the viewport. Content is visible by default; no hidden animation classes or JS-only text are used. Reduced-motion preferences skip animations. Gallery changes preload the requested image, ignore stale rapid-click results and fade in the loaded photo.

## SEO and answer-oriented content

Preserved page URLs, title/description, one H1, language alternates, Service/FAQ/Breadcrumb/business structured data, local service links and related guide links. Canonicals now explicitly use the production URL even when the page receives query parameters. FAQ schema questions and answers are checked against actual HTML in both languages. The business schema review count now uses the same configured count as the visible review section, replacing a separate stale count.

The direct question/answer near the top makes urgent information easier to find. No new AI-specific schema or indexing claims are introduced. Google's [AI features documentation](https://developers.google.com/search/docs/appearance/ai-features) calls for the same SEO foundations, readable text, internal links and structured data consistent with page content. Search rankings, AI citations and Core Web Vitals require production monitoring; they are not guaranteed by a visual redesign.

## Verification and release

- Automated coverage for English and Chinese: H1, canonical with query parameters, metadata, hreflang, form presence, image priority, unique IDs, anchor targets and schema/content consistency.
- Desktop, 768px tablet and 390px mobile visual checks using an isolated temporary SQLite database.
- Tested gallery selection, native expandable steps, keyboard FAQ interaction and the inspection-form anchor.
- Preview disables production reCAPTCHA keys only in the local server environment; production settings are unchanged. No real form submission or email was sent.

Deploy the Blade, CSS, translations and controller changes together. The new assets are `public/css/restoration-service.css` and `public/js/restoration-service.js`; no npm build, new package or database migration is needed. Run `php artisan view:clear` after release if views were cached. Rebuild any existing configuration cache through the normal release process. Check the production form with its configured reCAPTCHA and inspect the rendered page in Search Console after deployment.

The emergency availability dot uses a gentle CSS ring pulse, disabled for reduced motion. Contextual inspection buttons after services, the gallery and damage categories link to the existing form with native anchors, including without JavaScript. The credentials/community strip reuses existing site artwork with explicit image dimensions and lazy loading.
