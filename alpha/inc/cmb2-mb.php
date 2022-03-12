<?php 


add_action( 'cmb2_init', 'cmb2_add_image_metabox' );
function cmb2_add_image_metabox() {

	$prefix = '_alpha_';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'image_information',
		'title'        => __( 'Image Information', 'alpha' ),
		'object_types' => array( 'post' ),
		'context'      => 'normal',
		'priority'     => 'default',
	) );

	$cmb->add_field( array(
		'name' => __( 'Camera Model', 'alpha' ),
		'id' => $prefix . 'camera_model',
		'type' => 'text',
		'default' => 'canon',
	) );

	$cmb->add_field( array(
		'name' => __( 'Location', 'alpha' ),
		'id' => $prefix . 'location',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Date', 'alpha' ),
		'id' => $prefix . 'date',
		'type' => 'text_date',
	) );

	$cmb->add_field( array(
		'name' => __( 'lisensed', 'alpha' ),
		'id' => $prefix . 'lisensed',
		'type' => 'checkbox',
	) );

	$cmb->add_field( array(
		'name' => __( 'Lisensed Information', 'alpha' ),
		'id' => $prefix . 'lisensed_information',
		'type' => 'textarea',
        'attributes' => array(
            'data-conditional-id' => $prefix . 'lisensed', 
        )
	) );
	$cmb->add_field( array(
		'name' => __( 'Image', 'alpha' ),
		'id' => $prefix . 'image',
		'type' => 'file',
	) );
	$cmb->add_field( array(
		'name' => __( 'Upload File', 'alpha' ),
		'id' => $prefix . 'upload',
		'type' => 'file',
		'text' => array(
			'add_upload_file_text' => __('Upload File Convert'),
		),
		'query_args' => array(
			'type' => array('application/pdf')
		),
		'options' => array(
			'url' => false
		)
	) );

}



function cmb2_add_table_tp_metabox() {

	$prefix = '_alpha_';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'price_table',
		'title'        => __( 'price table', 'alpha' ),
		'object_types' => array( 'page'),
		'context'      => 'normal',
		'priority'     => 'default',
	) );

	$group_sec = $cmb->add_field( array(
		'name' => __( 'Priching Table', 'alpha' ),
		'id' => $prefix . 'priching_table',
		'type' => 'group',
	) );
	$cmb->add_group_field($group_sec, array(
		'name' => __( 'CAPTION', 'alpha' ),
		'id' => $prefix . 'priching_option_caption',
		'type' => 'text',
	) );

	$cmb->add_group_field($group_sec, array(
		'name' => __( 'Priching Option', 'alpha' ),
		'id' => $prefix . 'priching_option',
		'type' => 'text',
		'repeatable' => true
	) );
	$cmb->add_group_field($group_sec, array(
		'name' => __( 'Price', 'alpha' ),
		'id' => $prefix . 'price',
		'type' => 'text',
	) );

}
add_action( 'cmb2_init', 'cmb2_add_table_tp_metabox' );
