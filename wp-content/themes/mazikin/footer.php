<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mazikin
 */

?>
</div>
<!-- /.main-content -->
</main>
<!-- testimonals-modal -->
<div class="modal-container" data-modal-container>
  <div class="overlay" data-overlay></div>
  <!-- /.overlay -->
  <section class="testimonials-modal">
    <button class="modal-close-btn" data-modal-close-btn>
      <ion-icon name="close-outline"></ion-icon>
    </button>
    <div class="modal-img-wrapper">
      <figure class="modal-avatar-box">
        <img src="wp-content/themes/mazikin/img/avatar-1.png" alt="" width="80" data-modal-img>
      </figure>
      <img src="/wp-content/themes/mazikin/img/icon-quote.svg" alt="">
    </div>
    <!-- /.modal-img-wrapper -->
    <div class="modal-content">
      <h3 class="h3 modal-title" data-modal-title>denis</h3>
      <time datetime="2021-06-14">14 june, 2021</time>
      <div data-modal-text>
        <p>
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque quam ipsa, magni, harum quos nostrum adipisci praesentium quisquam aliquam ea, eum vero soluta molestias cupiditate? Distinctio vel tempore molestiae necessitatibus.
          Animi doloremque debitis pariatur velit porro dolor vel error temporibus mollitia facilis non ratione laboriosam odio iste aut accusamus rerum, asperiores corporis veniam perferendis et, quibusdam sit autem a! Ipsa.
          Necessitatibus eos aperiam dolorem similique nisi excepturi tempore, ratione fugit modi cumque ut, voluptas maxime veritatis! Eligendi architecto ea ex corporis delectus nostrum minus dolor, fugiat, quos officiis error illum.
        </p>
      </div>
    </div>
    <!-- /.modal-content -->

  </section>
  <!-- /.testimonials-modal -->
</div>
<!-- /.modal-container -->
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<?php wp_footer(); ?>
</body>

</html>