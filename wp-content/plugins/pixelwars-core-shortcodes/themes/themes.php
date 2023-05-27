<?php

	$pixelwars_core_shortcodes_template = get_option('template');
	
	switch ($pixelwars_core_shortcodes_template)
	{
		case 'efor':
		
			include_once($pixelwars_core_shortcodes_ABSPATH . 'themes/global/enqueue-styles-scripts.php');
			include_once($pixelwars_core_shortcodes_ABSPATH . 'themes/global/shortcodes.php');
			include_once($pixelwars_core_shortcodes_ABSPATH . 'themes/global/shortcode-generator/shortcode-generator.php');
		
		break;
		
		case 'lahanna':
		
			include_once($pixelwars_core_shortcodes_ABSPATH . 'themes/global/enqueue-styles-scripts.php');
			include_once($pixelwars_core_shortcodes_ABSPATH . 'themes/global/shortcodes.php');
		
		break;
		
		case 'theblogger':
		
			include_once($pixelwars_core_shortcodes_ABSPATH . 'themes/global/enqueue-styles-scripts.php');
			include_once($pixelwars_core_shortcodes_ABSPATH . 'themes/global/shortcodes.php');
		
		break;
	}

?>