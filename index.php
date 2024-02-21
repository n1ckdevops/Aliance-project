<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />
    <title>Aliance Production</title>
  </head>
  <body class="front-page">
    <div class="mobile-menu">
      <ul class="mobile-nav">
        <li class="mobile-nav-item">
          <a href="#" class="mobile-nav-link">О компании</a>
        </li>
        <li class="mobile-nav-item">
          <a href="#" class="mobile-nav-link">Контрактное производство</a>
          <ul class="mobile-submenu">
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Автомобильная химия</a>
            </li>
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Бытовая химия</a>
            </li>
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#"
                >Дезинфицирующие средства</a
              >
            </li>
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Пищевые аэрозоли</a>
            </li>
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#"
                >Косметическая продукция</a
              >
            </li>
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Краски аэрозольные</a>
            </li>
          </ul>
        </li>
        <li class="mobile-nav-item">
          <a href="#" class="mobile-nav-link">Собственные марки</a>
          <ul class="mobile-submenu">
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Автохимия AG-Tech</a>
            </li>
            <li class="mobile-submenu-link mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Автохимия AP</a>
            </li>
          </ul>
        </li>
        <li class="mobile-nav-item">
          <a href="#" class="mobile-nav-link">Новости</a>
        </li>
        <li class="mobile-nav-item">
          <a href="#" class="mobile-nav-link">Контакты</a>
        </li>
      </ul>
      <a class="mobile-phone" href="tel:+74996861014">+7 (499) 686-10-14</a>
      <div class="mobile-info">
        <svg class="mobile-svg" width="24" height="24">
          <use href="img/sprites.svg#mark"></use>
        </svg>
        <address class="mobile-info-address">
          г. Мосвка, Холодильный пер. 4к1с8
        </address>
      </div>
      <!-- /.mobile-info -->
      <div class="mobile-mail">
        <svg class="mobile-svg" width="24" height="24">
          <use href="img/sprites.svg#mail"></use>
        </svg>
        <a href="mailto:a.dragunov@tdaliance.ru" class="mobile-info-email">
          a.dragunov@tdaliance.ru
        </a>
      </div>
      <!-- /.mobile-mail -->
      <div class="mobile-icons">
        <svg class="mobile-svg" width="24" height="24">
          <use href="img/sprites.svg#vk"></use>
        </svg>
        <svg class="mobile-svg" width="24" height="24">
          <use href="img/sprites.svg#inst"></use>
        </svg>
      </div>
      <!-- /.mobile-icons -->
    </div>
    <!-- /.mobile-menu -->
    <nav class="navbar">
      <a href="" class="mobile-menu-toggle">
        <div class="mobile-menu-line"></div>
        <div class="mobile-menu-line"></div>
        <div class="mobile-menu-line"></div>
      </a>
      <!-- /.mobile-menu-toggle -->

      <a href="./" class="logo-link">
        <svg class="main-logo-svg logo-white">
          <use href="img/sprites.svg#logo-white"></use>
        </svg>
        <svg class="main-logo-svg logo-dark">
          <use href="img/sprites.svg#logo"></use>
        </svg>
      </a>
      <ul class="header-nav">
        <li class="header-nav-item">
          <a href="./about.php" class="header-nav-link">О компании</a>
        </li>
        <li class="header-nav-item">
          <a href="" class="header-nav-link">Контрактное производство</a>
        </li>
        <li class="header-nav-item">
          <a href="" class="header-nav-link">Собственные торговые марки</a>
        </li>
        <li class="header-nav-item">
          <a href="" class="header-nav-link">Новости</a>
        </li>
        <li class="header-nav-item">
          <a href="" class="header-nav-link">Контакты</a>
        </li>
      </ul>
      <div class="header-phone">
        <svg class="logo-svg-phone" width="24" height="24">
          <use href="img/sprites.svg#phone"></use>
        </svg>
        <a href="tel:+74996861014" class="header-phone-link">
          +7 (499) 686-10-14
        </a>
      </div>
      <!-- /.header-phone -->
      <button class="button header-button" data-toggle="modal">
        <svg class="button-phone" width="24" height="24">
          <use href="img/sprites.svg#phone"></use>
        </svg>
        <span class="button-text">Получить консультацию</span>
      </button>
    </nav>
    <!-- /.navbar -->
    <header class="header header-img">
      <div class="container">
        <div class="header-content">
          <div class="separator"></div>
          <h1 class="header-title">
            <?php echo "Комплексное обеспечение товарами и расходными материалами бизнеса";?>
          </h1>
          <p class="header-text">
            Высокий уровень вовлечения представителей целевой аудитории является
            четким доказательством простого факта: высококачественный прототип
            будущего проекта напрямую зависит от анализа существующих паттернов
            поведения.
          </p>
          <button class="button main-button">Подробнее о компании</button>
        </div>
        <!-- header-content -->

        <!-- Slider main container -->
        <div class="swiper features-slider">
          <!-- Additional required wrapper -->
          <ul class="swiper-wrapper header-features">
            <!-- Slides -->
            <li class="swiper-slide header-features-item">
              <svg class="logo-svg-features" width="36" height="36">
                <use href="img/sprites.svg#time"></use>
              </svg>
              <p class="header-features-text">Непрерывная работа c 2017 года</p>
            </li>
            <li class="swiper-slide header-features-item">
              <svg class="logo-svg-features" width="36" height="36">
                <use href="img/sprites.svg#certificate"></use>
              </svg>
              <p class="header-features-text">Вся продукция сертифицирована</p>
            </li>
            <li class="swiper-slide header-features-item">
              <svg class="logo-svg-features" width="36" height="36">
                <use href="img/sprites.svg#worker"></use>
              </svg>
              <p class="header-features-text">
                Контроль качества на всех этапах
              </p>
            </li>
            <li class="swiper-slide header-features-item">
              <svg class="logo-svg-features" width="36" height="36">
                <use href="img/sprites.svg#lorry"></use>
              </svg>
              <p class="header-features-text">
                Возможны поставки по всей России
              </p>
            </li>
            <li class="swiper-slide header-features-item">
              <svg class="logo-svg-features" width="36" height="36">
                <use href="img/sprites.svg#speed"></use>
              </svg>
              <p class="header-features-text">Оперативное производство</p>
            </li>
          </ul>
          <!-- If we need navigation buttons -->
          <div class="slider-buttons">
            <div class="slider-button-prev">
              <svg width="36" height="24">
                <use href="img/sprites.svg#arrow-prev"></use>
              </svg>
            </div>
            <div class="slider-button-next">
              <svg width="36" height="24">
                <use href="img/sprites.svg#arrow-next"></use>
              </svg>
            </div>
          </div>
          <!-- /.slider-buttons -->
        </div>
        <!-- END   Slider main container -->
      </div>
      <!-- /.container -->
    </header>
    <section class="section section-light">
      <div class="container">
        <div class="separator"></div>
        <h2 class="section-title section-title-header">Схема работы</h2>
        <!-- Slider main container -->
        <div class="swiper steps-slider">
          <!-- Additional required wrapper -->
          <ol class="swiper-wrapper steps">
            <!-- Slides -->
            <li class="swiper-slide steps-item">
              <span class="steps-num">01</span>
              <h3 class="steps-title">Знакомство</h3>
              <p class="steps-text">
                Безусловно, сплочённость команды профессионалов позволяет
                оценить значение форм воздействия.
              </p>
              <a href="#" class="button-link"> Оставить заявку </a>
            </li>
            <li class="swiper-slide steps-item">
              <span class="steps-num">02</span>
              <h3 class="steps-title">Заключение договора</h3>
              <p class="steps-text">
                Лишь интерактивные прототипы призваны к ответу.
              </p>
            </li>
            <li class="swiper-slide steps-item">
              <span class="steps-num">03</span>
              <h3 class="steps-title">Производство</h3>
              <p class="steps-text">
                А также стремящиеся вытеснить традиционное производство,
                нанотехнологии функционально разнесены на независимые элементы.
              </p>
            </li>
            <li class="swiper-slide steps-item">
              <span class="steps-num">04</span>
              <h3 class="steps-title">Доставка</h3>
              <p class="steps-text">
                В частности, экономическая повестка сегодняшнего дня говорит о
                возможностях приоритизации разума над эмоциями.
              </p>
            </li>
          </ol>
          <div class="steps-buttons primary-buttons-wrapper">
            <!-- If we need navigation buttons -->
            <div class="steps-button-prev primary-button-prev">
              <svg width="36" height="24">
                <use href="img/sprites.svg#arrow-prev"></use>
              </svg>
            </div>
            <div class="steps-button-next primary-button-next">
              <svg width="36" height="24">
                <use href="img/sprites.svg#arrow-next"></use>
              </svg>
            </div>
          </div>
          <!-- /.steps-buttons -->
        </div>
      </div>
    </section>

    <section class="section production">
      <div class="container">
        <div class="separator"></div>
        <h2 class="section-title section-title-ptoduction">
          Контрактное производство
        </h2>
        <div class="cards">
          <div class="card">
            <div class="card-content">
              <h3 class="card-title">Автомобильная химия</h3>
              <p class="card-text">
                Безусловно, сплочённость команды профессионалов позволяет
                оценить значение форм воздействия.
              </p>
            </div>
            <!-- /.card-content -->
            <img
              src="img/avto-him.png"
              alt="Автомобильная химия"
              class="card-img"
            />
          </div>
          <div class="card">
            <div class="card-content">
              <h3 class="card-title">Бытовая химия</h3>
              <p class="card-text">
                А также стремящиеся вытеснить традиционное производство,
                нанотехнологии функционально разнесены на независимые элементы.
              </p>
            </div>
            <!-- /.card-content -->
            <img src="img/bit-him.png" alt="Бытовая химия" class="card-img" />
          </div>
          <div class="card">
            <div class="card-content">
              <h3 class="card-title">Дезинфицирующие средства</h3>
              <p class="card-text">
                Лишь интерактивные прототипы призваны к ответу.
              </p>
            </div>
            <!-- /.card-content -->
            <img
              src="img/dezinfect.png"
              alt="Дезинфицирующие средства"
              class="card-img"
            />
          </div>
          <div class="card">
            <div class="card-content">
              <h3 class="card-title">Пищевые аэрозоли</h3>
              <p class="card-text">
                Безусловно, сплочённость команды профессионалов позволяет
                оценить значение форм воздействия.
              </p>
            </div>
            <!-- /.card-content -->
            <img
              src="img/dezinfect.png"
              alt="Пищевые аэрозоли"
              class="card-img"
            />
          </div>
          <div class="card">
            <div class="card-content">
              <h3 class="card-title">Косметическая продукция</h3>
              <p class="card-text">
                Лишь интерактивные прототипы призваны к ответу.
              </p>
            </div>
            <!-- /.card-content -->
            <img
              src="img/avto-him.png"
              alt="Косметическая продукция"
              class="card-img"
            />
          </div>
          <div class="card">
            <div class="card-content">
              <h3 class="card-title">Краски аэрозольные</h3>
              <p class="card-text">
                А также стремящиеся вытеснить традиционное производство,
                нанотехнологии функционально разнесены на независимые элементы.
              </p>
            </div>
            <!-- /.card-content -->
            <img
              src="img/bit-him.png"
              alt="Краски аэрозольные"
              class="card-img"
            />
          </div>
        </div>
      </div>

      <!-- /.container -->
    </section>
    <!-- /.section production -->

    <section class="section trademark">
      <div class="container">
        <div class="separator"></div>
        <h2 class="section-title section-title-trademark">
          Собственные <span class="hidden">торговые</span> марки
        </h2>
        <div class="trademark-cards">
          <div class="trademark-card">
            <svg class="trademark-card-img">
              <use href="img/sprites.svg#AGTECH"></use>
            </svg>
            <h3 class="trademark-card-title">Автохимия AG-Tech</h3>
            <p class="trademark-card-text">
              Для современного мира разбавленное изрядной долей эмпатии,
              рациональное мышление создаёт предпосылки для поставленных
              обществом задач.
            </p>
          </div>
          <div class="trademark-card">
            <svg class="trademark-card-img">
              <use href="img/sprites.svg#AP"></use>
            </svg>
            <h3 class="trademark-card-title">Автохимия AP</h3>
            <p class="trademark-card-text">
              Для современного мира разбавленное изрядной долей эмпатии,
              рациональное мышление создаёт предпосылки для поставленных
              обществом задач.
            </p>
          </div>
        </div>
        <!-- /.trademark-cards -->
      </div>
    </section>
    <!-- /.section trademark -->

    <section class="section founder">
      <img src="img/founder.jpeg" alt="" class="founder-photo" />
      <div class="container">
        <div class="founder-content-wrapper">
          <div class="founder-content">
            <div class="separator"></div>
            <h2 class="section-title founder-title">
              Отношение к делу и к клиентам
            </h2>
            <p class="founder-text">
              Кстати, интерактивные прототипы описаны максимально подробно.
              Повседневная практика показывает, что укрепление и развитие
              внутренней структуры говорит о возможностях соответствующих
              условий активизации. Внезапно, независимые государства, которые
              представляют собой яркий пример континентально-европейского типа
              политической культуры, будут подвергнуты целой серии независимых
              исследований. С учётом сложившейся международной обстановки,
              синтетическое тестирование выявляет срочную потребность системы
              массового участия. А ещё действия представителей оппозиции,
              превозмогая сложившуюся непростую экономическую ситуацию, в равной
              степени предоставлены сами себе. Не следует, однако, забывать, что
              выбранный нами инновационный путь в значительной степени
              обусловливает важность дальнейших направлений развития.
            </p>
            <a href="#" class="button-link">Подробнее о компании</a>
          </div>
        </div>
      </div>
      <!-- /.container -->
    </section>
    <!-- /.section -->

    <section class="section clients">
      <div class="container">
        <div class="separator"></div>
        <div class="clients-wrapper">
          <div class="clients-content">
            <h2 class="section-title section-title-clients">
              Производим аэрозольную продукцию для разных сфер
            </h2>
            <ul class="clients-list">
              <li class="clients-list-item">
                <svg width="30" height="30" class="clients-list-icon">
                  <use href="img/sprites.svg#him"></use>
                </svg>
                Химические производства
              </li>
              <li class="clients-list-item">
                <svg width="30" height="30" class="clients-list-icon">
                  <use href="img/sprites.svg#car"></use>
                </svg>
                Автомойки
              </li>
              <li class="clients-list-item">
                <svg width="30" height="30" class="clients-list-icon">
                  <use href="img/sprites.svg#food"></use>
                </svg>
                Пищевая продукция
              </li>
              <li class="clients-list-item">
                <svg width="30" height="30" class="clients-list-icon">
                  <use href="img/sprites.svg#brush"></use>
                </svg>
                Лаки и краски
              </li>
              <li class="clients-list-item">
                <svg width="30" height="30" class="clients-list-icon">
                  <use href="img/sprites.svg#makeup"></use>
                </svg>
                Косметические средства
              </li>
              <li class="clients-list-item">
                <svg width="30" height="30" class="clients-list-icon">
                  <use href="img/sprites.svg#auto-makeup"></use>
                </svg>
                Автомобильная косметика
              </li>
              <li class="clients-list-item">
                <svg width="30" height="30" class="clients-list-icon">
                  <use href="img/sprites.svg#makeup-clothes"></use>
                </svg>
                Косметика по уходу за одеждой
              </li>
              <li class="clients-list-item">
                <svg width="30" height="30" class="clients-list-icon">
                  <use href="img/sprites.svg#makeup-shoes"></use>
                </svg>
                Косметика по уходу за обувью
              </li>
              <li class="clients-list-item">
                <svg width="30" height="30" class="clients-list-icon">
                  <use href="img/sprites.svg#build-materials"></use>
                </svg>
                Строительные материалы
              </li>
              <li class="clients-list-item">
                <svg width="30" height="30" class="clients-list-icon">
                  <use href="img/sprites.svg#more"></use>
                </svg>
                И многих других
              </li>
            </ul>
          </div>
          <!-- clients-content -->
          <div class="clients-logo-list">
            <a href="#" class="client-logo-item"
              ><img src="img/client.png" alt="" class="clients-img"
            /></a>
            <a href="#" class="client-logo-item"
              ><img src="img/client.png" alt="" class="clients-img"
            /></a>
            <a href="#" class="client-logo-item"
              ><img src="img/client.png" alt="" class="clients-img"
            /></a>
            <a href="#" class="client-logo-item"
              ><img src="img/client.png" alt="" class="clients-img"
            /></a>
            <a href="#" class="client-logo-item"
              ><img src="img/client.png" alt="" class="clients-img"
            /></a>
            <a href="#" class="client-logo-item"
              ><img src="img/client.png" alt="" class="clients-img"
            /></a>
            <a href="#" class="client-logo-item"
              ><img src="img/client.png" alt="" class="clients-img"
            /></a>
            <a href="#" class="client-logo-item"
              ><img src="img/client.png" alt="" class="clients-img"
            /></a>
            <a href="#" class="client-logo-item"
              ><img src="img/client.png" alt="" class="clients-img"
            /></a>
          </div>
          <!-- /.clients-logo -->
        </div>
      </div>
    </section>
    <section class="section blog">
      <div class="container">
        <div class="separator"></div>
        <h2 class="section-title blog-title">
          Блог экспертов в области производства
        </h2>
        <!-- Slider main container -->
        <div class="swiper blog-slider">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <a href="#" class="swiper-slide blog-card">
              <img src="img/blog/blog11.jpeg" alt="" class="blog-card-image" />
              <h3 class="blog-card-title">
                Современная методология разработки одухотворила всех причастных
              </h3>
              <p class="blog-card-text hidden">
                Действия представителей оппозиции, превозмогая сложившуюся
                непростую экономическую ситуацию, в равной степени
                предоставлены...
              </p>
            </a>
            <a href="#" class="swiper-slide blog-card">
              <img src="img/blog/blog1.jpeg" alt="" class="blog-card-image" />
              <h3 class="blog-card-title">
                Сложно сказать, почему жизнь прекрасна
              </h3>
              <p class="blog-card-text hidden">
                Сложно сказать, почему элементы политического процесса
                функционально разнесены на независимые элементы. Безусловно,
                высокотехнологичная...
              </p>
            </a>
            <a href="#" class="swiper-slide blog-card">
              <img src="img/blog/blog11.jpeg" alt="" class="blog-card-image" />
              <h3 class="blog-card-title">
                Современная методология разработки одухотворила всех причастных
              </h3>
              <p class="blog-card-text hidden">
                Действия представителей оппозиции, превозмогая сложившуюся
                непростую экономическую ситуацию, в равной степени
                предоставлены...
              </p>
            </a>
          </div>
          <!-- If we need navigation buttons -->
          <div class="blog-slider-footer">
            <a href="#" class="button-link">Весь блог</a>
            <div class="blog-buttons primary-buttons-wrapper">
              <!-- If we need navigation buttons -->
              <div class="blog-button-prev primary-button-prev">
                <svg width="36" height="24">
                  <use href="img/sprites.svg#arrow-prev"></use>
                </svg>
              </div>
              <div class="blog-button-next primary-button-next">
                <svg width="36" height="24">
                  <use href="img/sprites.svg#arrow-next"></use>
                </svg>
              </div>
            </div>
            <!-- /.blog-buttons -->
          </div>
          <!-- /.blog-sliderfooter -->
        </div>
      </div>
      <!-- /.container -->
    </section>
    <!-- /.section blog -->
    <? include_once("footer.php") ?>