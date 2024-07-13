window.addEventListener("load", () => {
    AOS.init({
        duration: 1000,
        easing: "ease-in-out",
        once: true,
        mirror: false,
    });
});

document.addEventListener("DOMContentLoaded", () => {
    let preloader = document.querySelector("#preloader");
    if (preloader) {
        preloader.remove();
    }
});

function initSwiper() {
    document.querySelectorAll('.swiper').forEach(function(swiper) {
        let config = JSON.parse(swiper.getAttribute('data-swiper-config'));
        new Swiper(swiper, config);
    });
  }
window.addEventListener('load', initSwiper);


function getLanguageFromPath() {
    let path = window.location.pathname;
    let segments = path.split('/');
    return segments[1];
}

let defaultStrings = ["General Cleaning!", "Water Damage!", "Fire Mold Cleanup!"];
let languageStrings = {
    'en': ["General Cleaning!", "Water Damage!", "Fire Mold Cleanup!"],
    'zh': ["普通清洁!", "水灾!", "火灾霉菌清理!"]
};

let language = getLanguageFromPath();
let strings = languageStrings[language] || defaultStrings;

ityped.init(document.querySelector("#ityped"), {
    strings: strings,
    typeSpeed: 150,
});
