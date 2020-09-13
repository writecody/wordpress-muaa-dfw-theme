<?php 

  function mu_load_scripts() {
    wp_enqueue_style('css-output', get_template_directory_uri().'/style.css');
    wp_enqueue_style('google-font-frank-ruhl-libre', '//fonts.googleapis.com/css2?family=Frank+Ruhl+Libre:wght@700');
    wp_enqueue_style('google-font-source-sans-pro', '//fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600&display=swap"');
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