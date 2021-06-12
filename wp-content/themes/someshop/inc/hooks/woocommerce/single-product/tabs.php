<?php

    add_filter( 'woocommerce_product_tabs', 'woo_sale_tab' );
      function woo_sale_tab( $tabs ) {

        global $product;
        $onSale = $product->is_on_sale();

        if($onSale == true){
          $tabs['sale_tab'] = [
            'title' 	=> __( 'Sale information', 'woocommerce' ),
            'priority' 	=> 50,
            'callback' 	=> 'woo_sale_tab_content'
          ];
        }
        return $tabs;
    }

    function woo_sale_tab_content() { ?>

      <h2 class="woo-tab-title"><?php the_field('custom_tab_title', 'option'); ?></h2>
      <p class="woo-tab-text"><?php the_field('custom_tab_text', 'option'); ?></p>
      
      <?php
    }
