<?php get_header(); ?>
<div class="container blog_section">
  <div class="row">
    <div class="col-lg-8 col-md-8 col-xs-12">
      <?php if( have_posts() ) : ?>
        <?php while(have_posts()) : the_post();  ?>
          <div class="blog_post">
            <figure class="blog_post_img"><?php the_post_thumbnail(); ?></figure>
            <div class="blog_details">
              <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
              <p><?php the_excerpt(); ?></p>
              <div class="blog_category">Category: <?php the_category(' '); ?></div>
            </div>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>  
    </div>
    <div class="col-lg-4 col-md-8 col-xs-12 sidebar_main">
      <?php 
        get_sidebar('main');
      ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>