

      <section class="site-section pt-5 pb-5">
        <div class="container">
          <div class="row">
            <div class="col-md-12">

              <div class="owl-carousel owl-theme home-slider">


<?php
    global $post;
    $i=0;
    $args = array('posts_per_page' => -1, 'post_type'=> 'slider-items','page'=> $paged, 'order' => 'DESC');
    $myposts = get_posts( $args );
    foreach( $myposts as $post ) : setup_postdata($post);
    $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'slider-items');  
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

                <div>
                  <a href="<?php the_permalink(); ?>" class="a-block d-flex align-items-center height-lg" style="background-image: url('<?php echo $large_image_url[0]; ?>'); ">
                    <div class="text half-to-full">
                      <!--<span class="category mb-5">Food</span>-->
                      <div class="post-meta"> <!--POST META--></div>
                      <h3><?php the_title(); ?></h3>
                      <P><?php the_content();  ?></P>
                      <p><?php echo $m_name_subtitle; ?></p>
                    </div>
                  </a>
                </div>

<!-- ---------------------------------------------------------------------- -->
<?php endforeach;?>                






              </div>
              
            </div>
          </div>
          
        </div>
      </section>
      <!-- END section -->
