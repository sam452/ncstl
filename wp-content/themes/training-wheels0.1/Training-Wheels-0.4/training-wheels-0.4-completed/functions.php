<?php if ( function_exists( 'register_nav_menus' ) ) : ?>

	<?php register_nav_menus(
		  array(
			'top_header_menu' => 'Menu at the very top of the page',
			'bottom_header_menu' => 'Menu Below header Banner'
			)); 
	?>

<?php endif; ?>
<?php if (function_exists('register_sidebar'))

	register_sidebar(array(
	'name'=>'Left Side',
	'id' => 'leftside',
	'before_widget' => '<div class="leftwidgets">',
	'after_widget' => '</div>',
	'before_title' => '<h2 class="widgettitle">',
	'after_title' => '</h2>',
	));
	

	register_sidebar(array(
	'name'=>'Right Side',
	'id' => 'rightside',
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h2 class="widgettitle">',
	'after_title' => '</h2>',
	));
?>

