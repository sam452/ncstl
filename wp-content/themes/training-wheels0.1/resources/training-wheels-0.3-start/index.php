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

		</div>
		
		<div id="menu">
        
			<ul>
            	<?php wp_page_menu(
				array(
					'include'		=> '18,19,20',
					'show_home'		=> 'My Home Page',
					'link_before'	=> '<span>',
					'link_after'	=> '</span>',
					'sort_column'	=> 'menu_order',
					'menu_class'	=> 'my_menu_class'
					)
	  			); ?>
            	<!-- WP PAGE MENU
				wp_page_menu(); function allows us to create a list of pages published in our site
                
				* Include the pages specified with their ID numbers 
                * Add a home link called My Home Page
				* Add menu items into an unordered list each within an <li> item
				* add links around the page name within the <li> item
				* Add generic and custom class names to <li> items
				* Add titles to the links based on Page name
				* Add child or sub pages as nested lists within parent <li>
				* Wrap the entire menu with a div with "my_menu_class" assigned to it
                * Sort the page menu items based on the admin specified menu order
                * Wrap Menu items with opening & closing span tags
				-->
			</ul>

		</div>
		<div id="content">
			
			<div id="sidebar" class="left"><!-- Left Sidebar Begins Here -->
				<h4>Sidebar Header</h4>
                <?php wp_list_pages('title_li=<h4>Menu</h4>'); ?>
                
                <!-- WP LIST PAGE - title_li argument
				* title_li argument allows us to modify the outer <li> title wording or structure
                * removing the outer title requires using title_li without any value as in our main menu
				-->
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
                    <!-- WP LIST PAGE - child pages of current page
                    The Code above will list child pages of the currently active page if there are any.
					-->
                    

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
