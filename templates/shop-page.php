<?php
/**
 * Template Name: Shop Page
 */
get_header();
?>

<main id="rw-shop-page">
  <div class="section-padding">
    <!-- content start -->
    <section class="product-list">
      <div class="container">
        <?php
        the_content();
        ?>
      </div>
    </section>
    <!-- content end -->
  </div>
</main>

<?php
get_footer();
?>