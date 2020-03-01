<?php get_header(); ?>

This is category... 

      <section class="site-section py-sm">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h2 class="mb-4"> Posts By Category - </h2>
            </div>
          </div>
          <div class="row blog-entries">
            <div class="col-md-12 col-lg-8 main-content">
              <div class="row">
              <?php 
                if ( have_posts() ) : 
                  while ( have_posts() ) : the_post(); 
              ?>
                <div class="col-md-6 myRegularPost">
                  <a href="<?php the_permalink(); ?>" class="blog-entry element-animate" data-animate-effect="fadeIn">

                    <?php the_post_thumbnail('myFituredImage',200,400, array('class' => 'my-post-thumb')); ?>

                    <div class="blog-content-body">
                      <div class="post-meta">
                        <span class="author mr-2">
                          
                          <!--<?php echo get_avatar( $id_or_email, 50,50); ?>-->
                          <!--" alt="Colorlib" class="author_img"> -->
                          <?php the_author()?> </span>&bullet;
                        <span class="mr-2"><?php the_time('M d,Y'); ?> </span> &bullet;
                        <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                      </div>
                      <h2><?php the_title(); ?></h2>
                    </div>
                  </a>
                </div>
              <?php 
                  endwhile; 
                else :
                  esc_html_e('Content IF post not found !.');   
                endif; 
              ?>  



              </div>

              <div class="row mt-5">
                <div class="col-md-12 text-center">
                      <?php 
                        the_posts_pagination( array(
                            'mid_size' => 2,
                            'prev_text' => __( '<', 'DwinsTeam' ),
                            'next_text' => __( '>', 'DwinsTeam' ),
                        ) );
                      ?>
                </div>
              </div>
      
            </div>
            <!-- END main-content -->
              <?php get_template_part('sidebar'); ?>

          </div>
        </div>
      </section>
 <?php get_footer(); ?>