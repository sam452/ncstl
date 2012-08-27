<?php
  if ( !isset( $content_width ) ) $content_width = 768;
  if ( function_exists( 'add_theme_support' ) ) add_theme_support( 'automatic-feed-links' );
  if ( function_exists('register_sidebar') ) register_sidebars(7,array(
    'name' => __( 'Left-Hand Sidebar %d' ),
    'id' => 'primary',
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
   }   
    
include 'mycustoms.php';

add_action( 'init', 'register_my_taxonomies', 0 );

function register_my_taxonomies() {

	register_taxonomy(
		'equipment',
		array( 'post' ),
		array(
			'public' => true,
			'labels' => array(
				'name' => __( 'Equipment' ),
				'singular_name' => __( 'Equipment' ),
				'query_var' => true,
				hierarchical => true
			),
		)
	);
	register_taxonomy(
		'history',
		array( 'post' ),
		array(
			'public' => true,
			'labels' => array(
				'name' => __( 'History' ),
				'singular_name' => __( 'History' ),
				'query_var' => true,
				hierarchical => true
			),
		)
	);
} // end of taxonomy test

include 'meta-merch.php';

/* Beginning of Allow Custom Post Type Archive*/
add_filter('pre_get_posts', 'query_post_type');
function query_post_type($query) {
 if ( is_category() || is_tag()) {
    $post_type = get_query_var('post_type');
	if($post_type)
	    $post_type = $post_type;
	else
	    $post_type = array('post','merchandise','nav_menu_item');
             // replace cpt with custom post type
    $query->set('post_type',$post_type);
	return $query;
    }
}
/* Ending of Allow Custom Post Type Archive*/

//end of php call
?>