<footer>
  <div class="top-padding" style="padding-top: 50px;">
    <div class="custom-wrapper container-fluid">
      <div class="grid-parent">
        <div class="grid-child">
          <div class="navbar-brand">
            <a href="#">Flaxo.</a>
          </div>
          <div class="subscription">
            <p>Sign up to ours newsletter</p>
            <form action="#" method="post">
              <div class="form-group">
                <input placeholder="Your email" type="email" name="email" id="email" class="form-control form-control-lg" />
                <input type="submit" value="Sign up" class="btn rw-button">
              </div>
            </form>
          </div>
        </div>
        <div class="grid-child footer-links">
          <div class="links-heading">
            <h4>Links</h4>
          </div>
          <?php 
          wp_nav_menu(array(
            "theme_location" => "footer-menu",
            "menu_class" => "footer-links-list"
          ));
          ?>
        </div>
      </div><!-- end of grid -->
   </div>
  </div>
  <!-- Footer socket start -->
  <section class="bg-light">
    <div class="footer-socket">
      <p>
        Ryan William Harper 2021 &copy;
      </p>
    </div>
  </section>
  <!-- Footer socket end -->
 <!-- insert script tags  -->
<?php wp_footer() ?>
</footer>
 
</body>
</html>
