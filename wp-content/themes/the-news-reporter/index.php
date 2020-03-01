
<?php get_header(); ?>
<?php get_template_part('slider'); ?>

    <div class="content_area">
      <div class="main_content floatleft">
        <div class="left_coloum floatleft">
          <div class="single_left_coloum_wrapper">


            <h2 class="title"><a href="">Featured News !</a></h2>
            <a class="more" href="">more</a>

<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>    
<!----------------------->
            <div class="single_left_coloum floatleft"> 
              <?php the_post_thumbnail('myFituredImage', array('class' => 'f-left')); ?>
              <h4><?php the_title(); ?></h4>
              <p><?php the_excerpt(); ?></p>
              <a class="readmore" href="<?php the_permalink(); ?>">read more</a> 
            </div>
<!----------------------->
    <?php endwhile; ?>
<?php endif; ?>

          </div>


          <div class="single_left_coloum_wrapper">
            <h2 class="title">latest  articles</h2>
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

          <div class="single_left_coloum_wrapper single_cat_left">
            <h2 class="title">tech news</h2>
            <a class="more" href="#">more</a>

            <div class="single_cat_left_content floatleft">
              <h3>Lorem ipsum dolor sit amet conse ctetur adipiscing elit </h3>
              <p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor ...interdum</p>
              <p class="single_cat_left_content_meta">by <span>John Doe</span> |  29 comments</p>
            </div>

            <div class="single_cat_left_content floatleft">
              <h3>Lorem ipsum dolor sit amet conse ctetur adipiscing elit </h3>
              <p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor ...interdum</p>
              <p class="single_cat_left_content_meta">by <span>John Doe</span> |  29 comments</p>
            </div>

            <div class="single_cat_left_content floatleft">
              <h3>Lorem ipsum dolor sit amet conse ctetur adipiscing elit </h3>
              <p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor ...interdum</p>
              <p class="single_cat_left_content_meta">by <span>John Doe</span> |  29 comments</p>
            </div>

            <div class="single_cat_left_content floatleft">
              <h3>Lorem ipsum dolor sit amet conse ctetur adipiscing elit </h3>
              <p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor ...interdum</p>
              <p class="single_cat_left_content_meta">by <span>John Doe</span> |  29 comments</p>
            </div>

          </div>

        </div>
        <!---------sidebar one------------>

<?php get_template_part('sidebar-one'); ?>
      </div>
<?php get_template_part('sidebar-two'); ?>
    </div>
<!--------vhaner area------------>
 <?php get_template_part('vhaner'); ?>


   <?php get_footer(); ?>