<?php 
  /*
    Template Name: Service-Content 
  */
  get_header(); 

?>
SERVICE PAGE... 

    <section class="site-section pt-5">
      <div class="container">
        
        <div class="row blog-entries">
          <div class="col-md-12 col-lg-8 main-content">
            
<?php 
  if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); 
?>
            <div class="row">
              <div class="col-md-12 service">
                <h2 class="mb-4"><?php the_title(); ?></h2>
                <p class="mb-5">                  
                  <?php the_post_thumbnail('myFituredImage', array('class' => 'img-fluid')); ?> 
                </p>

                <?php the_content(); ?>
              </div>
            </div>
<?php 
    endwhile; 
  else :
    esc_html_e('Content IF post not found !.');   
  endif; 
?>  


<div class="row">
  <h1 style="text-align: left; margin-top:50px; ">Product List</h1>
  <br/><br/>
</div>
            
<div class="row">

<?php
    global $post;
    $i=0;
    $args = array('posts_per_page' => -1, 'post_type'=> 'product-items','page'=> $paged, 'order' => 'DESC');
    $myposts = get_posts( $args );
    foreach( $myposts as $post ) : setup_postdata($post);
    $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'product-items');  
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

                <div class="col-md-4 myRegularPost">
                  <a href="<?php the_permalink(); ?>" class="blog-entry element-animate" data-animate-effect="fadeIn">
                    <p style="max-height: 150px; overflow: hidden;">
                      <?php the_post_thumbnail('myFituredImage',200,400, array('class' => 'my-post-thumb product-img')); ?>
                        
                    </p>
                    <div class="blog-content-body">
                      <h2><?php the_title(); ?></h2>
                    </div>
                  </a>
                </div>
<?php endforeach; ?>


</div>

          </div>

            <?php get_template_part('sidebar'); ?>

        </div>
      </div>
    </section>
  
 <?php get_footer(); ?>