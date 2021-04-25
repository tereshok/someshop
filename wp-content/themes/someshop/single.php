<?php get_header(); ?>
  <div class="container single_section">
    <div class="row">
      <div class="col-lg-8">
        <figure class="single_img"><?php the_post_thumbnail(); ?></figure>
        <h3><?php the_title(); ?></h3>
        <div class="single_category">Category: <?php the_category(' '); ?></div>
        <p class="single_content"><?php the_content(); ?></p>
        <p class="single_tags"><?php the_tags('Tags: ', ' '); ?></p>
      </div>
      <div class="col-lg-4 sidebar_main">
        <?php get_sidebar('main');?>
    </div>
    </div>
  </div>
<?php get_footer(); ?>