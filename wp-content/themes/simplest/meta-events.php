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
$prefix = 'event_';

global $meta_boxes;

$meta_boxes = array();

// 2nd meta box
$meta_boxes[] = array(
	'id'    => 'events',
	'title' => 'Events',
	'pages' => array( 'post', 'events', 'slider' ),
	'class' => 'events',

	'fields' => array(
		// date
		array(
			'name' => 'Event date here',
			'desc' => 'Event day',
			'id'   => "{$prefix}date",
			'type' => 'date',
			'std'  => '12-12-1981',
			'size' => '10',
			'format'	=> 'mm-dd-yy'
		),

		// time
		array(
			'name' => 'Event time here',
			'desc' => 'Event start',
			'id'   => "{$prefix}time",
			'type' => 'time',
			'std'  => '12:12:31',
			'size' => '10',
			'format'	=> 'hh:mm'
		),
	)
);



/********************* META BOX REGISTERING ***********************/

/**
 * Register meta boxes
 *
 * @return void
 */
function events_register_meta_boxes()
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
add_action( 'admin_init', 'events_register_meta_boxes' );

//function rw_maybe_include()
//{
	// Check for page template
//	$checked_templates = array( 'single-events.php', 'sidebar-page.php' );

//	$template = get_post_meta( $post_id, '_wp_page_template', true );
//	if ( in_array( $template, $checked_templates ) )
//		return true;

	// If no condition matched
//	return false;
//}