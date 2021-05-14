<?php
function someshop_acf_init( $api ){
	$api['key'] = get_field('map_api_key');
	return $api;
}
add_filter('acf/fields/google_map/api', 'someshop_acf_init');

add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_script( 'google-maps-key', 'https://maps.googleapis.com/maps/api/js?key=' . get_field( 'map_api_key'), [], null, true );
});
