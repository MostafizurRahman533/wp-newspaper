<?php get_header(); ?>
 
Single page.php...

    <section class="site-section py-lg">
      <div class="container">
        
        <div class="row blog-entries element-animate">
<?php 
  if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); 
?>
          <div class="col-md-12 col-lg-8 main-content">
              <?php the_post_thumbnail('myFituredImage', array('class' => 'img-fluid mb-5 my-single-img')); ?>             
             <div class="post-meta">
                        <span class="author mr-2"><!--<img src="images/person_1.jpg" alt="Colorlib" class="mr-2">--> <?php the_author()?></span>&bullet;
                        <span class="mr-2"><?php the_time('M d,Y'); ?> </span> &bullet;
                        <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                      </div>
            <h1 class="mb-4"><?php the_title(); ?></h1>
              <?php the_tags(); ?>           
            <div class="post-content-body">
              <?php the_content(); ?> 
            </div>

            <div class="pt-5">
              <p>
                <!-- Categories: <?php //the_category(); ?>             -->
              </p>
            </div>

            <div class="pt-5">              
              <div class="comment-form-wrap pt-5">
                <?php comments_template( '', true ); ?>
              </div>
            </div>

          </div>

<?php 
    endwhile; 
  else :
    esc_html_e('Content IF post not found !.');   
  endif; 
?>  

          <!-- END main-content -->

          <?php get_template_part('sidebar'); ?>
          <!-- END sidebar -->

        </div>
      </div>
    </section>

    <section class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="mb-3 ">Related Post</h2>
          </div>
        </div>
        <div class="row">
<?php
  $tags = wp_get_post_tags($post->ID);
  if ($tags) {
    $first_tag = $tags[0]->term_id;
    
    $my_query = new WP_Query(array(
      'tag__in' => array($first_tag),
      'post__not_in' => array($post->ID),
      'posts_per_page'=>5,
      'caller_get_posts'=>1
    ));
    
    if( $my_query->have_posts() ) {
    while ($my_query->have_posts()) : $my_query->the_post(); 
?>

    <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>

          <div class="col-md-6 col-lg-4">
            <a href="<?php the_permalink(); ?>" class="a-block sm d-flex align-items-center height-md" style="background-image: url('<?php echo $backgroundImg[0]; ?>'); ">

              <div class="text">
                <div class="post-meta">
                  <span class="category">Lifestyle</span>
                  <span class="mr-2"><?php the_time('M d,Y'); ?></span> &bullet;
                  <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                </div>
                <h3><?php the_title(); ?></h3>
              </div>
            </a>
          </div>
<?php     
    endwhile;
    }
    wp_reset_query();
  }
?>




        </div>
      </div>


    </section>
    <!-- END section -->
  
<?php get_footer(); ?>