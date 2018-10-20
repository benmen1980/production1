<?php
/*
Plugin Name: My First Plugin
*/

/* admin */
include_once ('admin/views/WPOoptions.php');
include_once ('admin/includes/enqueBootStrap.php');

/* public */
include_once ('public/views/form1.php');
//include_once( 'public/views/view_serials.php' );


function wporg_options_page()
{
	add_submenu_page(
		'tools.php',
		'WPOrg Options',
		'my menu title',
		'manage_options',
		wporg,
		'wporg_options_page_html'
	);
}
add_action('admin_menu', 'wporg_options_page');
/**
 * register wporg_settings_init to the admin_init action hook
 */
add_action('admin_init', 'wporg_settings_init');

function royy_serial_post_type()
{
	register_post_type('royy_serial',
		array(
			'labels'      => array(
				'name'          => __('Serials'),
				'singular_name' => __('Serial'),
			),
			'public'      => true,
			'has_archive' => true,
		)
	);
}
add_action('init', 'royy_serial_post_type');