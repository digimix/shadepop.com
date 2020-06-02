<?php
/**
 * Custom functions
 */

/* * Loads the Options Panel * * If you're loading from a child theme use stylesheet_directory * instead of template_directory */
if ( !function_exists( 'optionsframework_init' ) ) { 
	define('OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/lib/options/' ); 
	require_once locate_template('lib/options/options-framework.php');
	}


/* ================ METABOXES ================ */

add_filter( 'cmb_meta_boxes', 'cmb_metaboxes' );
/**
 * Define the metabox and field configurations.
 *
 * @param  array $meta_boxes
 * @return array
 */
function cmb_metaboxes( array $meta_boxes ) {

	// Start with an underscore to hide fields from custom fields list
	$prefix = 'sp_';


	$meta_boxes[] = array(
		'id'         => 'home_layout',
		'title'      => 'Home Layout',
		'pages'      => array( 'page', ), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, // Show field names on the left
		'show_on'    => array( 'key' => 'page-template', 'value' => 'template-home.php'), // Specific post IDs to display this metabox
		'fields' => array(
			array(
				'name' => 'Hero Box',
				'desc' => 'Copy',
				'id'   => $prefix . 'hero_copy',
				'type' => 'textarea_code',
			),
			array(
				'desc' => 'Hero Box Image',
				'id' => $prefix . 'hero_img',
				'type' => 'file',
				'save_id' => false, // save ID using true
				'allow' => array( 'url', 'attachment' ) // limit to just attachments with array( 'attachment' )
			),
			array(
				'name' => 'Module 1',
				'desc' => 'Copy',
				'id'   => $prefix . 'submodule_copy',
				'type' => 'textarea_code',
			),
			array(
				'desc' => 'Featured Image',
				'id' => $prefix . 'submodule_img',
				'type' => 'file',
				'save_id' => false, // save ID using true
				'allow' => array( 'url', 'attachment' ) // limit to just attachments with array( 'attachment' )
			),
			array(
	            'desc' => 'Background Color',
	            'id'   => $prefix . 'submodule_colorpicker',
	            'type' => 'colorpicker',
				'std'  => '#ffc222'
	        ),			
			array(
				'name' => 'Module 2',
				'desc' => 'Title',
				'id'   => $prefix . 'submodule_2_title',
				'type' => 'text',
			),
			array(
				'desc' => 'Copy',
				'id'   => $prefix . 'submodule_2_copy',
				'type' => 'textarea_code',
			),
			array(
				'desc' => 'Dark Background Logo',
				'id' => $prefix . 'submodule_2_logo',
				'type' => 'file',
				'save_id' => false, // save ID using true
				'allow' => array( 'url', 'attachment' ) // limit to just attachments with array( 'attachment' )
			),
			array(
				'desc' => 'Featured Image',
				'id' => $prefix . 'submodule_2_img',
				'type' => 'file',
				'save_id' => false, // save ID using true
				'allow' => array( 'url', 'attachment' ) // limit to just attachments with array( 'attachment' )
			),
			array(
	            'desc' => 'Background Color',
	            'id'   => $prefix . 'submodule_2_colorpicker',
	            'type' => 'colorpicker',
				'std'  => '#a4cf57'
	        ),
			array(
				'name' => 'Module 3',
				'desc' => 'Copy',
				'id'   => $prefix . 'submodule_3_copy',
				'type' => 'textarea_code',
			),
			array(
				'desc' => 'Button Copy',
				'id'   => $prefix . 'submodule_3_btn_copy',
				'type' => 'text',
			),
			array(
				'desc' => 'Button Link',
				'id'   => $prefix . 'submodule_3_btn_link',
				'type' => 'text',
			),
			array(
	            'desc' => 'Button Color Picker',
	            'id'   => $prefix . 'submodule_3_btn_colorpicker',
	            'type' => 'colorpicker',
				'std'  => '#00cfbb'
	        ),
			array(
				'desc' => 'Featured Image',
				'id' => $prefix . 'submodule_3_img',
				'type' => 'file',
				'save_id' => false, // save ID using true
				'allow' => array( 'url', 'attachment' ) // limit to just attachments with array( 'attachment' )
			),
			
		)
	);
	
	
/* ,'jobs-by-position/risk-management','structuring', 'research-strategy','quantitative-analytics', 'trading' */
	// Add other metaboxes as needed

	return $meta_boxes;
}

add_action( 'init', 'cmb_initialize_cmb_meta_boxes', 9999 );
/**
 * Initialize the metabox class.
 */

 function cmb_initialize_cmb_meta_boxes() {
	if ( ! class_exists( 'cmb_Meta_Box' ) )
		require_once locate_template('/lib/metabox/init.php');
}
