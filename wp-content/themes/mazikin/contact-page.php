<?php
/*
Template Name: Блог
*/
get_header();
?>

<!-- CONTACT -->
<article class="contact" data-page="контакты">
  <header>
    <h2 class="h2 article-title">Обратная связь</h2>
  </header>
  <section class="mapbox" data-mapbox>
    <figure>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19364.40345794075!2d41.42924483074214!3d52.650034800246246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x413915599e91b755%3A0xef4f8dc2ff401f58!2z0KHRgtGA0L7QuNGC0LXQu9GMLCDQotCw0LzQsdC-0LLRgdC60LDRjyDQvtCx0LsuLCDQoNC-0YHRgdC40Y8!5e0!3m2!1sru!2snl!4v1742291984623!5m2!1sru!2snl" width="600" height="450" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </figure>
  </section>
  <!-- /.mapbox -->
  <section class="contact-form">
    <h3 class="h3 form-title">Форма обратной связи</h3>
    <!-- /.h3 form-title -->
    <form action="#" class="form" data-form>
      <div class="input-wrapper">
        <input type="text" name="fullname" class="form-input" placeholder="Полное имя" required data-form-input>
        <input type="email" name="email" class="form-input" placeholder="Укажите Email" required data-form-input>
      </div>
      <!-- /.input-wrapper -->
      <textarea name="message" class="form-input" placeholder="Напишите сообщение" required data-form-input></textarea>
      <button class="form-btn" type="submit" disabled data-form-btn>
        <ion-icon name="paper-plane"></ion-icon>
        <span>Отправить</span>
      </button>
    </form>
  </section>
  <!-- /.contact-form -->
</article>
<!-- /.contact -->
<!-- CONTACT -->

<?php get_footer(); ?>