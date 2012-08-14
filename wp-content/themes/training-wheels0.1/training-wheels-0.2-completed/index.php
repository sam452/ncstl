<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>
  <?php bloginfo('name'); ?> | <?php bloginfo('description'); ?>
</title>
<!-- BLOG NAME & DESCRIPTION FOR PAGE TITLE
The bloginfo('name'); code above places the name you typed in when you set up your wordpress site into the Page's SEO Title
This name can be edited in the Settings > General area of your wordpress admin dashboard under Site Title.
It is then follow by the bloginfo('description'); function, which places the site's Tagline found in the same dashboard settings area.
Page Titles are crucial for SEO and should contain important eywords for which you wish to rank the site and specific pages.
-->

<link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet" type="text/css" />
<!-- STYLESHEET URL
the get_stylesheet_uri() function replace your HTML stylesheet link in the head of your HTML page
this will help wordpress detect the stylesheet url/folder pathway for the currently activated theme
it's necessary because your themes stylesheet is now deeply nested within the wordpress software's many folders
this function will result in something like the following: http://www.mysite.com/wp-content/themes/current-theme/style.css
-->

<link href='http://fonts.googleapis.com/css?family=Dancing+Script:400,700' rel='stylesheet' type='text/css'>
<!-- GOOGLE FONTS
The Link above enables the Dancing Script font from Google fonts so we can set whatever text we want to use that font.
Google fonts are a great way to give your theme some custom typographic style. It just works!
-->

</head>

<body>

	<div id="container">
		
		<div id="header"><!-- Header Begins Here -->
			<h1>
	            <a href="<?php echo home_url(); ?>">
					<?php bloginfo('name'); ?>
	            </a>
            </h1>
            <!-- BLOG NAME & URL
                The bloginfo('name'); function above generates the name you typed in when you set up your wordpress site
                The bloginfo('url'); function above generates the site's homepage URL wherever you place it in your code
			-->
			<h2><?php bloginfo('description'); ?></h2>
            <!-- BLOG DESCRIPTION
                The bloginfo('description'); function fetches your Tagline the database which is editable in Settings > General
                You'll see I've made use of this function in the <title> in the <head> of the HTML template as well.
            -->
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
				<h3>Training Wheels Lesson 1</h3>
                <p><img src="<?php echo get_template_directory_uri(); ?>/images/training-wheels.jpg" width="426" height="142" alt="Training Wheels" /></p>
                <!-- TEMPLATE DIRECTORY
				  The bloginfo('template_directory'); is used to place a full url from the site's root directory all the way to the currently activated theme's directory.
				  It will generate something which looks like "http://www.mysite.com/wp-content/themes/themefoldername"
				  When placing content images using the IMG tag this wordpress function needs to be places just before the images directory
				  within the href as shown in the example above. Be sure to include the forwardslash after the function.
                  This function is used to link to other files in the theme directory like scripts, flash files, additional CSS files etc.
				-->
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
            <!-- BLOG NAME & URL
                Once again the bloginfo('name'); is used, and as illustrated can be used anywhere within your theme code
                to generate the Site Name content which you set in Settings > General within the dashboard.
            -->
		</div>
	
	</div>
	
</body>

</html>
