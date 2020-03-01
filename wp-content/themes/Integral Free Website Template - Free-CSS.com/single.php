

<?php get_header(); ?>




<?php //get_template_part('sidebar'); ?>
<div style="width: 65%;margin: 0px auto;">



  <div id="colOne" style="float: left;">

    <div id="logo">
      <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Integral</a></h1>
    </div>
</div>




      
  <div style="width: 60%;padding: 2%;float:left;">
    
<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>    
<!----------------------->
        <li style="margin-bottom: 20px; ">
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <div class="article-info box">
            <p class="f-right"><?php comments_popup_link('0 Comments >', '1 Comments >','% Comments >'); ?></p>
            <p class="f-left"><?php the_time('j F, Y'); ?> | Posted by <a href="#"><?php the_author(); ?></a></p>
          </div>
            <?php the_post_thumbnail('myFituredImage', array('class' => 'f-left')); ?>
            <?php the_content(); ?>
          </p>
         
          <br/>
        </li>
<!----------------------->
    <?php endwhile; ?>
<?php endif; ?>
<div style="clear: both;"></div>

</div>

</div>
<?php get_footer(); ?>