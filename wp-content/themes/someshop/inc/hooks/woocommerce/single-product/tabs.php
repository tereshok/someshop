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


    add_filter( 'woocommerce_product_tabs', 'woo_custom_description_tab', 98 );
    function woo_custom_description_tab( $tabs ) {
     $test = $tabs['reviews']['callback'];
      return $tabs;
    }
    
    function woo_custom_description_tab_content() {
      echo '<h2>Custom Description</h2>';
      echo '<p>Here\'s a custom description</p>';
    }  