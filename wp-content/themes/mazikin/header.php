<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mazikin
 */

?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('description'); ?></title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header class="header">
    <div class="container">
      <div class="row">
        <div class="b-logo col-lg-2 col-md-3">
          <span class="b-logo_d">
            d.
          </span>
          <span class="b-logo_m">
            m
          </span>
          <span class="b-logo_4">
            4
          </span>
          <span class="b-logo_z">
            z
          </span>
          <span class="b-logo_i">
            i
          </span>
          <span class="b-logo_k">
            k
          </span>
          <span class="b-logo_i">
            i
          </span>
          <span class="b-logo_n">
            n
          </span>
          <div class="b-logo-web">
            web-developer
          </div>

        </div>
      </div>
    </div>
  </header>