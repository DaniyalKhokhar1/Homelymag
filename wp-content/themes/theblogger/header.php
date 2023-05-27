<!doctype html>
<html <?php language_attributes(); ?> <?php theblogger_html_class(); ?> <?php echo theblogger_html_data_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<?php
		$theblogger_mobile_zoom = get_theme_mod('theblogger_setting_mobile_zoom', 'Yes');
		
		if ($theblogger_mobile_zoom == 'No')
		{
			?>
				<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
			<?php
		}
		else
		{
			?>
				<meta name="viewport" content="width=device-width, initial-scale=1">
			<?php
		}
	?>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php
		wp_head();
	?>
</head>

<body <?php body_class(); ?>>
    <div id="page" class="hfeed site">
		<?php
			if (is_active_sidebar('theblogger_sidebar__top_bar_left') || is_active_sidebar('theblogger_sidebar__top_bar_right'))
			{
				?>
					<div class="top-bar">
						<div class="top-bar-wrap">
							<div class="top-bar-left">
								<?php
									dynamic_sidebar('theblogger_sidebar__top_bar_left');
								?>
							</div> <!-- .top-bar-left -->
							<div class="top-bar-right">
								<?php
									dynamic_sidebar('theblogger_sidebar__top_bar_right');
								?>
							</div> <!-- .top-bar-right -->
						</div> <!-- .top-bar-wrap -->
					</div> <!-- .top-bar -->
				<?php
			}
		?>
		
        <header id="masthead" class="site-header" role="banner">
			<?php
				$theblogger_header_bg_video = get_theme_mod('theblogger_setting_header_bg_video', "");
			?>
			<div class="header-wrap" data-parallax-video="<?php echo esc_url($theblogger_header_bg_video); ?>">
				<div class="header-wrap-inner">
					<div class="site-branding">
						<div class="site-branding-wrap">
							<div class="site-branding-left">
								<?php
									dynamic_sidebar('theblogger_sidebar__logo_before');
								?>
							</div> <!-- .site-branding-left -->
							
							<div class="site-branding-center">
								<?php
									$theblogger_image_logo_negative_id = get_theme_mod('theblogger_setting_image_logo_negative', "");
									$theblogger_site_logo              = get_theme_mod('theblogger_setting_logo_site', "");
									
									if ((! empty($theblogger_site_logo)) || (! empty($theblogger_image_logo_negative_id)))
									{
										?>
											<h1 class="site-title">
												<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
													<span class="screen-reader-text"><?php bloginfo('name'); ?></span>
													
													<?php
														$theblogger_site_logo__url_http  = strpos($theblogger_site_logo, 'http:'); // Check for http:
														$theblogger_site_logo__url_https = strpos($theblogger_site_logo, 'https:'); // Check for https:
														
														if ($theblogger_site_logo__url_http !== false)
														{
															$theblogger_site_logo = substr($theblogger_site_logo, 5); // Remove http:
														}
														elseif ($theblogger_site_logo__url_https !== false)
														{
															$theblogger_site_logo = substr($theblogger_site_logo, 6); // Remove https:
														}
														
														if (! empty($theblogger_site_logo))
														{
															?>
																<img alt="<?php bloginfo('name'); ?>" src="<?php echo esc_url($theblogger_site_logo); ?>">
															<?php
														}
													?>
													
													<?php
														if (! empty($theblogger_image_logo_negative_id))
														{
															$image_logo_negative = wp_get_attachment_image_url($theblogger_image_logo_negative_id , 'full');
															
															?>
																<img class="logo-negative" alt="<?php bloginfo('name'); ?>" src="<?php echo esc_url($image_logo_negative); ?>">
															<?php
														}
													?>
												</a>
											</h1> <!-- .site-title -->
										<?php
									}
									else
									{
										$site_title = get_bloginfo('name');
										
										if ($site_title != "")
										{
											?>
												<h1 class="site-title">
													<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
														<span class="screen-reader-text"><?php echo esc_html($site_title); ?></span>
														<span class="site-title-text"><?php echo esc_html($site_title); ?></span>
													</a>
												</h1> <!-- .site-title -->
											<?php
										}
									}
								?>
								
								<p class="site-description">
									<?php
										$theblogger_tagline = get_bloginfo('description');
										echo esc_html($theblogger_tagline);
									?>
								</p> <!-- .site-description -->
							</div> <!-- .site-branding-center -->
							
							<div class="site-branding-right">
								<?php
									dynamic_sidebar('theblogger_sidebar__logo_after');
								?>
							</div> <!-- .site-branding-right -->
						</div> <!-- .site-branding-wrap -->
					</div> <!-- .site-branding -->
					
					<nav id="site-navigation" class="main-navigation site-navigation" role="navigation">
						<div class="menu-wrap">
							<div class="layout-medium">
								<a class="menu-toggle">
									<span class="lines"></span>
								</a>
								
								<?php
									do_action('theblogger_header_cart_icon');
								?>
								
								<?php
									if (has_nav_menu('theblogger_theme_menu_location'))
									{
										wp_nav_menu(
											array(
												'theme_location'  => 'theblogger_theme_menu_location',
												'menu'            => 'theblogger_theme_menu_location',
												'menu_class'      => "",
												'container'       => 'div',
												'container_class' => 'nav-menu'
											)
										);
									}
									else
									{
										wp_page_menu(
											array(
												'menu_class' => 'nav-menu',
												'container'  => 'div'
											)
										);
									}
								?>
								
								<?php
									$theblogger_header_search = get_theme_mod('theblogger_setting_header_search', "");
									
									if ($theblogger_header_search != 'is-header-search-disabled')
									{
										?>
											<a class="search-toggle toggle-link"></a>
											
											<div class="search-container">
												<div class="search-box" role="search">
													<form class="search-form" method="get" action="<?php echo esc_url(home_url('/')); ?>">
														<label>
															<span>
																<?php
																	esc_html_e('Search for', 'theblogger');
																?>
															</span>
															<input type="search" id="search-field" name="s" placeholder="<?php esc_attr_e('type and hit enter', 'theblogger'); ?>">
														</label>
														<input type="submit" class="search-submit" value="<?php esc_attr_e('Search', 'theblogger'); ?>">
													</form> <!-- .search-form -->
												</div> <!-- .search-box -->
											</div> <!-- .search-container -->
										<?php
									}
								?>
								
								<?php
									if (is_active_sidebar('theblogger_sidebar_4'))
									{
										?>
											<div class="social-container widget-area">
												<?php
													dynamic_sidebar('theblogger_sidebar_4');
												?>
											</div> <!-- .social-container -->
										<?php
									}
								?>
							</div> <!-- .layout-medium -->
						</div> <!-- .menu-wrap -->
					</nav> <!-- #site-navigation .main-navigation .site-navigation -->
				</div> <!-- .header-wrap-inner -->
			</div> <!-- .header-wrap -->
        </header> <!-- #masthead .site-header -->