<?php get_header(); ?>


 <?php //get_template_part('sidebar'); ?>
  <div style="width: 100%">


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
            <?php the_content(); ?>
          </p>
          
          <br/>
        </li>
<!----------------------->
    <?php endwhile; ?>
<?php endif; ?>


    <p class="post"> 
      <a href="<?php the_permalink(); ?>" class="readmore">Read more</a>
       <a href="<?php the_permalink(); ?>" class="comments">Comments </a> 
     </p>


  </div>
<?php get_footer(); ?>