<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="header_home">
  <div class="container">
    <nav class="navbar navbar-expand-md navbar-light" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
            <span class="navbar-toggler-icon"></span>
        </button>
        <?php
        wp_nav_menu([
            'theme_location'    => 'header',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ]);
        ?>    
    </nav>
    <div class="row hero_block">
        <div class="col-lg-4 col-md-6">
            <h1>Wood & Cloth Sofa</h1>
            <p>Incididunt ut labore et dolore magna aliqua quis ipsum suspendisse ultrices gravida. Risus commodo viverra</p>
            <button>Buy now</button>
        </div>
        <div class="col-lg-8 col-md-6">
        <img src="/wp-content/uploads/2021/04/banner_img.png" alt="#" style="width:100%">
        </div>
    </div>    
  </div>
</header>