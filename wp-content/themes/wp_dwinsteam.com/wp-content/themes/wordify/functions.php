<?php 
/*******************************************************************************
* | MENU REGISTRATION |...
*/
function DwinsTeam_register_menu(){
	if(function_exists('register_nav_menu')){
		register_nav_menu('menu_1', __('Menu 1', 'DwinsTeam')); 
		register_nav_menu('menu_2', __('Menu 2', 'DwinsTeam')); 
		register_nav_menu('menu_3', __('Menu 3', 'DwinsTeam')); 
	} 
}
add_action('init','DwinsTeam_register_menu');


/*******************************************************************************
* | Featured Image Registration |...
*/
add_theme_support('post-thumbnails',array('post','page','slider-items','team-members','owner-info','product-items'));
set_post_thumbnail_size(1200,1200,true);  
add_image_size('myFituredImage', 1900, 900, true);
add_image_size('slider-items', 1900, 900, true);  
add_image_size('team-members', 1900, 900, true); 
add_image_size('owner-info', 1900, 900, true); 
add_image_size('product-items', 400, 200, true); 


/***************************************************************************************
*Tag customization/ Add classes to tags.. 
*/
function add_class_the_tags($html){
    $postid = get_the_ID();
    $html = str_replace('<a','<a class="category mb-5"',$html);
    return $html;
}
add_filter('the_tags','add_class_the_tags',10,1);

/***************************************************************************************
*COMMENT SECTION FIELD RE-ARRANGED.. 
*/
function dwinsteam_move_comment_field_to_bottom( $fields ) {
	$comment_field = $fields['comment'];
	unset( $fields['comment'] );
	//unset($fields['email']); 
	$fields['comment'] = $comment_field;
	return $fields;
}
add_filter( 'comment_form_fields', 'dwinsteam_move_comment_field_to_bottom' );

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

/************************************************************************************
*SLIDER ... 
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


//SLIDER TAGS.. 
function slider_gallery_taxonomy(){
	register_taxonomy(
		'slider-items', //The name of the taxonomy. Name should be in slug form (Must Not Contain Capital Letters or Spaces). 
		'slider-items', //post type name 
		array(
			'hierarchical' => true,
			'label' => 'Slider Category', //Display Name..
			'query_var' => true, 
			'rewrite' => array(
				'slug' => 'slider-category', //This is controls the base slug that will display before each term 
				'with_front' =>true //Don't display the category base before 
			)
		) 
	);
}
add_action('init','slider_gallery_taxonomy');

//CUSTOM METABOX OPTION.
function slider_custom_meta() {
	add_meta_box( 'slider_meta', __( 'Others Section', 'TextDomain_name' ), 'slider_meta_callback', 'slider-items' );
}
add_action( 'add_meta_boxes', 'slider_custom_meta' );

//METABOX CALLBACK.. 
function slider_meta_callback( $post ) {
	wp_nonce_field( basename( __FILE__ ), 'slider_nonce' ); //slider_stored_meta
	$slider_stored_meta = get_post_meta( $post->ID );
	?>
	<input type="text" name="meta-subtitle-slider" value="<?php if ( isset ( $slider_stored_meta['meta-subtitle-slider'] ) ) echo $slider_stored_meta['meta-subtitle-slider'][0]; ?>" style="width:100%;font-size:16px; margin-bottom:15px; " placeholder="Enter Sub Title Here">
	<?php
}

//Custom Meta Box Input Field Add/Update # Function -
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


/********************************************************************
* CUSTOM Team Members MEMBER  
*/
function members_function(){
	register_post_type('team-members', array(
		'labels' => array(
			'name' => __('Member'),
			'singular_name' => __('Member'),
			'menu_name' => __('Team Member'),
			'name_admin_bar' => __('Add Member'),
			'all_items' => __('All Member'),
			'add_new' => __('Add Member'),
			'add_new_item' => __('Add New Member'),
			'edit_item' => __('Edit Member'),
			'new_item' => __('New Member'),
			'view_item' => __('View Member'),
			'search_items' => __('Search Member')
		),
		'public' => true,
		'has_archive' => true, 
		'rewrite' => array('slug' => 'team-members'),
		'menu_position' => 4, 
		'menu_icon' => 'dashicons-products',
		'supports' => array('title','thumbnail','editor')
	));
}
add_action('init','members_function'); 


/***************************************************************************
*OWNER INFORMATION CUSTOM FUNCTIONS..........
*/
function owner_info(){
	register_post_type('owner-info', array(
		'labels' => array(
			'name' => __('Owner'),
			'singular_name' => __('Owner'),
			'menu_name' => __('Owner Information'),
			'name_admin_bar' => __('Add Owner'),
			'all_items' => __('All Owner'),
			'add_new' => __('Add Owner'),
			'add_new_item' => __('Add New Owner'),
			'edit_item' => __('Edit Owner'),
			'new_item' => __('New Owner'),
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
add_action('init','owner_info'); 

//CUSTOM META BOX.. 
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
//INPUT FIELD UPDATE FOR OWNER INFO.. TW  
function owner_meta_callback_tw( $post ) {
	wp_nonce_field( basename( __FILE__ ), 'owner_nonce' ); //slider_stored_meta
	$owner_stored_meta = get_post_meta( $post->ID );
?>
	<input type="text" name="meta-tw-owner" value="<?php if ( isset ( $owner_stored_meta['meta-tw-owner'] ) ) echo $owner_stored_meta['meta-tw-owner'][0]; ?>" style="width:100%;font-size:16px; margin-bottom:15px; " placeholder="e.g &mdash; https://www.twitter.com/Owner_Name/">
<?php
}
//INPUT FIELD UPDATE FOR OWNER INFO.. YT  
function owner_meta_callback_ins( $post ) {
	wp_nonce_field( basename( __FILE__ ), 'owner_nonce' ); //slider_stored_meta
	$owner_stored_meta = get_post_meta( $post->ID );
?>
	<input type="text" name="meta-ins-owner" value="<?php if ( isset ( $owner_stored_meta['meta-ins-owner'] ) ) echo $owner_stored_meta['meta-ins-owner'][0]; ?>" style="width:100%;font-size:16px; margin-bottom:15px; " placeholder="e.g &mdash; https://www.instagram.com/Owner_Name/">
<?php
}



//UPDATE CUSTOM FB.. 
function owner_meta_save( $post_id ) {
	// Checks save status
	$is_autosave = wp_is_post_autosave( $post_id );
	$is_revision = wp_is_post_revision( $post_id );
	$is_valid_nonce = ( isset( $_POST[ 'owner_stored_meta' ] ) && wp_verify_nonce( $_POST[ 'owner_stored_meta' ], basename( __FILE__ ) ) ) ? 'true' : 'false';
 
	// Exits script depending on save status 
	if ( $is_autosave || $is_revision || !$is_valid_nonce ) { return; }
 
	// Checks for input and sanitizes/saves if needed | FB 
	if( isset( $_POST[ 'meta-facebook-owner' ] ) ) {
		update_post_meta( $post_id, 'meta-facebook-owner', sanitize_text_field( $_POST[ 'meta-facebook-owner' ] ) );
	}	
	// Checks for input and sanitizes/saves if needed | YT 
	if( isset( $_POST[ 'meta-yt-owner' ] ) ) {
		update_post_meta( $post_id, 'meta-yt-owner', sanitize_text_field( $_POST[ 'meta-yt-owner' ] ) );
	}	
	// Checks for input and sanitizes/saves if needed | tw 
	if( isset( $_POST[ 'meta-tw-owner' ] ) ) {
		update_post_meta( $post_id, 'meta-tw-owner', sanitize_text_field( $_POST[ 'meta-tw-owner' ] ) );
	}	
	// Checks for input and sanitizes/saves if needed | ins 
	if( isset( $_POST[ 'meta-ins-owner' ] ) ) {
		update_post_meta( $post_id, 'meta-ins-owner', sanitize_text_field( $_POST[ 'meta-ins-owner' ] ) );
	}

}
add_action( 'save_post', 'owner_meta_save' );


/******************************************************************************************************
* CUSTOM PRODUCT LIST OPTION... 
*/
function our_product(){
	register_post_type('product-items', array(
		'labels' => array(
			'name' => __('Product'),
			'singular_name' => __('Product'),
			'menu_name' => __('Our Product'),
			'name_admin_bar' => __('Add Product'),
			'all_items' => __('All Product'),
			'add_new' => __('Add Product'),
			'add_new_item' => __('Add New Product'),
			'edit_item' => __('Edit Product'),
			'new_item' => __('New Product'),
			'view_item' => __('View Product'),
			'search_items' => __('Search Product')
		),
		'public' => true,
		'has_archive' => true, 
		'rewrite' => array('slug' => 'product-items'),
		'menu_position' => 8, 
		'menu_icon' => 'dashicons-products',
		'supports' => array('title','thumbnail','editor')
	));
}
add_action('init','our_product'); 


/*****************************************************************
* FOOTER WIDGET REG- 1 | LEFT 
*/
function widgets_footer(){
	register_sidebar( array(
		'name'          => __( 'Footer Left', 'prothom-alo' ),
		'id'            => 'widget-footer-left',
		'before_widget' => '<div class="col-md-4">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3> ',
	) );	
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Center', 'DwinsTeam' ),
		'id'            => 'widget-footer-center',
		'before_widget' => '<div class="col-md-7">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3> ',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Right', 'DwinsTeam' ),
		'id'            => 'widget-footer-right',
		'before_widget' => '<div class="col-md-4">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3> ',
	) );
		register_sidebar( array(
		'name'          => esc_html__( 'Footer Bottom', 'DwinsTeam' ),
		'id'            => 'widget-footer-bottom',
		'before_widget' => ' <div class="col-md-12 text-center">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3> ',
	) );
}
add_action( 'widgets_init', 'widgets_footer' );
