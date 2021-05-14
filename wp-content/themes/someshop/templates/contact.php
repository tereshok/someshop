<?php
/*
 * Template Name: Contact page Template
 */
get_header();
require_once THEME_DIR .'/inc/acf/acf_map_init.php';
?>
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<?php
			$location = get_field('map');
			if( $location ): ?>
				<div class="acf-map" data-zoom="16">
					<div class="marker" data-lat="<?php echo esc_attr($location['lat']); ?>" data-lng="<?php echo esc_attr($location['lng']); ?>"></div>
				</div>
			<?php endif; ?>
		</div>
		<div class="col-lg-8">
			<?php the_field('form');?>
		</div>
		<div class="col-lg-4 contacts">
			<?php if( have_rows('contact_info') ): ?>
				<?php while( have_rows('contact_info') ) : the_row(); ?>
					<div class="contact-info">
						<img src="<?php the_sub_field('contact_icon'); ?>">
						<div class="contact-text">
							<h6><?php the_sub_field('contact_title'); ?></h6>
							<p><?php the_sub_field('contact_subtitle'); ?></p>
						</div>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</div>


<?php
get_footer();
