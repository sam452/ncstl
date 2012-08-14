<?php if ( function_exists( 'register_nav_menus' ) ) : ?>

	<?php register_nav_menus(
		  array(
			'top_header_menu' => 'Menu at the very top of the page',
			'bottom_header_menu' => 'Menu Below header Banner'
			)); 
	?>

<?php endif; ?>