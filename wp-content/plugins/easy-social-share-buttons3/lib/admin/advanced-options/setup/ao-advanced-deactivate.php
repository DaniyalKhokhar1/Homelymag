<?php 

if (function_exists('essb_advancedopts_settings_group')) {
	essb_advancedopts_settings_group('essb_options');
}

essb_advancedopts_section_open('ao-small-values');
essb5_draw_input_option('deactivate_on_share', esc_html__('Social Share Buttons', 'essb'), esc_html__('Deactivate function on posts/pages with these IDs? Comma separated: "11, 15, 125". Deactivating plugin will make no style or scripts to be executed for those pages/posts related to this function', 'essb'), true);
essb5_draw_input_option('deactivate_on_share_cats', esc_html__('Social Share Buttons on Posts from Categories', 'essb'), esc_html__('Deactivate function on selected categories. Comma separated category IDs: 11, 15, 125', 'essb'), true);
essb5_draw_input_option('deactivate_on_native', esc_html__('Native Buttons', 'essb'), esc_html__('Deactivate function on posts/pages with these IDs? Comma separated: "11, 15, 125". Deactivating plugin will make no style or scripts to be executed for those pages/posts related to this function', 'essb'), true);
essb5_draw_input_option('deactivate_on_fanscounter', esc_html__('Social Following (Followers Counter)', 'essb'), esc_html__('Deactivate function on posts/pages with these IDs? Comma separated: "11, 15, 125". Deactivating plugin will make no style or scripts to be executed for those pages/posts related to this function', 'essb'), true);
essb5_draw_input_option('deactivate_on_ctt', esc_html__('Sharable Quotes (Click To Tweet)', 'essb'), esc_html__('Deactivate function on posts/pages with these IDs? Comma separated: "11, 15, 125". Deactivating plugin will make no style or scripts to be executed for those pages/posts related to this function', 'essb'), true);
essb5_draw_input_option('deactivate_on_sis', esc_html__('On Media Sharing (Social Image Share)', 'essb'), esc_html__('Deactivate function on posts/pages with these IDs? Comma separated: "11, 15, 125". Deactivating plugin will make no style or scripts to be executed for those pages/posts related to this function', 'essb'), true);
essb5_draw_input_option('deactivate_on_profiles', esc_html__('Social Profiles', 'essb'), esc_html__('Deactivate function on posts/pages with these IDs? Comma separated: "11, 15, 125". Deactivating plugin will make no style or scripts to be executed for those pages/posts related to this function', 'essb'), true);
essb5_draw_input_option('deactivate_on_sso', esc_html__('Social Share Optimization Meta Tags', 'essb'), esc_html__('Deactivate function on posts/pages with these IDs? Comma separated: "11, 15, 125". Deactivating plugin will make no style or scripts to be executed for those pages/posts related to this function', 'essb'), true);
essb5_draw_input_option('deactivate_on_aftershare', esc_html__('After Share Actions', 'essb'), esc_html__('Deactivate function on posts/pages with these IDs? Comma separated: "11, 15, 125". Deactivating plugin will make no style or scripts to be executed for those pages/posts related to this function', 'essb'), true);
essb5_draw_input_option('deactivate_on_mobile', esc_html__('Mobile Display of Share Buttons', 'essb'), esc_html__('Deactivate function on posts/pages with these IDs? Comma separated: "11, 15, 125". Deactivating plugin will make no style or scripts to be executed for those pages/posts related to this function', 'essb'), true);
essb5_draw_input_option('deactivate_on_pinpro', esc_html__('Pinterest Pro', 'essb'), esc_html__('Deactivate function on posts/pages with these IDs? Comma separated: "11, 15, 125". Deactivating plugin will make no style or scripts to be executed for those pages/posts related to this function', 'essb'), true);
essb_advancedopts_section_close();