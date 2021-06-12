<?php

remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);

add_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 29);
add_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 20);

add_action('woocommerce_single_product_summary', 'stock_html_print', 19);
function stock_html_print(){
	global $product;
	wc_get_stock_html( $product );
}

add_filter('woocommerce_single_product_carousel_options', 'ud_update_woo_flexslider_options');
function ud_update_woo_flexslider_options($options) {

	$options['directionNav'] = false;
	$options['animation'] = "slide";
	$options['animationLoop'] = true;
	$options['slideshow'] = false;
	$options['controlNav'] = true;
	$options['controlNav'] = "thumbnails";
	$options['mousewheel'] = true;

	return $options;
}
