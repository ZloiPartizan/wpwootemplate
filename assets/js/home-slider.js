let swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    spaceBetween: 41,
    slidesPerGroup: 1,
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-prev-prev",
        prevEl: ".swiper-button-next-next",
    },
});

let warmSwiper = new Swiper(".benefitsSwiper", {
    slidesPerView: 3,
    spaceBetween: 2,
    slidesPerGroup: 1,
    loop: true,
    loopFillGroupWithBlank: true,

});
