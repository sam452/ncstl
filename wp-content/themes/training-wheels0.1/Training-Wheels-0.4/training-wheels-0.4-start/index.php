<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>
  <?php bloginfo('name'); ?> | <?php bloginfo('description'); ?>
</title>


<link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Dancing+Script:400,700' rel='stylesheet' type='text/css'>


</head>

<body>

	<div id="container">
		
		<div id="header"><!-- Header Begins Here -->
			<h1>
	            <a href="<?php echo home_url(); ?>">
					<?php bloginfo('name'); ?>
	            </a>
            </h1>
			<h2><?php bloginfo('description'); ?></h2>

			<?php  if(function_exists('wp_nav_menu')) : // Checks if this version of WP supports menus ?>
            
				 <?php wp_nav_menu(
	                  array(
	                       'theme_location'		=> 'top_header_menu',	// Link this menu to a registered location
	                       'container'			=> 'div',				// specify div as container wrapper
	                       'container_id'		=> 'top-menu',			// ID for container wrapper div
						   'menu_class'			=> 'top-menu-list',		// class on UL
	                       'fallback_cb'		=> 'false'				// Falls back to no menu when nothing specified in dashboard
	                  ));
	             ?>
             
             <?php endif; // ends the conditional argument ?>
			<!--
	        The Menu placement code above generates the menu found in 'top_header_menu' location, or falls back nothing if no menu is found
	        Furthermore it places a wrapper <div id="top-menu"> around the entire code generated, and generates a <ul class="top-menu-list">
	        
	        If This version of WP does not support Custom Menus it falls back nothing
	        -->
		</div>
        
        
		<?php  if(function_exists('wp_nav_menu')) : // Checks if this version of WP supports menus ?>
		
			<?php wp_nav_menu(
				array(
					'theme_location'		=> 'bottom_header_menu',	// Link this menu to a registered location
					'container'				=> 'div',					// specify div as container wrapper
					'container_id'			=> 'menu',					// ID for container wrapper div
					'menu_class'      		=> 'bottom-menu-list'		// class on UL
				));
			?>
		
		<?php else: // If custom menus not support then the following code will be executed instead ?>
		<div class="menu">
        	<ul>
		   		<?php wp_list_pages('title_li=&depth=0'); ?>
           </ul>
		</div>
		<?php endif; // ends the conditional argument ?>
		<!--
        The Menu placement code above checks if this version of WordPress supporst Custom Menus,
        If so it generates the menu found in 'bottom_header_menu' location, or falls back to a wp_list_pages menu of all the pages
        Furthermore it places a wrapper <div id="menu"> around the entire code generated, and generates a <ul class="bottom-menu-list">
        
        If This version of WP does not support Custom Menus it falls back to a default wp_list_pages('title_li=&depth=0') menu
        -->

        
        
		<div id="content">
			
			<div id="sidebar" class="left"><!-- Left Sidebar Begins Here -->
				<h4>Sidebar Header</h4>
				

			</div>
			
			<div id="middle-column"><!-- Main Content Begins Here -->
				<h3>Training Wheels Lesson 3</h3>
                <p><img src="<?php echo get_template_directory_uri(); ?>/images/training-wheels.jpg" width="426" height="142" alt="Training Wheels" /></p>
			</div>
			
			<div id="sidebar" class="right"><!-- Right Sidebar Begins Here -->
	
                
                <h3>Sub Pages of <?php the_title(); ?></h3>
                <ul>
					<?php
					$pages = get_pages('child_of='.$post->ID.'&sort_column=post_title');
					$count = 0;
					foreach($pages as $page)
					{ ?>
                    
						<li><a href="<?php echo get_page_link($page->ID) ?>"><?php echo $page->post_title ?></a></li>
                        
					<?php } ?> 
                </ul>
				
			</div>
			
			<div style="clear:both;"></div>
			
		</div><!-- Content Ends Here -->
		
		<div id="footer"><!-- Footer Content Begins Here -->
			<p>&copy; <?php bloginfo('name'); ?>, by wpbedouine</p>
		</div>
	
	</div>
	
</body>

</html>
