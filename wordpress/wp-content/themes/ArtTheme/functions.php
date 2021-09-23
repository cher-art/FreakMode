<?php

add_filter('show_admin_bar', '__return_true'); // включить
add_action('wp_enqueue_scripts','style_theme');
// add_action('wp_footer','script_theme');
add_action( 'after_setup_theme', 'mainMenu' );
// add_action( 'widgets_init', 'wpb_init_widgets' );



  function mainMenu() {
    register_nav_menu( 'top', 'Новое меню' );
  }



function style_theme(){
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('style-index', get_stylesheet_uri() . '/index.css');
    wp_enqueue_style('style-header', get_stylesheet_uri() . '/header.css');
    wp_enqueue_style('style-burger', get_stylesheet_uri() . '/burger.css');
    wp_enqueue_style('style-footer', get_stylesheet_uri() . '/footer.css');
    wp_enqueue_style('style-lising', get_stylesheet_uri() . '/listing.css');
}



