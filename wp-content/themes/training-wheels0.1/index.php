<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>WordPress Training Wheels</title>

<link href='http://fonts.googleapis.com/css?family=Dancing+Script:400,700' rel='stylesheet' type='text/css'>

<link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet" type="text/css" /> 

</head>

<body>

	<div id="container">
		
		<div id="header"><!-- Header Begins Here -->  
    <h1>  
        <a href="<?php echo home_url(); ?>  ">  
            <?php bloginfo('name'); ?>  
        </a>  
    </h1>  
  <h2><?php bloginfo('description'); ?></h2>   
 
      <?php  if(function_exists('wp_nav_menu')) : ?>  
  
    <?php wp_nav_menu(  
        array(  
            'theme_location'        => 'top_header_menu',  
            'container'             => 'div',  
            'container_id'          => 'top-menu',  
            'menu_class'            => 'top-menu-list',  
            'fallback_cb'           => 'false'  
        ));  
    ?>  
  
<?php else: ?>  
  
    <div class="menu">  
        <ul>  
            <?php wp_list_pages('include=12,6&title_li=&depth=2'); ?> 
     

        </ul>  
    </div>  
  
<?php endif; ?>  

</div> 
		
		<div id="menu">  
 <ul>  
	    <?php wp_page_menu(  
                array(  
                    'include'       => '12,6,14',  
                    'show_home'     => 'My Home Page',  
                    'link_before'   => '<span>',  
                    'link_after'    => '</span>',  
                    'sort_column'   => 'menu_order',  
                    'menu_class'    => 'my_menu_class'  
                )  
); ?>   
 </ul>  
</div>  

		</div>
		<div id="content">
			
			<div id="sidebar" class="left"><!-- Left Sidebar Begins Here -->
				<h4>Sidebar Header</h4>
				<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Left Side') ) : ?>  
    <h3 class="widget-title">No Widgets added</h3>  
    <p>Please login and add some widgets to this sidebar</p>  
<?php endif; ?>  
			</div>
			
			<div id="middle-column"><!-- Main Content Begins Here -->  
    <h3>Training Wheels Lesson 1</h3>  
    <p><img src="<?php echo get_template_directory_uri(); ?>/images/training-wheels.jpg" width="426" height="142" alt="Training Wheels" /></p>  
</div> 
			
			<div id="sidebar" class="right"><!-- Right Sidebar Begins Here -->
				<h4>Sidebar Header</h4>
    <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar(2) ) : ?>  
        <h3 class="widget-title">Categories</h3>  
        <ul>  
            <?php wp_list_categories(); ?>  
        </ul>  
        <h3 class="widget-title">Archives</h3>  
        <ul>  
            <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>  
        </ul>  
    <?php endif; ?>    


			</div>
			
			<div style="clear:both;"></div>
			
		</div><!-- Content Ends Here -->
		
		<div id="footer"><!-- Footer Content Begins Here -->
			<p>&copy; Wordpress Training Wheels, by wpbedouine</p>
		</div>
	
	</div>
	
</body>

</html>
