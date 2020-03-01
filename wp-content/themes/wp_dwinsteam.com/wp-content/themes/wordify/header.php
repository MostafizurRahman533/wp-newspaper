<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <title><?php bloginfo( 'name' ); ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300, 400,700|Inconsolata:400,700" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.min.css">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/fonts/flaticon/font/flaticon.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>"> 

<?php
if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
?>

    <?php wp_head(); ?>
  </head>
  <body>
    

    <div class="wrap">

      <header role="banner">
        <div class="top-bar">
          <div class="container">
            <div class="row">
              <div class="col-9 social">
                <a href="#"><span class="fa fa-twitter"></span></a>
                <a href="#"><span class="fa fa-facebook"></span></a>
                <a href="#"><span class="fa fa-instagram"></span></a>
                <a href="#"><span class="fa fa-youtube-play"></span></a>
              </div>
              <div class="col-3 search-top">
                <!-- <a href="#"><span class="fa fa-search"></span></a> -->
                <form action="<?php echo home_url( '/' ); ?>" method="get" class="search-top-form">
                  <span class="icon fa fa-search"></span>
                  <input type="search" name="s" id="s" placeholder="Type keyword & press Enter...">
                </form>

              </div>
            </div>
          </div>
        </div>

        <div class="container logo-wrap">
          <div class="row pt-5">
            <div class="col-12 text-center">
              <a class="absolute-toggle d-block d-md-none" data-toggle="collapse" href="#navbarMenu" role="button" aria-expanded="false" aria-controls="navbarMenu"><span class="burger-lines"></span></a>
              <h1 class="site-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
            </div>
          </div>
        </div>
        
        <nav class="navbar navbar-expand-md  navbar-light bg-light">
          <div class="container">
            
           
            <div class="collapse navbar-collapse" id="navbarMenu">

<!--
              <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                  <a class="nav-link active" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Business</a>
                </li>
              </ul>-->
<?php 
          wp_nav_menu(
             array(
              'theme_location' => 'menu_1',
                'container_class' => 'collapse navbar-collapse',
                'items_wrap' => '<ul class="navbar-nav mx-auto myMenu">%3$s</ul>'
              )
         ); 
?>
              
            </div>
          </div>
        </nav>
      </header>
      <!-- END header -->