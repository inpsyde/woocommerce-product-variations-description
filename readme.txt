=== WooCommerce Product Variations Description ===
Contributors: inpsyde, HerrLlama
Donate Link: http://marketpress.com
Tags: woocommerce, variations, description
Requires at least: 4.0
Tested up to: 4.1
Stable tag: 1.0
License: GPLv3

This plugin provides a textarea at the variations to add detailed descriptions.

== Description ==

This plugin provides a textarea at the variations to add detailed descriptions.

= Languages =

This plugin is polyglott. If you want to submit a language, drop a not at "translations@marketpress.com" with the subject "WooCommerce Product Variations Descriptio - Add language $language".

Currently available languages:

* English
* German
* French
* Hispanic
* Italian
* Portuguese

= Support =

At any questions: Please keep in mind that this tool is free. Therefore we can't offer free support. Of course we'll see through the [issue tracker](https://github.com/inpsyde/woocommerce-product-variations-description/) but we only answer feature requests and critical bugs.

== Frequently Asked Questions ==

= How do I display a variation description? =

1. Head to your WooCommerce single product template where the add to cart buttons for variable products are generated. Normally this is `/woocommerce/single-product/add-to-cart/variable.php`.
2. Take a filter where you want to hook. If you want to display the descriptions before the form, use `woocommerce_before_add_to_cart_form` elsewise use `woocommerce_after_add_to_cart_form`
3. Create a PHP-function to load the product variantions and use the helper function of this plugin. Your code could look like this:

`<?php
function my_theme_function_woocommerce_after_add_to_cart_form() {
	// get the product
	global $product;

	// Get the post IDs of all the product variations
    $variation_ids = $product->children;

	// walk the variations
    foreach( $variation_ids as $variation_id ) {
    	$description = wcpvd_get_variation_description( $variation_id );
    	echo '<div id="variation-' . $variation_id . '" style="display: none;">';
    		echo $description;
    	echo '</div>';
    }
} add_action( 'function_woocommerce_after_add_to_cart_form', 'my_theme_function_woocommerce_after_add_to_cart_form' );
?>`

4. Create a JavaScript or jQuery-Script to get the current selected variation (see `/woocommerce/single-product/add-to-cart/variable.php` for details) and display the variation description.

== Installation ==

1. Install and activate the plugin the known WordPress-Ways
2. Head to your product variations and add the descriptions
3. Use the helper 'wcpvd_get_variation_description' to get the description

== Screenshots ==

1. Variation with the description input box

== Changelog ==

= 1.0 =
* Initial Release
