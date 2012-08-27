<?php
  if ( !isset( $content_width ) ) $content_width = 768;
  if ( function_exists( 'add_theme_support' ) ) add_theme_support( 'automatic-feed-links' );
  if ( function_exists('register_sidebar') ) register_sidebars(7,array(
    'name' => __( 'sidebar_%d' ),
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

add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( 'acme_product',
    array(
      'labels' => array(
        'name' => __( 'Events' ),
        'singular_name' => __( 'Event' )
      ),
    'public' => true,
    'has_archive' => true,
    )
  );
}
remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'custom_trim_excerpt');

function custom_trim_excerpt($text) { // Fakes an excerpt if needed
global $post;
if ( '' == $text ) {
$text = get_the_content('');
$text = apply_filters('the_content', $text);
$text = str_replace(']]>', ']]>', $text);
$text = strip_tags($text);
$excerpt_length = 25;
$words = explode(' ', $text, $excerpt_length + 1);
if (count($words) > $excerpt_length) {
array_pop($words);
array_push($words, '...');
$text = implode(' ', $words);
}
}
return $text;
}


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