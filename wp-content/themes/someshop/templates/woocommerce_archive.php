
<div class="container main_product">
  <div class="row">
    <div class="col-3">
      <?php get_sidebar('shop'); ?>
    </div>
    <div class="col-9">

      <?php do_action( 'woocommerce_archive_description' ); ?>

      <?php if ( woocommerce_product_loop() ) : ?>

      <?php do_action( 'woocommerce_before_shop_loop' ); ?>

      <?php woocommerce_product_loop_start(); ?>

      <?php if ( wc_get_loop_prop( 'total' ) ) : ?>
        <?php while ( have_posts() ) : ?>
          <?php the_post(); ?>
          <?php wc_get_template_part( 'content', 'product' ); ?>
        <?php endwhile; ?>
      <?php endif; ?>

      <?php woocommerce_product_loop_end(); ?>

      <?php do_action( 'woocommerce_after_shop_loop' ); ?>

      <?php
      else :
      do_action( 'woocommerce_no_products_found' );
      endif;
      ?>
    </div>
  </div>
</div>
