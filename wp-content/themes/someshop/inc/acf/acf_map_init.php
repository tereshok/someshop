<?php
function someshop_acf_init( $api ){
	$api['key'] = get_field('map_api_key');
	return $api;
}
add_filter('acf/fields/google_map/api', 'someshop_acf_init');
