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
   }   
  function codex_custom_init() {
  $labels = array(
    'name' => _x('People', 'The people of the NCStL'),
    'singular_name' => _x('Person', 'A person of the NCStL'),
    'add_new' => _x('Add New', 'person'),
    'add_new_item' => __('Add New Person'),
    'edit_item' => __('Edit Person'),
    'new_item' => __('New Person'),
    'all_items' => __('All People'),
    'view_item' => __('View Person'),
    'search_items' => __('Search People'),
    'not_found' =>  __('No person found'),
    'not_found_in_trash' => __('No people found in Trash'), 
    'parent_item_colon' => 'History',
    'menu_name' => __('People')
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
    'hierarchical' => false,
    'menu_position' => null,
    'menu_icon' => get_stylesheet_directory_uri() . '/img/people-button-image.gif',
    'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
  ); 
  register_post_type('people',$args);
}
add_action( 'init', 'codex_custom_init' );    //end of custom pages
    



//end of php call
?>