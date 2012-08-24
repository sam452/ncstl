	<?php
	
	add_action( 'admin_init', 'rw_register_meta_box' );
function rw_register_meta_boxes()
{
    // Check if plugin is activated or included in theme
    if ( !class_exists( 'RW_Meta_Box' ) )
        return;
    $prefix = 'rw_';
    $meta_box[] = array(
        'id'       => 'merch',
        'title'    => 'Merchandise Information',
        'pages'    => array( 'post', 'page' ),
        'context'  => 'normal',
        'priority' => 'high',
        'fields' => array(
            array(
                'name'  => 'Item name',
                'desc'  => 'Item Name',
                'id'    => $prefix . 'name',
                'type'  => 'text',
                'std'   => 'Item name here',
                'class' => 'merchandise',
                'clone' => true,
            ), //matches to inner array
        ) //matches to fields; this is where to add more fields
    ); //matches to metabox
    new RW_Meta_Box( $meta_box );
} //matches to function call

?>