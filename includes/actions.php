<?php

/* Theme setup */
add_action('after_setup_theme', function() {

	/* Support */
	add_theme_support('post-thumbnails');

	add_theme_support('title-tag');

	add_theme_support('html5', [
		'comment-list',
		'comment-form',
		'search-form',
		'gallery',
		'caption'
	]);

});

/* Register menus */
add_action('init', function() {

	register_nav_menus([
		'primary' => __('Primary Menu')
	]);

});
