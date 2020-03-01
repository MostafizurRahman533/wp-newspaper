 
<div id="content">
  <div id="colOne">

    <div id="logo">
      <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Integral</a></h1>
      <h2>Free CSS Template</h2>
    </div>


    <div class="box">
      <h2>Related Cetagory</h2>
      <ul class="bottom">   
       <?php //callling the menu... 
          wp_nav_menu(
             array(
              'theme_location' => 'side_menu',
                'container_class' => 'bottom',
                'items_wrap' => '<ul class="">%3$s</ul>'
              )
         ); 
      ?> 
      </ul>
    </div>


    <div class="box">
      <h3>Mauris cras libero</h3>
      <ul class="bottom">
        Dummy site
      </ul>
    </div>
    <?php dynamic_sidebar('sideba'); ?>
      </div>