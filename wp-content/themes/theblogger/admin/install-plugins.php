<?php

	require_once get_template_directory() . '/admin/class-tgm-plugin-activation.php';
	
	function theblogger_plugins()
	{
		$config = array(
			'id'           => 'theblogger_tgmpa',
			'default_path' => "",
			'menu'         => 'theblogger-install-plugins',
			'parent_slug'  => 'themes.php',
			'capability'   => 'edit_theme_options',
			'has_notices'  => true,
			'dismissable'  => true,
			'dismiss_msg'  => esc_html__('Install Plugins', 'theblogger'),
			'is_automatic' => true,
			'message'      => "",
			'strings'      => array(
				'menu_title' => esc_html__('Install Theme Plugins', 'theblogger')
			)
		);
		
		$plugins = array(
			array(
				'name'               => esc_html__('Pixelwars Core', 'theblogger'),
				'slug'               => 'pixelwars-core',
				'source'             => get_template_directory() . '/admin/plugins/pixelwars-core.zip',
				'version'            => '3.0.6',
				'required'           => false,
				'force_activation'   => false,
				'force_deactivation' => false,
				'external_url'       => "",
				'is_callable'        => ""
			),
			array(
				'name'               => esc_html__('Pixelwars Core Shortcodes - (Optional)', 'theblogger'),
				'slug'               => 'pixelwars-core-shortcodes',
				'source'             => get_template_directory() . '/admin/plugins/pixelwars-core-shortcodes.zip',
				'version'            => '1.0.4',
				'required'           => false,
				'force_activation'   => false,
				'force_deactivation' => false,
				'external_url'       => "",
				'is_callable'        => ""
			),
			array(
				'name'               => esc_html__('Convert Plus - Popup Plugin For WordPress', 'theblogger'),
				'slug'               => 'convertplug',
				'source'             => get_template_directory() . '/admin/plugins/convertplug.zip',
				'version'            => '3.5.19',
				'required'           => false,
				'force_activation'   => false,
				'force_deactivation' => false,
				'external_url'       => "",
				'is_callable'        => ""
			),
			array(
				'name'               => esc_html__('Easy Social Share Buttons for WordPress', 'theblogger'),
				'slug'               => 'easy-social-share-buttons3',
				'source'             => get_template_directory() . '/admin/plugins/easy-social-share-buttons3.zip',
				'version'            => '7.9',
				'required'           => false,
				'force_activation'   => false,
				'force_deactivation' => false,
				'external_url'       => "",
				'is_callable'        => ""
			),
			array(
				'name'     => esc_html__('One Click Demo Import', 'theblogger'),
				'slug'     => 'one-click-demo-import',
				'required' => false
			),
			array(
				'name'     => esc_html__('I Recommend This', 'theblogger'),
				'slug'     => 'i-recommend-this',
				'required' => false
			),
			array(
				'name'     => esc_html__('Regenerate Thumbnails', 'theblogger'),
				'slug'     => 'regenerate-thumbnails',
				'required' => false
			),
			array(
				'name'     => esc_html__('Loco Translate', 'theblogger'),
				'slug'     => 'loco-translate',
				'required' => false
			),
			array(
				'name'     => esc_html__('Instagram Feed Gallery', 'theblogger'),
				'slug'     => 'insta-gallery',
				'required' => false
			),
			array(
				'name'     => esc_html__('Top 10 - Popular Posts', 'theblogger'),
				'slug'     => 'top-10',
				'required' => false
			),
			array(
				'name'     => esc_html__('MailChimp for WordPress', 'theblogger'),
				'slug'     => 'mailchimp-for-wp',
				'required' => false
			),
			array(
				'name'     => esc_html__('Selection Sharer', 'theblogger'),
				'slug'     => 'selection-sharer',
				'required' => false
			),
			array(
				'name'     => esc_html__('WPFront Scroll Top', 'theblogger'),
				'slug'     => 'wpfront-scroll-top',
				'required' => false
			),
			array(
				'name'     => esc_html__('Reading Progressbar', 'theblogger'),
				'slug'     => 'reading-progress-bar',
				'required' => false
			),
			array(
				'name'     => esc_html__('WooCommerce', 'theblogger'),
				'slug'     => 'woocommerce',
				'required' => false
			),
			array(
				'name'     => esc_html__('GDPR Cookie Consent Banner', 'theblogger'),
				'slug'     => 'uk-cookie-consent',
				'required' => false
			)
		);
		
		tgmpa($plugins, $config);
	}
	
	add_action('tgmpa_register', 'theblogger_plugins');

?>