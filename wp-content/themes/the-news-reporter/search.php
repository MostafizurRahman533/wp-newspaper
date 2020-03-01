
<?php get_header(); ?>
<?php //get_template_part('slider'); ?>

    <div class="content_area">
      <div class="main_content floatleft">
        <div class="left_coloum floatleft" style="width:100%; ">
          <div class="single_left_coloum_wrapper" style="width:100%; ">

<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>    
<!----------------------->
            <div class="single_left_coloum floatleft" style="width:100%; "> 
              <?php the_post_thumbnail('myFituredImage', array('class' => 'f-left')); ?>
              <h4><?php the_title(); ?></h4>
              <p><?php the_excerpt(); ?></p>
              <a class="readmore" href="<?php the_permalink(); ?>">read more</a> 
            </div>
<!----------------------->
    <?php endwhile; ?>
<?php endif; ?>

          </div>




<!-----------------------------><!-----------------------------><!----------------------------->
<!-----------------------------><!-----------------------------><!----------------------------->
<!-----------------------------><!-----------------------------><!----------------------------->
          <div class="single_left_coloum_wrapper gallery">
            <h2 class="title">gallery</h2>
            <a class="more" href="#">more</a> 
              <img src="<?php echo get_template_directory_uri(); ?>/images/single_featured.png" alt="" /> 
              <img src="<?php echo get_template_directory_uri(); ?>/images/single_featured.png" alt="" />
              <img src="<?php echo get_template_directory_uri(); ?>/images/single_featured.png" alt="" /> 
              <img src="<?php echo get_template_directory_uri(); ?>/images/single_featured.png" alt="" /> 
              <img src="<?php echo get_template_directory_uri(); ?>/images/single_featured.png" alt="" /> 
              <img src="<?php echo get_template_directory_uri(); ?>/images/single_featured.png" alt="" /> 
          </div>

<!-----------------------------><!-----------------------------><!----------------------------->
<!-----------------------------><!-----------------------------><!----------------------------->
<!-----------------------------><!-----------------------------><!----------------------------->

        </div>
        <!---------sidebar one------------>

<?php //get_template_part('sidebar-one'); ?>
      </div>
<?php get_template_part('sidebar-two'); ?>
    </div>
<!--------vhaner area------------>
 <?php get_template_part('vhaner'); ?>


   <?php get_footer(); ?>