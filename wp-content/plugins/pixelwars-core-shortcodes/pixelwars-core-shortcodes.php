<?php
/*
Plugin Name: Pixelwars Core Shortcodes
Plugin URI:  https://www.pixelwars.org
Description: Shortcodes for Pixelwars themes.
Version:     1.0.4
Author:      Pixelwars
Author URI:  https://www.pixelwars.org
License:     ThemeForest License
Text Domain: pixelwars-core-shortcodes
Domain Path: /languages/
*/


/* ============================================================================================================================================= */


	// Don't load directly.
	
	if (! defined('ABSPATH'))
	{
		die('-1'); // Exit if accessed directly.
	}


/* ============================================================================================================================================= */


	function pixelwars_core_shortcodes_load_plugin_textdomain()
	{
		load_plugin_textdomain(
			'pixelwars-core-shortcodes',
			false,
			dirname(plugin_basename(__FILE__)) . '/languages'
		);
	}
	
	add_action('init', 'pixelwars_core_shortcodes_load_plugin_textdomain');


/* ============================================================================================================================================= */


	$pixelwars_core_shortcodes_ABSPATH  = dirname(__FILE__) . '/';
	
	include_once($pixelwars_core_shortcodes_ABSPATH . 'themes/themes.php');

?>