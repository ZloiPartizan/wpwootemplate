let poolswiper = new Swiper(".poolSwiper", {
    slidesPerView: 3,
    spaceBetween: 2,
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
  
const text2 = document.querySelector(".circle__text2 p")

text2.innerHTML = text2.innerText
    .split("")
    .map(
        (char, i) =>
            `<span style="transform:rotate(${i * 10}deg)">${char}</span>`
    )
    .join("")