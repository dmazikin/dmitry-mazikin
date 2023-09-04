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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/swiper-bundle.min.css">
  <title><?php bloginfo('description'); ?></title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div class="head-section">
    <header class="header">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <a class="navbar-brand" href="#">
            <div class="b-logo">
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
                <span class="b-logo-web_w">w</span>
                <span class="b-logo-web_e">e</span>
                <span class="b-logo-web_b">b - </span>
                <span class="b-logo-web_d">d</span>
                <span class="b-logo-web_e">e</span>
                <span class="b-logo-web_v">v</span>
                <span class="b-logo-web_e">e</span>
                <span class="b-logo-web_l">l</span>
                <span class="b-logo-web_o">o</span>
                <span class="b-logo-web_p">p</span>
                <span class="b-logo-web_e">e</span>
                <span class="b-logo-web_r">r</span>
              </div>
            </div>
          </a>
          <!-- /.nav-brand -->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Главная</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Обо мне</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Портфолио</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Прайс-лист</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-link__beta" href="#">Блог<div class="beta">beta</div></a>
              </li>
            </ul>
            <button class="btn">Напиши мне</button>
          </div>
        </div>
      </nav>
    </header>
    <!-- /.header -->
  </div>