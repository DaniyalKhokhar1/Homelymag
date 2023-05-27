<?php

	function theblogger_check_font_type($font)
	{
		$font_local = strpos($font, 'FONT_LOCAL_'); // Check for local font.
		
		if ($font_local !== false)
		{
			$local_font_name = substr($font, 11); // Remove: FONT_LOCAL_
			
			// This "if" only for Jost* font.
			if ($local_font_name == 'Jost')
			{
				$local_font_name = 'Jost*';
			}
			
			$font = "'" . $local_font_name . "', sans-serif";
		}
		else
		{
			// This is a Google font.
			$font = "'" . $font . "'";
		}
		
		return $font;
	}
	
	
	function theblogger_enqueue__inline_style()
	{
		$custom_css = "";
		
		
		// Font Family
		
		$theblogger_setting_font_text_logo = get_theme_mod('theblogger_setting_font_text_logo');
		
		if (! empty($theblogger_setting_font_text_logo))
		{
			$theblogger_setting_font_text_logo = theblogger_check_font_type($theblogger_setting_font_text_logo);
			$custom_css .= ".site-title { font-family: {$theblogger_setting_font_text_logo}; }";
		}
		
		
		$theblogger_setting_font_menu = get_theme_mod('theblogger_setting_font_menu');
		
		if (! empty($theblogger_setting_font_menu))
		{
			$theblogger_setting_font_menu = theblogger_check_font_type($theblogger_setting_font_menu);
			$custom_css .= PHP_EOL . PHP_EOL . ".nav-menu, .entry-meta, .owl-nav, label, .page-links, .navigation, .entry-title i, .site-info, .filters { font-family: {$theblogger_setting_font_menu}; }";
		}
		
		
		$theblogger_setting_font_widget_title = get_theme_mod('theblogger_setting_font_widget_title');
		
		if (! empty($theblogger_setting_font_widget_title))
		{
			$theblogger_setting_font_widget_title = theblogger_check_font_type($theblogger_setting_font_widget_title);
			$custom_css .= PHP_EOL . PHP_EOL . ".widget-title { font-family: {$theblogger_setting_font_widget_title}; }";
		}
		
		
		$theblogger_setting_font_h1 = get_theme_mod('theblogger_setting_font_h1');
		
		if (! empty($theblogger_setting_font_h1))
		{
			$theblogger_setting_font_h1 = theblogger_check_font_type($theblogger_setting_font_h1);
			$custom_css .= PHP_EOL . PHP_EOL . "h1, .entry-title, .footer-subscribe h3, .widget_categories ul li, .widget_recent_entries ul li a, .widget_pages ul li, .widget_nav_menu ul li, .widget_archive ul li, .widget_most_recommended_posts ul li a, .widget_calendar table caption, .tptn_title, .nav-single a, .widget_recent_comments ul li, .widget_product_categories ul li, .widget_meta ul li, .widget_rss ul a.rsswidget { font-family: {$theblogger_setting_font_h1}; }";
		}
		
		
		$theblogger_setting_font_h2_h6 = get_theme_mod('theblogger_setting_font_h2_h6');
		
		if (! empty($theblogger_setting_font_h2_h6))
		{
			$theblogger_setting_font_h2_h6 = theblogger_check_font_type($theblogger_setting_font_h2_h6);
			$custom_css .= PHP_EOL . PHP_EOL . "h2, h3, h4, h5, h6, blockquote, .tab-titles { font-family: {$theblogger_setting_font_h2_h6}; }";
		}
		
		
		$theblogger_setting_font_slider_title = get_theme_mod('theblogger_setting_font_slider_title');
		
		if (! empty($theblogger_setting_font_slider_title))
		{
			$theblogger_setting_font_slider_title = theblogger_check_font_type($theblogger_setting_font_slider_title);
			$custom_css .= PHP_EOL . PHP_EOL . ".slider-box .entry-title { font-family: {$theblogger_setting_font_slider_title}; }";
		}
		
		
		$theblogger_setting_font_body = get_theme_mod('theblogger_setting_font_body');
		
		if (! empty($theblogger_setting_font_body))
		{
			$theblogger_setting_font_body = theblogger_check_font_type($theblogger_setting_font_body);
			$custom_css .= PHP_EOL . PHP_EOL . "body { font-family: {$theblogger_setting_font_body}; }";
		}
		
		
		$theblogger_setting_intro_font = get_theme_mod('theblogger_setting_intro_font');
		
		if (! empty($theblogger_setting_intro_font))
		{
			$theblogger_setting_intro_font = theblogger_check_font_type($theblogger_setting_intro_font);
			$custom_css .= PHP_EOL . PHP_EOL . ".intro h1 { font-family: {$theblogger_setting_intro_font}; }";
		}
		
		
		$theblogger_setting_font_link_box_title = get_theme_mod('theblogger_setting_font_link_box_title');
		
		if (! empty($theblogger_setting_font_link_box_title))
		{
			$theblogger_setting_font_link_box_title = theblogger_check_font_type($theblogger_setting_font_link_box_title);
			$custom_css .= PHP_EOL . PHP_EOL . ".link-box .entry-title { font-family: {$theblogger_setting_font_link_box_title}; }";
		}
		
		
		$theblogger_setting_font_buttons = get_theme_mod('theblogger_setting_font_buttons');
		
		if (! empty($theblogger_setting_font_buttons))
		{
			$theblogger_setting_font_buttons = theblogger_check_font_type($theblogger_setting_font_buttons);
			$custom_css .= PHP_EOL . PHP_EOL . ".button, button, html .elementor-button, html .ekit-wid-con .elementskit-btn, html .ekit-wid-con .ekit_creative_button, .more-link { font-family: {$theblogger_setting_font_buttons}; }";
		}
		
		
		$theblogger_setting_font_tagline = get_theme_mod('theblogger_setting_font_tagline');
		
		if (! empty($theblogger_setting_font_tagline))
		{
			$theblogger_setting_font_tagline = theblogger_check_font_type($theblogger_setting_font_tagline);
			$custom_css .= PHP_EOL . PHP_EOL . ".site-description { font-family: {$theblogger_setting_font_tagline}; }";
		}
		
		
		$theblogger_setting_font_top_bar = get_theme_mod('theblogger_setting_font_top_bar');
		
		if (! empty($theblogger_setting_font_top_bar))
		{
			$theblogger_setting_font_top_bar = theblogger_check_font_type($theblogger_setting_font_top_bar);
			$custom_css .= PHP_EOL . PHP_EOL . ".top-bar { font-family: {$theblogger_setting_font_top_bar}; }";
		}
		
		
		$theblogger_setting_font_icon_box_title = get_theme_mod('theblogger_setting_font_icon_box_title');
		
		if (! empty($theblogger_setting_font_icon_box_title))
		{
			$theblogger_setting_font_icon_box_title = theblogger_check_font_type($theblogger_setting_font_icon_box_title);
			$custom_css .= PHP_EOL . PHP_EOL . ".pw-icon-box h3 { font-family: {$theblogger_setting_font_icon_box_title}; }";
		}
		
		
		// Font Size
		
		$theblogger_setting_font_size_text_logo = get_theme_mod('theblogger_setting_font_size_text_logo', '26');
		
		if ($theblogger_setting_font_size_text_logo != '26')
		{
			$custom_css .= PHP_EOL . PHP_EOL . "@media screen and (min-width: 992px) { .site-header .site-title { font-size: {$theblogger_setting_font_size_text_logo}px; } }";
		}
		
		
		$theblogger_setting_font_size_text_logo_sticky = get_theme_mod('theblogger_setting_font_size_text_logo_sticky', '28');
		
		if ($theblogger_setting_font_size_text_logo_sticky != '28')
		{
			$custom_css .= PHP_EOL . PHP_EOL . "@media screen and (min-width: 992px) { .is-header-smaller .site-header.clone .site-title { font-size: {$theblogger_setting_font_size_text_logo_sticky}px; } }";
		}
		
		
		$theblogger_setting_font_size_text_logo_mobile = get_theme_mod('theblogger_setting_font_size_text_logo_mobile', '22');
		
		if ($theblogger_setting_font_size_text_logo_mobile != '22')
		{
			$custom_css .= PHP_EOL . PHP_EOL . "@media screen and (max-width: 991px) { .site-header .site-title { font-size: {$theblogger_setting_font_size_text_logo_mobile}px; } }";
		}
		
		
		$theblogger_setting_font_size_tagline = get_theme_mod('theblogger_setting_font_size_tagline', '12');
		
		if ($theblogger_setting_font_size_tagline != '12')
		{
			$custom_css .= PHP_EOL . PHP_EOL . "@media screen and (min-width: 992px) { .site-description { font-size: {$theblogger_setting_font_size_tagline}px; } }";
		}
		
		
		$theblogger_setting_font_size_blog_regular_post_title = get_theme_mod('theblogger_setting_font_size_blog_regular_post_title', '34');
		
		if ($theblogger_setting_font_size_blog_regular_post_title != '34')
		{
			$custom_css .= PHP_EOL . PHP_EOL . "@media screen and (min-width: 992px) { .blog-regular .entry-title, .blog-stream.first-full .hentry:first-child .entry-title { font-size: {$theblogger_setting_font_size_blog_regular_post_title}px; } }";
		}
		
		
		$theblogger_setting_font_size_blog_grid_post_title = get_theme_mod('theblogger_setting_font_size_blog_grid_post_title', '22');
		
		if ($theblogger_setting_font_size_blog_grid_post_title != '22')
		{
			$custom_css .= PHP_EOL . PHP_EOL . "@media screen and (min-width: 992px) { .blog-small .entry-title { font-size: {$theblogger_setting_font_size_blog_grid_post_title}px; } }";
		}
		
		
		$theblogger_setting_font_size_h1 = get_theme_mod('theblogger_setting_font_size_h1', '48');
		
		if ($theblogger_setting_font_size_h1 != '48')
		{
			$custom_css .= PHP_EOL . PHP_EOL . "@media screen and (min-width: 992px) { h1 { font-size: {$theblogger_setting_font_size_h1}px; } }";
		}
		
		
		$theblogger_setting_font_size_body = get_theme_mod('theblogger_setting_font_size_body', '14');
		
		if ($theblogger_setting_font_size_body != '14')
		{
			$custom_css .= PHP_EOL . PHP_EOL . "@media screen and (min-width: 992px) { html { font-size: {$theblogger_setting_font_size_body}px; } }";
		}
		
		
		$theblogger_setting_font_size_body_mobile = get_theme_mod('theblogger_setting_font_size_body_mobile', '14');
		
		if ($theblogger_setting_font_size_body_mobile != '14')
		{
			$custom_css .= PHP_EOL . PHP_EOL . "@media screen and (max-width: 991px) { html { font-size: {$theblogger_setting_font_size_body_mobile}px; } }";
		}
		
		
		$theblogger_setting_font_size_nav_menu = get_theme_mod('theblogger_setting_font_size_nav_menu', '11');
		
		if ($theblogger_setting_font_size_nav_menu != '11')
		{
			$custom_css .= PHP_EOL . PHP_EOL . "@media screen and (min-width: 992px) { .nav-menu > ul { font-size: {$theblogger_setting_font_size_nav_menu}px; } }";
		}
		
		
		$theblogger_setting_font_size_excerpt = get_theme_mod('theblogger_setting_font_size_excerpt', '13');
		
		if ($theblogger_setting_font_size_excerpt != '13')
		{
			$custom_css .= PHP_EOL . PHP_EOL . "@media screen and (min-width: 992px) { .blog-stream .entry-content { font-size: {$theblogger_setting_font_size_excerpt}px; } }";
		}
		
		
		$theblogger_setting_font_size_blog_grid_excerpt = get_theme_mod('theblogger_setting_font_size_blog_grid_excerpt', '13');
		
		if ($theblogger_setting_font_size_blog_grid_excerpt != '13')
		{
			$custom_css .= PHP_EOL . PHP_EOL . "@media screen and (min-width: 992px) { .blog-stream.blog-small .entry-content { font-size: {$theblogger_setting_font_size_blog_grid_excerpt}px; } }";
		}
		
		
		$theblogger_setting_font_size_sidebar = get_theme_mod('theblogger_setting_font_size_sidebar', '13');
		
		if ($theblogger_setting_font_size_sidebar != '13')
		{
			$custom_css .= PHP_EOL . PHP_EOL . "@media screen and (min-width: 992px) { .sidebar { font-size: {$theblogger_setting_font_size_sidebar}px; } }";
		}
		
		
		$theblogger_setting_font_size_sidebar_widget_title = get_theme_mod('theblogger_setting_font_size_sidebar_widget_title', '11');
		
		if ($theblogger_setting_font_size_sidebar_widget_title != '11')
		{
			$custom_css .= PHP_EOL . PHP_EOL . ".widget-title { font-size: {$theblogger_setting_font_size_sidebar_widget_title}px; }";
		}
		
		
		$theblogger_setting_font_size_nav_sub_menu = get_theme_mod('theblogger_setting_font_size_nav_sub_menu', '9');
		
		if ($theblogger_setting_font_size_nav_sub_menu != '9')
		{
			$custom_css .= PHP_EOL . PHP_EOL . "@media screen and (min-width: 992px) { .nav-menu ul ul { font-size: {$theblogger_setting_font_size_nav_sub_menu}px; } }";
		}
		
		
		$theblogger_setting_intro_font_size = get_theme_mod('theblogger_setting_intro_font_size', '38');
		
		if ($theblogger_setting_intro_font_size != '38')
		{
			$custom_css .= PHP_EOL . PHP_EOL . "@media screen and (min-width: 992px) { .intro h1 { font-size: {$theblogger_setting_intro_font_size}px; } }";
		}
		
		
		$theblogger_setting_font_size_meta = get_theme_mod('theblogger_setting_font_size_meta', '11');
		
		if ($theblogger_setting_font_size_meta != '11')
		{
			$custom_css .= PHP_EOL . PHP_EOL . ".entry-meta { font-size: {$theblogger_setting_font_size_meta}px; }";
		}
		
		
		$theblogger_setting_font_size_top_bar = get_theme_mod('theblogger_setting_font_size_top_bar', '11');
		
		if ($theblogger_setting_font_size_top_bar != '11')
		{
			$custom_css .= PHP_EOL . PHP_EOL . ".top-bar { font-size: {$theblogger_setting_font_size_top_bar}px; }";
		}
		
		
		$theblogger_setting_font_size_buttons = get_theme_mod('theblogger_setting_font_size_buttons', '12');
		
		if ($theblogger_setting_font_size_buttons != '12')
		{
			$custom_css .= PHP_EOL . PHP_EOL . ".button, button, html .elementor-button, .elementor-button.elementor-size-md, .elementor-button.elementor-size-xs, html .ekit-wid-con .elementskit-btn, html .ekit-wid-con .ekit_creative_button, .more-link { font-size: {$theblogger_setting_font_size_buttons}px; }";
		}
		
		
		$theblogger_setting_font_size_copyright = get_theme_mod('theblogger_setting_font_size_copyright', '11');
		
		if ($theblogger_setting_font_size_copyright != '11')
		{
			$custom_css .= PHP_EOL . PHP_EOL . ".site-footer .site-info { font-size: {$theblogger_setting_font_size_copyright}px; }";
		}
		
		
		$theblogger_setting_font_size_icon_box_title = get_theme_mod('theblogger_setting_font_size_icon_box_title', '15');
		
		if ($theblogger_setting_font_size_icon_box_title != '15')
		{
			$custom_css .= PHP_EOL . PHP_EOL . ".pw-icon-box h3 { font-size: {$theblogger_setting_font_size_icon_box_title}px; }";
		}
		
		
		// Font Weight
		
		$theblogger_setting_font_weight_text_logo = get_theme_mod('theblogger_setting_font_weight_text_logo', "");
		
		if ($theblogger_setting_font_weight_text_logo != "")
		{
			$custom_css .= PHP_EOL . PHP_EOL . ".site-title { font-weight: {$theblogger_setting_font_weight_text_logo}; }";
		}
		
		
		$theblogger_setting_font_weight_h1 = get_theme_mod('theblogger_setting_font_weight_h1', "");
		
		if ($theblogger_setting_font_weight_h1 != "")
		{
			$custom_css .= PHP_EOL . PHP_EOL . "h1, .entry-title, .footer-subscribe h3 { font-weight: {$theblogger_setting_font_weight_h1}; }";
		}
		
		
		$theblogger_setting_font_weight_h2_h6 = get_theme_mod('theblogger_setting_font_weight_h2_h6', "");
		
		if ($theblogger_setting_font_weight_h2_h6 != "")
		{
			$custom_css .= PHP_EOL . PHP_EOL . "h2, h3, h4, h5, h6, blockquote, .comment-meta .fn { font-weight: {$theblogger_setting_font_weight_h2_h6}; }";
		}
		
		
		$theblogger_setting_font_weight_slider_title = get_theme_mod('theblogger_setting_font_weight_slider_title', "");
		
		if ($theblogger_setting_font_weight_slider_title != "")
		{
			$custom_css .= PHP_EOL . PHP_EOL . ".slider-box .entry-title { font-weight: {$theblogger_setting_font_weight_slider_title}; }";
		}
		
		
		$theblogger_setting_font_weight_sidebar_widget_title = get_theme_mod('theblogger_setting_font_weight_sidebar_widget_title', "");
		
		if ($theblogger_setting_font_weight_sidebar_widget_title != "")
		{
			$custom_css .= PHP_EOL . PHP_EOL . ".widget-title { font-weight: {$theblogger_setting_font_weight_sidebar_widget_title}; }";
		}
		
		
		$theblogger_setting_font_weight_nav_menu = get_theme_mod('theblogger_setting_font_weight_nav_menu', "");
		
		if ($theblogger_setting_font_weight_nav_menu != "")
		{
			$custom_css .= PHP_EOL . PHP_EOL . "@media screen and (min-width: 992px) { .nav-menu > ul { font-weight: {$theblogger_setting_font_weight_nav_menu}; } }";
		}
		
		
		$theblogger_setting_font_weight_nav_sub_menu = get_theme_mod('theblogger_setting_font_weight_nav_sub_menu', "");
		
		if ($theblogger_setting_font_weight_nav_sub_menu != "")
		{
			$custom_css .= PHP_EOL . PHP_EOL . "@media screen and (min-width: 992px) { .nav-menu ul ul { font-weight: {$theblogger_setting_font_weight_nav_sub_menu}; } }";
		}
		
		
		$theblogger_setting_intro_font_weight = get_theme_mod('theblogger_setting_intro_font_weight', "");
		
		if ($theblogger_setting_intro_font_weight != "")
		{
			$custom_css .= PHP_EOL . PHP_EOL . ".intro h1 { font-weight: {$theblogger_setting_intro_font_weight}; }";
		}
		
		
		$theblogger_setting_font_weight_link_box_title = get_theme_mod('theblogger_setting_font_weight_link_box_title', "");
		
		if ($theblogger_setting_font_weight_link_box_title != "")
		{
			$custom_css .= PHP_EOL . PHP_EOL . ".link-box .entry-title { font-weight: {$theblogger_setting_font_weight_link_box_title}; }";
		}
		
		
		$theblogger_setting_font_weight_buttons = get_theme_mod('theblogger_setting_font_weight_buttons', '500');
		
		if ($theblogger_setting_font_weight_buttons != '500')
		{
			$custom_css .= PHP_EOL . PHP_EOL . ".button, button, html .elementor-button, html .ekit-wid-con .elementskit-btn, html .ekit-wid-con .ekit_creative_button, .more-link { font-weight: {$theblogger_setting_font_weight_buttons}; }";
		}
		
		
		$theblogger_setting_font_weight_tagline = get_theme_mod('theblogger_setting_font_weight_tagline', "");
		
		if ($theblogger_setting_font_weight_tagline != "")
		{
			$custom_css .= PHP_EOL . PHP_EOL . ".site-description { font-weight: {$theblogger_setting_font_weight_tagline}; }";
		}
		
		
		$theblogger_setting_font_weight_top_bar = get_theme_mod('theblogger_setting_font_weight_top_bar', "");
		
		if ($theblogger_setting_font_weight_top_bar != "")
		{
			$custom_css .= PHP_EOL . PHP_EOL . ".top-bar { font-weight: {$theblogger_setting_font_weight_top_bar}; }";
		}
		
		
		$theblogger_setting_font_weight_copyright = get_theme_mod('theblogger_setting_font_weight_copyright', "");
		
		if ($theblogger_setting_font_weight_copyright != "")
		{
			$custom_css .= PHP_EOL . PHP_EOL . ".site-footer .site-info { font-weight: {$theblogger_setting_font_weight_copyright}; }";
		}
		
		
		$theblogger_setting_font_weight_icon_box_title = get_theme_mod('theblogger_setting_font_weight_icon_box_title', "");
		
		if ($theblogger_setting_font_weight_icon_box_title != "")
		{
			$custom_css .= PHP_EOL . PHP_EOL . ".pw-icon-box h3 { font-weight: {$theblogger_setting_font_weight_icon_box_title}; }";
		}
		
		
		$theblogger_setting_font_weight_meta = get_theme_mod('theblogger_setting_font_weight_meta', "");
		
		if ($theblogger_setting_font_weight_meta != "")
		{
			$custom_css .= PHP_EOL . PHP_EOL . ".entry-meta { font-weight: {$theblogger_setting_font_weight_meta}; }";
		}
		
		
		// Letter Spacing
		
		$theblogger_setting_letter_spacing_main_slider_title = get_theme_mod('theblogger_setting_letter_spacing_main_slider_title', '0');
		
		if ($theblogger_setting_letter_spacing_main_slider_title != '0')
		{
			$custom_css .= PHP_EOL . PHP_EOL . "@media screen and (min-width: 992px) { .slider-box .entry-title { letter-spacing: {$theblogger_setting_letter_spacing_main_slider_title}px; } }";
		}
		
		
		$theblogger_setting_letter_spacing_nav_menu = get_theme_mod('theblogger_setting_letter_spacing_nav_menu', '1');
		
		if ($theblogger_setting_letter_spacing_nav_menu != '1')
		{
			$custom_css .= PHP_EOL . PHP_EOL . "@media screen and (min-width: 992px) { .nav-menu > ul { letter-spacing: {$theblogger_setting_letter_spacing_nav_menu}px; } }";
		}
		
		
		$theblogger_setting_letter_spacing_nav_sub_menu = get_theme_mod('theblogger_setting_letter_spacing_nav_sub_menu', '1');
		
		if ($theblogger_setting_letter_spacing_nav_sub_menu != '1')
		{
			$custom_css .= PHP_EOL . PHP_EOL . "@media screen and (min-width: 992px) { .nav-menu ul ul { letter-spacing: {$theblogger_setting_letter_spacing_nav_sub_menu}px; } }";
		}
		
		
		$theblogger_setting_letter_spacing_sidebar_widget_title = get_theme_mod('theblogger_setting_letter_spacing_sidebar_widget_title', '2');
		
		if ($theblogger_setting_letter_spacing_sidebar_widget_title != '2')
		{
			$custom_css .= PHP_EOL . PHP_EOL . ".widget-title { letter-spacing: {$theblogger_setting_letter_spacing_sidebar_widget_title}px; }";
		}
		
		
		$theblogger_setting_intro_letter_spacing = get_theme_mod('theblogger_setting_intro_letter_spacing', '0');
		
		if ($theblogger_setting_intro_letter_spacing != '0')
		{
			$custom_css .= PHP_EOL . PHP_EOL . ".intro h1 { letter-spacing: {$theblogger_setting_intro_letter_spacing}px; }";
		}
		
		
		$theblogger_setting_letter_spacing_link_box_title = get_theme_mod('theblogger_setting_letter_spacing_link_box_title', '0');
		
		if ($theblogger_setting_letter_spacing_link_box_title != '0')
		{
			$custom_css .= PHP_EOL . PHP_EOL . "@media screen and (min-width: 992px) { .link-box .entry-title { letter-spacing: {$theblogger_setting_letter_spacing_link_box_title}px; } }";
		}
		
		
		$theblogger_setting_letter_spacing_tagline = get_theme_mod('theblogger_setting_letter_spacing_tagline', '0');
		
		if ($theblogger_setting_letter_spacing_tagline != '0')
		{
			$custom_css .= PHP_EOL . PHP_EOL . "@media screen and (min-width: 992px) { .site-description { letter-spacing: {$theblogger_setting_letter_spacing_tagline}px; } }";
		}
		
		
		$theblogger_setting_letter_spacing_buttons = get_theme_mod('theblogger_setting_letter_spacing_buttons', '1');
		
		if ($theblogger_setting_letter_spacing_buttons != '1')
		{
			$custom_css .= PHP_EOL . PHP_EOL . ".button, button, html .elementor-button, html .ekit-wid-con .elementskit-btn, html .ekit-wid-con .ekit_creative_button, .more-link { letter-spacing: {$theblogger_setting_letter_spacing_buttons}px; }";
		}
		
		
		$theblogger_setting_letter_spacing_copyright = get_theme_mod('theblogger_setting_letter_spacing_copyright', '1');
		
		if ($theblogger_setting_letter_spacing_copyright != '1')
		{
			$custom_css .= PHP_EOL . PHP_EOL . ".site-footer .site-info { letter-spacing: {$theblogger_setting_letter_spacing_copyright}px; }";
		}
		
		
		$theblogger_setting_letter_spacing_icon_box_title = get_theme_mod('theblogger_setting_letter_spacing_icon_box_title', '0');
		
		if ($theblogger_setting_letter_spacing_icon_box_title != '0')
		{
			$custom_css .= PHP_EOL . PHP_EOL . ".pw-icon-box h3 { letter-spacing: {$theblogger_setting_letter_spacing_icon_box_title}px; }";
		}
		
		
		// Text Transform
		
		$theblogger_setting_intro_text_transform = get_theme_mod('theblogger_setting_intro_text_transform', "");
		
		if ($theblogger_setting_intro_text_transform != "")
		{
			$custom_css .= PHP_EOL . PHP_EOL . ".intro h1 { text-transform: {$theblogger_setting_intro_text_transform}; }";
		}
		
		
		$theblogger_setting_text_transform_h1 = get_theme_mod('theblogger_setting_text_transform_h1', "");
		
		if ($theblogger_setting_text_transform_h1 != "")
		{
			$custom_css .= PHP_EOL . PHP_EOL . "h1, .entry-title, .footer-subscribe h3, .widget_categories ul li, .widget_recent_entries ul li, .widget_pages ul li, .widget_archive ul li, .widget_calendar table caption, .tptn_title, .nav-single a { text-transform: {$theblogger_setting_text_transform_h1}; }";
		}
		
		
		$theblogger_setting_text_transform_h2_h6 = get_theme_mod('theblogger_setting_text_transform_h2_h6', "");
		
		if ($theblogger_setting_text_transform_h2_h6 != "")
		{
			$custom_css .= PHP_EOL . PHP_EOL . "h2, h3, h4, h5, h6, blockquote, .comment-meta .fn { text-transform: {$theblogger_setting_text_transform_h2_h6}; }";
		}
		
		
		// Line Height
		
		$theblogger_setting_body_line_height = get_theme_mod('theblogger_setting_body_line_height', '1.8');
		
		if ($theblogger_setting_body_line_height != '1.8')
		{
			$custom_css .= PHP_EOL . PHP_EOL . "@media screen and (min-width: 992px) { html { line-height: {$theblogger_setting_body_line_height}; } }";
		}
		
		
		$theblogger_setting_header_bg_shape_height = get_theme_mod('theblogger_setting_header_bg_shape_height', '30');
		
		if ($theblogger_setting_header_bg_shape_height != '30')
		{
			$custom_css .= PHP_EOL . PHP_EOL . "@media screen and (min-width: 992px) { .header-bg-shape { height: {$theblogger_setting_header_bg_shape_height}px; } }";
		}
		
		
		$theblogger_setting_featured_area_top_padding = get_theme_mod('theblogger_setting_featured_area_top_padding', '0');
		
		if ($theblogger_setting_featured_area_top_padding != '0')
		{
			$custom_css .= PHP_EOL . PHP_EOL . ".featured-area { padding-top: {$theblogger_setting_featured_area_top_padding}px; }";
		}
		
		
		$theblogger_setting_featured_area_grid_spacing = get_theme_mod('theblogger_setting_featured_area_grid_spacing', '5');
		
		if ($theblogger_setting_featured_area_grid_spacing != '5')
		{
			$custom_css .= PHP_EOL . PHP_EOL . "@media screen and (min-width: 768px) {";
			
				$custom_css .= PHP_EOL . PHP_EOL . ".featured-area .block { padding: {$theblogger_setting_featured_area_grid_spacing}px; }";
				
				$custom_css .= PHP_EOL . PHP_EOL . ".featured-area { margin: -{$theblogger_setting_featured_area_grid_spacing}px; }";
				
			$custom_css .= PHP_EOL . PHP_EOL . "}";
		}
		
		
		$theblogger_setting_header_border_top_width = get_theme_mod('theblogger_setting_header_border_top_width', '0');
		
		if ($theblogger_setting_header_border_top_width != '0')
		{
			$theblogger_setting_header_border_top_width__after_top  = (-$theblogger_setting_header_border_top_width);
			$theblogger_setting_header_border_top_width__margin_top = $theblogger_setting_header_border_top_width;
			$theblogger_setting_header_border_top_width__int        = intval($theblogger_setting_header_border_top_width);
			
			if ($theblogger_setting_header_border_top_width__int <= 0)
			{
				$theblogger_setting_header_border_top_width__margin_top = '0';
			}
			
			$custom_css .= PHP_EOL . PHP_EOL . ".header-wrap:after { top: {$theblogger_setting_header_border_top_width__after_top}px; }";
			
			$custom_css .= PHP_EOL . PHP_EOL . ".header-wrap { margin-top: {$theblogger_setting_header_border_top_width__margin_top}px; }";
		}
		
		
		$theblogger_setting_header_menu_border_top_width = get_theme_mod('theblogger_setting_header_menu_border_top_width', '0');
		
		if ($theblogger_setting_header_menu_border_top_width != '0')
		{
			$theblogger_setting_header_menu_border_top_width__after_top  = (-$theblogger_setting_header_menu_border_top_width);
			$theblogger_setting_header_menu_border_top_width__margin_top = $theblogger_setting_header_menu_border_top_width;
			$theblogger_setting_header_menu_border_top_width__int        = intval($theblogger_setting_header_menu_border_top_width);
			
			if ($theblogger_setting_header_menu_border_top_width__int <= 0)
			{
				$theblogger_setting_header_menu_border_top_width__margin_top = '0';
			}
			
			$custom_css .= PHP_EOL . PHP_EOL . ".is-menu-bar .menu-wrap:after { top: {$theblogger_setting_header_menu_border_top_width__after_top}px; }";
			
			$custom_css .= PHP_EOL . PHP_EOL . ".is-menu-bar .menu-wrap { margin-top: {$theblogger_setting_header_menu_border_top_width__margin_top}px; }";
		}
		
		
		$theblogger_setting_header_border_bottom_width = get_theme_mod('theblogger_setting_header_border_bottom_width', '0');
		
		if ($theblogger_setting_header_border_bottom_width != '0')
		{
			$theblogger_setting_header_border_bottom_width__after_bottom = (-$theblogger_setting_header_border_bottom_width);
			
			$custom_css .= PHP_EOL . PHP_EOL . ".header-wrap:after { bottom: {$theblogger_setting_header_border_bottom_width__after_bottom}px; }";
		}
		
		
		$theblogger_setting_header_menu_border_bottom_width = get_theme_mod('theblogger_setting_header_menu_border_bottom_width', '0');
		
		if ($theblogger_setting_header_menu_border_bottom_width != '0')
		{
			$theblogger_setting_header_menu_border_bottom_width__after_bottom = (-$theblogger_setting_header_menu_border_bottom_width);
			
			$custom_css .= PHP_EOL . PHP_EOL . ".is-menu-bar .menu-wrap:after { bottom: {$theblogger_setting_header_menu_border_bottom_width__after_bottom}px; }";
		}
		
		
		$theblogger_setting_header_border_left_width = get_theme_mod('theblogger_setting_header_border_left_width', '0');
		
		if ($theblogger_setting_header_border_left_width != '0')
		{
			$theblogger_setting_header_border_left_width__after_left = (-$theblogger_setting_header_border_left_width);
			
			$custom_css .= PHP_EOL . PHP_EOL . ".header-wrap:after { left: {$theblogger_setting_header_border_left_width__after_left}px; }";
			
			$custom_css .= PHP_EOL . PHP_EOL . "@media screen and (min-width: 992px) { .is-header-vertical-right .header-wrap:after { width: {$theblogger_setting_header_border_left_width}px; } }";
		}
		
		
		$theblogger_setting_header_menu_border_left_width = get_theme_mod('theblogger_setting_header_menu_border_left_width', '0');
		
		if ($theblogger_setting_header_menu_border_left_width != '0')
		{
			$theblogger_setting_header_menu_border_left_width__after_left = (-$theblogger_setting_header_menu_border_left_width);
			
			$custom_css .= PHP_EOL . PHP_EOL . ".is-menu-bar .menu-wrap:after { left: {$theblogger_setting_header_menu_border_left_width__after_left}px; }";
		}
		
		
		$theblogger_setting_header_border_right_width = get_theme_mod('theblogger_setting_header_border_right_width', '0');
		
		if ($theblogger_setting_header_border_right_width != '0')
		{
			$theblogger_setting_header_border_right_width__after_right = (-$theblogger_setting_header_border_right_width);
			
			$custom_css .= PHP_EOL . PHP_EOL . ".header-wrap:after { right: {$theblogger_setting_header_border_right_width__after_right}px; }";
			
			$custom_css .= PHP_EOL . PHP_EOL . "@media screen and (min-width: 992px) { .is-header-vertical-left .header-wrap:after { width: {$theblogger_setting_header_border_right_width}px; } }";
		}
		
		
		$theblogger_setting_header_menu_border_right_width = get_theme_mod('theblogger_setting_header_menu_border_right_width', '0');
		
		if ($theblogger_setting_header_menu_border_right_width != '0')
		{
			$theblogger_setting_header_menu_border_right_width__after_right = (-$theblogger_setting_header_menu_border_right_width);
			
			$custom_css .= PHP_EOL . PHP_EOL . ".is-menu-bar .menu-wrap:after { right: {$theblogger_setting_header_menu_border_right_width__after_right}px; }";
		}
		
		
		$theblogger_setting_header_border_top_radius = get_theme_mod('theblogger_setting_header_border_top_radius', '0');
		
		if ($theblogger_setting_header_border_top_radius != '0')
		{
			$custom_css .= PHP_EOL . PHP_EOL . ".header-wrap, .header-wrap:after, .header-wrap:before { border-top-left-radius: {$theblogger_setting_header_border_top_radius}px; border-top-right-radius: {$theblogger_setting_header_border_top_radius}px; }";
		}
		
		
		$theblogger_setting_header_menu_border_top_radius = get_theme_mod('theblogger_setting_header_menu_border_top_radius', '0');
		
		if ($theblogger_setting_header_menu_border_top_radius != '0')
		{
			$custom_css .= PHP_EOL . PHP_EOL . ".is-menu-bar .menu-wrap, .is-menu-bar .menu-wrap:after { border-top-left-radius: {$theblogger_setting_header_menu_border_top_radius}px; border-top-right-radius: {$theblogger_setting_header_menu_border_top_radius}px; }";
		}
		
		
		$theblogger_setting_header_border_bottom_radius = get_theme_mod('theblogger_setting_header_border_bottom_radius', '0');
		
		if ($theblogger_setting_header_border_bottom_radius != '0')
		{
			$custom_css .= PHP_EOL . PHP_EOL . ".header-wrap, .header-wrap:after, .header-wrap:before { border-bottom-left-radius: {$theblogger_setting_header_border_bottom_radius}px; border-bottom-right-radius: {$theblogger_setting_header_border_bottom_radius}px; }";
		}
		
		
		$theblogger_setting_header_menu_border_bottom_radius = get_theme_mod('theblogger_setting_header_menu_border_bottom_radius', '0');
		
		if ($theblogger_setting_header_menu_border_bottom_radius != '0')
		{
			$custom_css .= PHP_EOL . PHP_EOL . ".is-menu-bar .menu-wrap, .is-menu-bar .menu-wrap:after { border-bottom-left-radius: {$theblogger_setting_header_menu_border_bottom_radius}px; border-bottom-right-radius: {$theblogger_setting_header_menu_border_bottom_radius}px; }";
		}
		
		
		$theblogger_setting_logo_height = get_theme_mod('theblogger_setting_logo_height', '36');
		
		if ($theblogger_setting_logo_height != '36')
		{
			$custom_css .= PHP_EOL . PHP_EOL . "@media screen and (min-width: 992px) { .site-title img { max-height: {$theblogger_setting_logo_height}px; } }";
		}
		
		
		$theblogger_setting_logo_height_mobile = get_theme_mod('theblogger_setting_logo_height_mobile', '26');
		
		if ($theblogger_setting_logo_height_mobile != '26')
		{
			$custom_css .= PHP_EOL . PHP_EOL . "@media screen and (max-width: 991px) { .site-title img { max-height: {$theblogger_setting_logo_height_mobile}px; } }";
		}
		
		
		$theblogger_setting_logo_height_sticky = get_theme_mod('theblogger_setting_logo_height_sticky', '30');
		
		if ($theblogger_setting_logo_height_sticky != '30')
		{
			$custom_css .= PHP_EOL . PHP_EOL . "@media screen and (min-width: 992px) { .is-header-smaller .site-header.clone .site-title img { max-height: {$theblogger_setting_logo_height_sticky}px; } }";
		}
		
		
		$theblogger_setting_header_top_bar_height = get_theme_mod('theblogger_setting_header_top_bar_height', '35');
		
		if ($theblogger_setting_header_top_bar_height != '35')
		{
			$custom_css .= PHP_EOL . PHP_EOL . ".top-bar { line-height: {$theblogger_setting_header_top_bar_height}px; }";
		}
		
		
		$theblogger_setting_header_row_padding = get_theme_mod('theblogger_setting_header_row_padding', '12');
		
		if ($theblogger_setting_header_row_padding != '12')
		{
			$custom_css .= PHP_EOL . PHP_EOL . "@media screen and (min-width: 992px) { .is-header-row .header-wrap-inner { padding: {$theblogger_setting_header_row_padding}px 0; } }";
		}
		
		
		$theblogger_setting_header_vertical_width = get_theme_mod('theblogger_setting_header_vertical_width', '260');
		
		if ($theblogger_setting_header_vertical_width != '260')
		{
			$custom_css .= PHP_EOL . PHP_EOL . "@media screen and (min-width: 1360px) {";
			
			$custom_css .= PHP_EOL . PHP_EOL . ".is-header-vertical .site-header, .is-header-vertical .site-header .header-wrap { width: {$theblogger_setting_header_vertical_width}px; }";
			
			$custom_css .= PHP_EOL . PHP_EOL . ".is-header-vertical-left .site { padding-left: {$theblogger_setting_header_vertical_width}px; }";
			
			$custom_css .= PHP_EOL . PHP_EOL . ".is-header-vertical-right .site { padding-right: {$theblogger_setting_header_vertical_width}px; }";
			
			$custom_css .= PHP_EOL . PHP_EOL . "}";
		}
		
		
		// Other
		
		$theblogger_setting_logo_margin = get_theme_mod('theblogger_setting_logo_margin', '50');
		
		if ($theblogger_setting_logo_margin != '50')
		{
			$custom_css .= PHP_EOL . PHP_EOL . "@media screen and (min-width: 992px) { .site-branding-wrap { padding: {$theblogger_setting_logo_margin}px 0; } }";
		}
		
		
		$theblogger_setting_logo_margin_mobile = get_theme_mod('theblogger_setting_logo_margin_mobile', '14');
		
		if ($theblogger_setting_logo_margin_mobile != '14')
		{
			$custom_css .= PHP_EOL . PHP_EOL . "@media screen and (max-width: 991px) { .site-branding-wrap { padding: {$theblogger_setting_logo_margin_mobile}px 0; } }";
		}
		
		
		$theblogger_setting_logo_padding = get_theme_mod('theblogger_setting_logo_padding', '0');
		
		if ($theblogger_setting_logo_padding != '0')
		{
			$custom_css .= PHP_EOL . PHP_EOL . "html .site-header .site-title a { padding: {$theblogger_setting_logo_padding}px " . (2 * $theblogger_setting_logo_padding) . "px; }";
		}
		
		
		$theblogger_setting_logo_border_radius = get_theme_mod('theblogger_setting_logo_border_radius', '0');
		
		if ($theblogger_setting_logo_border_radius != '0')
		{
			$custom_css .= PHP_EOL . PHP_EOL . "html .site-header .site-title a { border-radius: {$theblogger_setting_logo_border_radius}px; }";
		}
		
		
		$theblogger_setting_intro_top_bottom_padding = get_theme_mod('theblogger_setting_intro_top_bottom_padding', "");
		
		if ($theblogger_setting_intro_top_bottom_padding != "")
		{
			$custom_css .= PHP_EOL . PHP_EOL . "@media screen and (min-width: 992px) { .intro { padding: {$theblogger_setting_intro_top_bottom_padding}px 0; } }";
		}
		
		
		$theblogger_setting_body_top_bottom_margin = get_theme_mod('theblogger_setting_body_top_bottom_margin', "");
		
		if ($theblogger_setting_body_top_bottom_margin != "")
		{
			$custom_css .= PHP_EOL . PHP_EOL . "@media screen and (min-width: 992px) { .site { margin-top: {$theblogger_setting_body_top_bottom_margin}px; margin-bottom: {$theblogger_setting_body_top_bottom_margin}px; } }";
		}
		
		
		$theblogger_setting_content_width = get_theme_mod('theblogger_setting_content_width', '1060');
		
		if ($theblogger_setting_content_width != '1060')
		{
			$custom_css .= PHP_EOL . PHP_EOL . ".layout-medium, .is-header-row .header-wrap-inner, .is-header-small .header-wrap-inner, .is-menu-bar.is-menu-fixed-bg .menu-wrap, .is-header-fixed-width .header-wrap, .is-header-fixed-width.is-menu-bar .site-navigation, .is-header-float-box:not(.is-header-float-box-menu) .site-header:not(.clone) .header-wrap, .is-header-float-box.is-menu-bar .site-header:not(.clone) .site-navigation:not(.clone), .is-body-boxed .site, .is-body-boxed .header-wrap, .is-body-boxed.is-menu-bar .site-navigation, .is-body-boxed:not(.is-menu-bar) .site-header, .is-middle-boxed .site-main, .intro-content, .is-footer-boxed .site-footer, .is-content-boxed .site-main .layout-fixed, .top-bar .top-bar-wrap, .is-top-bar-fixed .top-bar, .is-top-bar-fixed-bg .top-bar, .is-menu-bottom.is-menu-bottom-overflow .site-header:not(.clone) .site-navigation:not(.clone) .menu-wrap, .site-branding-wrap, .is-header-border-fixed .header-wrap:after, .is-header-border-fixed .menu-wrap:after, html .tutor-container, html .lp-content-area, html .learn-press-breadcrumb { max-width: {$theblogger_setting_content_width}px; margin-left: auto; margin-right: auto; }";
		}
		
		
		$theblogger_setting_page_post_content_width = get_theme_mod('theblogger_setting_page_post_content_width', '740');
		
		if ($theblogger_setting_page_post_content_width != '740')
		{
			$custom_css .= PHP_EOL . PHP_EOL . ".layout-fixed, .blog-list, .blog-regular, .is-content-boxed .single .site-content, .is-content-boxed .page .site-content { max-width: {$theblogger_setting_page_post_content_width}px; }";
		}
		
		
		$theblogger_setting_menu_height = get_theme_mod('theblogger_setting_menu_height', '64');
		
		if ($theblogger_setting_menu_height != '64')
		{
			$custom_css .= PHP_EOL . PHP_EOL . "@media screen and (min-width: 992px) {";
			
			$custom_css .= PHP_EOL . PHP_EOL . ".is-header-small .header-wrap, .is-menu-bar .nav-menu > ul > li, .is-header-vertical .nav-menu > ul > li { line-height: {$theblogger_setting_menu_height}px; }";
			
			$custom_css .= PHP_EOL . PHP_EOL . ".is-header-small .site-branding { max-height: {$theblogger_setting_menu_height}px; }";
			
			$custom_css .= PHP_EOL . PHP_EOL . "}";
		}
		
		
		$theblogger_setting_menu_sticky_height = get_theme_mod('theblogger_setting_menu_sticky_height', '64');
		
		if ($theblogger_setting_menu_sticky_height != '64')
		{
			$custom_css .= PHP_EOL . PHP_EOL . "@media screen and (min-width: 992px) {";
			
			$custom_css .= PHP_EOL . PHP_EOL . ".is-header-small.is-header-smaller .site-header.clone .header-wrap, .is-header-row.is-header-smaller .site-header.clone .nav-menu > ul > li, .is-menu-bar.is-header-smaller .site-navigation.clone .nav-menu > ul > li, .is-menu-bar.is-header-smaller .site-header.clone .site-navigation .nav-menu > ul > li { line-height: {$theblogger_setting_menu_sticky_height}px; }";
			
			$custom_css .= PHP_EOL . PHP_EOL . ".is-header-small.is-header-smaller .site-header.clone .site-branding { max-height: {$theblogger_setting_menu_sticky_height}px; }";
			
			$custom_css .= PHP_EOL . PHP_EOL . "}";
		}
		
		
		$theblogger_setting_buttons__primary_button_border_radius = get_theme_mod('theblogger_setting_buttons__primary_button_border_radius', "");
		
		if ($theblogger_setting_buttons__primary_button_border_radius != "")
		{
			$custom_css .= PHP_EOL . PHP_EOL . ".button.is-primary, .button.is-primary:after, html .elementor-button, .elementor-button.elementor-size-xs, .elementor-button.elementor-size-sm, .elementor-button.elementor-size-md, .elementor-button.elementor-size-lg, .elementor-button.elementor-size-xl, html .ekit-wid-con .elementskit-btn, html .ekit-wid-con .ekit_creative_button { border-radius: {$theblogger_setting_buttons__primary_button_border_radius}px; }";
		}
		
		
		$theblogger_setting_buttons__secondary_button_border_radius = get_theme_mod('theblogger_setting_buttons__secondary_button_border_radius', "");
		
		if ($theblogger_setting_buttons__secondary_button_border_radius != "")
		{
			$custom_css .= PHP_EOL . PHP_EOL . ".button.is-secondary, .button.is-secondary:after, .elementor-element.elementor-button-info .elementor-button { border-radius: {$theblogger_setting_buttons__secondary_button_border_radius}px; }";
		}
		
		
		$theblogger_setting_header_sub_menu_animation_duration = get_theme_mod('theblogger_setting_header_sub_menu_animation_duration', "");
		
		if ($theblogger_setting_header_sub_menu_animation_duration != "")
		{
			$custom_css .= PHP_EOL . PHP_EOL . ".nav-menu ul ul { transition-duration: {$theblogger_setting_header_sub_menu_animation_duration}s; }";
		}
		
		
		$theblogger_setting_sidebar_width = get_theme_mod('theblogger_setting_sidebar_width', "");
		
		if ($theblogger_setting_sidebar_width != "")
		{
			$custom_css .= PHP_EOL . PHP_EOL . "@media screen and (min-width: 992px) {";
			
				$custom_css .= PHP_EOL . PHP_EOL . ".with-sidebar { margin-right: -{$theblogger_setting_sidebar_width}px; }";
				
				$custom_css .= PHP_EOL . PHP_EOL . ".with-sidebar .site-content { margin-right: {$theblogger_setting_sidebar_width}px; }";
				
				$custom_css .= PHP_EOL . PHP_EOL . ".sidebar { width: {$theblogger_setting_sidebar_width}px; }";
				
				$custom_css .= PHP_EOL . PHP_EOL . ".is-sidebar-left .with-sidebar { margin-left: -{$theblogger_setting_sidebar_width}px; }";
				
				$custom_css .= PHP_EOL . PHP_EOL . ".is-sidebar-left .with-sidebar .site-content { margin-left: {$theblogger_setting_sidebar_width}px; }";
			
			$custom_css .= PHP_EOL . PHP_EOL . "}";
		}
		
		
		// Color
		
		$theblogger_setting_color_link = get_theme_mod('theblogger_setting_color_link', "");
		
		if ($theblogger_setting_color_link != "")
		{
			$custom_css .= PHP_EOL . PHP_EOL . "a { color: {$theblogger_setting_color_link}; }";
		}
		
		
		$theblogger_setting_color_link_hover = get_theme_mod('theblogger_setting_color_link_hover', "");
		
		if ($theblogger_setting_color_link_hover != "")
		{
			$custom_css .= PHP_EOL . PHP_EOL . "a:hover { color: {$theblogger_setting_color_link_hover}; }";
		}
		
		
		$theblogger_setting_color_header_bg = get_theme_mod('theblogger_setting_color_header_bg', "");
		
		if ($theblogger_setting_color_header_bg != "")
		{
			$custom_css .= PHP_EOL . PHP_EOL . ".site-header .header-wrap { background-color: {$theblogger_setting_color_header_bg}; }";
			
			$custom_css .= PHP_EOL . PHP_EOL . "html:not(.is-menu-bottom) .site-header .header-bg-shape { color: {$theblogger_setting_color_header_bg}; }";
		}
		
		
		$theblogger_setting_color_header_background_gradient = get_theme_mod('theblogger_setting_color_header_background_gradient', "");
		
		if ($theblogger_setting_color_header_background_gradient != "")
		{
			$custom_css .= PHP_EOL . PHP_EOL . ".site-header .header-wrap { background: linear-gradient(90deg, {$theblogger_setting_color_header_bg} 30%, {$theblogger_setting_color_header_background_gradient} 100%); }";
		}
		
		
		$theblogger_setting_header_bg_img = get_theme_mod('theblogger_setting_header_bg_img', "");
		
		if ($theblogger_setting_header_bg_img != "")
		{
			$custom_css .= PHP_EOL . PHP_EOL . ".site-header .header-wrap { background-image: url({$theblogger_setting_header_bg_img}); }";
		}
		
		
		// start Header Mask Style
		$theblogger_setting_header_mask_style   = get_theme_mod('theblogger_setting_header_mask_style', 'horizontal');
		$theblogger_setting_color_header_mask_1 = get_theme_mod('theblogger_setting_color_header_mask_1', "");
		$theblogger_setting_color_header_mask_2 = get_theme_mod('theblogger_setting_color_header_mask_2', "");
		
		if (($theblogger_setting_header_mask_style == 'solid') && ($theblogger_setting_color_header_mask_1 != ""))
		{
			$custom_css .= PHP_EOL . PHP_EOL . ".header-wrap:before { background: {$theblogger_setting_color_header_mask_1}; }";
		}
		elseif (($theblogger_setting_header_mask_style == 'radial') && ($theblogger_setting_color_header_mask_1 != "") && ($theblogger_setting_color_header_mask_2 != ""))
		{
			$custom_css .= PHP_EOL . PHP_EOL . ".header-wrap:before { background: radial-gradient(circle, {$theblogger_setting_color_header_mask_1}, {$theblogger_setting_color_header_mask_2}); }";
		}
		elseif (($theblogger_setting_header_mask_style == 'vertical') && ($theblogger_setting_color_header_mask_1 != "") && ($theblogger_setting_color_header_mask_2 != ""))
		{
			$custom_css .= PHP_EOL . PHP_EOL . ".header-wrap:before { background: linear-gradient({$theblogger_setting_color_header_mask_1}, {$theblogger_setting_color_header_mask_2}); }";
		}
		elseif (($theblogger_setting_header_mask_style == 'horizontal') && ($theblogger_setting_color_header_mask_1 != "") && ($theblogger_setting_color_header_mask_2 != ""))
		{
			$custom_css .= PHP_EOL . PHP_EOL . ".header-wrap:before { background: linear-gradient(130deg, {$theblogger_setting_color_header_mask_1} 30%, {$theblogger_setting_color_header_mask_2} 100%); }";
		}
		// end Header Mask Style
		
		
		$theblogger_setting_header_mask_opacity = get_theme_mod('theblogger_setting_header_mask_opacity', "");
		
		if ($theblogger_setting_header_mask_opacity != "")
		{
			$custom_css .= PHP_EOL . PHP_EOL . ".header-wrap:before { opacity: {$theblogger_setting_header_mask_opacity}; }";
		}
		
		
		$theblogger_setting_header_half_transparent_bg_opacity = get_theme_mod('theblogger_setting_header_half_transparent_bg_opacity', "");
		
		if ($theblogger_setting_header_half_transparent_bg_opacity != "")
		{
			$custom_css .= PHP_EOL . PHP_EOL . ".is-header-half-transparent:not(.is-menu-toggled-on) .site-header:not(.clone) .header-wrap:before { opacity: {$theblogger_setting_header_half_transparent_bg_opacity}; }";
		}
		
		
		$theblogger_setting_header_border_opacity = get_theme_mod('theblogger_setting_header_border_opacity', '1');
		
		if ($theblogger_setting_header_border_opacity != '1')
		{
			$custom_css .= PHP_EOL . PHP_EOL . ".header-wrap:after { opacity: {$theblogger_setting_header_border_opacity}; }";
		}
		
		
		$theblogger_setting_menu_border_opacity = get_theme_mod('theblogger_setting_menu_border_opacity', '1');
		
		if ($theblogger_setting_menu_border_opacity != '1')
		{
			$custom_css .= PHP_EOL . PHP_EOL . ".is-menu-bar .menu-wrap:after { opacity: {$theblogger_setting_menu_border_opacity}; }";
		}
		
		
		$theblogger_setting_intro_mask_color = get_theme_mod('theblogger_setting_intro_mask_color', "");
		
		if ($theblogger_setting_intro_mask_color != "")
		{
			$custom_css .= PHP_EOL . PHP_EOL . ".intro:before { background: {$theblogger_setting_intro_mask_color}; }";
		}
		
		
		$theblogger_setting_intro_mask_opacity = get_theme_mod('theblogger_setting_intro_mask_opacity', "");
		
		if ($theblogger_setting_intro_mask_opacity != "")
		{
			$custom_css .= PHP_EOL . PHP_EOL . ".intro:before { opacity: {$theblogger_setting_intro_mask_opacity}; }";
		}
		
		
		$theblogger_setting_color_menu_bg = get_theme_mod('theblogger_setting_color_menu_bg', "");
		
		if ($theblogger_setting_color_menu_bg != "")
		{
			$custom_css .= PHP_EOL . PHP_EOL . ".site-header .menu-wrap { background-color: {$theblogger_setting_color_menu_bg}; }";
			
			$custom_css .= PHP_EOL . PHP_EOL . "html.is-menu-bottom .site-header .header-bg-shape { color: {$theblogger_setting_color_menu_bg}; }";
		}
		
		
		$theblogger_setting_color_menu_background_gradient = get_theme_mod('theblogger_setting_color_menu_background_gradient', "");
		
		if ($theblogger_setting_color_menu_background_gradient != "")
		{
			$custom_css .= PHP_EOL . PHP_EOL . ".site-header .menu-wrap { background: linear-gradient(90deg, {$theblogger_setting_color_menu_bg} 30%, {$theblogger_setting_color_menu_background_gradient} 100%); }";
		}
		
		
		$theblogger_setting_color_menu_active_link_text = get_theme_mod('theblogger_setting_color_menu_active_link_text', "");
		
		if ($theblogger_setting_color_menu_active_link_text != "")
		{
			$custom_css .= PHP_EOL . PHP_EOL . "@media screen and (min-width: 992px) { .nav-menu > ul > li.current-menu-item > a { color: {$theblogger_setting_color_menu_active_link_text} !important; } }";
		}
		
		
		$theblogger_setting_color_menu_active_link_bg_border = get_theme_mod('theblogger_setting_color_menu_active_link_bg_border', "");
		
		if ($theblogger_setting_color_menu_active_link_bg_border != "")
		{
			$custom_css .= PHP_EOL . PHP_EOL . "@media screen and (min-width: 992px) { .nav-menu li.current-menu-item > a .link-text:before { background-color: {$theblogger_setting_color_menu_active_link_bg_border} !important; border-color: {$theblogger_setting_color_menu_active_link_bg_border} !important; } }";
		}
		
		
		$theblogger_setting_color_menu_link_hover_text = get_theme_mod('theblogger_setting_color_menu_link_hover_text', "");
		
		if ($theblogger_setting_color_menu_link_hover_text != "")
		{
			$custom_css .= PHP_EOL . PHP_EOL . "@media screen and (min-width: 992px) { html .nav-menu > ul > li > a:hover, .nav-menu > ul > li.has-submenu:hover > a { color: {$theblogger_setting_color_menu_link_hover_text}; } }";
		}
		
		
		$theblogger_setting_color_menu_link_hover_bg_border = get_theme_mod('theblogger_setting_color_menu_link_hover_bg_border', "");
		
		if ($theblogger_setting_color_menu_link_hover_bg_border != "")
		{
			$custom_css .= PHP_EOL . PHP_EOL . "@media screen and (min-width: 992px) { html.loaded .nav-menu ul li a .link-text:before, .nav-menu li.has-submenu:hover > a .link-text:before { background-color: {$theblogger_setting_color_menu_link_hover_bg_border}; border-color: {$theblogger_setting_color_menu_link_hover_bg_border}; } }";
		}
		
		
		$theblogger_setting_color_headings_text = get_theme_mod('theblogger_setting_color_headings_text', "");
		
		if ($theblogger_setting_color_headings_text != "")
		{
			$custom_css .= PHP_EOL . PHP_EOL . "h1, h2, h3, h4, h5, h6, blockquote, .tab-titles { color: {$theblogger_setting_color_headings_text}; }";
		}
		
		
		$theblogger_setting_color_body_text = get_theme_mod('theblogger_setting_color_body_text', "");
		
		if ($theblogger_setting_color_body_text != "")
		{
			$custom_css .= PHP_EOL . PHP_EOL . "body { color: {$theblogger_setting_color_body_text}; }";
		}
		
		
		$theblogger_setting_color_body_bg = get_theme_mod('theblogger_setting_color_body_bg', "");
		
		if ($theblogger_setting_color_body_bg != "")
		{
			$custom_css .= PHP_EOL . PHP_EOL . "body { background: {$theblogger_setting_color_body_bg}; }";
		}
		
		
		$theblogger_setting_color_footer_bg = get_theme_mod('theblogger_setting_color_footer_bg', "");
		
		if ($theblogger_setting_color_footer_bg != "")
		{
			$custom_css .= PHP_EOL . PHP_EOL . ".site-footer { background: {$theblogger_setting_color_footer_bg}; }";
		}
		
		
		$theblogger_setting_color_footer_background_gradient = get_theme_mod('theblogger_setting_color_footer_background_gradient', "");
		
		if ($theblogger_setting_color_footer_background_gradient != "")
		{
			$custom_css .= PHP_EOL . PHP_EOL . ".site-footer { background: linear-gradient(130deg, {$theblogger_setting_color_footer_bg} 30%, {$theblogger_setting_color_footer_background_gradient} 100%); }";
		}
		
		
		$theblogger_setting_color_footer_subscribe_bg = get_theme_mod('theblogger_setting_color_footer_subscribe_bg', "");
		
		if ($theblogger_setting_color_footer_subscribe_bg != "")
		{
			$custom_css .= PHP_EOL . PHP_EOL . ".site .footer-subscribe { background: {$theblogger_setting_color_footer_subscribe_bg}; }";
		}
		
		
		$theblogger_setting_color_footer_subscribe_background_gradient = get_theme_mod('theblogger_setting_color_footer_subscribe_background_gradient', "");
		
		if ($theblogger_setting_color_footer_subscribe_background_gradient != "")
		{
			$custom_css .= PHP_EOL . PHP_EOL . ".site .footer-subscribe { background: linear-gradient(130deg, {$theblogger_setting_color_footer_subscribe_bg} 30%, {$theblogger_setting_color_footer_subscribe_background_gradient} 100%); }";
		}
		
		
		$theblogger_setting_color_copyright_bar_bg = get_theme_mod('theblogger_setting_color_copyright_bar_bg', "");
		
		if ($theblogger_setting_color_copyright_bar_bg != "")
		{
			$custom_css .= PHP_EOL . PHP_EOL . ".site-footer .site-info { background-color: {$theblogger_setting_color_copyright_bar_bg}; }";
		}
		
		
		$theblogger_setting_color_copyright_bar_text = get_theme_mod('theblogger_setting_color_copyright_bar_text', "");
		
		if ($theblogger_setting_color_copyright_bar_text != "")
		{
			$custom_css .= PHP_EOL . PHP_EOL . ".site-footer .site-info { color: {$theblogger_setting_color_copyright_bar_text}; }";
		}
		
		
		$theblogger_setting_color_footer_text = get_theme_mod('theblogger_setting_color_footer_text', "");
		
		if ($theblogger_setting_color_footer_text != "")
		{
			$custom_css .= PHP_EOL . PHP_EOL . ".footer-widgets { color: {$theblogger_setting_color_footer_text}; }";
		}
		
		
		$theblogger_setting_color_cat_link_bg_border = get_theme_mod('theblogger_setting_color_cat_link_bg_border', "");
		
		if ($theblogger_setting_color_cat_link_bg_border != "")
		{
			$custom_css .= PHP_EOL . PHP_EOL . ".is-cat-link-regular .cat-links a, .is-cat-link-borders .cat-links a, .is-cat-link-border-bottom .cat-links a, .is-cat-link-borders-light .cat-links a { color: {$theblogger_setting_color_cat_link_bg_border}; }";
			
			$custom_css .= PHP_EOL . PHP_EOL . ".is-cat-link-borders .cat-links a, .is-cat-link-borders-light .cat-links a, .is-cat-link-border-bottom .cat-links a, .is-cat-link-ribbon .cat-links a:before, .is-cat-link-ribbon .cat-links a:after, .is-cat-link-ribbon-left .cat-links a:before, .is-cat-link-ribbon-right .cat-links a:after, .is-cat-link-ribbon.is-cat-link-ribbon-dark .cat-links a:before, .is-cat-link-ribbon.is-cat-link-ribbon-dark .cat-links a:after, .is-cat-link-ribbon-left.is-cat-link-ribbon-dark .cat-links a:before, .is-cat-link-ribbon-right.is-cat-link-ribbon-dark .cat-links a:after { border-color: {$theblogger_setting_color_cat_link_bg_border}; }";
			
			$custom_css .= PHP_EOL . PHP_EOL . ".is-cat-link-solid .cat-links a, .is-cat-link-solid-light .cat-links a, .is-cat-link-ribbon .cat-links a, .is-cat-link-ribbon-left .cat-links a, .is-cat-link-ribbon-right .cat-links a, .is-cat-link-ribbon.is-cat-link-ribbon-dark .cat-links a, .is-cat-link-ribbon-left.is-cat-link-ribbon-dark .cat-links a, .is-cat-link-ribbon-right.is-cat-link-ribbon-dark .cat-links a { background: {$theblogger_setting_color_cat_link_bg_border}; }";
			
			$custom_css .= PHP_EOL . PHP_EOL . ".is-cat-link-underline .cat-links a { box-shadow: inset 0 -7px 0 {$theblogger_setting_color_cat_link_bg_border}; }";
		}
		
		
		$theblogger_setting_color_slider_meta_bg_border = get_theme_mod('theblogger_setting_color_slider_meta_bg_border', "");
		
		if ($theblogger_setting_color_slider_meta_bg_border != "")
		{
			$custom_css .= PHP_EOL . PHP_EOL . ".main-slider-post.is-cat-link-regular .cat-links a, .main-slider-post.is-cat-link-border-bottom .cat-links a, .main-slider-post.is-cat-link-borders .cat-links a, .main-slider-post.is-cat-link-borders-light .cat-links a, .main-slider-post.is-cat-link-line-before .cat-links a, .main-slider-post.is-cat-link-dots-bottom .cat-links a:before { color: {$theblogger_setting_color_slider_meta_bg_border}; }";
			
			$custom_css .= PHP_EOL . PHP_EOL . ".main-slider-post.is-cat-link-borders .cat-links a, .main-slider-post.is-cat-link-borders-light .cat-links a, .main-slider-post.is-cat-link-border-bottom .cat-links a, .main-slider-post.is-cat-link-line-before .cat-links a:before, .main-slider-post.is-cat-link-ribbon .cat-links a:before, .main-slider-post.is-cat-link-ribbon .cat-links a:after, .main-slider-post.is-cat-link-ribbon-left .cat-links a:before, .main-slider-post.is-cat-link-ribbon-right .cat-links a:after { border-color: {$theblogger_setting_color_slider_meta_bg_border}; }";
			
			$custom_css .= PHP_EOL . PHP_EOL . ".main-slider-post.is-cat-link-solid .cat-links a, .main-slider-post.is-cat-link-solid-light .cat-links a, .main-slider-post.is-cat-link-ribbon .cat-links a, .main-slider-post.is-cat-link-ribbon-left .cat-links a, .main-slider-post.is-cat-link-ribbon-right .cat-links a { background: {$theblogger_setting_color_slider_meta_bg_border}; }";
			
			$custom_css .= PHP_EOL . PHP_EOL . ".main-slider-post.is-cat-link-underline .cat-links a { box-shadow: inset 0 -7px 0 {$theblogger_setting_color_slider_meta_bg_border}; }";
		}
		
		
		$theblogger_setting_color_widget_witle_bg_border = get_theme_mod('theblogger_setting_color_widget_witle_bg_border', "");
		
		if ($theblogger_setting_color_widget_witle_bg_border != "")
		{
			$custom_css .= PHP_EOL . PHP_EOL . ".is-widget-ribbon .site-main .widget-title span, .is-widget-solid .site-main .widget-title span, .is-widget-solid-arrow .site-main .widget-title span, .is-widget-first-letter-solid .site-main .widget-title span:first-letter { background: {$theblogger_setting_color_widget_witle_bg_border}; }";
			
			$custom_css .= PHP_EOL . PHP_EOL . ".is-widget-ribbon .site-main .widget-title span:before, .is-widget-ribbon .site-main .widget-title span:after, .is-widget-border .site-main .widget-title span, .is-widget-border-arrow .site-main .widget-title span, .is-widget-bottomline .site-main .widget-title:after, .is-widget-first-letter-border .site-main .widget-title span:first-letter, .is-widget-line-cut .site-main .widget-title span:before, .is-widget-line-cut .site-main .widget-title span:after, .is-widget-line-cut-center .site-main .widget-title span:before, .is-widget-line-cut-center .site-main .widget-title span:after { border-color: {$theblogger_setting_color_widget_witle_bg_border}; }";
			
			$custom_css .= PHP_EOL . PHP_EOL . ".is-widget-border-arrow .site-main .widget-title span:before, .is-widget-solid-arrow .site-main .widget-title span:after { border-top-color: {$theblogger_setting_color_widget_witle_bg_border}; }";
			
			$custom_css .= PHP_EOL . PHP_EOL . ".is-widget-underline .site-main .widget-title span { box-shadow: inset 0 -6px 0 {$theblogger_setting_color_widget_witle_bg_border}; }";
		}
		
		
		$theblogger_setting_color_primary_button = get_theme_mod('theblogger_setting_color_primary_button', "");
		
		if ($theblogger_setting_color_primary_button != "")
		{
			$custom_css .= PHP_EOL . PHP_EOL . ".button.is-primary { color: {$theblogger_setting_color_primary_button}; }";
			
			$custom_css .= PHP_EOL . PHP_EOL . ".button.is-primary.is-shadow, .button.is-primary.is-solid, .button.is-primary.is-solid-light, html .elementor-button, html .ekit-wid-con .elementskit-btn { background-color: {$theblogger_setting_color_primary_button}; }";
			
			$custom_css .= PHP_EOL . PHP_EOL . ".button.is-primary.is-shadow { box-shadow: 0px 18px 23px -6px {$theblogger_setting_color_primary_button}; }";
		}
		
		
		$theblogger_setting_color_primary_button_hover = get_theme_mod('theblogger_setting_color_primary_button_hover', "");
		
		if ($theblogger_setting_color_primary_button_hover != "")
		{
			$custom_css .= PHP_EOL . PHP_EOL . ".button.is-primary:hover { color: {$theblogger_setting_color_primary_button_hover}; }";
			
			$custom_css .= PHP_EOL . PHP_EOL . ".button.is-primary.is-shadow:hover, .button.is-primary.is-solid:hover, .button.is-primary.is-solid-light:hover, .button.is-primary.is-shift:after, .button.is-primary.is-circle:before, html .elementor-button:hover, html .ekit-wid-con .elementskit-btn:hover { background-color: {$theblogger_setting_color_primary_button_hover}; }";
			
			$custom_css .= PHP_EOL . PHP_EOL . ".button.is-primary.is-shadow:hover { box-shadow: 0px 2px 10px -5px {$theblogger_setting_color_primary_button_hover}; }";
		}
		
		
		$theblogger_setting_color_secondary_button = get_theme_mod('theblogger_setting_color_secondary_button', "");
		
		if ($theblogger_setting_color_secondary_button != "")
		{
			$custom_css .= PHP_EOL . PHP_EOL . ".button.is-secondary { color: {$theblogger_setting_color_secondary_button}; }";
			
			$custom_css .= PHP_EOL . PHP_EOL . ".button.is-secondary.is-shadow, .button.is-secondary.is-solid, .button.is-secondary.is-solid-light, .elementor-element.elementor-button-info .elementor-button { background-color: {$theblogger_setting_color_secondary_button}; }";
			
			$custom_css .= PHP_EOL . PHP_EOL . ".button.is-secondary.is-shadow { box-shadow: 0px 18px 23px -6px {$theblogger_setting_color_secondary_button}; }";
		}
		
		
		$theblogger_setting_color_secondary_button_hover = get_theme_mod('theblogger_setting_color_secondary_button_hover', "");
		
		if ($theblogger_setting_color_secondary_button_hover != "")
		{
			$custom_css .= PHP_EOL . PHP_EOL . ".button.is-secondary:hover { color: {$theblogger_setting_color_secondary_button_hover}; }";
			
			$custom_css .= PHP_EOL . PHP_EOL . ".button.is-secondary.is-shadow:hover, .button.is-secondary.is-solid:hover, .button.is-secondary.is-solid-light:hover, .button.is-secondary.is-shift:after, .button.is-secondary.is-circle:before, .elementor-element.elementor-button-info .elementor-button:hover { background-color: {$theblogger_setting_color_secondary_button_hover}; }";
			
			$custom_css .= PHP_EOL . PHP_EOL . ".button.is-secondary.is-shadow:hover { box-shadow: 0px 2px 10px -5px {$theblogger_setting_color_secondary_button_hover}; }";
		}
		
		
		$theblogger_setting_color_top_bar_background = get_theme_mod('theblogger_setting_color_top_bar_background', '#171717');
		
		if ($theblogger_setting_color_top_bar_background != "")
		{
			$custom_css .= PHP_EOL . PHP_EOL . ".top-bar, .top-bar select option { background-color: {$theblogger_setting_color_top_bar_background}; }";
		}
		
		
		$theblogger_setting_color_top_bar_background_gradient = get_theme_mod('theblogger_setting_color_top_bar_background_gradient', "");
		
		if ($theblogger_setting_color_top_bar_background_gradient != "")
		{
			$custom_css .= PHP_EOL . PHP_EOL . ".top-bar { background: linear-gradient(90deg, {$theblogger_setting_color_top_bar_background} 30%, {$theblogger_setting_color_top_bar_background_gradient} 100%); }";
		}
		
		
		$theblogger_setting_color_header_text_custom = get_theme_mod('theblogger_setting_color_header_text_custom', '#222222');
		
		if ($theblogger_setting_color_header_text_custom != '#222222')
		{
			$custom_css .= PHP_EOL . PHP_EOL . ".site-header { color: {$theblogger_setting_color_header_text_custom}; }";
		}
		
		
		$theblogger_setting_color_header_border = get_theme_mod('theblogger_setting_color_header_border', "");
		
		if ($theblogger_setting_color_header_border != "")
		{
			$custom_css .= PHP_EOL . PHP_EOL . ".header-wrap:after { color: {$theblogger_setting_color_header_border}; }";
		}
		else
		{
			$custom_css .= PHP_EOL . PHP_EOL . ".header-wrap:after { color: {$theblogger_setting_color_header_text_custom}; }";
		}
		
		
		$theblogger_setting_color_header_border_gradient = get_theme_mod('theblogger_setting_color_header_border_gradient', "");
		
		if ($theblogger_setting_color_header_border_gradient != "")
		{
			$custom_css .= PHP_EOL . PHP_EOL . ".header-wrap:after { background: linear-gradient(90deg, currentColor 30%, {$theblogger_setting_color_header_border_gradient} 100%); }";
		}
		
		
		$theblogger_setting_color_menu_border = get_theme_mod('theblogger_setting_color_menu_border', "");
		
		if ($theblogger_setting_color_menu_border != "")
		{
			$custom_css .= PHP_EOL . PHP_EOL . ".is-menu-bar .menu-wrap:after { color: {$theblogger_setting_color_menu_border}; }";
		}
		else
		{
			$custom_css .= PHP_EOL . PHP_EOL . ".is-menu-bar .menu-wrap:after { color: {$theblogger_setting_color_header_text_custom}; }";
		}
		
		
		$theblogger_setting_color_menu_border_gradient = get_theme_mod('theblogger_setting_color_menu_border_gradient', "");
		
		if ($theblogger_setting_color_menu_border_gradient != "")
		{
			$custom_css .= PHP_EOL . PHP_EOL . ".is-menu-bar .menu-wrap:after { background: linear-gradient(90deg, currentColor 30%, {$theblogger_setting_color_menu_border_gradient} 100%); }";
		}
		
		
		$theblogger_setting_color_logo_text = get_theme_mod('theblogger_setting_color_logo_text', "");
		
		if ($theblogger_setting_color_logo_text != "")
		{
			$custom_css .= PHP_EOL . PHP_EOL . "html .site-header .site-title a { color: {$theblogger_setting_color_logo_text}; }";
		}
		
		
		$theblogger_setting_color_logo_bg = get_theme_mod('theblogger_setting_color_logo_bg', "");
		
		if ($theblogger_setting_color_logo_bg != "")
		{
			$custom_css .= PHP_EOL . PHP_EOL . "html .site-header .site-title a { background: {$theblogger_setting_color_logo_bg}; }";
		}
		
		
		$theblogger_setting_color_logo_bg_gradient = get_theme_mod('theblogger_setting_color_logo_bg_gradient', "");
		
		if ($theblogger_setting_color_logo_bg_gradient != "")
		{
			$custom_css .= PHP_EOL . PHP_EOL . "html .site-header .site-title a { background: linear-gradient(140deg, {$theblogger_setting_color_logo_bg} 0%, {$theblogger_setting_color_logo_bg_gradient} 90%); }";
		}
		
		
		// Custom CSS
		
		$theblogger_setting_custom_css = get_theme_mod('theblogger_setting_custom_css', "");
		
		if ($theblogger_setting_custom_css != "")
		{
			$custom_css .= PHP_EOL . PHP_EOL . $theblogger_setting_custom_css;
		}
		
		
		$custom_css = trim($custom_css);
		wp_add_inline_style('theblogger-style', $custom_css);
	}
	
	function theblogger_after_setup_theme__inline_style()
	{
		add_action('wp_enqueue_scripts', 'theblogger_enqueue__inline_style');
	}
	
	add_action('after_setup_theme', 'theblogger_after_setup_theme__inline_style');

?>