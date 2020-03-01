

<?php get_header(); ?>


<?php //get_template_part('sidebar'); ?>

<div id="content">
  <div id="colOne">

    <div id="logo">
      <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Integral</a></h1>
    </div>



    <?php dynamic_sidebar('sideba'); ?>
  </div>

<div style="background: #434;color:green;padding: 10px; width: ;margin:0px auto;"> Your Keyword <span><?php _e(''); echo '&quot;'.$s.'&quot;';?></span>Result are bellow </div>
<br/>

  <div id="colTwo" style="width: 60%;margin: 0px auto;">
    
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
            <?php the_excerpt();  ?>
          </p>
           <p class="more"><a href="<?php the_permalink(); ?>">Read more &raquo;</a></p>
          <br/>
        </li>
<!----------------------->
    <?php endwhile; else: ?>
    <p><?php esc_html_e('Sorry No Result found'); ?></p>
<?php endif; ?>
</div>

<?php get_footer(); ?>