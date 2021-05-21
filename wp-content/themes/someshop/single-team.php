<?php
get_header();
$term_dep = get_field('department');
$term_loc = get_field('location');
?>
	<div class="container">
		<div class="row">
			<div class="d-flex team-card">
				<?php if(!empty(get_the_post_thumbnail_url())) : ?>
					<img src="<?php the_post_thumbnail_url('medium'); ?>" alt="#">
					<?php else : ?>
					<img src="<?php echo THEME_DIR_URI . '/assets/images/images.jpg'?>" alt="#">
				<?php endif; ?>
				<div>
					<h3><?php the_title(); ?></h3>
					<div class="info-team"><?php _e('Position: ', 'someshop'); ?>
						<span><?php the_field('position'); ?></span></div>
					<div class="info-team"><?php _e('Department: ', 'someshop'); ?>
						<span><?php echo ($term_dep->name); ?></span</div>
					<div class="info-team"><?php _e('Location: ', 'someshop'); ?>
						<span><?php echo ($term_loc->name); ?></span></div>
					<p class="about-team"><?php the_content(); ?></p>
				</div>
			</div>
		</div>
	</div>
<?php
get_footer();
