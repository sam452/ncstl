<!--------------------------------------------------------------------------------------------------------------
The code in this document was compiled for lesson 2 of the wptuts WordPress Theme Development Training Wheels series
by Nur Ahmad Furlong - www.nomad-one.com & www.wpbedouine.com
---------------------------------------------------------------------------------------------------------------->

<!-- WordPress Stylesheet Theme Definition Comment -->
/* 
	Theme Name: Training Wheels
	Theme URI: http://www.wpbedouine.com
	Description: A theme to learn WordPress Theme Development from Scratch
	Version: 0.1
	Author: Nur Ahmad Furlong
	Author URI: http://www.nomad-one.com
*/

<!--
	The WordPress stylesheet theme definition comment is used to give WordPress the theme's unique information
    so it can be registered and identified in the Appearance > Themes theme management area as well as within
    the WordPress Theme's directory when searching or categorising themes.
-->



<!-- BASIC SITE INFO FUNCTIONS =============================================================================== -->

<!-- BLOG NAME -->
<?php bloginfo('name'); ?>
<!--
    The bloginfo('name'); function above generates the name you typed in when you set up your wordpress site
    This name can be edited in Settings > General within the WordPress admin dashboard
-->



<!-- BLOG TAGLINE -->
<?php bloginfo('description'); ?>
<!-- 
    The bloginfo('description'); function fetches your Tagline the database which is editable in Settings > General
    You'll see I've made use of this function in the <title> in the <head> of the HTML template as well.
-->



<!-- HOME URL -->
<?php echo home_url(); ?>
<!--
    The home_url(); function above generates the site's homepage URL wherever you place it in your code
-->
previously used - <?php bloginfo('url'); ?>



<!-- usage example 1 -->
<h1>
    <a href="<?php echo home_url(); ?>">
        <?php bloginfo('name'); ?>
    </a>
</h1>


<!-- usage example 2 -->
<title>
  <?php bloginfo('name'); ?> | <?php bloginfo('description'); ?>
</title>




<!-- FUNCTIONS TO GENERATE URLS AND FOLDER PATHWAYS ============================================================================ -->

<!-- STYLESHEET URL -->
<?php echo get_stylesheet_uri(); ?>
<!--
the get_stylesheet_uri(); function fetches your HTML stylesheet link in the head of your HTML page
this will help wordpress detect the stylesheet url/folder pathway for the currently activated theme
it's necessary because your themes stylesheet is now deeply nested within the wordpress software's many folders
Ensure that echo is added before the function in the php tag as the plain function does not generate the actual url but only fetches it
-->
previously used - <?php bloginfo('stylesheet_url'); ?> (now deprecated)

<!-- generates - http://www.mysite.com/wp-content/themes/current-theme/style.css -->

<!-- usage example -->
<link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet" type="text/css" />




<!-- URL TO PARENT THEME ROOT FOLDER -->
<?php echo get_template_directory_uri(); ?>

<!-- generates - http://www.mysite.com/wp-content/themes/current-parent-theme -->

previously used - <?php bloginfo('template_directory'); ?> (now deprecated)

<!-- usage example -->
<h1>
  <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" />
</h1>





<!-- URL TO CHILD THEME ROOT FOLDER -->
<?php echo get_stylesheet_directory_uri(); ?>

<!-- generates - http://www.mysite.com/wp-content/themes/current-child-theme -->

<!-- usage example -->
<p>
  <a href="<?php echo get_stylesheet_directory_uri(); ?>/files/mydoc.doc">
  	Download My Doc
  </a>
</p>




<!-- WORDPRESS MENUS ==================================================================================== -->

<?php wp_list_pages(); ?>
<!--
function does the following by default:

- Get a list of all pages published
- Add them into an unordered list each within an <li> item
- Add links around the page name within the <li> item
- Add generic and custom class names to <li> items
- Add titles to the links based on Page name
- Add child or sub pages as nested lists within parent <li>
- Wrap the entire menu <ul> with an outer <li> with Pages title
-->

<!-- usage example -->
<div id="menu">
    <ul>
        <?php wp_list_pages(); ?>
    </ul>
</div>

<!-- Additional Arguments -->

<?php wp_list_pages('title_li='); ?><!-- removes outer "Pages" title which is a default -->

<?php wp_list_pages('child_of=25'); ?><!-- displays child pages of page with ID number 25 -->

<?php wp_list_pages('exclude=2,7,20'); ?><!-- excludes pages with ID number 2,7,20 -->

<?php wp_list_pages('include=2,7,20'); ?><!-- only includes pages with ID number 2,7,20 -->

<?php wp_list_pages('sort_column=menu_order'); ?><!-- Orders pages according to order numbers given in page editor -->

<?php wp_list_pages('sort_order=desc'); ?><!-- the order to display in either asc or desc -->

<?php wp_list_pages('depth=1'); ?><!-- How many Sub levels to show -->


<?php wp_list_pages('link_before=<span>'); ?>

<?php wp_list_pages('link_after=</span>'); ?>

<!-- Combined arguments -->
<?php wp_list_pages('sort_column=menu_order&child_of=25&exclude=27,28,29&title_li='); ?>

<!-- Combining arguments using arrays -->
<?php wp_list_pages(
     array(
          'include'          =>     '2,7,20',
          'depth'            =>     '2',
          'sort_column'      =>     'menu_order',
          'title_li'         =>     '',
          )
); ?>

<!-- Much more detail to be found here - http://codex.wordpress.org/Function_Reference/wp_list_pages -->


<!-- WP LIST PAGE - child pages of current page
The Code above will list child pages of the currently active page if there are any.
-->
<?php
	$pages = get_pages('child_of='.$post->ID.'&sort_column=post_title');
	$count = 0;
	foreach($pages as $page)
	{ ?>
	
		<li><a href="<?php echo get_page_link($page->ID) ?>"><?php echo $page->post_title ?></a></li>
		
<?php } ?>


<!-- WORDPRESS MENUS ==================================================================================== -->

<?php wp_page_menu(); ?>

<!-- Optional Arguments -->
link_before - Sets the text or html that precedes the link text inside <a> tag.

<?php wp_page_menu('link_before=<span>'); ?>

link_after - Sets the text or html that follows the link text inside <a> tag.

<?php wp_page_menu('link_after=<span>'); ?>

menu_class - adds a custom class of your choice to the wrapper div

<?php wp_page_menu('menu_class=my_menu'); ?>

show_home - allows for displaying a home link

<?php wp_page_menu('show_home=Home'); ?>

exclude_tree - excludes parent as well as all descendants of that parent

<?php wp_page_menu('exclude_tree=5,7'); ?>


<!-- Combination or Arguments -->
<?php wp_page_menu('include=2,7,20&show_home=My%20Home%20Page&link_before=<span>&link_after=</span>&sort_column=menu_order&menu_class=my_menu_class'); ?>
            
<!-- Combination of Arguments in array format -->
<?php wp_page_menu(
		array(

			'include' => '2,7,20',
			'show_home' => 'My Home Page',
			'link_before' => '<span>',
			'link_after' => '</span>',
			'sort_column' => 'menu_order',
			'menu_class' => 'my_menu_class'
			)
); ?>


<!-- CUSTOM MENUS ==================================================================================== -->


<?php register_nav_menu( $location, $description ); ?>

<!-- register single menu -->
<?php register_nav_menu( 'primary', 'Primary Menu' ); ?>


<!-- register multiple menus using an array -->
<?php 
register_nav_menus( // notice s added to the end of the functin
                array(
                  'top_header' => 'Menu at the very top of the page',
                  'bottom_header' => 'Menu Below header Banner' )
				  
); ?>


<!-- Conditional statment wrapping register Menus code to prevent errors in old versions of WordPress
As pre 3.0 versions of WordPress do not support Custom Menus -->
<?php if ( function_exists( 'register_nav_menus' ) ) { // checks of theme supports this function

  register_nav_menus(
                  array(
                    'top_header' => 'Menu at the very top of the page',
                    'bottom_header' => 'Menu Below header Banner'
					)
  				  
  ); 

} ?>

<!-- A slightly modified version seperating the registration code and the conditional statement -->
<?php if ( function_exists( 'register_nav_menus' ) ) : ?>

	<?php register_nav_menus(
		  array(
			'top_header' => 'Menu at the very top of the page',
			'bottom_header' => 'Menu Below header Banner'
			)); 
	?>

<?php endif; ?>



<!-- PLACING THE MENU INTO THE THEME  ==================================================================================== -->
<!-- default generic placement code -->
<?php wp_nav_menu(); ?>

<!-- placement of a menu from a specific registered location -->
<?php wp_nav_menu('theme_location','primary-menu');?>

<!-- More advanced placement code specifying container HTML wrapper, id attribute
theme location, menu items depth for sub menus, and empty menu class -->

<?php wp_nav_menu(
	array(
		'container'			=> 'div',
		'container_id'		=> 'top-header-menu',
		'theme_location'	=> 'top_header',
		'depth'				=> '1',
		'menu_class'		=> 'top-menu-list',
		'fallback_cb'		=> 'false'
	));
?>

<!-- The full list of parameters as found on the WordPress Codex -->
<?php wp_nav_menu(array(
  'theme_location'  => '',
  'menu'            => '', 
  'container'       => 'div', 
  'container_class' => 'menu-{menu slug}-container', 
  'container_id'    => '',
  'menu_class'      => 'menu', 
  'menu_id'         => '',
  'echo'            => true,
  'fallback_cb'     => 'wp_page_menu',
  'before'          => '',
  'after'           => '',
  'link_before'     => '',
  'link_after'      => '',
  'items_wrap'      => '<ul id=\"%1$s\" class=\"%2$s\">%3$s</ul>',
  'depth'           => 0,
  'walker'          => ''));
?>


<!--
The Menu placement code below checks if this version of WordPress supporst Custom Menus,
If so it generates the menu found in 'bottom_header_menu' location, or falls back to a wp_list_pages menu of all the pages
Furthermore it places a wrapper <div id="menu"> around the entire code generated, and generates a <ul class="bottom-menu-list">

If This version of WP does not support Custom Menus it falls back to a default wp_list_pages('title_li=&depth=0') menu
-->
<?php  if(function_exists('wp_nav_menu')) : ?>

    <?php wp_nav_menu(
        array(
            'theme_location'		=> 'bottom_header_menu',
            'container'				=> 'div',
            'container_id'			=> 'menu',
            'menu_class'      		=> 'bottom-menu-list'
        ));
    ?>

<?php else: ?>

	<div class="menu">
	    <ul>
	        <?php wp_list_pages('title_li=&depth=0'); ?>
	   </ul>
	</div>
    
<?php endif; ?>