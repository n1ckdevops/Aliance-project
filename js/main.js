const navbar = document.querySelector(".navbar");
const logoLight = document.querySelector(".logo-white");
const logo = document.querySelector(".logo");
const menuToggle = document.querySelector(".mobile-menu-toggle");
const menu = document.querySelector(".mobile-menu");
const isFront = document.body.classList.contains("front-page");

const lightModeOn = (event) => {
  navbar.classList.add("navbar-light");
};

const lightModeOff = (event) => {
  navbar.classList.remove("navbar-light");
};

const changeNavHeight = (height) => {
  navbar.style.height = height;
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
  this.scrollY > 1 ? changeNavHeight("4.5rem") : changeNavHeight("5.875rem");
  if (isFront) {
    this.scrollY > 1 ? lightModeOn() : lightModeOff();
  }
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
      slidesPerView: 4,
    },
  },
});
const swiper = new Swiper(".features-slider", {
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

const swiperBlog = new Swiper(".blog-slider", {
  speed: 500,
  slidesPerView: 2,
  loop: true,
  spaceBetween: 28,
  navigation: {
    nextEl: ".blog-button-next",
    prevEl: ".blog-button-prev",
  },
  breakpoints: {
    // when window width is >= 320px
    300: {
      slidesPerView: 1,
    },
    // when window width is >= 1024px
    992: {
      slidesPerView: 2,
    },
  },
});

const modal = document.querySelector(".modal");
const modalDialog = document.querySelector(".modal-dialog");
document.addEventListener("click", (event) => {
  if (
    event.target.dataset.toggle == "modal" ||
    event.target.parentNode.dataset.toggle == "modal" ||
    (!event.composedPath().includes(modalDialog) &&
      modal.classList.contains("is-open"))
  ) {
    event.preventDefault();
    modal.classList.toggle("is-open");
  }
});

document.addEventListener("keyup", (event) => {
  if (event.key == "Escape" && modal.classList.contains("is-open")) {
    modal.classList.toggle("is-open");
  }
});

const forms = document.querySelectorAll("form"); // собираем все формы
forms.forEach((form) => {
  const validation = new JustValidate(form, {
    errorFieldCssClass: "is-invalid",
  });
  // apply rules to form fields
  validation
    .addField("[name=username]", [
      {
        rule: "required",
        errorMessage: "Введите имя пользователя!",
      },
      {
        rule: "maxLength",
        value: 30,
        errorMessage: "Не более 30 символов!",
      },
    ])
    .addField("[name=userphone]", [
      {
        rule: "required",
        errorMessage: "Введите номер телефона!",
      },
    ])
    .onSuccess((event) => {
      const thisForm = event.target; // наша форма
      const formData = new FormData(thisForm); // получаем данные из формы
      const ajaxSend = (formData) => {
        fetch(thisForm.getAttribute("action"), {
          method: thisForm.getAttribute("method"),
          body: formData,
        }).then((response) => {
          if (response.ok) {
            thisForm.reset();
            alert("Форма отправлена!");
          } else {
            alert(response.statusText);
          }
        });
      };
      ajaxSend(formData);
    });
});
