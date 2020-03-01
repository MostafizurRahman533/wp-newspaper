<?php 
/*
  Template Name: Team-Member 
*/
  get_header(); 
?>
Team member...

      <section class="site-section py-sm">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h2 class="mb-4">Team Members !</h2>
            </div>
          </div>
          <div class="row blog-entries">
            <div class="col-md-12 col-lg-8 main-content">
              <div class="row">
<?php
    global $post;
    $i=0;
    $args = array('posts_per_page' => -1, 'post_type'=> 'team-members','page'=> $paged, 'order' => 'ASC');
    $myposts = get_posts( $args );
    foreach( $myposts as $post ) : setup_postdata($post);
    $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'team-members');  
    $i++;
    $this_id = get_the_ID(); 
    global $wpdb;
    $m_name_subtitle = '';
    $tbl_postmeta = $wpdb->prefix."postmeta";           
    $meta_name_subtitle = 'meta-subtitle-slider';           
    $query_result = "select * from $tbl_postmeta where post_id='$this_id' AND meta_key='$meta_name_subtitle'";
    $result = $wpdb->get_results($query_result);
    foreach($result as $row){
        $m_name_subtitle = $row->meta_value;
    }
?>
<!-- ---------------------------------------------------------------------- -->
                <div class="col-md-6 myRegularPost">
                  <a href="<?php //the_permalink(); ?>" class="blog-entry element-animate" data-animate-effect="fadeIn">
                    <?php the_post_thumbnail('myFituredImage',200,400, array('class' => 'my-post-thumb')); ?>

                    <div class="blog-content-body" style="max-height: 200px; min-height: 200px;">
                      <div class="post-meta text-center" style="  ">
                        <h1><?php the_title(); ?></h1>
                        <p><?php the_content(); ?></p>
                      </div>                      
                    </div>
                  </a>
                </div>  
<?php endforeach;?>



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