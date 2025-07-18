<?php
/*
Template Name: Портфолио
*/
get_header();

?>

<article class="portfolio active" data-page="портфолио">

  <header>
    <h2 class="h2 title">Портфолио</h2>
  </header>

  <section class="projects">

    <!--     <ul class="filter-list">

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

    </div> -->
    <?php
    global $post;

    $portfolio = get_posts([
      'post_type' => 'post',
      'posts_per_page' => '-1',
      'category_name' => 'portfolio',
    ]);
    ?>
    <ul class="project-list">
      <?
      foreach ($portfolio as $post) {
        setup_postdata($post);
      ?>
        <li class="project-item  active" data-filter-item data-category="web development">
          <a href="#" class="portfolio-link">

            <figure class="project-img">
              <div class="project-item-icon-box">
                <ion-icon name="eye-outline"></ion-icon>
              </div>

              <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="finance" loading="lazy">
            </figure>
            <h3 class="project-title"><?php the_title(); ?></h3>
            <p class="project-category"><?php echo get_field("category_portfolio") ?></p>
          </a>
        </li>
      <?php
      }
      wp_reset_postdata();
      ?>
    </ul>

  </section>

</article>
<!-- /.portfolio -->
<!-- PORTFOLIO -->
<?php
get_footer();
?>