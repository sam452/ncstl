<?php 


//register menu
register_nav_menu( 'primary', 'Primary Menu' );

//register sidebar
register_sidebar(array(
  'name' => __( 'Right Hand Sidebar' ),
  'id' => 'right-sidebar',
  'description' => __( 'Widgets in this area will be shown on the right-hand side.' ),
  'before_title' => '<h1>',
  'after_title' => '</h1>'
));



//register People post type
function codex_custom_init() {
  $labels = array(
    'name' => _x('People', 'post type general name'),
    'singular_name' => _x('Person', 'post type singular name'),
    'add_new' => _x('Add New', 'person'),
    'add_new_item' => __('Add New Person'),
    'edit_item' => __('Edit Person'),
    'new_item' => __('New Person'),
    'all_items' => __('All People'),
    'view_item' => __('View People'),
    'search_items' => __('Search People'),
    'not_found' =>  __('No people found'),
    'not_found_in_trash' => __('No people found in Trash'), 
    'parent_item_colon' => '',
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
    'supports' => array( 'title', 'editor',  'thumbnail',  'comments' )
  ); 
  register_post_type('person',$args);
}
add_action( 'init', 'codex_custom_init' );

include TEMPLATEPATH. '/demo.php';





?>