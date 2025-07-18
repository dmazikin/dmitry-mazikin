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
    <h1 class="h2 title">Обо мне</h1>
  </header>

  <section class="about-text">
    <h3 class="h3 title-sub">🚀 Помогаю бизнесу эффективно работать!</h3>
    <p>
      Специалист разработки веб-интерфейсов и внедрение Bitrix24.Создаю функциональные сайты, настраиваю автоматизацию и повышать эффективность работы с помощью современных инструментов. Имею статус бизнес-партнера,помогаю настроить облачные и коробочные версии.
    </p>
    <h3 class="h3 title-sub">💡 Почему стоит обратиться ко мне?</h3>
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
</article>
<!-- ABOUT -->

<?php
get_footer();
