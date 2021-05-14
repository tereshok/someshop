<?php
/**
 * Template Name: Sale content
 *
 */

$flexible_content = get_field('flexible');
if(!empty($flexible_content)){
	foreach($flexible_content as $content_item) {
		if($content_item['acf_fc_layout'] == 'sale') : ?>
			<div class="sale-block">
				<img src="<?php echo $content_item['sale_image']; ?>">
				<div>
					<h4 class="sale-title"><?php echo $content_item['sale_title']; ?></h4>
					<p class="sale-content"><?php echo $content_item['sale_content']; ?></p>
				</div>
			</div>
		<?php elseif ($content_item['acf_fc_layout'] == 'product') : ?>
			<div style="background-image: url('<?php echo $content_item['product_image']; ?>')" class="product-wc-block">
				<p class="product-before-title"><?php echo $content_item['product_before_title']; ?></p>
				<p class="product-title"><?php echo $content_item['product_title']; ?></p>
			</div>
		<?php elseif ($content_item['acf_fc_layout'] == 'partners') : ?>
			<div class="container">
				<div class="row partner-card">
					<?php foreach($content_item['partner_card'] as $partner) : ?>
						<div class="col-lg-3 item-card">
							<a href="<?php echo $partner['partner_link']; ?>">
								<img src="<?php echo $partner['partner_image']; ?>">
							</a>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		<?php endif;
	}
}

