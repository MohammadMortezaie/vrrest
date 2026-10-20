# Homepage redesign

Design reference: [MengTo design-first-ui-prompting](https://github.com/MengTo/Skills/blob/main/agent-skills/ui/design-first-ui-prompting/SKILL.md).

An editorial layout using warm paper, dark ink and the existing yellow brand accent. The page leads with water/fire/mold restoration, an immediate call/form path and the existing VR vehicle photograph. Original service illustrations remain intact, including their grayscale-to-colour hover behaviour from `main.css`. Services have previous/next controls, keyboard access, and a static grid fallback without JavaScript.

Sections: hero → service illustrations → credentials (one of each) → restoration gallery → three-step process → company introduction → original Google reviews → coverage areas → visible FAQ → existing contact form → recent published articles. The latest five articles still come from the database in the current locale, including their current slugs.

Motion: one-time entry fades with a slight vertical movement, the existing emergency status pulse, and user-controlled carousel/gallery transitions. Reduced-motion preferences disable the effects. Content is present in server-rendered HTML and never depends on animation to become readable. No autoplay or scroll hijacking. The homepage no longer loads AOS, GLightbox, Isotope or the external typing library.

SEO: existing title and description retained; one H1; stable production canonical URLs; reciprocal English/Chinese hreflang; LocalBusiness schema retained; visible FAQ and FAQPage schema share translation strings. Duplicate section IDs removed. Hero image has explicit dimensions and high fetch priority; other images are lazy-loaded. English and Chinese copy are provided. Existing contact submission, CSRF, validation and reCAPTCHA handling are unchanged.

No new database table, migration, package or build step. Deploy the Blade, controller, translations, CSS/JS and shared restoration partials/assets together. If Blade views are cached, run `php artisan view:clear` after deployment. The redesign does not require changes to `.htaccess`.

Validation: the feature suite covers metadata, FAQ/schema agreement, anchors, the contact endpoint, locale-specific published articles and slug updates. Browser checks cover desktop/mobile layout, service controls, photo controls, FAQ and form jump links. Local preview uses a disposable SQLite database; no real contact message was sent.
