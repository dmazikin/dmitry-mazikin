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
          <h4 class="h4 testimonials-item-title" data-testimonials-title>Daniel</h4>
          <div class="testimonials-text" data-testimonials-text>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, aliquid corrupti! Excepturi libero eius iste tempora accusamus aut, consequuntur a nemo facere reprehenderit dignissimos error, ab sunt modi veritatis doloribus.
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, aliquid corrupti! Excepturi libero eius iste tempora accusamus aut, consequuntur a nemo facere reprehenderit dignissimos error, ab sunt modi veritatis doloribus.
            </p>
          </div>
          <!-- /.testimonials-text -->
        </div>
        <!-- /.content-card -->
      </li>
      <li class="testimonials-item">
        <div class="content-card" data-testimonials-item>
          <figure class="testimonials-avatar-box">
            <img src="wp-content/themes/mazikin/img/avatar-2.png" alt="" width="60" data-testimonials-avatar>
          </figure>
          <!-- /.testtimonials-avatar-box -->
          <h4 class="h4 testimonials-item-title" data-testimonials-title>Daniel</h4>
          <div class="testimonials-text" data-testimonials-text>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, aliquid corrupti! Excepturi libero eius iste tempora accusamus aut, consequuntur a nemo facere reprehenderit dignissimos error, ab sunt modi veritatis doloribus.
            </p>
          </div>
          <!-- /.testimonials-text -->
        </div>
        <!-- /.content-card -->
      </li>
      <li class="testimonials-item">
        <div class="content-card" data-testimonials-item>
          <figure class="testimonials-avatar-box">
            <img src="wp-content/themes/mazikin/img/avatar-3.png" alt="" width="60" data-testimonials-avatar>
          </figure>
          <!-- /.testtimonials-avatar-box -->
          <h4 class="h4 testimonials-item-title" data-testimonials-title>Daniel</h4>
          <div class="testimonials-text" data-testimonials-text>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, aliquid corrupti! Excepturi libero eius iste tempora accusamus aut, consequuntur a nemo facere reprehenderit dignissimos error, ab sunt modi veritatis doloribus.
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
          <h4 class="h4 testimonials-item-title" data-testimonials-title>Daniel</h4>
          <div class="testimonials-text" data-testimonials-text>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, aliquid corrupti! Excepturi libero eius iste tempora accusamus aut, consequuntur a nemo facere reprehenderit dignissimos error, ab sunt modi veritatis doloribus.
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
</article>
<?php
get_footer();
