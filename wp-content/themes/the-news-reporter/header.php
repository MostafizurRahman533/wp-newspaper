<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php bloginfo( 'name' ); ?></title>
<meta charset="<?php bloginfo( 'charset' ); ?>">

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/font/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/font/font.css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/jquery.bxslider.css" media="screen" />

<?php
if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
?>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div class="body_wrapper">
  <div class="center">
    <div class="header_area">
      
      <div class="logo floatleft">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="" /></a>
      </div>

      <div class="top_menu floatleft" style="width:40%; ">
      <?php //callling the menu... 
          wp_nav_menu(
             array(
              'theme_location' => 'header_menu',
                'container_class' => 'top_menu floatleft',
                'items_wrap' => '<ul class="">%3$s</ul>'
              )
         ); 
      ?>   
      </div>
      <div class="social_plus_search floatright">
          <?php dynamic_sidebar('social-top-head'); ?>
        <div class="search">
          <?php get_template_part('searchform'); ?>
        </div>
      </div>
    </div>
    <div class="main_menu_area">
      <?php //callling the menu... 
          wp_nav_menu(
             array(
              'theme_location' => 'top_menu',
                'container_class' => 'main-navigation',
                'items_wrap' => '<ul class="main-menu">%3$s</ul>'
              )
         ); 
      ?> 
    </div>