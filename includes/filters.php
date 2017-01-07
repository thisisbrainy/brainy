<?php

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

/* Remove version numbers from assets */
add_filter('script_loader_src', function($src) {

	return remove_query_arg('ver', $src);

});

add_filter('style_loader_src', function($src) {

	return remove_query_arg('ver', $src);

});
