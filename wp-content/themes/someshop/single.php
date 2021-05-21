<?php get_header(); ?>
  <div class="container single_section">
    <div class="row">
      <div class="col-lg-8 col-md-12 col-xs-12">
        <figure class="single_img"><?php the_post_thumbnail(); ?></figure>
        <h3><?php the_title(); ?></h3>
        <div class="single_category"><?php _e('Category: ', 'someshop');?><?php the_category(' '); ?></div>
        <p class="single_content"><?php the_content(); ?></p>
        <p class="single_tags"><?php the_tags('Tags: ', ' '); ?></p>
		  <div>
			  <?php comments_template(); ?>
		  </div>
      </div>
      <div class="col-lg-4 col-md-12 col-xs-12 sidebar_main">
        <?php get_sidebar('main');?>
    </div>
    </div>
  </div>
<?php get_footer(); ?>
