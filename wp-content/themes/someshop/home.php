<?php get_header(); ?>
<div class="container blog_section">
	<div class="row">
		<div class="col-lg-8">
			<?php if( have_posts() ) : ?>
				<?php while(have_posts()) : the_post();  ?>
					<div class="blog_post">
						<div class="blog_info">
							<figure class="blog_post_img"><?php the_post_thumbnail(); ?></figure>
						</div>
						<div class="blog_details">
							<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
							<p><?php the_excerpt(); ?></p>
							<div class="blog_category"><?php _e('Category: ', 'someshop'); ?><?php the_category(' '); ?></div>
						</div>
					</div>
			<?php endwhile; ?>
			<?php else: ?>
        <h3><?php _e('Don\'t have posts.', 'someshop'); ?></h3>
			<?php endif; ?>
			<?php the_posts_pagination(
        $args = [
          'show_all'           => false, 
          'end_size'           => 1,     
          'mid_size'           => 1,    
          'prev_next'          => true,  
          'prev_text'          => '&#129044;',
          'next_text'          => '&#129046;',
          'add_args'           => false, 
          'add_fragment'       => '',     
          'screen_reader_text' => __( 'Posts navigation' ),
          'aria_label'         => __( 'Posts' ), 
          'class'              => 'pagination', 
      	]); ?>
		</div>
		<div class="col-lg-4 sidebar_main">
			<?php get_sidebar('main'); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
