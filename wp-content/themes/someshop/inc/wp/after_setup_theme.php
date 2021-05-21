<?php

function theme_setup(){
  add_theme_support('post-thumbnails');
  add_theme_support('title-tag');
  add_theme_support( 'html5', ['search-form', 'gallery'] );

  register_nav_menu('header', 'Primary menu');
  register_nav_menu('top_menu', 'Language switcher');
}

add_action('after_setup_theme', 'theme_setup');

add_action('after_setup_theme', function (){
  require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
});
