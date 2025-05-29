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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
  <link rel="shortcut icon" href="/wp-content/themes//mazikin/icons/favicon/logo.ico">
  <title><?php bloginfo('description'); ?></title>
  <?php wp_head(); ?>
  <meta name="google-site-verification" content="-squdvJT6qRpKl4Z9YhbqIqXN7h002v1OJMzRDe3Cwg" />
</head>

<body <?php body_class(); ?>>
  <!-- MAIN -->
  <main class="main">
    <!-- SIDEBAR -->
    <aside class="sidebar" data-sidebar>
      <div class="sidebar-info">
        <figure class="avatar-box">
          <img src="/wp-content/themes//mazikin/icons/my-avatar.png" alt="Dmitry Mazikin" width="88">
        </figure>
        <div class="info-content">
          <h1 class="name" title="Dmitry Mazikin">Дмитрий Мазикин</h1>
          <p class="title">Web-developer</p>
        </div>
        <!-- /.info-content -->
        <button class="info_more-btn" data-sidebar-btn>
          <span>Развернуть</span>
          <ion-icon name="chevron-down"></ion-icon>
        </button>
        <!-- /.info_more-btn -->
      </div>
      <div class="sidebar-info_more">
        <div class="separator"></div>
        <ul class="contacts-list">
          <li class="contact-item">
            <div class="icon-box">
              <ion-icon name="mail-outline"></ion-icon>
            </div>
            <div class="contact-info">
              <p class="contact-title">Email</p>
              <a href="mailto:mazikindima@mail.ru" class="contact-link">support@fl-dm.ru</a>
            </div>
          </li>
          <li class="contact-item">
            <div class="icon-box">
              <ion-icon name="phone-portrait-outline"></ion-icon>
            </div>
            <div class="contact-info">
              <p class="contact-title">Телефон</p>
              <a href="tel:89537078683" class="contact-link">8-953-707-86-83</a>
            </div>
          </li>
          <li class="contact-item">
            <div class="icon-box">
              <ion-icon name="calendar-outline"></ion-icon>
            </div>
            <div class="contact-info">
              <p class="contact-title">День рождение</p>
              <time datetime="1993-06-09">9 Июня, 1993</time>
            </div>
          </li>
          <li class="contact-item">
            <div class="icon-box">
              <ion-icon name="location-outline"></ion-icon>
            </div>
            <div class="contact-info">
              <p class="contact-title">Проживание</p>
              <address>Тамбов,Россия</address>
            </div>
          </li>
        </ul>
        <!-- /.contacts-list -->
        <div class="separator"></div>
        <ul class="social-list">
          <li class="social-item">
            <a href="" class="social-link">
              <ion-icon name="logo-vk"></ion-icon>
            </a>
          </li>
          <li class="social-item">
            <a href="" class="social-link">
              <ion-icon name="mail-unread-outline"></ion-icon>
            </a>
          </li>
          <li class="social-item">
            <a href="" class="social-link">
              <ion-icon name="logo-github"></ion-icon>
            </a>
          </li>
        </ul>
        <!-- /.social-list -->
      </div>
      <!-- /.sidebar-info_more -->
    </aside>
    <!-- SIDEBAR -->
    <div class="main-content">
      <!-- NAVBAR -->
      <nav class="navbar">
        <ul class="navbar-list">
          <li class="navbar-item">
            <button class="navbar-link active" data-nav-link="About">Обо мне</button>
          </li>
          <li class="navbar-item">
            <button class="navbar-link" data-nav-link="Portfolio">Портфолио</button>
          </li>
          <li class="navbar-item">
            <button class="navbar-link" data-nav-link="Blog">Блог</button>
          </li>
          <li class="navbar-item">
            <button class="navbar-link" data-nav-link="Contact">Контакты</button>
          </li>
        </ul>
        <!-- /.navbar-list -->
      </nav>
      <!-- /.navbar -->