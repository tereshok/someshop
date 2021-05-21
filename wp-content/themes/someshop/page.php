<?php get_header(); ?>
  <div class="container page_section">
    <div class="row">
      <div class="col-lg-8 col-md-12 col-xs-12">
        <figure class="page_img"><?php the_post_thumbnail(); ?></figure>
        <h3><?php the_title(); ?></h3>
        <p class="page_content"><?php the_content(); ?></p>
      </div>
      <div class="col-lg-4 col-md-12 col-xs-12 sidebar_main">
        <?php get_sidebar('main');?>
    </div>
    </div>
  </div>
<?php get_footer(); ?>
