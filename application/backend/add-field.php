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
 * @param	int $loop
 * @param	array $variation_data
 * @return	void
 */
function wcpvd_add_field( $loop, $variation_data ) {

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
				'value'       => isset( $variation_data[ 'variable_description' ][ 0 ] ) ? $variation_data[ 'variable_description' ][ 0 ] : '',
			) );
			?>
		</td>
	</tr>
	<?php
}
