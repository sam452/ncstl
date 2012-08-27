<?php
/**
 * Registering meta boxes
 *
 * All the definitions of meta boxes are listed below with comments.
 * Please read them CAREFULLY.
 *
 * You also should read the changelog to know what has been changed before updating.
 *
 * For more information, please visit:
 * @link http://www.deluxeblogtips.com/meta-box/docs/define-meta-boxes
 */

/********************* META BOX DEFINITIONS ***********************/

/**
 * Prefix of meta keys (optional)
 * Use underscore (_) at the beginning to make keys hidden
 * Alt.: You also can make prefix empty to disable it
 */
// Better has an underscore as last sign
$prefix = 'merch_';

global $meta_boxes;

$meta_boxes = array();

// 2nd meta box
$meta_boxes[] = array(
	'id'    => 'merchandise',
	'title' => 'Merchandise',
	'pages' => array( 'post', 'merchandise', 'slider' ),
	'class' => 'merchandise',

	'fields' => array(
		// price
		array(
			'name' => 'Price here',
			'desc' => 'Item price',
			'id'   => "{$prefix}price",
			'type' => 'text',
			'std'  => 'xxx.xx',
		),
		// designs
		array(
			'name' => 'Designs',
			'desc' => 'Variations of the item',
			'id'   => "{$prefix}design",
			'type' => 'text',
			'std'  => 'Style or color',
		),
		// sizes
		array(
			'name' => 'Sizes',
			'id'   => "{$prefix}sizes",
			'type' => 'select',
			// Array of 'key' => 'value' pairs for select box
			'options' => array(
				's'		=> 'Small',
				'm'		=> 'Medium',
				'l'		=> 'Large',
			),
			// Select multiple values, optional. Default is false.
			'multiple' => true,
			// Default value, can be string (single value) or array (for both single and multiple values)
			'std'  => array( 'l' ),
			'desc' => 'Select the sizes available.',
		),
	)
);



/********************* META BOX REGISTERING ***********************/

/**
 * Register meta boxes
 *
 * @return void
 */
function merch_register_meta_boxes()
{
	global $meta_boxes;

	// Make sure there's no errors when the plugin is deactivated or during upgrade
	if ( class_exists( 'RW_Meta_Box' ) )
	{
		foreach ( $meta_boxes as $meta_box )
		{
			new RW_Meta_Box( $meta_box );
		}
	}
}
// Hook to 'admin_init' to make sure the meta box class is loaded before
// (in case using the meta box class in another plugin)
// This is also helpful for some conditionals like checking page template, categories, etc.
add_action( 'admin_init', 'merch_register_meta_boxes' );

function rw_maybe_include()
{
	// Check for page template
	$checked_templates = array( 'single-merchandise.php', 'sidebar-page.php' );

	$template = get_post_meta( $post_id, '_wp_page_template', true );
	if ( in_array( $template, $checked_templates ) )
		return true;

	// If no condition matched
	return false;
}