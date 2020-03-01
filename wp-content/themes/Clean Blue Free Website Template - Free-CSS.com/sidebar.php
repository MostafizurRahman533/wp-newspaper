

 <div id="leftnav">
    <h2>Relater Post</h2>
    <ul id="leftnavmenu">
  <?php //callling the menu... 
          wp_nav_menu(
             array(
              'theme_location' => 'post_cetagory',
                'container_class' => 'leftnavmenu',
                'items_wrap' => '<ul class="main-menu">%3$s</ul>'
              )
         ); 
    ?> 

      <!---<li><a href="#">SNAPP HAPPY</a></li>
      <li><a href="#">OPEN DESIGNS</a></li>
      <li><a href="#">ANDREAS VIKLUND</a></li>
      <li><a href="#">JAMES KOSTER</a></li>
      <li><a href="#"> CSS PLAY</a></li>
      <li><a href="#">LISTAMATIC</a></li>
      <li><a href="#"> LAYOUTGALA</a></li>
      <li><a href="#"> BLUEROBOT</a></li>-->
    </ul>


  
    
    
      <h3>Post Category </h3>
      <?php
        $args = array(
          'orderby' => 'slug',
          'parent' => 0
        );

        $categories = get_categories( $args );
        foreach ( $categories as $category ) {
          echo '<li><a href="' . get_category_link( $category->term_id ) . '" rel="bookmark"> <i class="glyphicon glyphicon-asterisk"> '  
          . $category->name . '</i>' . '' . $category->description . '</a></li>';
         }
      ?>

      <h3>About</h3>
      <?php wp_get_archives( array( 'type' => 'daily', 'limit' => 12,'order' => 'ASC' )); ?>

      <?php dynamic_sidebar('sidebar-one'); ?>
    
    <p class="quote">Happiness is a journey, not a destination.</p>
  </div>