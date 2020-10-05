<?php 

  function mu_load_scripts() {
    wp_enqueue_style('css-output', get_template_directory_uri().'/output.css');
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css2?family=Archivo:wght@400;500;600;700&display=swap"');
  }
  add_action('wp_enqueue_scripts', 'mu_load_scripts');

  function mu_add_theme_support() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5');

    // do not display admin bar in browser window
    show_admin_bar(false);
  }
  add_action('init', 'mu_add_theme_support');
  
?>