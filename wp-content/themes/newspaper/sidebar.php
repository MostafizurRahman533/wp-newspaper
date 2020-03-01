  
      <div class="sidebar">
        <div class="gadget">
          <h2 class="star"><span>Sidebar</span> Menu</h2>
          <div class="clr"></div>


        <?php 
          wp_nav_menu(
             array(
              'theme_location' => 'sidebar_name2',
                'container_class' => 'gadget',
                'items_wrap' => '<ul class="sb_menu">%3$s</ul>'
              )
         ); 
        ?>
        </div>


        <div class="gadget">
          <h2 class="star"><span>Tages</span></h2>

          <ul class="ex_menu">
          <?php wp_tag_cloud('format=list'); ?>

          </ul>

        </div>






        <div class="author">
          <h2 class="star"><span>Author</span></h2>
            <div class="image">
              <?php echo get_avatar( get_the_author_meta( 'ID' ), $size, $default, $alt, $args ); ?>
              <h3><?php the_author_meta('last_name'); ?></h3>
                  <a href="<?php the_Permalink(); ?>"><button class="fahad">Read my Bio</button></a>
                  <br/><br/>

                  <a href="#" class="fa fa-facebook-square" style="height: 15px;font-size: 15px;margin-left: 10px;">
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                  </a>

                  <a href="#" class="fa fa-github" style="height: 15px;font-size: 15px;margin-left: 10px;">
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                  </a>

                <a href="#" class="fa fa-linkedin-square" style="height: 15px;font-size: 15px;margin-left: 10px;">
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                  </a>
                <a href="#" class="fa fa-twitter-square" style="height: 15px;font-size: 15px;margin-left: 10px;">
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                  </a>

                <a href="#" class="fa fa-stack-overflow" style="height: 15px;font-size: 15px;margin-left: 10px;">
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                  </a>

              

                

            </div>



        </div>

      




      </div>
    


      <div class="clr"></div>

    </div>
  </div>