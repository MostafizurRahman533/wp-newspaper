<?php get_header(); ?>


 <?php get_template_part('sidebar'); ?>
  <div id="content">


<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>    
<!----------------------->
        <li style="margin-bottom: 20px; ">
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <div class="article-info box">
            <p class="f-right"><?php comments_popup_link('0 Comments >', '1 Comments >','% Comments >'); ?></p>
            <p class="f-left"><?php the_time('F j, Y'); ?> | Posted by <a href="#"><?php the_author(); ?></a></p>
          </div>
            <?php the_post_thumbnail('myFituredImage', array('class' => 'f-left')); ?>
            <?php the_excerpt(); ?>
          </p>
          <p class="more"><a href="<?php the_permalink(); ?>">Read more &raquo;</a></p>
          <br/>
        </li>
<!----------------------->
    <?php endwhile; ?>
<?php endif; ?>



    <p class="post"> 
      <a href="#" class="readmore">Read more</a>
       <a href="#" class="comments">Comments (3)</a> 
       <span class="date">March 28, 2007</span>
     </p>


  </div>
<?php get_footer(); ?>