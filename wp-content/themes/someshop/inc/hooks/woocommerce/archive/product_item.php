<?php
remove_action('woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10);
remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5);

remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5);
remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10);


//custom product image title
function custom_product_loop_item_title() {
  global $product;
  $id = $product->get_id();
  $url = get_permalink($id);
  $title = $product->get_title();
  ?>

<a href="<?php echo $url ?>"><h4 class="prod_title"><?php echo $title ?></h4></a>

<?php
}
add_action( 'woocommerce_shop_loop_item_title', 'custom_product_loop_item_title', 10);


//custom product image size
remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);

function custom_product_loop_image() {
  global $product;
  $id = $product->get_id();
  $url = get_permalink($id);

  $img_id = $product->get_image_id();

  if(!empty($img_id)) {
    $prod_img = wp_get_attachment_image_url($img_id, 'thumbnail');
  } else {
    $prod_img = wc_placeholder_img_src('shop_catalog');
  }
  ?>
<a href="<?php echo $url ?>"><img src="<?php echo $prod_img ?>" alt="thumbnail"></a>
<?php
}
add_action( 'woocommerce_before_shop_loop_item_title', 'custom_product_loop_image', 10);


//custom product price
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10);

function custom_product_loop_price() {
  global $product;
  $regular_price = $product->get_regular_price();
  $sale_price = $product->get_sale_price();
  $main_price = $product->get_price();
  $price_symbol = get_woocommerce_currency_symbol();

  if(empty($sale_price)) : ?>
    <div class="prod_price"><?php echo $price_symbol . $main_price ?></div>
  <?php else : ?>
    <div class="prod_price">
      <span class="prod_old_price">
        <?php echo $price_symbol . $regular_price ?>
      </span>
      <span class="prod_new_price">
        <?php echo $price_symbol . $main_price ?>
      </span>
    </div>
  <?php endif;
}
add_action( 'woocommerce_after_shop_loop_item_title', 'custom_product_loop_price', 10);