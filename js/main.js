const navbar = document.querySelector(".navbar");
const logoLight = document.querySelector(".logo-white");
const logo = document.querySelector(".logo");
const menuToggle = document.querySelector(".mobile-menu-toggle");
const menu = document.querySelector(".mobile-menu");

const lightModeOn = (event) => {
  navbar.classList.add("navbar-light");
  logo.style.display = "block";
  logoLight.style.display = "none";
};

const lightModeOff = (event) => {
  navbar.classList.remove("navbar-light");
  logo.style.display = "none";
  logoLight.style.display = "block";
};

const openMenu = (event) => {
  // фунуция открывания меню
  menu.classList.add("is-open"); // вешает класс is-open
  menuToggle.classList.add("close-menu");
  document.body.style.overflow = "hidden"; //запрещаем прокрутку сайта под меню
  lightModeOn();
};
const closeMenu = (event) => {
  // фунуция закрывания меню
  menu.classList.remove("is-open"); // убирает класс is-open
  menuToggle.classList.remove("close-menu");
  document.body.style.overflow = ""; //разрешает прокрутку сайта под меню
  lightModeOff();
};

window.addEventListener("scroll", () => {
  this.scrollY > 1 ? lightModeOn() : lightModeOff();
});

menuToggle.addEventListener("click", (event) => {
  event.preventDefault();
  menu.classList.contains("is-open") ? closeMenu() : openMenu();
});
const swiperSteps = new Swiper(".steps-slider", {
  speed: 500,
  slidesPerView: 1,
  navigation: {
    nextEl: ".steps-button-next",
    prevEl: ".steps-button-prev",
  },
  breakpoints: {
    // when window width is >= 320px
    300: {
      slidesPerView: 1,
    },
    576: {
      slidesPerView: 2,
    },
    768: {
      slidesPerView: 3,
    },
    992: {
      slidesPerView: 3,
    },
  },
});
const swiper = new Swiper(".swiper", {
  speed: 500,
  slidesPerView: 4,
  navigation: {
    nextEl: ".slider-button-next",
    prevEl: ".slider-button-prev",
  },
  breakpoints: {
    // when window width is >= 320px
    300: {
      slidesPerView: 1,
    },
    // when window width is >= 768
    576: {
      slidesPerView: 2,
    },
    768: {
      slidesPerView: 3,
    },
    // when window width is >= 1024px
    1024: {
      slidesPerView: 4,
    },
    // when window width is >= 1200
    1200: {
      slidesPerView: 5,
    },
  },
});
