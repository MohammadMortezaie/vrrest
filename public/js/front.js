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

let defaultStrings = [ "Water Damage","Specialty Cleaning","General Cleaning", "Mold Remediation", "Storm/Disaster", "Construction"];
let languageStrings = {
    'en': [ "Water Damage","Specialty Cleaning","General Cleaning", "Mold Remediation", "Storm/Disaster", "Construction"],
    'zh': ["水灾","专业清洁","般清洁","霉菌修复","风暴/灾难","建筑"]
};

let language = getLanguageFromPath();
let strings = languageStrings[language] || defaultStrings;

ityped.init(document.querySelector("#ityped"), {
    strings: strings,
    typeSpeed: 150,
});
