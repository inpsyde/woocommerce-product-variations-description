<?php
/**
 * Feature Name: Save Field
 * Descriptions: These functions are saving the textarea input to the variations
 * Version:      1.0
 * Author:       Inpsyde GmbH for MarketPress
 * Author URI:   http://inpsyde.com
 * Licence:      GPLv3
 */

/**
 * Adds the field to the variations
 * 
 * @param	int $post_id
 * @return	void
 */
function wcpvd_save_field( $post_id ) {

	// check if we have variations input
	if ( isset( $_POST[ 'variable_sku' ] ) ) {

		// set the standard vars we need to save the variation
		$variable_sku     = $_POST[ 'variable_sku' ];
		$variable_post_id = $_POST[ 'variable_post_id' ];

		// set the description
		$variable_description = $_POST[ 'variable_description' ];

		// create a little loop to add the descriptions to each variations
		for ( $i = 0; $i < sizeof( $variable_sku ); $i++ ) {

			// continue if we have no variation id
			if ( ! isset( $variable_post_id[ $i ] ) )
				continue;

			// set the id of the current variation
			$variation_id = (int) $variable_post_id[ $i ];

			// check if we have a description
			if ( isset( $variable_description[ $i ] ) )
				update_post_meta( $variation_id, 'variable_description', stripslashes( $variable_description[ $i ] ) );
			else
				delete_post_meta( $variation_id, 'variable_description' );
		}
	}
}
