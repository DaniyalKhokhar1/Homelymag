<?php

	function theblogger_ocdi_import_files()
	{
		$theme_directory     = trailingslashit(get_template_directory());
		$theme_directory_url = trailingslashit(get_template_directory_uri());
		
		return array(
			array(
				'import_file_name'             => esc_html__('Default', 'theblogger'),
				'local_import_file'            => $theme_directory     . 'admin/demo-data/default/content.xml',
				'local_import_widget_file'     => $theme_directory     . 'admin/demo-data/default/widgets.wie',
				'local_import_customizer_file' => $theme_directory     . 'admin/demo-data/default/customizer.dat',
				'import_preview_image_url'     => $theme_directory_url . 'admin/demo-data/default/screenshot.jpg'
			),
			array(
				'import_file_name'             => esc_html__('Adventura', 'theblogger'),
				'local_import_file'            => $theme_directory     . 'admin/demo-data/adventura/content.xml',
				'local_import_widget_file'     => $theme_directory     . 'admin/demo-data/adventura/widgets.wie',
				'local_import_customizer_file' => $theme_directory     . 'admin/demo-data/adventura/customizer.dat',
				'import_preview_image_url'     => $theme_directory_url . 'admin/demo-data/adventura/screenshot.jpg'
			),
			array(
				'import_file_name'             => esc_html__('Milo', 'theblogger'),
				'local_import_file'            => $theme_directory     . 'admin/demo-data/milo/content.xml',
				'local_import_widget_file'     => $theme_directory     . 'admin/demo-data/milo/widgets.wie',
				'local_import_customizer_file' => $theme_directory     . 'admin/demo-data/milo/customizer.dat',
				'import_preview_image_url'     => $theme_directory_url . 'admin/demo-data/milo/screenshot.jpg'
			),
			array(
				'import_file_name'             => esc_html__('Phil', 'theblogger'),
				'local_import_file'            => $theme_directory     . 'admin/demo-data/phil/content.xml',
				'local_import_widget_file'     => $theme_directory     . 'admin/demo-data/phil/widgets.wie',
				'local_import_customizer_file' => $theme_directory     . 'admin/demo-data/phil/customizer.dat',
				'import_preview_image_url'     => $theme_directory_url . 'admin/demo-data/phil/screenshot.jpg'
			),
			array(
				'import_file_name'             => esc_html__('Mona', 'theblogger'),
				'local_import_file'            => $theme_directory     . 'admin/demo-data/mona/content.xml',
				'local_import_widget_file'     => $theme_directory     . 'admin/demo-data/mona/widgets.wie',
				'local_import_customizer_file' => $theme_directory     . 'admin/demo-data/mona/customizer.dat',
				'import_preview_image_url'     => $theme_directory_url . 'admin/demo-data/mona/screenshot.jpg'
			),
			array(
				'import_file_name'             => esc_html__('Misty', 'theblogger'),
				'local_import_file'            => $theme_directory     . 'admin/demo-data/misty/content.xml',
				'local_import_widget_file'     => $theme_directory     . 'admin/demo-data/misty/widgets.wie',
				'local_import_customizer_file' => $theme_directory     . 'admin/demo-data/misty/customizer.dat',
				'import_preview_image_url'     => $theme_directory_url . 'admin/demo-data/misty/screenshot.jpg'
			),
			array(
				'import_file_name'             => esc_html__('Lisa', 'theblogger'),
				'local_import_file'            => $theme_directory     . 'admin/demo-data/lisa/content.xml',
				'local_import_widget_file'     => $theme_directory     . 'admin/demo-data/lisa/widgets.wie',
				'local_import_customizer_file' => $theme_directory     . 'admin/demo-data/lisa/customizer.dat',
				'import_preview_image_url'     => $theme_directory_url . 'admin/demo-data/lisa/screenshot.jpg'
			),
			array(
				'import_file_name'             => esc_html__('Eric', 'theblogger'),
				'local_import_file'            => $theme_directory     . 'admin/demo-data/eric/content.xml',
				'local_import_widget_file'     => $theme_directory     . 'admin/demo-data/eric/widgets.wie',
				'local_import_customizer_file' => $theme_directory     . 'admin/demo-data/eric/customizer.dat',
				'import_preview_image_url'     => $theme_directory_url . 'admin/demo-data/eric/screenshot.jpg'
			),
			array(
				'import_file_name'             => esc_html__('Lori', 'theblogger'),
				'local_import_file'            => $theme_directory     . 'admin/demo-data/lori/content.xml',
				'local_import_widget_file'     => $theme_directory     . 'admin/demo-data/lori/widgets.wie',
				'local_import_customizer_file' => $theme_directory     . 'admin/demo-data/lori/customizer.dat',
				'import_preview_image_url'     => $theme_directory_url . 'admin/demo-data/lori/screenshot.jpg'
			),
			array(
				'import_file_name'             => esc_html__('John', 'theblogger'),
				'local_import_file'            => $theme_directory     . 'admin/demo-data/john/content.xml',
				'local_import_widget_file'     => $theme_directory     . 'admin/demo-data/john/widgets.wie',
				'local_import_customizer_file' => $theme_directory     . 'admin/demo-data/john/customizer.dat',
				'import_preview_image_url'     => $theme_directory_url . 'admin/demo-data/john/screenshot.jpg'
			),
			array(
				'import_file_name'             => esc_html__('Anna', 'theblogger'),
				'local_import_file'            => $theme_directory     . 'admin/demo-data/anna/content.xml',
				'local_import_widget_file'     => $theme_directory     . 'admin/demo-data/anna/widgets.wie',
				'local_import_customizer_file' => $theme_directory     . 'admin/demo-data/anna/customizer.dat',
				'import_preview_image_url'     => $theme_directory_url . 'admin/demo-data/anna/screenshot.jpg'
			),
			array(
				'import_file_name'             => esc_html__('Roger', 'theblogger'),
				'local_import_file'            => $theme_directory     . 'admin/demo-data/roger/content.xml',
				'local_import_widget_file'     => $theme_directory     . 'admin/demo-data/roger/widgets.wie',
				'local_import_customizer_file' => $theme_directory     . 'admin/demo-data/roger/customizer.dat',
				'import_preview_image_url'     => $theme_directory_url . 'admin/demo-data/roger/screenshot.jpg'
			),
			array(
				'import_file_name'             => esc_html__('Emma', 'theblogger'),
				'local_import_file'            => $theme_directory     . 'admin/demo-data/emma/content.xml',
				'local_import_widget_file'     => $theme_directory     . 'admin/demo-data/emma/widgets.wie',
				'local_import_customizer_file' => $theme_directory     . 'admin/demo-data/emma/customizer.dat',
				'import_preview_image_url'     => $theme_directory_url . 'admin/demo-data/emma/screenshot.jpg'
			),
			array(
				'import_file_name'             => esc_html__('Andy', 'theblogger'),
				'local_import_file'            => $theme_directory     . 'admin/demo-data/andy/content.xml',
				'local_import_widget_file'     => $theme_directory     . 'admin/demo-data/andy/widgets.wie',
				'local_import_customizer_file' => $theme_directory     . 'admin/demo-data/andy/customizer.dat',
				'import_preview_image_url'     => $theme_directory_url . 'admin/demo-data/andy/screenshot.jpg'
			),
			array(
				'import_file_name'             => esc_html__('Oliver', 'theblogger'),
				'local_import_file'            => $theme_directory     . 'admin/demo-data/oliver/content.xml',
				'local_import_widget_file'     => $theme_directory     . 'admin/demo-data/oliver/widgets.wie',
				'local_import_customizer_file' => $theme_directory     . 'admin/demo-data/oliver/customizer.dat',
				'import_preview_image_url'     => $theme_directory_url . 'admin/demo-data/oliver/screenshot.jpg'
			),
			array(
				'import_file_name'             => esc_html__('Jim', 'theblogger'),
				'local_import_file'            => $theme_directory     . 'admin/demo-data/jim/content.xml',
				'local_import_widget_file'     => $theme_directory     . 'admin/demo-data/jim/widgets.wie',
				'local_import_customizer_file' => $theme_directory     . 'admin/demo-data/jim/customizer.dat',
				'import_preview_image_url'     => $theme_directory_url . 'admin/demo-data/jim/screenshot.jpg'
			),
			array(
				'import_file_name'             => esc_html__('Judy Froster', 'theblogger'),
				'local_import_file'            => $theme_directory     . 'admin/demo-data/judy/content.xml',
				'local_import_widget_file'     => $theme_directory     . 'admin/demo-data/judy/widgets.wie',
				'local_import_customizer_file' => $theme_directory     . 'admin/demo-data/judy/customizer.dat',
				'import_preview_image_url'     => $theme_directory_url . 'admin/demo-data/judy/screenshot.jpg'
			)
		);
	}
	
	add_filter('pt-ocdi/import_files', 'theblogger_ocdi_import_files');
	
	
	function theblogger_ocdi_time_for_one_ajax_call()
	{
		return 10;
	}
	
	add_action('pt-ocdi/time_for_one_ajax_call', 'theblogger_ocdi_time_for_one_ajax_call');


/* ============================================================================================================================================= */


	function theblogger_after_import()
	{
		// Assign menus to their locations.
		
		$main_menu = get_term_by('name', 'Menu 1', 'nav_menu');
		
		set_theme_mod('nav_menu_locations',
			array(
				'theblogger_theme_menu_location' => $main_menu->term_id,
			)
		);
	}
	
	add_action('pt-ocdi/after_import', 'theblogger_after_import');


/* ============================================================================================================================================= */


	add_filter('pt-ocdi/disable_pt_branding', '__return_true');
	
	add_filter('pt-ocdi/regenerate_thumbnails_in_content_import', '__return_false');


/* ============================================================================================================================================= */


	function theblogger_ocdi_plugin_intro_text($default_text)
	{
		$default_text .= '<div class="ocdi__intro-text">';
		$default_text .= 	'<p>';
		$default_text .= 		'<b><span style="color: #ff0000;">' . esc_html__('Important:', 'theblogger') . '</span> ' . esc_html__('Please check the following system requirements you need in order to import demo data. (If you are not sure whether or not your server support this, contact your host.)', 'theblogger') . '</b>';
		$default_text .= 		'<br>';
		$default_text .= 		'<ul>';
		$default_text .= 			'<li><b>' . esc_html__('PHP 7 or Greater:', 'theblogger') . '</b> ' . esc_html__('If your site is hosted on a server with an older PHP, you may experience issues. We recommend you to contact your hosting provider to upgrade to the latest version of PHP.', 'theblogger') . '</li>';
		$default_text .= 			'<li><b>' . esc_html__('MySQL 5.6 or Greater:', 'theblogger') . '</b> ' . esc_html__('MySQL version 5.6 or greater or MariaDB version 10.0 or greater.', 'theblogger') . '</li>';
		$default_text .= 			'<li><b>' . esc_html__('WP Memory Limit:', 'theblogger') . '</b> ' . esc_html__('WP Memory limit of 128 MB or greater. 256 MB or higher is preferred. For further reading check', 'theblogger') . ' <a target="_blank" href="https://wordpress.org/support/article/editing-wp-config-php/#increasing-memory-allocated-to-php">' . esc_html__('here', 'theblogger') . '</a>. ' . esc_html__('(If you are using additional plugins on your site that also have minimum requirements, you may need to increase your memory to help avoid loading issues.)', 'theblogger') . '</li>';
		$default_text .= 		'</ul>';
		$default_text .= 		'<br>';
		$default_text .= 	'</p>';
		$default_text .= '</div>';
		
		return $default_text;
	}
	
	add_filter('ocdi/plugin_intro_text', 'theblogger_ocdi_plugin_intro_text');

?>