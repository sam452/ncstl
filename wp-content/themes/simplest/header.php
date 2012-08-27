<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <title><?php bloginfo( 'name' ); ?><?php wp_title( '&mdash;' ); ?></title>
    <?php if ( is_singular() && get_option( 'thread_comments') ) wp_enqueue_script( 'comment-reply' ); ?>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
<div id='wrapper'>

  <div id='container'>
      
      <div id="header" class="chrome-center">
      <div class="bLogo1"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.jpg" width="100%" height="100%" alt="NCStL logo" /></div>
    
    <div id='search'>
      <form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
      <div><input type="text" size="18" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" />
      <input type="submit" id="searchsubmit" value="Search" class="btn" />
      </div>
      </form>
    </div><!--#search-->

    <nav>    
      <?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu_class' => 'nav', 'theme_location' => 'primary-menu' ) ) ?>
    </nav>

      </div><!--end of header-->
    

   