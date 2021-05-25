<?php
get_header();
?>

<main id="rw-woocommerce-page">
  <div class="section-padding">
    <!-- product list start -->
    <section class="product-list">
      <div class="container">
      <?php 
        woocommerce_content();
      ?>
      </div>
    </section>
    <!-- product-list end -->
  </div>
</main>

<?php
get_footer();
?>