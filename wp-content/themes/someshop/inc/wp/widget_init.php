<?php

function widgets(){
  register_sidebar([
    'name'          => 'Main sidebar',
    'id'            => 'main-sidebar',
    'description'   => 'Show main sidebar',
    'before_widget' => '<div class="widget %2$s">',
    'after_widget'  => "</div>\n",
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>'
  ]);

  register_sidebar([
    'name'          => 'First footer widget',
    'id'            => 'widget-footer-first',
    'description'   => 'Show first footer widget',
  ]);

  register_sidebar([
    'name'          => 'Second footer widget',
    'id'            => 'widget-footer-second',
    'description'   => 'Show second footer widget',
  ]);

  register_sidebar([
    'name'          => 'Third footer widget',
    'id'            => 'widget-footer-third',
    'description'   => 'Show third footer widget',
  ]);

  register_sidebar([
    'name'          => 'Fourth footer widget',
    'id'            => 'widget-footer-fourth',
    'description'   => 'Show fourth footer widget',
  ]);

  register_sidebar([
    'name'          => 'Big footer widget',
    'id'            => 'widget-footer-big',
    'description'   => 'Show big footer widget',
  ]);
}
add_action('widgets_init', 'widgets');