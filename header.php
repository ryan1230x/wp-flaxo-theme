<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Flaxo</title>
  <?php
    wp_head();
  ?>
</head>
<body
  id="smooth-scrollbar"
  <?php body_class(); ?>
>
<header>
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid border-bottom pb-3">
      <a class="navbar-hamburger" data-bs-toggle="collapse" href="#navbarSupportedContent" role="button"aria-expanded="false" aria-controls="navbarSupportedContent">
        <div class="line"></div>
        <div class="line"></div>
      </a>
      <a class="navbar-brand" href=<?php bloginfo("url"); ?>>Flaxo.</a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <?php
        wp_nav_menu(array(
          "theme_location" => "primary-menu",
          "menu_class" => "navbar-nav me-auto mb-2 mb-lg-0 primary-menu"
        ))
        ?>
      </div>
  </div><!-- end of container -->
</nav>
</header>
