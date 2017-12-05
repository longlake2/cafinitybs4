<?php

add_action( 'cmb2_admin_init', 'cmb2_cafinitybs4_metaboxes' );
/**
 * Define the metabox and field configurations.
 */
function cmb2_cafinitybs4_metaboxes() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_cafinitybs4_';

	/**
	 * Initiate the metabox
	 */
	$cmb = new_cmb2_box( array(
		'id'            => 'test_metabox',
		'title'         => __( 'Test Metabox', 'cmb2' ),
		'object_types'  => array( 'page', ), // Post type
		'show_on'       => array( 'key' => 'page-template', 'value' => 'templates/about.php' ),
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) );

	// Input Area for left column
	$cmb->add_field( array(
		'name'       => __( 'Left Column', 'cmb2' ),
		'desc'       => __( 'Content for left column', 'cmb2' ),
		'id'         => $prefix . 'left',
		'type'       => 'textarea',

	) );

	// Input Area for right column
	$cmb->add_field( array(
		'name'       => __( 'Right Column', 'cmb2' ),
		'desc'       => __( 'Content for right column', 'cmb2' ),
		'id'         => $prefix . 'right',
		'type'       => 'textarea',

	) );

}