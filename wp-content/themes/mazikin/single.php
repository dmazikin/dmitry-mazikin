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

get_header(); ?>
<article class="article-blog active ">
  <?php
  // Start the loop.
  while (have_posts()) : the_post();
    /* get_template_part('content', get_post_format()); */
  ?>
    <header>
      <h2 class="h2 article-title"><?php the_title() ?></h2>
    </header>
    <section class="blog-text">
      <?php the_content(); ?>
    </section>
    <!-- <div class="nav-title-recomend">
      <header>
        <h4 class="h2 article-title">Похожие записи:</h4>
      </header>
    </div> -->
    <?
    /* the_post_navigation(array(
      'next_text' => '<span class="meta-nav" aria-hidden="true">' . __('', 'twentyfifteen') . '</span> ' .
        '<span class="screen-reader-text">' . __('Next post:', 'twentyfifteen') . '</span> ' .
        '<span class="post-title">%title</span>',
      'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __('', 'twentyfifteen') . '</span> ' .
        '<span class="screen-reader-text">' . __('Previous post:', 'twentyfifteen') . '</span> ' .
        '<span class="post-title">%title</span>',
    )); */
    ?>
  <? endwhile; ?>
</article>
<?php get_footer(); ?>