<section class="section blog blog-main" >
  <div class="container blog-section-style" id="content-1">
    <div class="separator" <?=$blog_hidden?>></div>
    <h2 class="section-title blog-title" <?=$blog_hidden?>>
      Блог экспертов в области производства
    </h2>
    <a href="#" class=" blog-card blog-main-block">
      <img src="img/blog/blog11.jpeg" alt="" class="blog-card-image" />
      <h3 class="blog-card-title">
        Современная методология разработки одухотворила всех причастных
      </h3>
      <p class="blog-card-text blog-card-text-main hidden">
        Действия представителей оппозиции, превозмогая сложившуюся
        непростую экономическую ситуацию, в равной степени
        предоставлены...
      </p>
    </a>
    <a href="#" class=" blog-card blog-main-block">
      <img src="img/blog/blog1.jpeg" alt="" class="blog-card-image" />
      <h3 class="blog-card-title">
        Сложно сказать, почему жизнь прекрасна
      </h3>
      <p class="blog-card-text  blog-card-text-main  hidden">
        Сложно сказать, почему элементы политического процесса
        функционально разнесены на независимые элементы. Безусловно,
        высокотехнологичная...
      </p>
    </a>
    <a href="#" class=" blog-card blog-main-block">
      <img src="img/blog/blog11.jpeg" alt="" class="blog-card-image" />
      <h3 class="blog-card-title">
        Современная методология разработки одухотворила всех причастных
      </h3>
      <p class="blog-card-text  blog-card-text-main  hidden">
        Действия представителей оппозиции, превозмогая сложившуюся
        непростую экономическую ситуацию, в равной степени
        предоставлены...
      </p>
    </a>
    <a href="#" class=" blog-card blog-main-block">
      <img src="img/blog/blog1.jpeg" alt="" class="blog-card-image" />
      <h3 class="blog-card-title">
        Сложно сказать, почему жизнь прекрасна
      </h3>
      <p class="blog-card-text  blog-card-text-main  hidden">
        Сложно сказать, почему элементы политического процесса
        функционально разнесены на независимые элементы. Безусловно,
        высокотехнологичная...
      </p>
    </a>
    <a href="#" class=" blog-card blog-main-block">
      <img src="img/blog/blog11.jpeg" alt="" class="blog-card-image" />
      <h3 class="blog-card-title">
        Современная методология разработки одухотворила всех причастных
      </h3>
      <p class="blog-card-text  blog-card-text-main  hidden">
        Действия представителей оппозиции, превозмогая сложившуюся
        непростую экономическую ситуацию, в равной степени
        предоставлены...
      </p>
    </a>
    <a href="#" class=" blog-card blog-main-block">
      <img src="img/blog/blog11.jpeg" alt="" class="blog-card-image" />
      <h3 class="blog-card-title">
        Современная методология разработки одухотворила всех причастных
      </h3>
      <p class="blog-card-text  blog-card-text-main  hidden">
        Действия представителей оппозиции, превозмогая сложившуюся
        непростую экономическую ситуацию, в равной степени
        предоставлены...
      </p>
    </a>
    <a href="#" class=" blog-card blog-main-block">
      <img src="img/blog/blog1.jpeg" alt="" class="blog-card-image" />
      <h3 class="blog-card-title">
        Сложно сказать, почему жизнь прекрасна
      </h3>
      <p class="blog-card-text  blog-card-text-main  hidden">
        Сложно сказать, почему элементы политического процесса
        функционально разнесены на независимые элементы. Безусловно,
        высокотехнологичная...
      </p>
    </a>
    <a href="#" class=" blog-card blog-main-block">
      <img src="img/blog/blog11.jpeg" alt="" class="blog-card-image" />
      <h3 class="blog-card-title">
        Современная методология разработки одухотворила всех причастных
      </h3>
      <p class="blog-card-text  blog-card-text-main  hidden">
        Действия представителей оппозиции, превозмогая сложившуюся
        непростую экономическую ситуацию, в равной степени
        предоставлены...
      </p>
    </a>
    <a href="#" class=" blog-card blog-main-block">
      <img src="img/blog/blog1.jpeg" alt="" class="blog-card-image" />
      <h3 class="blog-card-title">
        Сложно сказать, почему жизнь прекрасна
      </h3>
      <p class="blog-card-text  blog-card-text-main  hidden">
        Сложно сказать, почему элементы политического процесса
        функционально разнесены на независимые элементы. Безусловно,
        высокотехнологичная...
      </p>
    </a>
    <a href="#" class=" blog-card blog-main-block">
      <img src="img/blog/blog11.jpeg" alt="" class="blog-card-image" />
      <h3 class="blog-card-title">
        Современная методология разработки одухотворила всех причастных
      </h3>
      <p class="blog-card-text  blog-card-text-main  hidden">
        Действия представителей оппозиции, превозмогая сложившуюся
        непростую экономическую ситуацию, в равной степени
        предоставлены...
      </p>
    </a>

  </div>
  <div class="container">
    <div class="pagination">
      <button class="page active">1</button>
      <button class="page">2</button>
      <button class="page">3</button>
      <button class="page">4</button>
      <button class="page">5</button>
    </div>
  </div>
</section>

<script>
document.addEventListener("DOMContentLoaded", function() {
  const pages = document.querySelectorAll('.page');
  const content = document.querySelector('.blog-section-style');

  pages.forEach(page => {
    page.addEventListener('click', function() {
      // Получаем номер страницы из текста кнопки
      const pageNumber = parseInt(this.textContent);
      // Устанавливаем соответствующий контент для выбранной страницы

      // Убираем активное состояние у всех страниц
      pages.forEach(p => p.classList.remove('active'));
      // Добавляем активное состояние выбранной странице
      this.classList.add('active');
    });
  });
});
</script>