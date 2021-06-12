<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="header">
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
				<span class="prod-cart">
					<i class="fa fa-shopping-basket" aria-hidden="true">
						</i>
				</span>
					<div class="prod-cart-body hide">
						<span class="cart-body-close">
							<i class="fa fa-times" aria-hidden="true"></i>
						</span>
						<div class="cart-body-main">
							<?php 
								ob_start();
								woocommerce_mini_cart(); 
								$mini_cart = ob_get_contents();
								ob_end_clean();
								echo $mini_cart;
							?>
						</div>
					</div>
	  </div>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 header_title">
            <div><h1><?php echo wp_title("", true); ?></h1></div>
            <?php if(function_exists('yoast_breadcrumb'))
                echo yoast_breadcrumb('<div id="breadcrumbs">', '</div>', 'false');
            ?>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
        <img src="/wp-content/uploads/2021/04/designer-chair-png-4-Transparent-Images.png" alt="#" class="header_img">
        </div>
    </div>
  </div>
</header>
