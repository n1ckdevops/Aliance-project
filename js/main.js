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

let currentModal; // текущий модальное окно
let modalDialog; // текущее диалоговое окно
let alertModal = document.querySelector("#alert-modal"); // окно с предупреждением

const modalButtons = document.querySelectorAll("[data-toggle=modal]"); // собираем все кнопки модального окна
modalButtons.forEach((button) => {
  // клик по переключателю модального окна
  button.addEventListener("click", (event) => {
    event.preventDefault();
    // определяем текущее модальное окно
    currentModal = document.querySelector(button.dataset.target);
    // открываем текущий модальное окно
    currentModal.classList.toggle("is-open");
    // назначаем диалоговое окно
    modalDialog = currentModal.querySelector(".modal-dialog");
    // отслеживаем событие клика по кнопке модального окна
    currentModal.addEventListener("click", (event) => {
      // если клик по пустой области
      if (!event.composedPath().includes(modalDialog)) {
        // закрываем текущее модальное окно
        currentModal.classList.remove("is-open");
      }
    });
  });
});

// ловим событие клика по кнопке модального окна
document.addEventListener("keyup", (event) => {
  // проверяем что это клавиша ESC и текущее модальное окно открыто
  if (event.key == "Escape" && currentModal.classList.contains("is-open")) {
    // закрываем текущее модальное окно
    currentModal.classList.toggle("is-open");
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
            currentModal.classList.remove("is-open");
            alertModal.classList.add("is-open");
            currentModal = alertModal;
            modalDialog = currentModal.querySelector(".modal-dialog");
            // отслеживаем событие клика по кнопке модального окна
            currentModal.addEventListener("click", (event) => {
              // если клик по пустой области
              if (!event.composedPath().includes(modalDialog)) {
                // закрываем текущее модальное окно
                currentModal.classList.remove("is-open");
              }
            });
          } else {
            alert(response.statusText);
          }
        });
      };
      ajaxSend(formData);
    });
});

/* Создаем префикс +7, даже если вводят 8 или 9 */
const prefixNumber = (str) => {
  /* если вводят семерку, добавляем ей скобку */
  if (str === "7") {
    return "7 (";
  }
  /* если вводят восьмерку, ставим вместо нее +7 ( */
  if (str === "8") {
    return "+7 (";
  }
  /* если пишут девятку, заменяем на +7 (9  */
  if (str === "9") {
    return "7 (9";
  }
  /* в других случаях просто 7 (  */
  return "7 (";
}; /* профикс в любом раскладе будет +7 () */

/* Ловим события ввода в любом поле */
document.addEventListener("input", (e) => {
  /* Проверяем, что это поле имеет класс phone-mask */
  if (e.target.classList.contains("phone-mask")) {
    /* поле с телефоном помещаем в переменную input */
    const input = e.target;
    /* вставляем плюс в начале номера */
    const value = input.value.replace(/\D+/g, "");
    /* длинна номера 11 символов */
    const numberLength = 11;

    /* Создаем переменную, куда будем записывать номер */
    let result;
    /* Если пользователь ввел 8... */
    if (input.value.includes("+8") || input.value[0] === "8") {
      /* Стираем восьмерку */
      result = "";
    } else {
      /* Оставляем плюсик в поле */
      result = "+";
    }

    /* Запускаем цикл, где переберем каждую цифру от 0 до 11 */
    for (let i = 0; i < value.length && i < numberLength; i++) {
      switch (i) {
        case 0:
          /* в самом начале ставим префикс +7 ( */
          result += prefixNumber(value[i]);
          continue;
        case 4:
          /* добавляем после "+7 (" круглую скобку ")" */
          result += ") ";
          break;
        case 7:
          /* дефис после 7 символа */
          result += "-";
          break;
        case 9:
          /* еще дефис  */
          result += "-";
          break;
        default:
          break;
      }
      /* на каждом шаге цикла добавляем новую цифру к номеру */
      result += value[i];
    }
    /* итог: номер в формате +7 (999) 123-45-67 */
    input.value = result;
  }
});
