<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html <?php language_attributes(); ?>>
<head>
  <?php
if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
?>
<title><?php bloginfo( 'name' ); ?></title>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/coin-slider.css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/cufon-yui.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/cufon-titillium-900.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/coin-slider.min.js"></script>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="logo">
        <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?>
        <small><?php bloginfo('description'); ?></small></a></h1>
      </div>
      <div class="searchform">

          <?php get_template_part('searchform'); ?>
      </div>
      <div class="clr"></div>
      <div class="menu_nav">



        <?php 
          wp_nav_menu(
             array(
              'theme_location' => 'top_menu',
                'container_class' => 'menu_nav',
                'items_wrap' => '<ul class="main-menu">%3$s</ul>'
              )
         ); 
?>
      </div>
