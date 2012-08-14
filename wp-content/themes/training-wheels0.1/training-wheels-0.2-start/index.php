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
the get_stylesheet_uri(); function fetches your HTML stylesheet link in the head of your HTML page
this will help wordpress detect the stylesheet url/folder pathway for the currently activated theme
it's necessary because your themes stylesheet is now deeply nested within the wordpress software's many folders

Ensure that echo is added before the function in the php tag as the plain function does not generate the actual url but only fetches it
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
				This name can be edited in Settings > General within the WordPress admin dashboard
    
                The home_url(); function above generates the site's homepage URL wherever you place it in your code
			-->
			<h2><?php bloginfo('description'); ?></h2>
            <!-- BLOG DESCRIPTION
                The bloginfo('description'); function fetches your Tagline the database which is editable in Settings > General
                You'll see I've made use of this function in the <title> in the <head> of the HTML template as well.
            -->
		</div>
		
		<div id="menu">
        
			<ul>
            	<li><a href="index.html">Home</a></li>
				<li><a href="#">About</a></li>
                <li><a href="#">More Info</a></li>
                <li><a href="#">Contact</a></li>
			</ul>

		</div>
		<div id="content">
			
			<div id="sidebar" class="left"><!-- Left Sidebar Begins Here -->
				<h4>Sidebar Header</h4>
			</div>
			
			<div id="middle-column"><!-- Main Content Begins Here -->
				<h3>Training Wheels Lesson 1</h3>
                <p><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/training-wheels.jpg" width="426" height="142" alt="Training Wheels" /></p>
                <!-- TEMPLATE DIRECTORY
				  The get_stylesheet_directory_uri(); is used to place a full url from the site's root directory all the way to the currently activated theme's directory.
				  It will generate something which looks like "http://www.mysite.com/wp-content/themes/themefoldername"
				  When placing content images using the IMG tag this wordpress function needs to be places just before the images directory
				  within the href as shown in the example above. Be sure to include the forwardslash after the function.
                  This function is used to link to other files in the theme directory like scripts, flash files, additional CSS files etc.
                  
                  Ensure that echo is added before the function in the php tag as the plain function does not generate the actual url but only fetches it
				-->
			</div>
			
			<div id="sidebar" class="right"><!-- Right Sidebar Begins Here -->
				<h4>Sidebar Header</h4>
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
