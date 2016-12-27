<?php

/* WooCommerce */
add_filter('woocommerce_checkout_fields', function($fields) {

	unset($fields['order']['order_comments']);
	unset($fields['billing']['billing_postcode']);
	unset($fields['billing']['billing_city']);
	unset($fields['billing']['billing_address_1']);
	unset($fields['billing']['billing_address_2']);
	unset($fields['billing']['billing_country']);
	unset($fields['billing']['billing_phone']);
	unset($fields['billing']['billing_company']);

	return $fields;

});

/* Better excerpts */
add_filter('excerpt_more', function() {

	return ' ...';

});

add_filter('excerpt_length', function($length) {

	return 60;

}, 999);

/* Prevent getting hacked with the Brute Force Amplification Attack */
add_filter('xmlrpc_methods', function($methods) {

	unset($methods['system.multicall']);

	return $methods;

});

/* Remove parentheses from Archive Widget */
add_filter('wp_list_categories', function($variable) {

	$variable = str_replace('(', '<span class="post-count">', $variable);
	$variable = str_replace(')', '</span>', $variable);

	return $variable;

});

add_filter('get_archives_link', function($variable) {

	$variable = str_replace('(', '<span class="post-count">', $variable);
	$variable = str_replace(')', '</span>', $variable);

	return $variable;

});
