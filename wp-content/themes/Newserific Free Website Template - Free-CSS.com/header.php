<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html <?php language_attributes(); ?>>
<head>
<title><?php bloginfo('name'); ?></title>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/layout/styles/layout.css" type="text/css" />
<?php wp_head(); ?>
</head>
<body id="top">
<div class="wrapper col1">
  <div id="header">
    <div class="fl_left">
      <h1><a href="index.html">Newserific</a></h1>
      <p>Free Website Template</p>
    </div>
    <div class="fl_right"><a href="#"><img src="<?php echo get_template_directory_uri();?>/images/demo/468x60.gif" alt="" /></a></div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col2">
  <div id="topbar">
    <div id="topnav">
      <ul>

        <?php //callling the menu... 
          wp_nav_menu(
             array(
              'theme_location' => 'header_top_menu',
                'container_class' => 'main-navigation',
                'items_wrap' => '<ul class="main-menu">%3$s</ul>'
              )
         ); 
?> 

      </ul>
    </div>
    <div id="search">
      <form action="#" method="post">
        <fieldset>
          <legend>Site Search</legend>
          <input type="text" value="Search Our Website&hellip;"  onfocus="this.value=(this.value=='Search Our Website&hellip;')? '' : this.value ;" />
          <input type="submit" name="go" id="go" value="Search" />
        </fieldset>
      </form>
    </div>
    <br class="clear" />
  </div>
</div>