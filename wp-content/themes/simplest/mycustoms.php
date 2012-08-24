<?php
// People
function people_init() {
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
    'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    'taxonomies' => array('category')
  ); 
  register_post_type('people',$args);
}
add_action( 'init', 'people_init' );

// Merch
function merchandise_init() {
  $labels = array(
    'name' => _x('Merchandise', 'Gifts for the train fans'),
    'singular_name' => _x('Item', 'Gifts for the train fans'),
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
    'menu_icon' => get_stylesheet_directory_uri() . '/img/people-button-image.gif',
    'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    'taxonomies' => array('category')
  ); 
  register_post_type('merchandise',$args);
}
add_action( 'init', 'merchandise_init' );

// Equipment
function equipment_init() {
  $labels = array(
    'name' => _x('Equipment', 'The machinery of the NCStL'),
    'singular_name' => _x('Equipment', 'Equipment of the NCStL'),
    'add_new' => _x('Add New', 'equipment'),
    'add_new_item' => __('Add New Equipment'),
    'edit_item' => __('Edit Equipment'),
    'new_item' => __('New Equipment'),
    'all_items' => __('All Equipment'),
    'view_item' => __('View Equipment'),
    'search_items' => __('Search Equipment'),
    'not_found' =>  __('No equipment found'),
    'not_found_in_trash' => __('No equipment found in Trash'), 
    'parent_item_colon' => 'History',
    'menu_name' => __('Equipment')
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
    'menu_icon' => get_stylesheet_directory_uri() . '/img/train-button-image.gif',
    'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    'taxonomies' => array('steam', 'diesel', 'passenger', 'freight', 'maintenance')
  ); 
  register_post_type('equipment',$args);
}



add_action( 'init', 'equipment_init' );    //end of custom pages





?>