

<?php /* Registering menu support */
function news_register_menu(){
	if(function_exists('register_nav_menu')){
		register_nav_menu('header_menu', __('Header Menu', 'news')); 
		register_nav_menu('footer_menu', __('Footer Menu', 'news')); 
		register_nav_menu('post_cetagory', __('Main Menu', 'news')); 
	} 
}
add_action('init','news_register_menu');
/**
 * Widget Support
 */
function widgets_sidebar(){
	register_sidebar( array(
		'name'          => esc_html__( 'Home Page Sidebar Top', 'news' ),
		'id'            => 'widget-home-top',
		'before_widget' => '<div class="widget"><div class="category-sidebar">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h2 class="headbar">',
		'after_title'   => '</h2> '
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Social Link Top Head', 'news' ),
		'id'            => 'social-top-head',
		'before_widget' => '<div class="social">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => ''
	) );
		register_sidebar( array(
		'name'          => esc_html__( 'Footer', 'news' ),
		'id'            => 'social-top-head',
		'before_widget' => '<div class="social">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => ''
	) );
}
add_action( 'widgets_init', 'widgets_sidebar' );


//* POST FEATURED IMAGE.. 

add_theme_support('post-thumbnails',array('post','page'));
set_post_thumbnail_size(300,200,true);  
add_image_size('myFituredImage', 300, 200, true);
add_image_size('myFituredImageTwo', 200, true);