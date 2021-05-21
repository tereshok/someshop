<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="header_home">
  <div class="container">
	  <div class="d-flex menu-cont">
		  <div class="header-logo">
			  <?php if( get_field('logo', 'option') ): ?>
				  <a href="/">
					  <img src="<?php the_field('logo', 'option'); ?>" />
				  </a>
			  <?php endif; ?>
		  </div>
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
		  <?php
		  wp_nav_menu([
				  'theme_location'    => 'top_menu',
				  'menu_class'		  => '',
		  ]);
		  ?>
	  </div>
    <div class="row hero_block">
        <div class="col-lg-4 col-md-12 col-sm-12">
            <h1><?php _e('Wood & Cloth Sofa', 'someshop'); ?></h1>
            <p><?php _e('Incididunt ut labore et dolore magna aliqua quis ipsum suspendisse ultrices gravida. Risus commodo viverra', 'someshop'); ?></p>
            <button><?php _e('Buy now', 'someshop'); ?></button>
        </div>
        <div class="col-lg-8 col-md-12 col-sm-12">
        <img src="/wp-content/uploads/2021/04/banner_img.png" alt="#" style="width:100%">
        </div>
    </div>
  </div>
</header>
