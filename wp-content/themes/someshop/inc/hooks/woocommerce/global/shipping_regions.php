<?php

function countries_regions( $regions ){
  $regions['UA']['KV'] = 'Kiev';
  $regions['UA']['LV'] = 'Lviv';
  $regions['UA']['OD'] = 'Odessa';
  
	return $regions;
}

add_filter( 'woocommerce_states', 'countries_regions' );