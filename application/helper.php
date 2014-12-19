<?php
/**
 * Feature Name: Helper
 * Descriptions: Here are some functions we need for the variations description
 * Version:      1.0
 * Author:       Inpsyde GmbH for MarketPress
 * Author URI:   http://inpsyde.com
 * Licence:      GPLv3
 */

/**
 * Loads the variation description
 * 
 * @param	int $variation_id
 * @return	string
 */
function wcpvd_get_variation_description( $variation_id ) {

	return get_post_meta( $variation_id, 'variable_description', TRUE );
}
