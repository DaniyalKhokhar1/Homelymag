<?php

	class theblogger_Widget_Social_Media_Icon extends WP_Widget
	{
		public function __construct()
		{
			parent::__construct(
				'theblogger_widget_social_media_icon',
				esc_html__('(Pixelwars) Social Media Icon', 'theblogger'),
				array(
					'description'                 => esc_html__('Social media icons.', 'theblogger'),
					'customize_selective_refresh' => true
				)
			);
		}
		
		public function form($instance)
		{
			if (isset($instance['title']))              { $title              = $instance['title']; }              else { $title              = ""; }
			if (isset($instance['theblogger_icon']))    { $theblogger_icon    = $instance['theblogger_icon']; }    else { $theblogger_icon    = 'facebook'; }
			if (isset($instance['theblogger_url']))     { $theblogger_url     = $instance['theblogger_url']; }     else { $theblogger_url     = ""; }
			if (isset($instance['theblogger_new_tab'])) { $theblogger_new_tab = $instance['theblogger_new_tab']; } else { $theblogger_new_tab = ""; }
			
			?>
				<p>
					<label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title', 'theblogger'); ?></label>
					
					<input type="text" class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" value="<?php echo esc_attr($title); ?>">
				</p>
				<p>
					<label for="<?php echo esc_attr($this->get_field_id('theblogger_icon')); ?>"><?php esc_html_e('Icon', 'theblogger'); ?></label>
					
					<select class="widefat" id="<?php echo esc_attr($this->get_field_id('theblogger_icon')); ?>" name="<?php echo esc_attr($this->get_field_name('theblogger_icon')); ?>">
						<option <?php if ($theblogger_icon == 'facebook')       { echo 'selected="selected"'; } ?> value="facebook"><?php       esc_html_e('Facebook', 'theblogger'); ?></option>
						<option <?php if ($theblogger_icon == 'twitter')        { echo 'selected="selected"'; } ?> value="twitter"><?php        esc_html_e('Twitter', 'theblogger'); ?></option>
						<option <?php if ($theblogger_icon == 'instagram')      { echo 'selected="selected"'; } ?> value="instagram"><?php      esc_html_e('Instagram', 'theblogger'); ?></option>
						<option <?php if ($theblogger_icon == 'snapchat')       { echo 'selected="selected"'; } ?> value="snapchat"><?php       esc_html_e('Snapchat', 'theblogger'); ?></option>
						<option <?php if ($theblogger_icon == 'whatsapp')       { echo 'selected="selected"'; } ?> value="whatsapp"><?php       esc_html_e('WhatsApp', 'theblogger'); ?></option>
						<option <?php if ($theblogger_icon == 'tiktok')         { echo 'selected="selected"'; } ?> value="tiktok"><?php         esc_html_e('TikTok', 'theblogger'); ?></option>
						<option <?php if ($theblogger_icon == 'medium')         { echo 'selected="selected"'; } ?> value="medium"><?php         esc_html_e('Medium', 'theblogger'); ?></option>
						<option <?php if ($theblogger_icon == 'unsplash')       { echo 'selected="selected"'; } ?> value="unsplash"><?php       esc_html_e('Unsplash', 'theblogger'); ?></option>
						<option <?php if ($theblogger_icon == 'google-plus')    { echo 'selected="selected"'; } ?> value="google-plus"><?php    esc_html_e('Google+', 'theblogger'); ?></option>
						<option <?php if ($theblogger_icon == 'linkedin')       { echo 'selected="selected"'; } ?> value="linkedin"><?php       esc_html_e('LinkedIn', 'theblogger'); ?></option>
						<option <?php if ($theblogger_icon == 'pinterest')      { echo 'selected="selected"'; } ?> value="pinterest"><?php      esc_html_e('Pinterest', 'theblogger'); ?></option>
						<option <?php if ($theblogger_icon == 'flickr')         { echo 'selected="selected"'; } ?> value="flickr"><?php         esc_html_e('Flickr', 'theblogger'); ?></option>
						<option <?php if ($theblogger_icon == 'fivehundredpx')  { echo 'selected="selected"'; } ?> value="fivehundredpx"><?php  esc_html_e('500px', 'theblogger'); ?></option>
						<option <?php if ($theblogger_icon == 'behance')        { echo 'selected="selected"'; } ?> value="behance"><?php        esc_html_e('Behance', 'theblogger'); ?></option>
						<option <?php if ($theblogger_icon == 'dribbble')       { echo 'selected="selected"'; } ?> value="dribbble"><?php       esc_html_e('Dribbble', 'theblogger'); ?></option>
						<option <?php if ($theblogger_icon == 'forrst')         { echo 'selected="selected"'; } ?> value="forrst"><?php         esc_html_e('Forrst', 'theblogger'); ?></option>
						<option <?php if ($theblogger_icon == 'skype')          { echo 'selected="selected"'; } ?> value="skype"><?php          esc_html_e('Skype', 'theblogger'); ?></option>
						<option <?php if ($theblogger_icon == 'youtube')        { echo 'selected="selected"'; } ?> value="youtube"><?php        esc_html_e('YouTube', 'theblogger'); ?></option>
						<option <?php if ($theblogger_icon == 'twitch')         { echo 'selected="selected"'; } ?> value="twitch"><?php         esc_html_e('Twitch', 'theblogger'); ?></option>
						<option <?php if ($theblogger_icon == 'vimeo')          { echo 'selected="selected"'; } ?> value="vimeo"><?php          esc_html_e('Vimeo', 'theblogger'); ?></option>
						<option <?php if ($theblogger_icon == 'soundcloud')     { echo 'selected="selected"'; } ?> value="soundcloud"><?php     esc_html_e('SoundCloud', 'theblogger'); ?></option>
						<option <?php if ($theblogger_icon == 'lastfm')         { echo 'selected="selected"'; } ?> value="lastfm"><?php         esc_html_e('Last.fm', 'theblogger'); ?></option>
						<option <?php if ($theblogger_icon == 'wordpress')      { echo 'selected="selected"'; } ?> value="wordpress"><?php      esc_html_e('WordPress', 'theblogger'); ?></option>
						<option <?php if ($theblogger_icon == 'tumblr')         { echo 'selected="selected"'; } ?> value="tumblr"><?php         esc_html_e('Tumblr', 'theblogger'); ?></option>
						<option <?php if ($theblogger_icon == 'blogger')        { echo 'selected="selected"'; } ?> value="blogger"><?php        esc_html_e('Blogger', 'theblogger'); ?></option>
						<option <?php if ($theblogger_icon == 'delicious')      { echo 'selected="selected"'; } ?> value="delicious"><?php      esc_html_e('Delicious', 'theblogger'); ?></option>
						<option <?php if ($theblogger_icon == 'digg')           { echo 'selected="selected"'; } ?> value="digg"><?php           esc_html_e('Digg', 'theblogger'); ?></option>
						<option <?php if ($theblogger_icon == 'github')         { echo 'selected="selected"'; } ?> value="github"><?php         esc_html_e('GitHub', 'theblogger'); ?></option>
						<option <?php if ($theblogger_icon == 'stack-overflow') { echo 'selected="selected"'; } ?> value="stack-overflow"><?php esc_html_e('Stack Overflow', 'theblogger'); ?></option>
						<option <?php if ($theblogger_icon == 'foursquare')     { echo 'selected="selected"'; } ?> value="foursquare"><?php     esc_html_e('Foursquare', 'theblogger'); ?></option>
						<option <?php if ($theblogger_icon == 'xing')           { echo 'selected="selected"'; } ?> value="xing"><?php           esc_html_e('Xing', 'theblogger'); ?></option>
						<option <?php if ($theblogger_icon == 'weibo')          { echo 'selected="selected"'; } ?> value="weibo"><?php          esc_html_e('Weibo', 'theblogger'); ?></option>
						<option <?php if ($theblogger_icon == 'slideshare')     { echo 'selected="selected"'; } ?> value="slideshare"><?php     esc_html_e('SlideShare', 'theblogger'); ?></option>
						<option <?php if ($theblogger_icon == 'vkontakte')      { echo 'selected="selected"'; } ?> value="vkontakte"><?php      esc_html_e('VKontakte', 'theblogger'); ?></option>
						<option <?php if ($theblogger_icon == 'picasa')         { echo 'selected="selected"'; } ?> value="picasa"><?php         esc_html_e('Picasa', 'theblogger'); ?></option>
						<option <?php if ($theblogger_icon == 'vine')           { echo 'selected="selected"'; } ?> value="vine"><?php           esc_html_e('Vine', 'theblogger'); ?></option>
						<option <?php if ($theblogger_icon == 'bloglovin')      { echo 'selected="selected"'; } ?> value="bloglovin"><?php      esc_html_e('Bloglovin', 'theblogger'); ?></option>
						<option <?php if ($theblogger_icon == 'quora')          { echo 'selected="selected"'; } ?> value="quora"><?php          esc_html_e('Quora', 'theblogger'); ?></option>
						<option <?php if ($theblogger_icon == 'deviantart')     { echo 'selected="selected"'; } ?> value="deviantart"><?php     esc_html_e('DeviantArt', 'theblogger'); ?></option>
						<option <?php if ($theblogger_icon == 'reddit')         { echo 'selected="selected"'; } ?> value="reddit"><?php         esc_html_e('Reddit', 'theblogger'); ?></option>
						<option <?php if ($theblogger_icon == 'meetup')         { echo 'selected="selected"'; } ?> value="meetup"><?php         esc_html_e('Meetup', 'theblogger'); ?></option>
						<option <?php if ($theblogger_icon == 'goodreads')      { echo 'selected="selected"'; } ?> value="goodreads"><?php      esc_html_e('Goodreads', 'theblogger'); ?></option>
						<option <?php if ($theblogger_icon == 'yelp')           { echo 'selected="selected"'; } ?> value="yelp"><?php           esc_html_e('Yelp', 'theblogger'); ?></option>
						<option <?php if ($theblogger_icon == 'rss')            { echo 'selected="selected"'; } ?> value="rss"><?php            esc_html_e('RSS', 'theblogger'); ?></option>
					</select>
				</p>
				<p>
					<label for="<?php echo esc_attr($this->get_field_id('theblogger_url')); ?>"><?php esc_html_e('URL', 'theblogger'); ?></label>
					
					<input type="text" class="widefat" id="<?php echo esc_attr($this->get_field_id('theblogger_url')); ?>" name="<?php echo esc_attr($this->get_field_name('theblogger_url')); ?>" value="<?php echo esc_url($theblogger_url); ?>">
				</p>
				<p>
					<label for="<?php echo esc_attr($this->get_field_id('theblogger_new_tab')); ?>"><?php esc_html_e('Open link in new tab', 'theblogger'); ?></label>
					
					<select class="widefat" id="<?php echo esc_attr($this->get_field_id('theblogger_new_tab')); ?>" name="<?php echo esc_attr($this->get_field_name('theblogger_new_tab')); ?>">
						<option <?php if ($theblogger_new_tab == 'yes') { echo 'selected="selected"'; } ?> value="yes"><?php esc_html_e('Yes', 'theblogger'); ?></option>
						<option <?php if ($theblogger_new_tab == 'no')  { echo 'selected="selected"'; } ?> value="no"><?php  esc_html_e('No', 'theblogger'); ?></option>
					</select>
				</p>
			<?php
		}
		
		public function update($new_instance, $old_instance)
		{
			$instance                       = array();
			$instance['title']              = strip_tags($new_instance['title']);
			$instance['theblogger_icon']    = strip_tags($new_instance['theblogger_icon']);
			$instance['theblogger_url']     = strip_tags($new_instance['theblogger_url']);
			$instance['theblogger_new_tab'] = strip_tags($new_instance['theblogger_new_tab']);
			return $instance;
		}
		
		public function widget($args, $instance)
		{
			extract($args);
			$title              = apply_filters('widget_title', $instance['title']);
			$theblogger_icon    = apply_filters('widget_icon', $instance['theblogger_icon']);
			$theblogger_url     = apply_filters('widget_url', $instance['theblogger_url']);
			$theblogger_new_tab = apply_filters('widget_new_tab', $instance['theblogger_new_tab']);
			
			echo $before_widget;
			
			?>
				<a class="social-link <?php echo esc_attr($theblogger_icon); ?>" <?php if ($theblogger_new_tab != 'no') { echo 'target="_blank"'; } ?> href="<?php echo esc_url($theblogger_url); ?>"></a>
			<?php
			
			echo $after_widget;
		}
	}
	
	add_action('widgets_init', function() { register_widget('theblogger_Widget_Social_Media_Icon'); });

?>