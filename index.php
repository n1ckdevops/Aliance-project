<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/normalize.css" />
  <link rel="stylesheet" href="css/swiper-bundle.min.css" />
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <link rel="icon" href="img/favicon.ico" type="image/x-icon">
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
            <a class="mobile-submenu-link" href="#">Дезинфицирующие средства</a>
          </li>
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-link" href="#">Пищевые аэрозоли</a>
          </li>
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-link" href="#">Косметическая продукция</a>
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
        <a href="./contracts.php" class="header-nav-link">Контрактное производство</a>
      </li>
      <li class="header-nav-item">
        <a href="./trademarks.php" class="header-nav-link">Собственные торговые марки</a>
      </li>
      <li class="header-nav-item">
        <a href="#" class="header-nav-link">Новости</a>
      </li>
      <li class="header-nav-item">
        <a href="#" class="header-nav-link">Контакты</a>
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
    <button class="button header-button" data-toggle="modal" data-target='#feedback-modal'>
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
        <button class="button main-button" data-toggle='modal' data-target='#feedback-modal'>Подробнее о
          компании</button>
      </div>
      <!-- header-content -->

      <!-- Slider main container -->
      <?php include_once('./template-parts/main-slider.php')?>
      <!-- END   Slider main container -->
    </div>
    <!-- /.container -->
  </header>


  <!-- /.section production -->
  <?php include_once('./template-parts/workflow.php')?>
  <?php include_once('./template-parts/production-section.php')?>
  <?php $block_title = 'собственные торговые марки'; include_once('./template-parts/trademarks-block.php')?>

  <?php include_once('./template-parts/founder-section.php')?>
  <?php $index_section_clients = 'Производим аэрозольную продукцию для разных сфер'; include_once('./template-parts/clients-section.php')?>
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
          <a href="blog.php" class="button-link">Весь блог</a>
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