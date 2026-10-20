document.addEventListener("DOMContentLoaded", () => {
    let preloader = document.querySelector("#preloader");
    if (preloader) {
        preloader.remove();
    }

    const mobileNavigation = document.querySelector("#navbarSupportedContent");
    if (mobileNavigation) {
        const setNavigationState = (open) => {
            document.body.classList.toggle("mobile-nav-open", open);
        };
        mobileNavigation.addEventListener("show.bs.collapse", () => setNavigationState(true));
        mobileNavigation.addEventListener("hidden.bs.collapse", () => setNavigationState(false));
        mobileNavigation.querySelectorAll("a:not(.dropdown-toggle)").forEach((link) => {
            link.addEventListener("click", () => setNavigationState(false));
        });
        window.addEventListener("resize", () => {
            if (window.innerWidth >= 768) setNavigationState(false);
        });
    }
});

function shareOnFacebook() {
    const postUrl = window.location.href;
    const postTitle = document.title;
    const facebookUrl = `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(
        postUrl
    )}&quote=${encodeURIComponent(postTitle)}`;
    window.open(facebookUrl, "_blank");
}

function shareOnWhatsApp() {
    const postUrl = window.location.href;
    const postTitle = document.title;
    const whatsappUrl = `https://wa.me/?text=${encodeURIComponent(
        postTitle
    )}%20${encodeURIComponent(postUrl)}`;
    window.open(whatsappUrl, "_blank");
}

function shareOnTwitter() {
    const postUrl = window.location.href;
    const postTitle = document.title;
    const twitterUrl = `https://twitter.com/intent/tweet?url=${encodeURIComponent(
        postUrl
    )}&text=${encodeURIComponent(postTitle)}`;
    window.open(twitterUrl, "_blank");
}

document
    .querySelectorAll(".faq-item h3, .faq-item .faq-toggle")
    .forEach((faqItem) => {
        faqItem.addEventListener("click", () => {
            faqItem.parentNode.classList.toggle("faq-active");
        });
    });

function switchLanguage(language) {
    let currentUrl = window.location.href;
    let newUrl = currentUrl.replace(
        /^(http[s]?:\/\/[^\/]+\/)([^\/]+)(\/.*)?$/,
        `$1${language}$3`
    );
    window.location.href = newUrl;
}
