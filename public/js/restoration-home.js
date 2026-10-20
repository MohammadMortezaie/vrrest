(() => {
    const page = document.querySelector('.restoration-home');
    if (!page) return;
    const motion = window.matchMedia('(prefers-reduced-motion: reduce)');
    const animations = new Set();
    const carousel = page.querySelector('.hp-service-carousel');
    const previousService = page.querySelector('.hp-service-prev');
    const nextService = page.querySelector('.hp-service-next');
    let slider;
    if (carousel && previousService && nextService && typeof Swiper !== 'undefined') {
        slider = new Swiper(carousel, {
            slidesPerView: 1.65,
            spaceBetween: 0,
            speed: motion.matches ? 0 : 500,
            watchOverflow: true,
            keyboard: { enabled: true, onlyInViewport: true },
            navigation: { prevEl: previousService, nextEl: nextService },
            a11y: {
                prevSlideMessage: previousService.getAttribute('aria-label'),
                nextSlideMessage: nextService.getAttribute('aria-label'),
            },
            breakpoints: { 480: { slidesPerView: 2.5 }, 768: { slidesPerView: 3 }, 1000: { slidesPerView: 4 }, 1200: { slidesPerView: 5 } },
        });
        previousService.hidden = nextService.hidden = false;
        // Keyboard focus brings an off-screen service into view as well.
        carousel.addEventListener('focusin', event => {
            const slide = event.target.closest('.swiper-slide');
            if (slide) slider.slideTo([...carousel.querySelectorAll('.swiper-slide')].indexOf(slide));
        });
    }
    const journalCarousel = page.querySelector('.hp-journal-carousel');
    const previousArticle = page.querySelector('.hp-journal-prev');
    const nextArticle = page.querySelector('.hp-journal-next');
    let journalSlider;
    if (journalCarousel && previousArticle && nextArticle && typeof Swiper !== 'undefined') {
        journalSlider = new Swiper(journalCarousel, {
            slidesPerView: 1.12,
            spaceBetween: 16,
            speed: motion.matches ? 0 : 620,
            watchOverflow: true,
            keyboard: { enabled: true, onlyInViewport: true },
            navigation: { prevEl: previousArticle, nextEl: nextArticle },
            a11y: {
                prevSlideMessage: previousArticle.getAttribute('aria-label'),
                nextSlideMessage: nextArticle.getAttribute('aria-label'),
            },
            breakpoints: { 600: { slidesPerView: 2, spaceBetween: 20 }, 1000: { slidesPerView: 3, spaceBetween: 24 } },
        });
        previousArticle.hidden = nextArticle.hidden = false;
    }
    const typed = page.querySelector('[data-typewriter]');
    const toggle = page.querySelector('.hp-motion-toggle');
    const specialty = page.querySelector('.hp-specialty');
    const words = typed ? JSON.parse(typed.dataset.words) : [];
    let wordIndex = 0;
    let characters = words.length ? Array.from(words[0]).length : 0;
    let deleting = true;
    let timer;
    let manuallyPaused = false;
    let heroVisible = true;
    const canType = () => words.length > 1 && !motion.matches && !manuallyPaused && heroVisible && !document.hidden;
    const schedule = (delay) => {
        clearTimeout(timer);
        if (canType()) timer = setTimeout(tick, delay);
    };
    const tick = () => {
        if (!canType()) return;
        const word = Array.from(words[wordIndex]);
        characters += deleting ? -1 : 1;
        typed.textContent = word.slice(0, Math.max(0, characters)).join('');
        if (deleting && characters <= 0) {
            deleting = false;
            wordIndex = (wordIndex + 1) % words.length;
            schedule(320);
        } else if (!deleting && characters >= word.length) {
            deleting = true;
            schedule(2100);
        } else {
            schedule(deleting ? 42 : 85);
        }
    };
    const updateTyping = () => {
        clearTimeout(timer);
        if (!typed || !toggle) return;
        toggle.hidden = motion.matches || words.length < 2;
        specialty.dataset.typingPaused = String(!canType());
        if (motion.matches) {
            wordIndex = 0;
            characters = Array.from(words[0]).length;
            deleting = true;
            typed.textContent = words[0];
        }
        schedule(1400);
    };
    if (toggle) {
        toggle.addEventListener('click', () => {
            manuallyPaused = !manuallyPaused;
            toggle.setAttribute('aria-pressed', String(manuallyPaused));
            toggle.setAttribute('aria-label', manuallyPaused ? toggle.dataset.playLabel : toggle.dataset.pauseLabel);
            toggle.querySelector('i').className = manuallyPaused ? 'bi bi-play-fill' : 'bi bi-pause-fill';
            updateTyping();
        });
        document.addEventListener('visibilitychange', updateTyping);
        if ('IntersectionObserver' in window) {
            new IntersectionObserver(entries => {
                heroVisible = entries[0].isIntersecting;
                updateTyping();
            }).observe(page.querySelector('.hp-hero'));
        }
        updateTyping();
    }
    motion.addEventListener('change', () => {
        if (motion.matches) animations.forEach(animation => animation.cancel());
        if (slider) slider.params.speed = motion.matches ? 0 : 500;
        if (journalSlider) journalSlider.params.speed = motion.matches ? 0 : 620;
        updateTyping();
    });
    // All content starts visible in server HTML. Animation never gates content.
    // Text stays in the DOM; photos use a one-time reveal, with no scroll interception.
    if (!('IntersectionObserver' in window) || motion.matches) return;
    const observer = new IntersectionObserver(entries => {
        entries.filter(entry => entry.isIntersecting).forEach((entry, index) => {
            observer.unobserve(entry.target);
            if (motion.matches || !entry.target.animate || entry.target.contains(document.activeElement)) return;
            const isPhoto = entry.target.matches('.hp-projects, .hp-about figure');
            const frames = isPhoto ? [
                { opacity: .35, transform: 'translateY(36px) scale(.96)', clipPath: 'inset(5% 3% 5% 3% round 18px)' },
                { opacity: 1, transform: 'translateY(0) scale(1)', clipPath: 'inset(0% 0% 0% 0% round 18px)' },
            ] : [
                { opacity: 0, transform: 'translateY(38px)' },
                { opacity: 1, transform: 'translateY(0)' },
            ];
            const animation = entry.target.animate(frames, {
                duration: isPhoto ? 1100 : 900, delay: Math.min(index, 4) * 110,
                easing: 'cubic-bezier(.16,1,.3,1)', fill: 'backwards',
            });
            animations.add(animation);
            const cleanup = () => animations.delete(animation);
            animation.addEventListener('finish', cleanup, { once: true });
            animation.addEventListener('cancel', cleanup, { once: true });
        });
    }, { threshold: .12 });
    page.querySelectorAll('[data-home-reveal], .vr-google-review-card').forEach(element => observer.observe(element));
})();
