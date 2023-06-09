<?php
/**
 * Prohibit direct script loading.
 *
 * @package Convert_Plus.
 */

// Add new input type "categories".
if ( function_exists( 'smile_add_input_type' ) ) {
	smile_add_input_type( 'categories', 'categories_settings_field' );
}

/**
 * Function Name:categories_settings_field Function to handle new input type "categories".
 *
 * @param  string $name     settings provided when using the input type "categories".
 * @param  string $settings holds the default / updated value.
 * @param  string $value    html output generated by the function.
 * @return string           html output generated by the function.
 */
function categories_settings_field( $name, $settings, $value ) {
	$input_name = $name;
	$type       = isset( $settings['type'] ) ? $settings['type'] : '';
	$class      = isset( $settings['class'] ) ? $settings['class'] : '';
	ob_start();
	?>
	<select name="<?php echo esc_attr( $input_name ); ?>" id="smile_<?php echo esc_attr( $input_name ); ?>" class="select2-cat-dropdown form-control smile-input <?php echo esc_attr( 'smile-' . $type . ' ' . $input_name . ' ' . $type . ' ' . $class ); ?>" multiple="multiple" style="width:260px;"> 
		<?php
		$args = array(
			'public'   => true,
			'_builtin' => true,
		);

		$output     = 'objects'; // names or objects, note names is the default.
		$operator   = 'and';
		$taxonomies = get_taxonomies( $args, $output, $operator );

		foreach ( $taxonomies as $taxonomy ) {
			?>
			<optgroup label="<?php echo esc_attr( ucwords( $taxonomy->label ) ); ?>">
			<?php
			$terms = get_terms(
				$taxonomy->name,
				array(
					'orderby'    => 'count',
					'hide_empty' => 0,
				)
			);

			foreach ( $terms as $term ) {
				?>
				<?php
				$val_arr  = explode( ',', $value );
				$selected = ( in_array( $term->term_id, $val_arr ) ) ? 'selected="selected"' : '';
				?>
				<option <?php echo esc_attr( $selected ); ?> value="<?php echo esc_attr( $term->term_id ); ?>"><?php echo esc_attr( $term->name ); ?></option>
				<?php
			}
		}
		?>
	</optgroup>
</select>
<script type="text/javascript">
	jQuery(document).ready(function() {
		jQuery('select.select2-cat-dropdown').select2({
			placeholder: "Select Categories",
		});
	});
</script>
	<?php
	return ob_get_clean();
}
