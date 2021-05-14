<?php
/**
 * Template Name: About Us Template
 *
 *
 */
get_header();
?>
<div class="container">
<?php
require_once THEME_DIR . '/inc/classes/AboutUs.class.php';

$about = new AboutUs;

$acf_fields = get_field('about_info');

if(!empty($acf_fields)){
  foreach($acf_fields as $about_block){
    $layout = $about_block['acf_fc_layout'];
    switch($layout){
      case 'about_company';
        echo $about->about_company($about_block);
        break;
      case 'about_product';
        echo $about->about_product($about_block);
        break;
      case 'product_info';
        echo $about->product_info($about_block);
        break;
    }
  }
}
?>

</div>
<?php
get_footer();

