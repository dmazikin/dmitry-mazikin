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
get_sidebar();

?>
<!-- ABOUT -->
<article class="about active" data-page="about">
  <header>
    <h2 class="h2 arcticle-title">Обо мне</h2>
  </header>

  <section class="about-text">
    <p>
      Lorem, ipsum dolor sit amet consectetur adipisicing elit. Explicabo laudantium eum, qui ex sapiente expedita repudiandae quibusdam soluta quas error sint voluptatibus at similique, aliquid ipsam nesciunt quae veritatis pariatur.
    </p>
    <p>
      Lorem, ipsum dolor sit amet consectetur adipisicing elit. Explicabo laudantium eum, qui ex sapiente expedita repudiandae quibusdam soluta quas error sint voluptatibus at similique, aliquid ipsam nesciunt quae veritatis pariatur.
    </p>
  </section>
  <!-- /.about-text -->
  <!-- SERVICE -->
  <section class="service">
    <h3 class="h3 service-title">Чем я занимаюсь ?</h3>
    <ul class="service-list">
      <li class="service-item">
        <div class="service-icon-box">
          <img src="wp-content/themes/mazikin/img/icon-design.svg" alt="" width="40">
        </div>
        <!-- /.service-icon-box -->
        <div class="service-content-box">
          <h4 class="h4 service-item-title">Web-desing</h4>
          <p class="service-item-text">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis ullam eaque culpa. Corporis ad nisi earum, mollitia repudiandae architecto fugit esse dicta illo officia ex repellat tempora saepe inventore reiciendis.
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
          <h4 class="h4 service-item-title">Web-developer</h4>
          <p class="service-item-text">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis ullam eaque culpa. Corporis ad nisi earum, mollitia repudiandae architecto fugit esse dicta illo officia ex repellat tempora saepe inventore reiciendis.
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
          <h4 class="h4 service-item-title">Mobile-app</h4>
          <p class="service-item-text">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis ullam eaque culpa. Corporis ad nisi earum, mollitia repudiandae architecto fugit esse dicta illo officia ex repellat tempora saepe inventore reiciendis.
          </p>
          <!-- /.service-item-text -->
        </div>
        <!-- /.service-content-box -->
      </li>
      <li class="service-item">
        <div class="service-icon-box">
          <img src="wp-content/themes/mazikin/img/icon-photo.svg" alt="" width="40">
        </div>
        <!-- /.service-icon-box -->
        <div class="service-content-box">
          <h4 class="h4 service-item-title">Photo</h4>
          <p class="service-item-text">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis ullam eaque culpa. Corporis ad nisi earum, mollitia repudiandae architecto fugit esse dicta illo officia ex repellat tempora saepe inventore reiciendis.
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
<?php
get_footer();
