<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
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
      <div class="navbar-hamburger" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
        <div class="line"></div>
        <div class="line"></div>
      </div>
      <a class="navbar-brand" href="/">Flaxo.</a>
      <div class="header-cta">
        <button type="button">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
          </svg>
        </button>
        <button type="button">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-fill" viewBox="0 0 16 16">
            <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5z"/>
          </svg>
        </button>
        <button type="button">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
          </svg>
        </button>
      </div>
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
