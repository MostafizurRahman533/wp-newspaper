<?php get_header(); ?>


<?php get_template_part('slider'); ?>


  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <h2><span>Excellent Solution</span> For Your Business</h2>
          <p class="infopost">Posted <span class="date">on 11 sep 2018</span> by <a href="#">Admin</a> &nbsp;&nbsp;|&nbsp;&nbsp; Filed under <a href="#">templates</a>, <a href="#">internet</a></p>
          <div class="clr"></div>

          <?php 
  if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); 
    //Your HTML Code here...
    ?> 


          <div class="img"><?php the_post_thumbnail('myFituredImage', array('class' => 'my-post-thumb')); ?> 
</div>
          <div class="post_content">
            <H2><?php the_title(); ?></H2>
            <p><?php the_time('M d,Y'); ?> | Posted by <a href="#"><?php the_author(); ?></a></p>
              <?php the_excerpt(); ?> 
            <p class="spec"><a href="<?php the_permalink(); ?>" class="rm">Read more &raquo;</a></p>
          </div>
    <?php 
  endwhile; 
  else :
    esc_html_e('Content IF post not found !.');   
  endif; 
?>




          <div class="clr"></div>
        </div>

        <div class="article">
          <h2><span>Leave a</span> Reply</h2>
          <div class="clr"></div>
<?php comments_template( '', true ); ?>
        </div>    

          </div>


    <?php get_template_part('sidebar'); ?>


 <?php get_footer(); ?>