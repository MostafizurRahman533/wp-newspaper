<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html <?php language_attributes(); ?>>
<head>
<title><?php bloginfo('name');?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/layout/styles/layout.css" type="text/css" />
<?php wp_head(); ?>
</head>
<body id="top">
<div class="wrapper col1">
  <div id="head">
    <a href="<?php echo get_template_directory_uri();?>">
    <h1><a href="
<?php echo esc_url( home_url( '/' ) ); ?>index.php">GreyScale Business</a></h1>
    <p>Free Website Template</p>
  </a>

     <?php get_template_part('searchform'); ?> 
    <div id="topnav">

<?php //callling the menu... 
          wp_nav_menu(
             array(
              'theme_location' => 'header_top_menu',
                'container_class' => 'topnav',
                'items_wrap' => '<ul class="main-menu">%3$s</ul>'
              )
         ); 
?> 

    </div>

<?php?>
  </div>
</div>