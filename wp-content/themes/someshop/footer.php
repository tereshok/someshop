    <div class="container">
      <div class="footer_widget row">
        <div class="col-sm-6 col-md-6 col-lg-2">
          <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-footer-first') )  ?>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-2">
          <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-footer-second') )  ?>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-2">
          <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-footer-third') )  ?>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-2">
          <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-footer-fourth') )  ?>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-4">
          <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-footer-big') )  ?>
        </div>
      </div>
      <div class="footer_info row">
        <div class="footer_copyright"><?php the_field('copyright_info', 'option'); ?></div>
        <ul class="footer_social-icons">
          <?php while(has_sub_field('social_icons', 'option')): ?>
            <li><a href="<?php the_sub_field('social_network_url'); ?>"><?php the_sub_field('social_network_name'); ?></a></li>
          <?php endwhile; ?>
        </ul>
      </div>
    </div>
    <?php wp_footer();?>
  </body>
</html>
