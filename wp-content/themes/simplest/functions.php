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


//end of php call
?>