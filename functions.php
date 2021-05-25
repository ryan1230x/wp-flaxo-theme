<?php

/**
 * load css
 */
function load_stylesheets(){
  wp_register_style("rw_stylesheet", get_template_directory_uri() . "/dist/main.css", "", 1);
  wp_enqueue_style("rw_stylesheet");
}
add_action("wp_enqueue_scripts", "load_stylesheets");

/**
 * load js
 */
function load_scripts(){
  wp_register_script("rw_javacript", get_template_directory_uri() . "/dist/main.js", "", 1, true);
  wp_enqueue_script("rw_javacript");
}
add_action("wp_enqueue_scripts", "load_scripts");


  
/********************************
 * add theme support
 */ 
function register_my_menus(){
  register_nav_menus(array(
    "primary-menu" => __("Primary Menu"),
    "footer-menu" => __("Footer Menu")
  ));
}
add_action("init", "register_my_menus");


function woocommerce_support() {
  add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'woocommerce_support' );