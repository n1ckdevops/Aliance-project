<? 
$page_title = 'О компании';
$small_descr = 'hidden';
$about_clients_hiddden = 'hidden';
include_once("header-page.php") ?>

<section class="section about_blank">
  <div class="container">
    <div class="about_blank-wrapper">
      <img src="img/about_blank.jpeg" alt="" class="about_blank-photo" />
      <div class="about_blank-content">
        <div class="separator"></div>
        <h2 class="section-title about_blank-title">
          мы - эксперты в области производства химии
        </h2>
        <p class="about_blank-text">
          Разнообразный и богатый опыт говорит нам, что перспективное планирование однозначно фиксирует необходимость
          поставленных обществом задач! Есть над чем задуматься: ключевые особенности структуры проекта могут быть
          объединены в целые кластеры себе подобных. Интерактивные прототипы, которые представляют собой яркий пример
          континентально-европейского типа политической культуры, будут описаны максимально подробно. Значимость этих
          проблем настолько очевидна, что перспективное планирование играет важную роль в формировании системы массового
          участия.

      </div>
    </div>
    <?php include_once('./template-parts/main-slider.php')?>
  </div>
  <!-- /.container -->
</section>

<section class="section clients">
  <div class="container">
    <div class="clients-wrapper">
      <div class="clients-content">
        <div class="separator"></div>
        <h2 class="section-title section-title-clients">
          Наше производство
        </h2>
        <p class="about_blank-text clients-text">
          Предварительные выводы неутешительны: разбавленное изрядной долей эмпатии, рациональное мышление обеспечивает
          широкому кругу (специалистов) участие в формировании глубокомысленных рассуждений. Но граница обучения кадров
          создаёт необходимость включения в производственный план целого ряда внеочередных мероприятий с учётом
          комплекса кластеризации усилий. <br><br>
          Реализация намеченных плановых заданий, а также свежий взгляд на привычные вещи - безусловно открывает новые
          горизонты для соответствующих условий активизации. Предварительные выводы неутешительны: экономическая
          повестка сегодняшнего дня требует анализа анализа существующих паттернов поведения.</p>

        <ul class="clients-list">
          <li class="clients-list-item">
            <svg width="30" height="30" class="clients-list-icon">
              <use href="img/sprites.svg#car"></use>
            </svg>
            Автомобильная химия
          </li>

          <li class="clients-list-item">
            <svg width="30" height="30" class="clients-list-icon">
              <use href="img/sprites.svg#car"></use>
            </svg>
            Химические производства
          </li>
          <li class="clients-list-item">
            <svg width="30" height="30" class="clients-list-icon">
              <use href="img/sprites.svg#food"></use>
            </svg>
            Дезинфицирующие средства
          </li>
          <li class="clients-list-item">
            <svg width="30" height="30" class="clients-list-icon">
              <use href="img/sprites.svg#auto-makeup"></use>
            </svg>
            Пищевые аэрозоли
          </li>
          <li class="clients-list-item">
            <svg width="30" height="30" class="clients-list-icon">
              <use href="img/sprites.svg#makeup"></use>
            </svg>
            Косметическая продукция
          </li>
          <li class="clients-list-item">
            <svg width="30" height="30" class="clients-list-icon">
              <use href="img/sprites.svg#brush"></use>
            </svg>
            Краски аэрозольные
          </li>

        </ul>
      </div>
      <img src="img/our-production-bg.png" alt="" class='our-production-bg'>
    </div>
    <!-- clients-content -->
    <!-- /.clients-logo -->
  </div>
  </div>
</section>

<?php include_once('./template-parts/founder-section.php')?>
<?php include_once('./template-parts/blog-section.php')?>
<?php $index_section_clients = 'Производим аэрозольную продукцию для разных сфер'; include_once('./template-parts/clients-section.php')?>
<? include_once("footer.php") ?>