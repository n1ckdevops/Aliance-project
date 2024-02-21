<section class="cta">
  <div class="bg-gray section-cta">
    <img src="img/cta.png" alt="call to action" class="cta-image hidden-992" />
    <div class="cta-form-wrapper container">
      <form action="handler.php" method='POST' class="cta-form">
        <h2 class="section-title cta-form-title">Хотите сотрудничать?</h2>
        <p class="cta-form-text">
          Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время
          ответит на все интересующие вопросы и поможем даже в самых сложных
          случаях!
        </p>
        <div class="input-group-wrapper">
          <div class="input-group">
            <input id="user-name" type="text"  class="input" placeholder=" " maxlength="30" />
            <label class="input-group-label" for="user-name">Имя</label>
          </div>
          <!-- /.input-group -->
          <div class="input-group">
            <input id="user-phone" type="tel" name="userphone" class="input" placeholder=" " maxlength="30" />
            <label class="input-group-label" for="user-phone">Номер телефона</label>
          </div>
          <!-- /.input-group -->
        </div>
        <!-- /.input-group-wrapper -->
        <div class="cta-form-footer">
          <button type="submit" class="button cta-form-button">
            Отправить заявку
          </button>
          <div class="notify">
            <svg class="notify-icon" width="14" height="14">
              <use href="img/sprites.svg#shield"></use>
            </svg>
            <p class="notify-text">
              Обращаясь к нам вы получаете не только профессиональную
              работу, но и абсолютную конфиденциальность информации!
            </p>
          </div>
        </div>
        <!-- /.cta-form-footer -->
      </form>
      <!-- /.cta-form -->
    </div>
    <!-- /.cta-form-wrapper -->
  </div>
  <!-- /.bg-gray -->
</section>
<!-- /.cta -->

<!-- FOOTER SECTION -->
<footer class="footer">
  <div class="container">
    <div class="footer-top">
      <svg class="footer-logo">
        <use href="img/sprites.svg#logo"></use>
      </svg>
      <a href="tel:+74996861014" class="footer-phone">+7 (499) 686-10-14</a>
      <div class="footer-info">
        <svg class="footer-svg" width="20" height="20">
          <use href="img/sprites.svg#mark"></use>
        </svg>
        <address class="footer-info-address">
          г. Москва, Холодильный пер. 4к1с8
        </address>
      </div>
      <!-- /.footer-info -->
      <div class="footer-mail">
        <svg class="footer-svg" width="24" height="24">
          <use href="img/sprites.svg#mail"></use>
        </svg>
        <a href="mailto:a.dragunov@tdaliance.ru" class="footer-info-email">
          a.dragunov@tdaliance.ru
        </a>
      </div>
      <!-- /.footer-mail -->
      <div class="mobile-icons footer-icons">
        <svg class="footer-svg" width="24" height="24">
          <use href="img/sprites.svg#vk"></use>
        </svg>
        <svg class="footer-svg" width="24" height="24">
          <use href="img/sprites.svg#inst"></use>
        </svg>
      </div>
      <!-- /.mobile-icons -->
    </div>
  </div>
  <hr style="color: #f1f1f3" class="footer-separator" />
  <div class="container">
    <div class="footer-bottom">
      <div class="footer-menu-wrapper">
        <h2 class="footer-menu-title">Контрактное производство</h2>
        <ul class="footer-menu-list footer-menu-column-2">
          <li class="footer-menu-item">
            <a href="#" class="footer-menu-link">Автомобильная химия</a>
          </li>
          <li class="footer-menu-item">
            <a href="#" class="footer-menu-link">Бытовая химия</a>
          </li>
          <li class="footer-menu-item">
            <a href="#" class="footer-menu-link">Дезинфицирующие средства</a>
          </li>
          <li class="footer-menu-item">
            <a href="#" class="footer-menu-link">Пищевые аэрозоли</a>
          </li>
          <li class="footer-menu-item">
            <a href="#" class="footer-menu-link">Косметическая продукция</a>
          </li>
          <li class="footer-menu-item">
            <a href="#" class="footer-menu-link">Краски аэрозольные</a>
          </li>
        </ul>
      </div>
      <!-- footer menu wrapper 1 -->
      <div class="footer-menu-wrapper">
        <h2 class="footer-menu-title">Собственные марки</h2>
        <ul class="footer-menu-list">
          <li class="footer-menu-item">
            <a href="#" class="footer-menu-link">Автохимия AG-Tech</a>
          </li>
          <li class="footer-menu-item">
            <a href="#" class="footer-menu-link">Автохимия AP</a>
          </li>
        </ul>
      </div>
      <!-- footer-menu-wrapper -->
      <div class="footer-menu-wrapper">
        <ul class="footer-menu-list footer-menu-list-3">
          <li class="footer-menu-item">
            <a href="#" class="footer-menu-link footer-menu-link-bold">О компании</a>
          </li>
          <li class="footer-menu-item">
            <a href="#" class="footer-menu-link footer-menu-link-bold">Новости</a>
          </li>
          <li class="footer-menu-item">
            <a href="#" class="footer-menu-link footer-menu-link-bold">Контакты</a>
          </li>
        </ul>
      </div>
      <!-- footer menu wrapper -->
    </div>
    <!-- /.footer-bottom -->
  </div>
  <!-- /.container -->
  <hr style="color: #ebebf0" class="footer-separator" />
  <div class="container">
    <div class="footer-wrapper footer-wrapper-down">
      <div class="footer-legal">
        <p class="copyright">
          &copy;
          <? echo date("d.m.Y") ?> «Aliance Production». Все права защищены.
        </p>
        <a href="#" class="policy">Политики конфиденциальности</a>
      </div>
      <!-- /.footer-legal -->
      <div class="footer-author">
        <span class="made-in hidden-576">Сделано в</span>
        <span class="made-in shown-576">Дизайн и разработка</span>
        <svg class="footer-svg" width="52" height="11">
          <use href="img/sprites.svg#creator"></use>
        </svg>
      </div>
      <!-- /.footer-author -->
    </div>
    <!-- /.footer-wrapper -->
  </div>
  <!-- /.container -->
</footer>
<!-- END OF FOOTER SECTION -->

<div class="modal">
  <div class="modal-dialog">
    <h2 class="modal-title">Есть вопросы?</h2>
    <a href="#" class="modal-close" data-toggle="modal">
      <svg class="modal-svg" width="24" height="24">
        <use href="img/sprites.svg#close"></use>
      </svg>
    </a>
    <p class="modal-text">
      Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время
      ответит на все интересующие вопросы и поможем даже в самых сложных
      случаях!
    </p>
    <form action="handler.php" method='POST' class="modal-form">
      <div class="input-group-wrapper input-group-vertical">
        <div class="input-group modal-input-group">
          <input id="modal-user-name" type="text" class="input" name="username" placeholder=" " />
          <label class="input-group-label modal-input-label" for="modal-user-name">Имя</label>
        </div>
        <!-- /.input-group -->
        <div class="input-group modal-input-group">
          <input id="modal-user-phone" type="tel" name="userphone" class="input" placeholder=" " />
          <label class="input-group-label modal-input-label" for="modal-user-phone">Номер телефона</label>
        </div>
        <!-- /.input-group -->
      </div>
      <!-- /.input-group-wrapper -->
      <div class="cta-form-footer modal-form">
        <button type="submit" class="button modal-form-button">
          Отправить заявку
        </button>
        <div class="notify">
          <svg class="notify-icon" width="14" height="14">
            <use href="img/sprites.svg#shield"></use>
          </svg>
          <p class="notify-text modal-notify">
            Обращаясь к нам вы получаете не только профессиональную работу,
            но и абсолютную конфиденциальность информации!
          </p>
        </div>
      </div>
      <!-- /.cta-form-footer -->
    </form>
  </div>
</div>
<script src="js/swiper-bundle.min.js"></script>
<script src="js/main.js"></script>
<script src="js/just-validate.production.min.js"></script>
</body>

</html>