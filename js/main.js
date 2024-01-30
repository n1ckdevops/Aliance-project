const navbar = document.querySelector(".navbar");
const logo = document.querySelector(".main-logo-svg use");
const menuToggle = document.querySelector(".mobile-menu-toggle");
const menu = document.querySelector(".mobile-menu");

const lightModeOn = (event) => {
  navbar.classList.add("navbar-light");
  logo.href.baseVal = "img/sprites.svg#logo";
};

const lightModeOff = (event) => {
  navbar.classList.remove("navbar-light");
  logo.href.baseVal = "img/sprites.svg#logo-white";
};

const openMenu = (event) => {
  // фунуция открывания меню
  menu.classList.add("is-open"); // вешает класс is-open
  document.body.style.overflow = "hidden"; //запрещаем прокрутку сайта под меню
  lightModeOn();
};
const closeMenu = (event) => {
  // фунуция закрывания меню
  menu.classList.remove("is-open"); // убирает класс is-open
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
