<section class="section trademark">
  <div class="container">
    

    <?if (!empty($block_title)) {
      echo '<div class="separator"></div>';
      echo '<h2 class="section-title section-title-ptoduction">'. $block_title .'</h2>';
    }?>
    <!-- <h2 class="section-title section-title-trademark">
      Собственные <span class="hidden">торговые</span> марки
    </h2> -->
    <div class="trademark-cards">
      <div class="trademark-card" onclick="redirectToLink('avtohim_agtech.php')">
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
      <div class="trademark-card" onclick="redirectToLink('avtohim.php')">
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
<script>
function redirectToLink(url) {
    window.location.href = url;
}
</script>