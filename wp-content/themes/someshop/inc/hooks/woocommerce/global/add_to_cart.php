<?php


add_filter( 'woocommerce_add_to_cart_fragments', 'filter_function_name_9238' );
function filter_function_name_9238( $array ){
  ob_start();
  woocommerce_mini_cart(); 
  $mini_cart = ob_get_contents();
  ob_end_clean();

	$array['.cart-body-main'] = $mini_cart;

	return $array;
}