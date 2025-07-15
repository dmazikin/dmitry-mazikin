<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mazikin
 */

get_header();
?>
<!-- ABOUT -->
<article class="about active" data-page="обо мне">
  <header>
    <h1 class="h2 article-title">Обо мне</h1>
  </header>

  <section class="about-text">
    <h3 class="h3">🚀 Помогаю бизнесу эффективно работать!</h3>
    <p>
      Специалист разработки веб-интерфейсов и внедрение Bitrix24.Создаю функциональные сайты, настраиваю автоматизацию и повышать эффективность работы с помощью современных инструментов. Имею статус бизнес-партнера,помогаю настроить облачные и коробочные версии.
    </p>
    <h3 class="h3">💡 Почему стоит обратиться ко мне?</h3>
    <ul class="ul-list">
      <li>Не просто внедряю системы — я помогаю понять, как ими пользоваться.</li>
      <li>Работаю с клиентами, которые хотят не просто запустить сайт или CRM, а настроить их так, чтобы они приносили результат.</li>
      <li>Готов поддержать вас на всех этапах — от идеи до запуска и сопровождения.</li>
    </ul>
  </section>
  <!-- /.about-text -->
  <!-- SERVICE -->
  <section class="service">
    <ul class="service-list">
      <li class="service-item">
        <div class="service-icon-box">
          <img src="wp-content/themes/mazikin/img/icon-design.svg" alt="" width="40">
        </div>
        <!-- /.service-icon-box -->
        <div class="service-content-box">
          <h4 class="h4 service-item-title">Верстка сайтов по макетам</h4>
          <p class="service-item-text">
            Cоздаю адаптивные, кросс-браузерные и SEO-оптимизированные страницы.
          </p>
          <!-- /.service-item-text -->
        </div>
        <!-- /.service-content-box -->
      </li>
      <li class="service-item">
        <div class="service-icon-box">
          <img src="wp-content/themes/mazikin/img/icon-dev.svg" alt="" width="40">
        </div>
        <!-- /.service-icon-box -->
        <div class="service-content-box">
          <h4 class="h4 service-item-title">Работа с CMS WordPress</h4>
          <p class="service-item-text">
            Oт установки и настройки до интеграции готовой верстки.
          </p>
          <!-- /.service-item-text -->
        </div>
        <!-- /.service-content-box -->
      </li>
      <li class="service-item">
        <div class="service-icon-box">
          <img src="wp-content/themes/mazikin/img/icon-app.svg" alt="" width="40">
        </div>
        <!-- /.service-icon-box -->
        <div class="service-content-box">
          <h4 class="h4 service-item-title">Интеграция Bitrix24</h4>
          <p class="service-item-text">
            Внедряю систему в бизнес-процессы, настраиваю CRM, автоматизацию, интеграции с другими сервисами.
          </p>
          <!-- /.service-item-text -->
        </div>
        <!-- /.service-content-box -->
      </li>
      <li class="service-item">
        <div class="service-icon-box">
          <img src="wp-content/themes/mazikin/img/admin.png" alt="" width="40">
        </div>
        <!-- /.service-icon-box -->
        <div class="service-content-box">
          <h4 class="h4 service-item-title">Администрирование порталов Bitrix24</h4>
          <p class="service-item-text">
            Поддерживаю как облачные, так и коробочные версии.
          </p>
          <!-- /.service-item-text -->
        </div>
        <!-- /.service-content-box -->
      </li>
      <li class="service-item">
        <div class="service-icon-box">
          <img src="wp-content/themes/mazikin/img/consultat.png" alt="" width="40">
        </div>
        <!-- /.service-icon-box -->
        <div class="service-content-box">
          <h4 class="h4 service-item-title">Провожу консультации</h4>
          <p class="service-item-text">
            Как платные, так и бесплатные — по всем аспектам работы с Bitrix24.
          </p>
          <!-- /.service-item-text -->
        </div>
        <!-- /.service-content-box -->
      </li>
      <li class="service-item">
        <div class="service-icon-box">
          <img src="wp-content/themes/mazikin/img/sertificat.png" alt="" width="40">
        </div>
        <!-- /.service-icon-box -->
        <div class="service-content-box">
          <h4 class="h4 service-item-title">Сертифицированный специалист Bitrix24</h4>
          <p class="service-item-text">
            Гарантия качества и профессионализма.
          </p>
          <!-- /.service-item-text -->
        </div>
        <!-- /.service-content-box -->
      </li>
    </ul>
    <!-- /.service-list -->
  </section>
  <!-- /.service -->
  <!--  TESTIMONIALS -->
  <section class="testimonials">
    <h3 class="h3 testimonials-title">Рекомендации</h3>
    <ul class="testimonials-list has-scrollbar">
      <li class="testimonials-item">
        <div class="content-card" data-testimonials-item>
          <figure class="testimonials-avatar-box">
            <img src="wp-content/themes/mazikin/img/avatar-1.png" alt="" width="60" data-testimonials-avatar>
          </figure>
          <!-- /.testtimonials-avatar-box -->
          <h4 class="h4 testimonials-item-title" data-testimonials-title>Виктор</h4>
          <div class="testimonials-text" data-testimonials-text>
            <h3 class="h3">Обновление верстки и стилей сайта</h3>
            <p>
              Все отлично, обращусь ещё
            </p>
          </div>
          <!-- /.testimonials-text -->
        </div>
        <!-- /.content-card -->
      </li>
      <li class="testimonials-item">
        <div class="content-card" data-testimonials-item>
          <figure class="testimonials-avatar-box">
            <img src="wp-content/themes/mazikin/img/avatar-4.png" alt="" width="60" data-testimonials-avatar>
          </figure>
          <!-- /.testtimonials-avatar-box -->
          <h4 class="h4 testimonials-item-title" data-testimonials-title>Денис</h4>
          <div class="testimonials-text" data-testimonials-text>
            <h3 class="h3">Скорректировать верстку страницы</h3>
            <p>
              Отличный исполнитель. Работа выполнена качественно. В процессе появились правки и пришлось переделывать часть функционала, которая не входила в ТЗ. Пришли к соглашению и работу закончили
            </p>
          </div>
          <!-- /.testimonials-text -->
        </div>
        <!-- /.content-card -->
      </li>
      <li class="testimonials-item">
        <div class="content-card" data-testimonials-item>
          <figure class="testimonials-avatar-box">
            <img src="wp-content/themes/mazikin/img/avatar-1.png" alt="" width="60" data-testimonials-avatar>
          </figure>
          <!-- /.testtimonials-avatar-box -->
          <h4 class="h4 testimonials-item-title" data-testimonials-title>Джастин</h4>
          <div class="testimonials-text" data-testimonials-text>
            <h3 class="h3">Качественный сайт 9 экранов</h3>
            <p>
              Прекрасная работа , сайтом остался очень доволен . Правки вносил максимально терпеливо и точно . Результатом очень доволен , могу рекомендовать 🔥🎊🥳
            </p>
          </div>
          <!-- /.testimonials-text -->
        </div>
        <!-- /.content-card -->
      </li>
      <li class="testimonials-item">
        <div class="content-card" data-testimonials-item>
          <figure class="testimonials-avatar-box">
            <img src="wp-content/themes/mazikin/img/avatar-4.png" alt="" width="60" data-testimonials-avatar>
          </figure>
          <!-- /.testtimonials-avatar-box -->
          <h4 class="h4 testimonials-item-title" data-testimonials-title>Константин</h4>
          <div class="testimonials-text" data-testimonials-text>
            <h3 class="h3">Внести контентные правки в html </h3>
            <p>
              Рекомендую Дмитрия, выполнил качественно довольную рутинную задачу, всегда на связи, сделал все исправления без лишних разговоров. Будем в дальнейшем сотрудничать
            </p>
          </div>
          <!-- /.testimonials-text -->
        </div>
        <!-- /.content-card -->
      </li>
    </ul>
    <!-- /.testimonials-list has-scrollbar -->
  </section>
  <!-- /.testimonials -->
  <!-- CLIENTS -->
  <section class="clients">
    <h3 class="h3 clients-title">Клиенты</h3>
    <ul class="clients-list has-scrollbar">
      <li class="clients-item">
        <a href="#">
          <img src="/wp-content/themes/mazikin/img/logo-1-color.png" alt="">
        </a>
      </li>
      <li class="clients-item">
        <a href="#">
          <img src="/wp-content/themes/mazikin/img/logo-2-color.png" alt="">
        </a>
      </li>
      <li class="clients-item">
        <a href="#">
          <img src="/wp-content/themes/mazikin/img/logo-3-color.png" alt="">
        </a>
      </li>
      <li class="clients-item">
        <a href="#">
          <img src="/wp-content/themes/mazikin/img/logo-4-color.png" alt="">
        </a>
      </li>
      <li class="clients-item">
        <a href="#">
          <img src="/wp-content/themes/mazikin/img/logo-5-color.png" alt="">
        </a>
      </li>
      <li class="clients-item">
        <a href="#">
          <img src="/wp-content/themes/mazikin/img/logo-6-color.png" alt="">
        </a>
      </li>
    </ul>
    <!-- /.clients-list has-scrollbar -->
  </section>
  <!-- /.clients -->
  <!-- SKILLS -->
  <section class="skill">
    <h3 class="h3 skill-title">Навыки</h3>
    <ul class="skill-list content-card">
      <li class="skill-item">
        <div class="title-wrapper">
          <div class="skill-item-title">Test</div>
          <data value="100%">100%</data>
        </div>
        <div class="skill-progress-bg">
          <div class="skill-progress-fill" style="width: 100%;"></div>
        </div>
      </li>
      <li class="skill-item">
        <div class="title-wrapper">
          <div class="skill-item-title">Test</div>
          <data value="100%">100%</data>
        </div>
        <div class="skill-progress-bg">
          <div class="skill-progress-fill" style="width: 100%;"></div>
        </div>
      </li>
      <li class="skill-item">
        <div class="title-wrapper">
          <div class="skill-item-title">Test</div>
          <data value="100%">100%</data>
        </div>
        <div class="skill-progress-bg">
          <div class="skill-progress-fill" style="width: 100%;"></div>
        </div>
      </li>
      <li class="skill-item">
        <div class="title-wrapper">
          <div class="skill-item-title">Test</div>
          <data value="100%">100%</data>
        </div>
        <div class="skill-progress-bg">
          <div class="skill-progress-fill" style="width: 100%;"></div>
        </div>
      </li>
    </ul>
    <!-- /.skill-list -->
  </section>
  <!-- /.skill -->
</article>
<!-- ABOUT -->
<!-- PORTFOLIO -->
<article class="portfolio" data-page="портфолио">

  <header>
    <h2 class="h2 article-title">Портфолио</h2>
  </header>

  <section class="projects">

    <ul class="filter-list">

      <li class="filter-item">
        <button class="active" data-filter-btn>All</button>
      </li>

      <li class="filter-item">
        <button data-filter-btn>Web design</button>
      </li>

      <li class="filter-item">
        <button data-filter-btn>Applications</button>
      </li>

      <li class="filter-item">
        <button data-filter-btn>Web development</button>
      </li>

    </ul>

    <div class="filter-select-box">

      <button class="filter-select" data-select>

        <div class="select-value" data-selecct-value>Select category</div>

        <div class="select-icon">
          <ion-icon name="chevron-down"></ion-icon>
        </div>

      </button>

      <ul class="select-list">

        <li class="select-item">
          <button data-select-item>All</button>
        </li>

        <li class="select-item">
          <button data-select-item>Web design</button>
        </li>

        <li class="select-item">
          <button data-select-item>Applications</button>
        </li>

        <li class="select-item">
          <button data-select-item>Web development</button>
        </li>

      </ul>

    </div>

    <ul class="project-list">

      <li class="project-item  active" data-filter-item data-category="web development">
        <a href="#">

          <figure class="project-img">
            <div class="project-item-icon-box">
              <ion-icon name="eye-outline"></ion-icon>
            </div>

            <img src="wp-content/themes/mazikin/img/project-1.jpg" alt="finance" loading="lazy">
          </figure>

          <h3 class="project-title">Finance</h3>

          <p class="project-category">Web development</p>

        </a>
      </li>

      <li class="project-item  active" data-filter-item data-category="web development">
        <a href="#">

          <figure class="project-img">
            <div class="project-item-icon-box">
              <ion-icon name="eye-outline"></ion-icon>
            </div>

            <img src="wp-content/themes/mazikin/img/project-2.png" alt="orizon" loading="lazy">
          </figure>

          <h3 class="project-title">Orizon</h3>

          <p class="project-category">Web development</p>

        </a>
      </li>

      <li class="project-item  active" data-filter-item data-category="web design">
        <a href="#">

          <figure class="project-img">
            <div class="project-item-icon-box">
              <ion-icon name="eye-outline"></ion-icon>
            </div>

            <img src="wp-content/themes/mazikin/img/project-3.jpg" alt="fundo" loading="lazy">
          </figure>

          <h3 class="project-title">Fundo</h3>

          <p class="project-category">Web design</p>

        </a>
      </li>

      <li class="project-item  active" data-filter-item data-category="applications">
        <a href="#">

          <figure class="project-img">
            <div class="project-item-icon-box">
              <ion-icon name="eye-outline"></ion-icon>
            </div>

            <img src="wp-content/themes/mazikin/img/project-4.png" alt="brawlhalla" loading="lazy">
          </figure>

          <h3 class="project-title">Brawlhalla</h3>

          <p class="project-category">Applications</p>

        </a>
      </li>

      <li class="project-item  active" data-filter-item data-category="web design">
        <a href="#">

          <figure class="project-img">
            <div class="project-item-icon-box">
              <ion-icon name="eye-outline"></ion-icon>
            </div>

            <img src="wp-content/themes/mazikin/img/project-5.png" alt="dsm." loading="lazy">
          </figure>

          <h3 class="project-title">DSM.</h3>

          <p class="project-category">Web design</p>

        </a>
      </li>

      <li class="project-item  active" data-filter-item data-category="web design">
        <a href="#">

          <figure class="project-img">
            <div class="project-item-icon-box">
              <ion-icon name="eye-outline"></ion-icon>
            </div>

            <img src="wp-content/themes/mazikin/img/project-6.png" alt="metaspark" loading="lazy">
          </figure>

          <h3 class="project-title">MetaSpark</h3>

          <p class="project-category">Web design</p>

        </a>
      </li>

      <li class="project-item  active" data-filter-item data-category="web development">
        <a href="#">

          <figure class="project-img">
            <div class="project-item-icon-box">
              <ion-icon name="eye-outline"></ion-icon>
            </div>

            <img src="wp-content/themes/mazikin/img/project-7.png" alt="summary" loading="lazy">
          </figure>

          <h3 class="project-title">Summary</h3>

          <p class="project-category">Web development</p>

        </a>
      </li>

      <li class="project-item  active" data-filter-item data-category="applications">
        <a href="#">

          <figure class="project-img">
            <div class="project-item-icon-box">
              <ion-icon name="eye-outline"></ion-icon>
            </div>

            <img src="wp-content/themes/mazikin/img/project-8.jpg" alt="task manager" loading="lazy">
          </figure>

          <h3 class="project-title">Task Manager</h3>

          <p class="project-category">Applications</p>

        </a>
      </li>

      <li class="project-item  active" data-filter-item data-category="web development">
        <a href="#">

          <figure class="project-img">
            <div class="project-item-icon-box">
              <ion-icon name="eye-outline"></ion-icon>
            </div>

            <img src="wp-content/themes/mazikin/img/project-9.png" alt="arrival" loading="lazy">
          </figure>

          <h3 class="project-title">Arrival</h3>

          <p class="project-category">Web development</p>

        </a>
      </li>

    </ul>

  </section>

</article>
<!-- /.portfolio -->
<!-- PORTFOLIO -->

<!-- CONTACT -->
<article class="contact" data-page="контакты">
  <header>
    <h2 class="h2 article-title">Обратная связь</h2>
  </header>
  <section class="mapbox" data-mapbox>
    <figure>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19364.40345794075!2d41.42924483074214!3d52.650034800246246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x413915599e91b755%3A0xef4f8dc2ff401f58!2z0KHRgtGA0L7QuNGC0LXQu9GMLCDQotCw0LzQsdC-0LLRgdC60LDRjyDQvtCx0LsuLCDQoNC-0YHRgdC40Y8!5e0!3m2!1sru!2snl!4v1742291984623!5m2!1sru!2snl" width="600" height="450" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </figure>
  </section>
  <!-- /.mapbox -->
  <section class="contact-form">
    <h3 class="h3 form-title">Форма обратной связи</h3>
    <!-- /.h3 form-title -->
    <form action="#" class="form" data-form>
      <div class="input-wrapper">
        <input type="text" name="fullname" class="form-input" placeholder="Полное имя" required data-form-input>
        <input type="email" name="email" class="form-input" placeholder="Укажите Email" required data-form-input>
      </div>
      <!-- /.input-wrapper -->
      <textarea name="message" class="form-input" placeholder="Напишите сообщение" required data-form-input></textarea>
      <button class="form-btn" type="submit" disabled data-form-btn>
        <ion-icon name="paper-plane"></ion-icon>
        <span>Отправить</span>
      </button>
    </form>
  </section>
  <!-- /.contact-form -->
</article>
<!-- /.contact -->
<!-- CONTACT -->

<?php
get_footer();
