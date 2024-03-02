<!DOCTYPE html>
<html lang="ru">
 
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="css/style.css" />

  <!-- CAUTION!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
  <link rel="stylesheet" href="css/style-about.css" />
  <link rel="stylesheet" href="css/style-contracts.css" />
  <link rel="stylesheet" href="css/style-trademarks.css" />
  <link rel="stylesheet" href="css/avtohim-style.css" />
  <link rel="stylesheet" href="css/avtohim-agtech-style.css" />
  <link rel="stylesheet" href="css/blog-style.css" />
  <link rel="stylesheet" href="css/normalize.css" />
  <link rel="stylesheet" href="css/swiper-bundle.min.css" />
  <title><?= $page_title ?> - Aliance Production</title>
</head>

<body>
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
  <nav class="navbar  navbar-light">
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
    <button class="button header-button" data-toggle="modal" data-target='#feedback-modal'>
      <svg class="button-phone" width="24" height="24">
        <use href="img/sprites.svg#phone"></use>
      </svg>
      <span class="button-text">Получить консультацию</span>
    </button>
  </nav>
  <!-- /.navbar -->
  <header class="section about <?= $blog_header_title ?> <?= $hidden_header?>" >
    <!-- <img src='' alt="" class="about-image"> -->
    <div class="container container-about">
      <div class="separator separator-in-pic"></div>
      <h1 class="section-title section-title-header title-about"><?= $page_title ?></h1>
      <a href="index.php" class="small-nav-main">Главная &mdash;</a>&nbsp;<a href="" class="small-nav-about">
        <?= $page_title ?></a>
    </div>
  </header>