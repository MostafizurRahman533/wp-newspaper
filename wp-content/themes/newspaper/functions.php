<?php

/*
*Menu Registration*
*/
function DwinsTeam_register_menu(){
	if(function_exists('register_nav_menu')){
		register_nav_menu('top_menu', __('Top Menu', 'DwinsTeam')); 
		register_nav_menu('sidebar_name2', __('Sidebar Name 1', 'DwinsTeam')); 
		register_nav_menu('menu_name_3', __('Menu Name 2', 'DwinsTeam')); 
	} 
}
add_action('init','DwinsTeam_register_menu');

/*
*Feature imge registreation
*/
add_theme_support('post-thumbnails',array('post','page','slider-items','owner-info'));
set_post_thumbnail_size(300,300,true);  
add_image_size('myFituredImage', 200, 200, true);
add_image_size('slider-items', 2500, 1200, true); 
add_image_size('owner-info', 1900, 900, true);  
/*
*Slider function Registration 
*/
function slider_gallery(){
	register_post_type('slider-items', array(
		'labels' => array(
			'name' => __('Slider'),
			'singular_name' => __('Slider'),
			'menu_name' => __('Slider Gallery'),
			'name_admin_bar' => __('Add Slider'),
			'all_items' => __('All Slider'),
			'add_new' => __('Add Slider'),
			'add_new_item' => __('Add New Slider'),
			'edit_item' => __('Edit Slider'),
			'new_item' => __('New Slider'),
			'view_item' => __('View Slider'),
			'search_items' => __('Search Slider')
		),
		'public' => true,
		'has_archive' => true, 
		'rewrite' => array('slug' => 'slider-items'),
		'menu_position' => 8, 
		'menu_icon' => 'dashicons-products',
		'supports' => array('title','thumbnail','editor')
	));
}
add_action('init','slider_gallery'); 

/*
*Include the slider tag
*/
function slider_gallery_taxonomy(){
	register_taxonomy(
		'slider-items',  
		'slider-items',  
		array(
			'hierarchical' => true,
			'label' => 'Slider Category', 
			'query_var' => true, 
			'rewrite' => array(
				'slug' => 'slider-category', 
				'with_front' =>true 
			)
		) 
	);
}
add_action('init','slider_gallery_taxonomy');


/*
*coustom metabox option
*/
function slider_custom_meta() {
	add_meta_box( 'slider_meta', __( 'Others Section', 'DwinsTeame' ), 'slider_meta_callback', 'slider-items' );
}
add_action( 'add_meta_boxes', 'slider_custom_meta' );
/*
*Metabox CallBack
*/
 
function slider_meta_callback( $post ) {
	wp_nonce_field( basename( __FILE__ ), 'slider_nonce' ); //slider_stored_meta
	$slider_stored_meta = get_post_meta( $post->ID );
	?>
	<input type="text" name="meta-subtitle-slider" value="<?php if ( isset ( $slider_stored_meta['meta-subtitle-slider'] ) ) echo $slider_stored_meta['meta-subtitle-slider'][0]; ?>" style="width:100%;font-size:16px; margin-bottom:15px; " placeholder="Enter Sub Title Here">

		
	<?php
}

/*
*Metabox input filld add/update
*/
function slider_meta_save( $post_id ) {
	// Checks save status
	$is_autosave = wp_is_post_autosave( $post_id );
	$is_revision = wp_is_post_revision( $post_id );
	$is_valid_nonce = ( isset( $_POST[ 'slider_stored_meta' ] ) && wp_verify_nonce( $_POST[ 'slider_stored_meta' ], basename( __FILE__ ) ) ) ? 'true' : 'false';
 
	// Exits script depending on save status
	if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
		return;
	}
 
	// Checks for input and sanitizes/saves if needed
	if( isset( $_POST[ 'meta-subtitle-slider' ] ) ) {
		update_post_meta( $post_id, 'meta-subtitle-slider', sanitize_text_field( $_POST[ 'meta-subtitle-slider' ] ) );
	}
	if( isset( $_POST[ 'meta-url-name-slider' ] ) ) {
		update_post_meta( $post_id, 'meta-url-name-slider', sanitize_text_field( $_POST[ 'meta-url-name-slider' ] ) );
	}
}
add_action( 'save_post', 'slider_meta_save' );

 /*
 *widget Registration
 */
	function widgets_sidebar(){
			register_sidebar( array(
			'name'          => __( 'Footer Rigth', 'prothom-alo' ),
			'id'            => 'footer_rigth',
			'before_widget' => '<div class="widget"><div class="category-sidebar">',
			'after_widget'  => '</div></div>',
			'before_title'  => '<h2 class="headbar">',
			'after_title'   => '</h2> ',
		) );
						register_sidebar( array(
			'name'          => __( 'Footer Center', 'prothom-alo' ),
			'id'            => 'footer_center',
			'before_widget' => '<div class="widget"><div class="category-sidebar">',
			'after_widget'  => '</div></div>',
			'before_title'  => '<h2 class="headbar">',
			'after_title'   => '</h2> ',
		) );			register_sidebar( array(
			'name'          => __( 'Footer Left', 'prothom-alo' ),
			'id'            => 'footer_left',
			'before_widget' => '<div class="widget"><div class="category-sidebar">',
			'after_widget'  => '</div></div>',
			'before_title'  => '<h2 class="headbar">',
			'after_title'   => '</h2> ',
		) );			register_sidebar( array(
			'name'          => __( 'Footer Bottom', 'prothom-alo' ),
			'id'            => 'footer_bottom',
			'before_widget' => '<div class="widget"><div class="category-sidebar">',
			'after_widget'  => '</div></div>',
			'before_title'  => '<h2 class="headbar">',
			'after_title'   => '</h2> ',
		) );			

	}
	add_action( 'widgets_init', 'widgets_sidebar' );

/*
*comment form function
*/

	function ruhul_academy_move_comment_field_to_bottom( $fields ) {
$comment_field = $fields['comment'];
unset( $fields['comment'] );
$fields['comment'] = $comment_field;
return $fields;
}
add_filter( 'comment_form_fields', 'ruhul_academy_move_comment_field_to_bottom' );

/*
*comment form remove 
*/

/***************************************************************************************
*Remove url/ website link filed from comments area... 
*/
function dwinsteam_disable_comment_amy_filed($fields) { 
    unset($fields['author']);
    unset($fields['url']);
    //unset($fields['email']); 
    return $fields;
}
add_filter('comment_form_default_fields','dwinsteam_disable_comment_amy_filed');

/*
*custom meta box for author
*/
function author_meta(){
	register_post_type('owner-info', array(
		'labels' => array(
			'name' => __('Owner'),
			'singular_name' => __('Owner'),
			'menu_name' => __('Owner Info'),
			'name_admin_bar' => __('Add Info'),
			'all_items' => __('All Owner'),
			'add_new' => __('Add Owner'),
			'add_new_item' => __('Add New Owner'),
			'edit_item' => __('Edit Owner'),
			'new_item' => __('New Owner'),
			'view_item' => __('View Owner'),
			'search_items' => __('Search Owner')
		),
		'public' => true,
		'has_archive' => true, 
		'rewrite' => array('slug' => 'owner-info'),
		'menu_position' => 2, 
		'menu_icon' => 'dashicons-products',
		'supports' => array('title','thumbnail','editor')
	));
}
add_action('init','author_meta'); 
/*
*post a tag shows
*/


/*
*custom meta option 
*/
function owner_custom_meta() {
	add_meta_box( 'owner_meta_one', __( 'Facebook Link #', 'TextDomain_name' ), 'owner_meta_callback_fb', 'owner-info' );
	add_meta_box( 'owner_meta_two', __( 'Youtube Link #', 'TextDomain_name' ), 'owner_meta_callback_yt', 'owner-info' );
	add_meta_box( 'owner_meta_three', __( 'Twitter Link #', 'TextDomain_name' ), 'owner_meta_callback_tw', 'owner-info' );
	add_meta_box( 'owner_meta_four', __( 'Instagram Link #', 'TextDomain_name' ), 'owner_meta_callback_ins', 'owner-info' );
}
add_action( 'add_meta_boxes', 'owner_custom_meta' );

//INPUT FIELD UPDATE FOR OWNER INFO.. FB 
function owner_meta_callback_fb( $post ) {
	wp_nonce_field( basename( __FILE__ ), 'owner_nonce' ); //slider_stored_meta
	$owner_stored_meta = get_post_meta( $post->ID );
?>
	<input type="text" name="meta-facebook-owner" value="<?php if ( isset ( $owner_stored_meta['meta-facebook-owner'] ) ) echo $owner_stored_meta['meta-facebook-owner'][0]; ?>" style="width:100%;font-size:16px; margin-bottom:15px; " placeholder="e.g &mdash; https://www.facebook.com/Owner_Name/">
<?php
}

//INPUT FIELD UPDATE FOR OWNER INFO.. YT  
function owner_meta_callback_yt( $post ) {
	wp_nonce_field( basename( __FILE__ ), 'owner_nonce' ); //slider_stored_meta
	$owner_stored_meta = get_post_meta( $post->ID );
?>
	<input type="text" name="meta-yt-owner" value="<?php if ( isset ( $owner_stored_meta['meta-yt-owner'] ) ) echo $owner_stored_meta['meta-yt-owner'][0]; ?>" style="width:100%;font-size:16px; margin-bottom:15px; " placeholder="e.g &mdash; https://www.youtube.com/Owner_Name/">
<?php
}