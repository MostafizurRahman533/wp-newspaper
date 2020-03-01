<?php
/* Registering menu support */
function carnews_register_menu(){
	if(function_exists('register_nav_menu')){
		register_nav_menu('header_top_menu', __('Header Menu', 'carnes')); 
		register_nav_menu('footer_menu', __('Footer Menu', 'carnes')); 
		//register_nav_menu('header_top_menu', __('Main Menu', 'carnes')); 
	} 
}
add_action('init','carnews_register_menu');


function my_widgets_sidebar(){
	register_sidebar( array(
		'name'          => esc_html__( 'Home Page Sidebar One', 'carnews' ),
		'description'   => esc_html__( 'Home Page Sidebar One Descrioption', 'carnews' ),
		'id'            => 'widget-home-one',
		'before_widget' => '<div class="siderbar-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="sidebar-widget-title">',
		'after_title'   => '</h4> ',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer One', 'carnews' ),
		'description'   => esc_html__( 'Footer One Descrioption', 'carnews' ),
		'id'            => 'footer-one',
		'before_widget' => '<div class="siderbar-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="sidebar-widget-title">',
		'after_title'   => '</h4> ',
	) );
}
add_action( 'widgets_init', 'my_widgets_sidebar' );
