let swipersolo = new Swiper(".swiperSolo", {
    slidesPerView: 1,
    slidesPerGroup: 1,
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-prev-coach",
      prevEl: ".swiper-button-next-coach",
    },
});
  

