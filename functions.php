<?php 
function mon_theme_scripts() {
    // Ajout du style.css
    wp_enqueue_style( 'mon-theme-style', get_template_directory_uri() . '/style/style.css', array(), '1.0.0', 'all' );
    // Ajout du script.js
    wp_enqueue_script( 'mon-theme-script', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0.0', true );
  }

  add_action( 'wp_enqueue_scripts', 'mon_theme_scripts' );

  add_theme_support('post-thumbnails');
  register_nav_menus([
    'primary_nav' => __('Menu principal'),
  ]);

  if( function_exists('acf_add_options_page') ) {
    acf_add_options_page();
  }

  add_filter('show_admin_bar', '__return_false');

?>