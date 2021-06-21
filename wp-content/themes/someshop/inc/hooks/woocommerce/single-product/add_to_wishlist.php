<?php

add_filter( 'yith_wcwl_ajax_add_return_params', 'wishlist_fragments' );

function wishlist_fragments($data){
  $data['fragments']['span.prod-cart'] = yith_wcwl_count_all_products();
  var_dump(yith_wcwl_count_all_products());
  return $data;
}