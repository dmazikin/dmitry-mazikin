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
<article class="about" data-page="about">
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
<article class="portfolio" data-page="portfolio">

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

<!-- BLOG -->
<article class="blog active" data-page="blog">
  <header>
    <h2 class="h2 article-title">Блог</h2>
  </header>
  <section class="blog-posts">
    <ul class="blog-posts-list">
      <li class="blog-posts-item">
        <a href="#">
          <figure class="blog-banner-box">
            <img src="wp-content/themes/mazikin/img/blog-1.jpg" alt="Design conferences in 2022" loading="lazy">
          </figure>
          <!-- /.blog-banner-box -->
          <div class="blog-meta">
            <p class="blog-category">Design </p>
            <span class="dot"></span>
            <time datetime="2022-02-23">Fab 23, 2022</time>
          </div>
          <!-- /.blog-meta -->
          <h3 class="h3 blog-item-title">Design conferences in 2022</h3>
          <!-- /.h3 blog-item-title -->
          <p class="blog-text">Veritatis et quasi architecto beatae vitae dicta sunt, explicabo.</p>
          <!-- /.blog-text -->
        </a>
      </li>
      <!-- /.blog-posts-item -->
      <li class="blog-posts-item">
        <a href="#">
          <figure class="blog-banner-box">
            <img src="wp-content/themes/mazikin/img/blog-2.jpg" alt="Best fonts every designer" loading="lazy">
          </figure>
          <!-- /.blog-banner-box -->
          <div class="blog-meta">
            <p class="blog-category">Design </p>
            <span class="dot"></span>
            <time datetime="2022-02-23">Fab 23, 2022</time>
          </div>
          <!-- /.blog-meta -->
          <h3 class="h3 blog-item-title">Best fonts every designer</h3>
          <!-- /.h3 blog-item-title -->
          <p class="blog-text">Sed ut perspiciatis, nam libero tempore, cum soluta nobis est eligendi.</p>
          <!-- /.blog-text -->
        </a>
      </li>
      <!-- /.blog-posts-item -->
      <li class="blog-posts-item">
        <a href="#">
          <figure class="blog-banner-box">
            <img src="wp-content/themes/mazikin/img/blog-3.jpg" alt="Design digest #80" loading="lazy">
          </figure>
          <!-- /.blog-banner-box -->
          <div class="blog-meta">
            <p class="blog-category">Design </p>
            <span class="dot"></span>
            <time datetime="2022-02-23">Fab 23, 2022</time>
          </div>
          <!-- /.blog-meta -->
          <h3 class="h3 blog-item-title">Design digest #80</h3>
          <!-- /.h3 blog-item-title -->
          <p class="blog-text">Excepteur sint occaecat cupidatat no proident, quis nostrum exercitationem ullam corporis suscipit.</p>
          <!-- /.blog-text -->
        </a>
      </li>
      <!-- /.blog-posts-item -->
      <li class="blog-posts-item">
        <a href="#">
          <figure class="blog-banner-box">
            <img src="wp-content/themes/mazikin/img/blog-4.jpg" alt=" UI interactions of the week Design" loading="lazy">
          </figure>
          <!-- /.blog-banner-box -->
          <div class="blog-meta">
            <p class="blog-category">Design </p>
            <span class="dot"></span>
            <time datetime="2022-02-23">Fab 23, 2022</time>
          </div>
          <!-- /.blog-meta -->
          <h3 class="h3 blog-item-title">UI interactions of the week</h3>
          <!-- /.h3 blog-item-title -->
          <p class="blog-text">Enim ad minim veniam, consectetur adipiscing elit, quis nostrud exercitation ullamco laboris nisi.</p>
          <!-- /.blog-text -->
        </a>
      </li>
      <!-- /.blog-posts-item -->
      <li class="blog-posts-item">
        <a href="#">
          <figure class="blog-banner-box">
            <img src="wp-content/themes/mazikin/img/blog-5.jpg" alt=" The forgotten art of spacing" loading="lazy">
          </figure>
          <!-- /.blog-banner-box -->
          <div class="blog-meta">
            <p class="blog-category">Design </p>
            <span class="dot"></span>
            <time datetime="2022-02-23">Fab 23, 2022</time>
          </div>
          <!-- /.blog-meta -->
          <h3 class="h3 blog-item-title">The Forgotten Art Of Spacing</h3>
          <!-- /.h3 blog-item-title -->
          <p class="blog-text">Maxime placeat, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
          <!-- /.blog-text -->
        </a>
      </li>
      <!-- /.blog-posts-item -->
      <li class="blog-posts-item">
        <a href="#">
          <figure class="blog-banner-box">
            <img src="wp-content/themes/mazikin/img/blog-6.jpg" alt=" Design digest #79" loading="lazy">
          </figure>
          <!-- /.blog-banner-box -->
          <div class="blog-meta">
            <p class="blog-category">Design </p>
            <span class="dot"></span>
            <time datetime="2022-02-23">Fab 23, 2022</time>
          </div>
          <!-- /.blog-meta -->
          <h3 class="h3 blog-item-title">Design Digest #79</h3>
          <!-- /.h3 blog-item-title -->
          <p class="blog-text">Optio cumque nihil impedit uo minus quod maxime placeat, velit esse cillum. </p>
          <!-- /.blog-text -->
        </a>
      </li>
      <!-- /.blog-posts-item -->
    </ul>
    <!-- /.blog-posts-list -->
  </section>
  <!-- /.blog-posts -->
</article>
<!-- /.blog -->
<!-- BLOG -->

<?php
get_footer();
