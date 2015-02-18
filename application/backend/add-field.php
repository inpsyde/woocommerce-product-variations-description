<?php
/**
 * Feature Name: Add Field
 * Descriptions: These functions are adding the textarea to the variations
 * Version:      1.0
 * Author:       Inpsyde GmbH for MarketPress
 * Author URI:   http://inpsyde.com
 * Licence:      GPLv3
 */

/**
 * Adds the field to the variations
 * 
 * @param	int $loop the current loop count
 * @param	array $variation_data the data of the current variation
 * @param	object $variation the variation post object
 * @return	void
 */
function wcpvd_add_field( $loop, $variation_data, $variation ) {

	?>
	<tr>
		<td colspan="2">
			<?php
			// Textarea
			woocommerce_wp_textarea_input(  array(
				'id'          => 'variable_description[' . $loop . ']',
				'label'       => __( 'Description', 'wcpvd' ),
				'placeholder' => '',
				'description' => __( 'Enter the description of this variation here.', 'wcpvd' ),
				'value'       => get_post_meta( $variation->ID, 'variable_description', TRUE ) != '' ? get_post_meta( $variation->ID, 'variable_description', TRUE ) : '',
			) );
			?>
		</td>
	</tr>
	<?php
}
