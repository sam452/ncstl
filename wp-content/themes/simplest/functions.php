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
    
// include 'mycustoms_old.php';

add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( 'acme_product',
    array(
      'labels' => array(
        'name' => __( ' New Events' ),
        'singular_name' => __( 'An Event' )
      ),
    'public' => true,
    'has_archive' => true,
    )
  );
}
remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'custom_trim_excerpt');

function merchandise_init() {
  $labels = array(
    'name' => _x('Merchandise'),
    'singular_name' => _x('Item'),
    'add_new' => _x('Add New', 'item'),
    'add_new_item' => __('Add New Item'),
    'edit_item' => __('Edit Item'),
    'new_item' => __('New Item'),
    'all_items' => __('All Items'),
    'view_item' => __('View Item'),
    'search_items' => __('Search Merchandise'),
    'not_found' =>  __('No item found'),
    'not_found_in_trash' => __('No merchandise found in Trash'), 
    'menu_name' => __('Merchandise')
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => true,
    'menu_position' => null,
    // 'menu_icon' => get_stylesheet_directory_uri() . '/img/merch.jpg',
    'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    'taxonomies' => array('category')
  ); 
  register_post_type('merchandise',$args);
}
add_action( 'init', 'merchandise_init' );

function add_merchandise_category_automatically($post_ID) {
    global $wpdb;
    if(!has_term('','category',$post_ID)){
        $cat = array(23);
        wp_set_object_terms($post_ID, $cat, 'category');
    }
}
add_action('publish_merchandise', 'add_merchandise_category_automatically');

function custom_trim_excerpt($text) { // Fakes an excerpt if needed
global $post;
if ( '' == $text ) {
$text = get_the_content('');
$text = apply_filters('the_content', $text);
$text = str_replace(']]>', ']]>', $text);
$text = strip_tags($text);
$excerpt_length = 35;
$words = explode(' ', $text, $excerpt_length + 1);
if (count($words) > $excerpt_length) {
array_pop($words);
array_push($words, '...');
$text = implode(' ', $words);
}
}
return $text;
}

add_filter('wp_nav_menu_items','add_search_box_to_menu', 10, 2);
function add_search_box_to_menu( $items, $args ) {
    if( $args->theme_location == 'primary-menu' )
        return $items."<li class='menu-header-search'><form action='http://example.com/' id='searchform' method='get'><input type='text' name='s' id='s' placeholder='Search'></form></li>";
    return $items;
}

function modify_jquery() {
    if (!is_admin()) {
        // comment out the next two lines to load the local copy of jQuery
        //wp_deregister_script('jquery');
        //wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js', false, '1.4.4');
        wp_enqueue_script('jquery');
    }
}
add_action('init', 'modify_jquery');

include 'meta-events.php';
include 'meta-merch.php';

//end of php call
?>