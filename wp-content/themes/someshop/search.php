<?php get_header(); ?>
<div class="container blog_section">
  <div class="row">
    <div class="col-lg-8 col-md-12">
      <?php if( have_posts() ) : ?>
        <?php while(have_posts()) : the_post();  ?>
          <div class="blog_post">
            <div class="blog_info">
              <figure class="blog_post_img"><?php the_post_thumbnail(); ?></figure>
            </div>
            <div class="blog_details">
              <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
              <p><?php the_excerpt(); ?></p>
            </div>
          </div>
        <?php endwhile; ?>
      <?php else: ?>
        <h3><?php echo get_search_query(); ?> - <?php _e('Don\'t have results.', 'someshop'); ?></h3>
      <?php endif; ?>
    </div>
    <div class="col-lg-4 col-md-12 sidebar_main">
      <?php
        get_sidebar('main');
      ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
