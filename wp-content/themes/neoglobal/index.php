<?php get_header(); ?>


<?php get_template_part('slider'); ?>


  <div class="content">
    <div class="content_resize">
      <div class="mainbar">

<?php 
$i = 0; 
  if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); 
      $i++; 
    //Your HTML Code here... 
?>
<!------------------------------------->
        <div class="article">
          <h2><?php the_title(); ?></h2>
          <p class="infopost">
            Posted <span class="date">on <a><?php the_time('F j, Y'); ?></a></span> 
            by <a href="#"><?php the_author(); ?></a> &nbsp;&nbsp;|&nbsp;&nbsp; 
            Filed under <a href="#">templates</a>, 
            <a href="#">internet</a>
          </p>

          <div class="clr"></div>
          <div class="img"><!---
            <img src="<?php echo get_template_directory_uri(); ?>/images/img1.jpg" width="177" height="213" alt="" class="fl" />-->
            <?php the_post_thumbnail('myFituredImage', array('class' => 'fl my-post-thumb', 'style' => 'width:177px; height:150px; ')); ?> 
          </div>
          <div class="post_content">
            <?php the_excerpt(); ?> 
            <br/>
            <p class="spec">
              <a href="<?php the_permalink(); ?>" class="rm">Read more &raquo;</a> 
              <a href="<?php the_permalink(); ?>" class="com"><span><?php echo $i; ?></span></a>
            </p>
          </div>
          <div class="clr"></div>
        </div>
<!------------------------------------->
<?php 
    endwhile; 
  else :
    esc_html_e('Content IF post not found !.');   
  endif; 
?>  


<!-------------------------------------
        <div class="article">
          <h2><span>Excellent Solution</span> For Your Business</h2>
          <p class="infopost">Posted <span class="date">on 11 sep 2018</span> by <a href="#">Admin</a> &nbsp;&nbsp;|&nbsp;&nbsp; Filed under <a href="#">templates</a>, <a href="#">internet</a></p>
          <div class="clr"></div>
          <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/images/img1.jpg" width="177" height="213" alt="" class="fl" /></div>
          <div class="post_content">
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. <a href="#">Suspendisse bibendum. Cras id urna.</a> Morbi tincidunt, orci ac convallis aliquam, lectus turpis varius lorem, eu posuere nunc justo tempus leo. Donec mattis, purus nec placerat bibendum, dui pede condimentum odio, ac blandit ante orci ut diam. Cras fringilla magna. Phasellus suscipit, leo a pharetra condimentum, lorem tellus eleifend magna, eget fringilla velit magna id neque. Curabitur vel urna. In tristique orci porttitor ipsum. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. Cras id urna. Morbi tincidunt, orci ac convallis aliquam, lectus turpis varius lorem, eu posuere nunc justo tempus leo.</p>
            <p><strong>Aenean consequat porttitor adipiscing. Nam pellentesque justo ut tortor congue lobortis. Donec venenatis sagittis fringilla.</strong> Etiam nec libero magna, et dictum velit. Proin mauris mauris, mattis eu elementum eget, commodo in nulla. Mauris posuere venenatis pretium. Maecenas a dui sed lorem aliquam dictum. Nunc urna leo, imperdiet eu bibendum ac, pretium ac massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla facilisi. Quisque condimentum luctus ullamcorper.</p>
            <p class="spec"><a href="#" class="rm">Read more &raquo;</a> <a href="#" class="com"><span>11</span></a></p>
          </div>
          <div class="clr"></div>
        </div>
------------------------------------>
      

      <p class="pages"><?php the_posts_pagination(); ?></p>
      </div>


    <?php get_template_part('sidebar'); ?>


 <?php get_footer(); ?>