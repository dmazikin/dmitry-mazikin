<?php

/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mazikin
 */

if (!is_active_sidebar('sidebar-1')) {
	return;
}
?>

<!-- SIDEBAR -->
<aside class="sidebar" data-sidebar>
	<div class="sidebar-info">
		<figure class="avatar-box">
			<img src="/wp-content/themes//mazikin/icons/my-avatar.png" alt="Dmitry Mazikin" width="88">
		</figure>
		<div class="info-content">
			<h1 class="name" title="Dmitry Mazikin">Dmitry Mazikin</h1>
			<p class="title">Web-developer</p>
		</div>
		<!-- /.info-content -->
		<button class="info_more-btn" data-sidebar-btn>
			<span>Show Contacts</span>
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
					<a href="mailto:mazikindima@mail.ru" class="contact-link">mazikindima@mail.ru</a>
				</div>
			</li>
			<li class="contact-item">
				<div class="icon-box">
					<ion-icon name="phone-portrait-outline"></ion-icon>
				</div>
				<div class="contact-info">
					<p class="contact-title">Phone</p>
					<a href="tel:89537078683" class="contact-link">8-953-707-86-83</a>
				</div>
			</li>
			<li class="contact-item">
				<div class="icon-box">
					<ion-icon name="calendar-outline"></ion-icon>
				</div>
				<div class="contact-info">
					<p class="contact-title">Birthday</p>
					<time datetime="1993-06-09">June 9, 1993</time>
				</div>
			</li>
			<li class="contact-item">
				<div class="icon-box">
					<ion-icon name="location-outline"></ion-icon>
				</div>
				<div class="contact-info">
					<p class="contact-title">Location</p>
					<address>Tambov,Russia</address>
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