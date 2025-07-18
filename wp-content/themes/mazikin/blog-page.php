<?php
/*
Template Name: Блог
*/
get_header();
?>
<!-- BLOG -->
<article class="blog" data-page="блог">
  <header>
    <h2 class="h2 title">Блог</h2>
  </header>
  <section class="blog-posts">
    <?php
    global $post;

    $myposts = get_posts([
      'post_type' => 'post',
      'posts_per_page' => '-1',
      'category' => '-4',
    ]);
    ?>
    <ul class="blog-posts-list">
      <?
      foreach ($myposts as $post) {
        setup_postdata($post);
      ?>
        <li class="blog-post-item">
          <a href="<?php the_permalink(); ?>">
            <figure class="blog-banner-box">
              <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="Design conferences in 2022" loading="lazy">
            </figure>
            <!-- /.blog-banner-box -->
            <div class="blog-content">
              <div class="blog-meta">
                <? foreach (get_the_category() as $category); ?>
                <p class="blog-category"><? echo $category->name ?></p>
                </p>
                <span class="dot"></span>
                <time datetime="2022-02-23"><?php echo get_the_date() ?></time>
              </div>
              <!-- /.blog-meta -->
              <h3 class="h3 blog-item-title"><?php the_title(); ?></h3>
              <!-- /.h3 blog-item-title -->
              <p class="blog-text"><?php echo get_the_excerpt() ?></p>
              <!-- /.blog-text -->
            </div>
            <!-- /.blog-content -->
          </a>
        </li>
        <!-- /.blog-posts-item -->
        <!-- /.blog-posts-item -->
      <?php
      }
      wp_reset_postdata();
      ?>
    </ul>
    <!-- /.blog-posts-list -->

  </section>
  <!-- /.blog-posts -->
</article>
<!-- /.blog -->
<!-- BLOG -->
<?php
get_footer();
?>