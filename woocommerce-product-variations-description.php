<?php
/**
 * Plugin Name: WooCommerce Product Variations Description
 * Description: This plugin provides a textarea at the variations to add detailed descriptions
 * Version:     1.0
 * Author:      Inpsyde GmbH for MarketPress
 * Author URI:  http://inpsyde.com
 * Licence:     GPLv3
 */

// check wp
if ( ! function_exists( 'add_action' ) )
	return;

/**
 * Inits the plugins, loads all the files
 * and registers all actions and filters
 *
 * @wp-hook	plugins_loaded
 * @return	void
 */
function wcpvd_init() {

	// localization
	load_plugin_textdomain( 'wcpvd', FALSE, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );

	// set the directory
	$application_directory = dirname( __FILE__ );

	// include the helpers
	require_once( $application_directory . '/application/helper.php' );

	// we only need this plugin in the backend
	// the frontend will be displayed by the theme
	// so we return, if we are not in the admin area
	if ( ! is_admin() )
		return;

	// adds the fied to the variations
	require_once( $application_directory . '/application/backend/add-field.php' );
	add_action( 'woocommerce_product_after_variable_attributes', 'wcpvd_add_field', 10, 2 );

	// saves the field inputs
	require_once( $application_directory . '/application/backend/save-field.php' );
	add_action( 'woocommerce_process_product_meta_variable', 'wcpvd_save_field' );
} add_action( 'plugins_loaded', 'wcpvd_init' );
