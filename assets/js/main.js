// Меню
const menuToggle = document.querySelector(".menu__toggle")
const navContent = document.querySelector(".navigation-content");
const menuElementHidden3 = document.querySelector(".navigation-list__search-active")
const signInButton = document.querySelector(".signin-button")
const signInButtonRow = document.querySelector(".nav-row-box-signin__button")
const navRow = document.querySelector(".nav__row")

menuToggle.addEventListener("click", () => {
  menuToggle.classList.toggle("active")
  navContent.classList.toggle("active")
  signInButtonRow.classList.toggle("active")
  menuElementHidden3.classList.toggle("hidden")
  signInButton.remove()
  // navRow.add(signInButton);
  const scrollY = document.body.style.top;
  document.body.style.position = '';
  document.body.style.top = '';
  window.scrollTo(0, parseInt(scrollY || '0') * -1);
})

//Кнопка поиска
const searchButton = document.querySelector('.search__button')
const navList = document.querySelector('.navigation-list__links')
const menuElementHidden = document.querySelector(".navigation-list__search")
const navContent1 = document.querySelector(".navigation-content");
const menuToggl1 = document.querySelector("#menu2")
const menuElementHidden1 = document.querySelector('.navigation-list__search-active')

menuToggl1.addEventListener("click", () => {
  menuToggl1.classList.toggle("active")
  navContent1.classList.toggle("active")
  menuElementHidden1.classList.toggle("hidden")
})

searchButton.addEventListener('click', () => {
  searchButton.classList.toggle("active")
  menuElementHidden.classList.toggle("hidden")
  navList.classList.toggle("hidden")

})

// Модальное окно
const popupBg = document.querySelector('.popup__bg')
const popup = document.querySelector('.popup')
const popupBg2 = document.querySelector('.popup__bg2')
const popup2 = document.querySelector('.popup2')
const openPopupRecButtons = document.querySelectorAll('#open-rec-popup')
const openPopupPayButtons = document.querySelectorAll('#open-pay-popup')
const closePopupButton = document.querySelector('.close-popup')
const closePopupButton2 = document.querySelector('.close-popup2')

openPopupPayButtons.forEach((button) => {
  button.addEventListener('click', (e) => {
    e.preventDefault()
    popupBg2.classList.add('active')
    popup2.classList.add('active')

    closePopupButton2.addEventListener('click',() => {
      popupBg2.classList.remove('active')
      popup2.classList.remove('active')
    });

    document.addEventListener('click', (e) => {
      if(e.target === popupBg) {
        popupBg2.classList.remove('active')
        popup2.classList.remove('active')
      }
    })
  })
})

openPopupRecButtons.forEach((button) => {
  button.addEventListener('click', (e) => {
    e.preventDefault()
    popupBg.classList.add('active')
    popup.classList.add('active')


    closePopupButton.addEventListener('click',() => {
      popupBg.classList.remove('active')
      popup.classList.remove('active')
    });

    document.addEventListener('click', (e) => {
      if(e.target === popupBg) {
        popupBg.classList.remove('active')
        popup.classList.remove('active')
      }
    })

  })
})


// Надпись по кругу
const text = document.querySelector(".circle__text p")

text.innerHTML = text.innerText
    .split("")
    .map(
        (char, i) =>
            `<span style="transform:rotate(${i * 10}deg)">${char}</span>`
    )
  .join("")
    


// Видео
const clip = document.querySelector(".preview__clip");

const playIcon = document.querySelector(".play_button");

clip.addEventListener("click", () => {
  if (this.paused) {
  
    this.play();
  } else {
   
    this.pause();
  }
});

//свайпер
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





