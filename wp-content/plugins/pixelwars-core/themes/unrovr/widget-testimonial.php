<?php

	class pixelwars_core_Widget__Testimonial extends WP_Widget
	{
		public function __construct()
		{
			parent::__construct(
				'pixelwars_core_widget__testimonial',
				esc_html__('(Pixelwars) Testimonial', 'pixelwars-core'),
				array(
					'description' => esc_html__('Testimonial module.', 'pixelwars-core')
				)
			);
		}
		
		public function form($instance)
		{
			if (isset($instance['title'])) { $title = $instance['title']; } else { $title = ""; }
			if (isset($instance['job_company'])) { $job_company = $instance['job_company']; } else { $job_company = ""; }
			if (isset($instance['description'])) { $description = $instance['description']; } else { $description = ""; }
			if (isset($instance['image'])) { $image = $instance['image']; } else { $image = ""; }
			
			?>
				<div class="pixelwars-widget media-widget-control">
					<p>
						<label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Name', 'pixelwars-core'); ?></label>
						
						<input type="text" class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" value="<?php echo esc_attr($title); ?>">
					</p>
					<p>
						<label for="<?php echo esc_attr($this->get_field_id('job_company')); ?>"><?php esc_html_e('Job / Company', 'pixelwars-core'); ?></label>
						
						<input type="text" class="widefat" id="<?php echo esc_attr($this->get_field_id('job_company')); ?>" name="<?php echo esc_attr($this->get_field_name('job_company')); ?>" value="<?php echo esc_attr($job_company); ?>">
					</p>
					<p>
						<label for="<?php echo esc_attr($this->get_field_id('description')); ?>"><?php esc_html_e('Description', 'pixelwars-core'); ?></label>
						
						<textarea rows="7" cols="30" class="widefat" id="<?php echo esc_attr($this->get_field_id('description')); ?>" name="<?php echo esc_attr($this->get_field_name('description')); ?>"><?php echo esc_textarea($description); ?></textarea>
					</p>
					<div class="media-widget-preview media-widget-buttons">
						<?php
							$widget_image_selected = "";
							
							if (! empty($image))
							{
								$widget_image_selected = 'widget-image-selected';
							}
						?>
						<div class="attachment-media-view <?php echo esc_attr($widget_image_selected); ?>">
							<div class="placeholder"><?php esc_html_e('No image selected', 'pixelwars-core'); ?></div>
						</div>
						
						<?php
							$image_url = wp_get_attachment_image_url($image, 'large');
						?>
						<img class="widget-image" alt="" src="<?php echo esc_url($image_url); ?>">
						
						<input type="button" class="button button-browse" value="<?php esc_attr_e('Select Image', 'pixelwars-core'); ?>">
						
						<input type="hidden" class="widget-image-id" id="<?php echo esc_attr($this->get_field_id('image')); ?>" name="<?php echo esc_attr($this->get_field_name('image')); ?>" value="<?php echo esc_attr($image); ?>">
						
						<?php
							$button_remove_display = "";
							
							if (! empty($image))
							{
								$button_remove_display = 'button-remove-display';
							}
						?>
						<input type="button" class="button button-remove <?php echo esc_attr($button_remove_display); ?>" value="<?php esc_attr_e('Remove Image', 'pixelwars-core'); ?>">
						<br>
						<br>
					</div>
				</div>
			<?php
		}
		
		public function update($new_instance, $old_instance)
		{
			$instance = array();
			$instance['title']       = strip_tags($new_instance['title']);
			$instance['job_company'] = strip_tags($new_instance['job_company']);
			$instance['description'] = strip_tags($new_instance['description']);
			$instance['image']       = strip_tags($new_instance['image']);
			return $instance;
		}
		
		public function widget($args, $instance)
		{
			extract($args);
			$title       = apply_filters('widget_title', $instance['title']);
			$job_company = apply_filters('widget_company', $instance['job_company']);
			$description = apply_filters('widget_description', $instance['description']);
			$image       = apply_filters('widget_image', $instance['image']);
			
			echo $before_widget;
			
				if ((! empty($image)) || (! empty($title)) || (! empty($job_company)) || (! empty($description)))
				{
					?>
						<div class="testo">
							<?php
								if (! empty($image))
								{
									$image_url = wp_get_attachment_image_url($image, 'thumbnail');
									
									?>
										<img alt="<?php echo esc_attr($title); ?>" src="<?php echo esc_url($image_url); ?>">
									<?php
								}
							?>
							<?php
								if (! empty($title))
								{
									?>
										<h4><?php echo $title; ?></h4>
									<?php
								}
							?>
							<?php
								if (! empty($job_company))
								{
									?>
										<h5><?php echo $job_company; ?></h5>
									<?php
								}
							?>
							<?php
								if (! empty($description))
								{
									?>
										<p><?php echo $description; ?></p>
									<?php
								}
							?>
						</div> <!-- .testo -->
					<?php
				}
			
			echo $after_widget;
		}
	}
	
	add_action('widgets_init', function() { register_widget('pixelwars_core_Widget__Testimonial'); });

?>