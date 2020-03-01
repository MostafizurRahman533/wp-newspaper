
            <div class="col-md-12 col-lg-4 sidebar">
              <div class="sidebar-box search-form-wrap">

                <form action="<?php echo home_url( '/' ); ?>" method="get" class="search-form">
                  <div class="form-group">
                    <span class="icon fa fa-search"></span>
                    <input type="search" name="s" class="form-control" id="s" placeholder="Type keyword and hit enter">
                  </div>
                </form>

              </div>
              <!-- END sidebar-box -->
<?php
    global $post;
    $i=0;
    $args = array('posts_per_page' => -1, 'post_type'=> 'owner-info','page'=> $paged, 'order' => 'DESC');
    $myposts = get_posts( $args );
    foreach( $myposts as $post ) : setup_postdata($post);
    $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'owner-info');  
    $i++;
    $this_id = get_the_ID(); 
    global $wpdb;
    $m_name_subtitle = '';
    $tbl_postmeta = $wpdb->prefix."postmeta";           
    $meta_name_subtitle = 'owner_meta_one';           
    $query_result = "select * from $tbl_postmeta where post_id='$this_id' AND meta_key='$meta_name_subtitle'";
    $result = $wpdb->get_results($query_result);
    foreach($result as $row){

        $m_name_subtitle = $row->meta_value;
    }
?>
<!-- ---------------------------------------------------------------------- -->
              <div class="sidebar-box">
                <div class="bio text-center">
                  <img src="<?php echo $large_image_url[0]; ?>" alt="Image Placeholder" class="img-fluid">
                  <div class="bio-body">
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_content(); ?></p>
                    <p><a href="<?php the_permalink(); ?>" class="btn btn-primary btn-sm rounded">Read my bio</a></p>
                    
                    <?php echo $m_name_subtitle; ?>

                    <p class="social">
                      <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
                      <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
                      <a href="#" class="p-2"><span class="fa fa-instagram"></span></a>
                      <a href="#" class="p-2"><span class="fa fa-youtube-play"></span></a>
                    </p>
                  </div>
                </div>
              </div>
<!-- ---------------------------------------------------------------------- -->
<?php endforeach;?>


              <!-- END sidebar-box -->  
              <div class="sidebar-box">
                <h3 class="heading">Popular Posts</h3>
                <div class="post-entry-sidebar">
                  <ul>
                    <li>
                      <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/img_2.jpg" alt="Image placeholder" class="mr-4">
                        <div class="text">
                          <h4>How to Find the Video Games of Your Youth</h4>
                          <div class="post-meta">
                            <span class="mr-2">March 15, 2018 </span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/img_4.jpg" alt="Image placeholder" class="mr-4">
                        <div class="text">
                          <h4>How to Find the Video Games of Your Youth</h4>
                          <div class="post-meta">
                            <span class="mr-2">March 15, 2018 </span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/img_12.jpg" alt="Image placeholder" class="mr-4">
                        <div class="text">
                          <h4>How to Find the Video Games of Your Youth</h4>
                          <div class="post-meta">
                            <span class="mr-2">March 15, 2018 </span>
                          </div>
                        </div>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <!-- END sidebar-box -->

              <div class="sidebar-box">
                <h3 class="heading">Categories</h3>
                  <ul class="categories">
<?php
  $args = array(
    'orderby' => 'slug',
    'parent' => 0
  );

  $categories = get_categories( $args );
  foreach ( $categories as $category ) {
    echo '<li><a href="'.get_category_link( $category->term_id ).'" rel="bookmark">'.$category->name.'<span>'.$category->count.'</span></a></li>';
   }
?>
                </ul>
              </div>
              <!-- END sidebar-box -->

              <div class="sidebar-box">
                <h3 class="heading">Tags</h3>
                <ul class="tags">
                  <?php wp_tag_cloud('format=list'); ?>
                </ul>
              </div>
            </div>
            <!-- END sidebar -->