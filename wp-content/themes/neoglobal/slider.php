     

     <div class="clr"></div>
      <div class="slider">
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
      	<!--------------------------------->
        <div id="coin-slider"> 

        	<a href="#">
        		<img src="<?php echo $large_image_url[0]; ?>"  alt="" style="width:100%;"/> 
        	</a> 

        	 
        </div>
        <!--------------------------------->

<?php endforeach;?>

        
        <div class="clr"></div>
      </div>
      <div class="clr"></div>
    </div>
  </div>