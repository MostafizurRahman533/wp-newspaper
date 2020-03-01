
<?php get_header(); ?>

    <div class="content_area">
      <div class="main_content floatleft">
        <div class="left_coloum floatleft" style="width:95%; ">
          <div class="single_left_coloum_wrapper">


<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>    
<!----------------------->
            <div class="single_left_coloum " style="width:100%; "> 
             <h2><?php the_title(); ?></h2>
              <?php the_post_thumbnail('myFituredImage', array('class' => 'f-left')); ?>
              <p><?php the_content(); ?></p>
            </div>
            <hr/>
<!----------------------->
    <?php endwhile; ?>
<?php endif; ?>

          </div>


          <div class="single_left_coloum_wrapper">
            <h2 class="title">Related News !</h2>
            <a class="more" href="#">more</a>

            <div class="single_left_coloum floatleft">
              <img src="<?php echo get_template_directory_uri(); ?>/images/single_featured.png" alt="" />
                <h3>Lorem ipsum dolor sit amet, consectetur</h3>
                <p>
                  Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper 
                  dolor eu mattis.
                </p>
                <a class="readmore" href="#">read more</a> 
            </div>
            <div class="single_left_coloum floatleft">
              <img src="<?php echo get_template_directory_uri(); ?>/images/single_featured.png" alt="" />
                <h3>Lorem ipsum dolor sit amet, consectetur</h3>
                <p>
                  Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper 
                  dolor eu mattis.
                </p>
                <a class="readmore" href="#">read more</a> 
            </div>
            <div class="single_left_coloum floatleft">
              <img src="<?php echo get_template_directory_uri(); ?>/images/single_featured.png" alt="" />
                <h3>Lorem ipsum dolor sit amet, consectetur</h3>
                <p>
                  Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper 
                  dolor eu mattis.
                </p>
                <a class="readmore" href="#">read more</a> 
            </div>
            <div class="single_left_coloum floatleft">
              <img src="<?php echo get_template_directory_uri(); ?>/images/single_featured.png" alt="" />
                <h3>Lorem ipsum dolor sit amet, consectetur</h3>
                <p>
                  Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper 
                  dolor eu mattis.
                </p>
                <a class="readmore" href="#">read more</a> 
            </div>

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