<?php

if( function_exists('acf_options_page') ) {
  
  $option_page = acf_add_options_page([
    'page_title'    => __('Theme Settings'),
    'menu_title'    => __('Theme Settings'),
    'menu_slug'     => 'theme-settings',
    'capability'    => 'edit_posts',
    'icon_url'      => 'dashicons-schedule',
    'redirect'      => false
  ]);

  acf_add_options_sub_page([
		'page_title' 	=> 'Woocommerce tabs',
		'menu_title'	=> 'WooTabs',
		'parent_slug'	=> 'theme-settings',
  ]);

  add_action('acf/init', 'acf_options_page');
}
