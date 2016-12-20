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
