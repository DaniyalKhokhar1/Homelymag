<?php

	function theblogger_core_header_style()
	{
		$post_header_style   = "";
		$front_page_displays = get_option('show_on_front'); // Reading Settings.
		
		if (is_home() && ($front_page_displays == 'posts')) // Blog page is homepage.
		{
			$post_header_style = get_theme_mod('theblogger_setting_blog_homepage_header_style', ""); // Get blog homepage header style class. (customizer) --- BLOG HOMEPAGE
		}
		elseif (is_singular() || is_home()) // Blog page is a subpage.
		{
			if (function_exists('pixelwars_core_header_style'))
			{
				$post_header_style = pixelwars_core_header_style();
				
				if (($post_header_style == 'inherit') || empty($post_header_style))
				{
					if (is_singular('page') || is_home()) // Blog page AND other pages.
					{
						$post_header_style = get_theme_mod('theblogger_setting_page_header_style_global', ""); // Get page header style class. (customizer) --- BLOG PAGE / PAGES
					}
					elseif (is_singular('post')) // Blog posts.
					{
						$post_header_style = get_theme_mod('theblogger_setting_post_header_style_global', ""); // Get post header style class. (customizer) --- BLOG POSTS
					}
					else // Portfolio posts AND other custom post types.
					{
						if (! is_attachment())
						{
							$post_header_style = get_theme_mod('theblogger_setting_custom_post_header_style_global', ""); // Get post header style class. (customizer) --- PORTFOLIO POSTS / CUSTOM POST TYPES
						}
					}
				}
			}
		}
		
		return $post_header_style;
	}


/* ============================================================================================================================================= */


	function theblogger_core_featured_media__url()
	{
		return stripcslashes(get_option(get_the_ID() . 'theblogger_featured_video_url', ""));
	}


/* ============================================================================================================================================= */


	function theblogger_core_share_links_meta()
	{
		if (function_exists('pixelwars_core_share_links_meta'))
		{
			pixelwars_core_share_links_meta();
		}
	}
	
	
	function theblogger_core_share_links()
	{
		$share_links = get_theme_mod('theblogger_setting_share_links', 'Yes');
		
		if ($share_links != 'No')
		{
			if (function_exists('pixelwars_core_share_links'))
			{
				pixelwars_core_share_links();
			}
		}
	}


/* ============================================================================================================================================= */


	function theblogger_core_related_posts()
	{
		if (is_singular('post'))
		{
			if (function_exists('pixelwars_core_related_posts'))
			{
				$related_posts = get_theme_mod('theblogger_setting_related_posts', 'Yes');
				
				if ($related_posts != 'No')
				{
					$related_posts_category = get_theme_mod('theblogger_setting_related_posts_category', 'all');
					$orderby                = get_theme_mod('theblogger_setting_related_posts_order', 'rand');
					$posts_per_page         = get_theme_mod('theblogger_setting_related_posts_count', '3');
					$related_posts_style    = get_theme_mod('theblogger_setting_related_posts_style', 'overlay');
					
					pixelwars_core_related_posts($related_posts_category, $orderby, $posts_per_page, $related_posts_style);
				}
			}
		}
	}


/* ============================================================================================================================================= */


	function theblogger_core_fonts()
	{
		if (function_exists('pixelwars_core_fonts'))
		{
			return pixelwars_core_fonts();
		}
		else
		{
			return array("" => 'OS Default');
		}
	}

?>