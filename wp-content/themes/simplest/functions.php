<?php
  if ( !isset( $content_width ) ) $content_width = 768;
  if ( function_exists( 'add_theme_support' ) ) add_theme_support( 'automatic-feed-links' );
  if ( function_exists('register_sidebar') ) register_sidebar( array(
    'name' => __( 'Widgets', 'simplest' ),
    'id' => 'widgets',
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div><!-- widget -->',
    'before_title' => '<h4>',
    'after_title' => '</h4>') );
    add_custom_background();
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(520, 250, true);
    add_action( 'init', 'register_my_menu' );
    function register_my_menu() {
      register_nav_menu( 'primary-menu', __( 'Primary Menu' ) );
      
  add_action( 'init', 'create_my_post_types' );
    function create_my_post_types() {
      register_post_type( 'Railroad', 
		array(
		       'labels' => array(
		         'name' => __( 'Train pages' ),
		      'singular_name' => __( 'Train page' ),
		      'add_new' => __( 'Add New' ),
		      'add_new_item' => __( 'Add New Train Page' ),
		      'edit' => __( 'Edit' ),
		      'edit_item' => __( 'Edit Train Page' ),
		      'new_item' => __( 'New Train Page' ),
		      'view' => __( 'View Train Page' ),
		      'view_item' => __( 'View Train Page' ),
		      'search_items' => __( 'Search Railroad Pages' ),
		      'not_found' => __( 'No Railroad pages found' ),
		      'not_found_in_trash' => __( 'No Railroad pages found in Trash' ),
		      'parent' => __( 'History' )
			 ),
			'menu_icon' => get_stylesheet_directory_uri() . '/img/train-button-image.gif',
		)
	  );
     }    //end of custom pages
    





}//end of php call
?>