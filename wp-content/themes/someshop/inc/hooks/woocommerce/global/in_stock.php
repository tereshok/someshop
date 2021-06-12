<?php
add_filter( 'woocommerce_get_stock_html', 'woo_get_stock_html', 10, 2 );
function woo_get_stock_html( $html, $product ){
  if($product->is_in_stock() == true) : ?>
    <span class="html_stock"><?php _e('Availibility:'); ?>
      <span class="html_stock_num"><?php echo $product->get_stock_quantity(); ?></span>
      <span class="html_stock_status"><?php _e(' in stock'); ?></span>
    </span>
  <?php endif;

	return $html;
}