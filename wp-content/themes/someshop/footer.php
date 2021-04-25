    <div class="container">
      <div class="footer_widget row">
        <div class="col-sm-6 col-lg-2">
          <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-footer-first') )  ?>
        </div>
        <div class="col-sm-6 col-lg-2">
          <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-footer-second') )  ?>
        </div>
        <div class="col-sm-6 col-lg-2">
          <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-footer-third') )  ?>
        </div>
        <div class="col-sm-6 col-lg-2">
          <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-footer-fourth') )  ?>
        </div>
        <div class="col-sm-6 col-lg-4">
          <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-footer-big') )  ?>
        </div>
      </div>
      <div class="footer_info">
        <div class="footer_copyright">Copyright ©2021 All rights reserved | This template is made with SomeShop</div>
        <ul class="footer_social-icons">
          <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
          <li><a href="#"><i class="fab fa-twitter"></i></a></li>
          <li><a href="#"><i class="fas fa-globe"></i></a></li>
          <li><a href="#"><i class="fab fa-behance"></i></a></li>
        </ul>
      </div>  
    </div>
    <?php wp_footer();?>
  </body>
</html>