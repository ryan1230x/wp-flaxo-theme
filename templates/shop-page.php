<?php
/**
 * Template Name: Shop Page
 */
get_header();
?>

<main id="rw-shop-page">
  <!-- content start -->
  <section class="product-list">
    <div class="container">
      <?php
      the_content();
      ?>
    </div>
  </section>
  <!-- content end -->
</main>

<?php
get_footer();
?>