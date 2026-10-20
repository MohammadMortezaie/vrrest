(() => {
    const page = document.querySelector('.restoration-service-page');
    if (!page) return;

    const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)');
    const runningAnimations = new Set();
    const animate = (element, frames, options) => {
        if (reducedMotion.matches || !element.animate) return;
        const animation = element.animate(frames, options);
        runningAnimations.add(animation);
        const cleanup = () => runningAnimations.delete(animation);
        animation.addEventListener('finish', cleanup, { once: true });
        animation.addEventListener('cancel', cleanup, { once: true });
    };
    reducedMotion.addEventListener('change', () => {
        if (reducedMotion.matches) runningAnimations.forEach(animation => animation.cancel());
    });

    // Content stays visible by default, including without JS/IntersectionObserver.
    // Animate once on entry; never leave a hidden class behind on an element.
    if ('IntersectionObserver' in window && !reducedMotion.matches) {
        const selector = [
            '.wd-hero-copy > *', '.wd-intro-grid > div',
            '.wd-section-heading > *', '.wd-service', '.wd-section-intro',
            '.wd-process-list > li', '.wd-reasons article', '.wd-split > div',
            '.wd-insurance > div', '.wd-three-columns article',
            '.wd-causes-grid > div', '.wd-faq-grid > div:first-child',
            '.wd-article-grid article',
        ].join(',');
        const observer = new IntersectionObserver(entries => {
            const visible = entries.filter(entry => entry.isIntersecting);
            visible.forEach((entry, index) => {
                observer.unobserve(entry.target);
                // Don't animate a control that the visitor has already focused.
                if (entry.target.contains(document.activeElement)) return;
                animate(entry.target, [
                    { opacity: 0.15, transform: 'translateY(16px)' },
                    { opacity: 1, transform: 'translateY(0)' },
                ], { duration: 620, delay: Math.min(index, 3) * 65,
                    easing: 'cubic-bezier(.22, 1, .36, 1)', fill: 'backwards' });
            });
        }, { threshold: 0.08 });
        page.querySelectorAll(selector).forEach(element => observer.observe(element));
    }

    const gallery = page.querySelector('.wd-gallery');
    if (!gallery) return;
    const thumbs = [...gallery.querySelectorAll('.wd-gallery-thumb')];
    const image = gallery.querySelector('#wd-gallery-image');
    const caption = gallery.querySelector('#wd-gallery-caption');
    const number = gallery.querySelector('#wd-gallery-number');
    const strip = gallery.querySelector('.wd-gallery-thumbs');
    const previous = gallery.querySelector('.wd-gallery-prev');
    const next = gallery.querySelector('.wd-gallery-next');
    if (!thumbs.length || !image || !previous || !next) return;
    let requestedIndex = 0;
    let requestId = 0;
    let imageAnimation;

    const showImage = async index => {
        requestedIndex = (index + thumbs.length) % thumbs.length;
        const selectedIndex = requestedIndex;
        const selected = thumbs[selectedIndex];
        const currentRequest = ++requestId;
        const preload = new Image();
        preload.src = selected.dataset.image;
        try {
            await preload.decode();
        } catch {
            // Keep the current photo if loading fails; allow retrying another one.
            if (currentRequest === requestId) {
                requestedIndex = thumbs.findIndex(thumb => thumb.getAttribute('aria-pressed') === 'true');
            }
            return;
        }
        if (currentRequest !== requestId) return;
        imageAnimation?.cancel();
        image.src = selected.dataset.image;
        image.alt = selected.dataset.alt;
        caption.textContent = selected.dataset.alt;
        number.textContent = selectedIndex + 1;
        thumbs.forEach(thumb => thumb.setAttribute('aria-pressed', String(thumb === selected)));
        // Scroll only the thumbnail strip, without moving the page or keyboard focus.
        const thumbRect = selected.getBoundingClientRect();
        const stripRect = strip.getBoundingClientRect();
        if (thumbRect.left < stripRect.left || thumbRect.right > stripRect.right) {
            strip.scrollTo({
                left: strip.scrollLeft + thumbRect.left - stripRect.left - (strip.clientWidth - selected.clientWidth) / 2,
                behavior: reducedMotion.matches ? 'instant' : 'smooth',
            });
        }
        if (!reducedMotion.matches && image.animate) {
            imageAnimation = image.animate([{ opacity: 0.4 }, { opacity: 1 }], { duration: 300, easing: 'ease-out' });
            runningAnimations.add(imageAnimation);
            const currentAnimation = imageAnimation;
            const cleanup = () => runningAnimations.delete(currentAnimation);
            currentAnimation.addEventListener('finish', cleanup, { once: true });
            currentAnimation.addEventListener('cancel', cleanup, { once: true });
        }
    };

    thumbs.forEach((thumb, index) => thumb.addEventListener('click', () => showImage(index)));
    previous.addEventListener('click', () => showImage(requestedIndex - 1));
    next.addEventListener('click', () => showImage(requestedIndex + 1));
    gallery.addEventListener('keydown', event => {
        if (event.altKey || event.ctrlKey || event.metaKey || event.shiftKey) return;
        if (event.key === 'ArrowLeft' || event.key === 'ArrowRight') {
            event.preventDefault();
            showImage(requestedIndex + (event.key === 'ArrowRight' ? 1 : -1));
        }
    });
    previous.hidden = next.hidden = thumbs.length < 2;
})();
