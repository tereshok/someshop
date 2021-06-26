<?php
	if(is_active_sidebar('shop-sidebar'));
  dynamic_sidebar('shop-sidebar');

// Custom filter check
  $prod_ob = get_queried_object();
  $prod_tax = (!empty($prod_ob->taxonomy)) ? $prod_ob->taxonomy : null;
  $prod_slug = (!empty($prod_ob->slug)) ? $prod_ob->slug : null;
 
  if($prod_tax == 'product_cat' && ($prod_slug == 'tables' || $prod_slug == 'desks' || $prod_slug == 'dining-tables')){
    $prod_srtcode =  do_shortcode('[yith_wcan_filters slug="draft-preset-2"]');
  }elseif($prod_tax == 'product_cat' && ($prod_slug == 'cupboard' || $prod_slug == 'commodes' || $prod_slug == 'racks')){
    $prod_srtcode =  do_shortcode('[yith_wcan_filters slug="draft-preset-3"]');
  }else{
    $prod_srtcode = null;
  }

  echo $prod_srtcode;
  echo do_shortcode('[yith_wcan_reset_button]');
  
// Есть баг при выборе фильтра, так как get_queried_object() не имеет при этом категорий и слага.    