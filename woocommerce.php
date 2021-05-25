<?php
get_header();
?>

<main id="rw-woocommerce-page">
  <!-- product list start -->
  <section class="product-list">
    <div class="container">
    <?php 
      woocommerce_content();
    ?>
    </div>
  </section>
  <!-- product-list end -->
</main>

<?php
get_footer();
?>