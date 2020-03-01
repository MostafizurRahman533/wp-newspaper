<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
<title><?php bloginfo( 'name' ); ?></title>

<meta charset="<?php bloginfo( 'charset' ); ?>">

<link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet" type="text/css" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="header">
  <ul id="menu">
    <?php //callling the menu... 
          wp_nav_menu(
             array(
              'theme_location' => 'header_menu',
                'container_class' => 'header',
                'items_wrap' => '<ul class="">%3$s</ul>'
              )
         ); 
      ?> 

 </ul>
 

<form  action="<?php echo home_url( '/' ); ?>">
    <input type="search" class="search-field" value="<?php echo get_search_query() ?>" name="s"  style="margin-top: 10px;"/>
    <input name="input2" type="submit" id="input2" value="Search" /> 
</form>
</div>