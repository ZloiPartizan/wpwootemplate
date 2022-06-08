let coacheSwiper = new Swiper(".mySwiper3", {
    slidesPerView: 3,
    spaceBetween: 41,
    slidesPerGroup: 1,
    loop: true,
    loopFillGroupWithBlank: true,
   
    navigation: {
      nextEl: ".swiper-button-prev-prev",
      prevEl: ".swiper-button-next-next",
    },
  });