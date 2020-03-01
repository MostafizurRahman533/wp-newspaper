   
      <footer class="site-footer">
        <div class="container">
          <div class="row mb-5">

            <!--<div class="col-md-4">-->
              <?php dynamic_sidebar( 'widget-footer-left' ); ?>
            <!--</div>-->

            <div class="col-md-6 ml-auto">
              <div class="row">
                
                <!--<div class="col-md-7">-->
                  <?php dynamic_sidebar( 'widget-footer-center' ); ?>
                <!--</div>-->

                <div class="col-md-1"></div>
                
                <!--<div class="col-md-4">-->

                 <?php dynamic_sidebar( 'widget-footer-right' ); ?>
                  
                <!--</div>-->
              </div>
            </div>
          </div>
          <div class="row">


             
                 <?php dynamic_sidebar( 'widget-footer-bottom' ); ?>




          </div>
        </div>
      </footer>
      <!-- END footer -->

    </div>
    
    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-migrate-3.0.0.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/popper.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.waypoints.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.stellar.min.js"></script>

    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
    <?php wp_footer(); ?>
  </body>
</html>