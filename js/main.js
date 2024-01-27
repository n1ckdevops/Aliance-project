const navbar = document.querySelector(".navbar");
const logo = document.querySelector(".main-logo-svg use");
const menuToggle = document.querySelector(".mobile-menu-toggle");
const menu = document.querySelector(".mobile-menu");

window.addEventListener("scroll", () => {
  if (this.scrollY > 1) {
    navbar.classList.add("navbar-light");
    logo.href.baseVal = "img/sprites.svg#logo";
  } else {
    navbar.classList.remove("navbar-light");
    logo.href.baseVal = "img/sprites.svg#logo-white";
  }
});

menuToggle.addEventListener("click", (event) => {
  event.preventDefault();
  menu.classList.toggle("is-open");
});
