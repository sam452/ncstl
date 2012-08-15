<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package NCPS
 * 
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
</head>

<body >
<div id="wrapper">
	<div id="header">

Header info here.


	</div><!-- #header -->

		<div id="container">
           Container div here.
		
		   <sidebar>
		      sidebar info here
		    </sidebar>
			<div id="content">
			
			</div> <!--- content

	  
		</div><!-- #container -->


	<div id="footer">
	  footer content here.
	</div><!-- #footer -->
	
			<div class="copyright">&copy;2012, NC&amp;StL Preservation Society
			</div><!-- #site-generator -->
</div> <!---wrapper

//<?php get_sidebar(); ?>
//<?php get_footer(); ?>

</body>
</html>