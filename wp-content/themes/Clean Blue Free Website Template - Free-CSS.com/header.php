

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html <?php language_attributes(); ?>>
<head>
<title><?php bloginfo( 'name' ); ?></title>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet" type="text/css" />

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div id="container">
  <div id="top">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" style="color: black;">
      <h1>Company Name</h1>
    </a>


    <div class="search">
     <?php get_template_part('searchform'); ?>   
   </div>


  </div>

  <!------------------------------------><!------------------------------------>
  <!------------------------------------><!------------------------------------>
  <!------------------------------------><!------------------------------------>
  <div id="navcontainer">
    <?php //callling the menu... 
          wp_nav_menu(
             array(
              'theme_location' => 'header_menu',
                'container_class' => 'navcontainer',
                'items_wrap' => '<ul class="main-menu">%3$s</ul>'
              )
         ); 
    ?> 
  </div>