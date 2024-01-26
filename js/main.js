const navbar = document.querySelector('.navbar');
const logo = document.querySelector('.main-logo-svg use');

window.addEventListener('scroll', () => { 
  if (this.scrollY > 1) {
    navbar.classList.add('navbar-light');
    logo.href.baseVal = 'img/sprites.svg#logo';
  } else {
    navbar.classList.remove('navbar-light');
    logo.href.baseVal = 'img/sprites.svg#logo-white';
  }
});