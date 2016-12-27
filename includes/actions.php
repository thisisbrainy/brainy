<?php

/* Theme setup */
add_action('after_setup_theme', function() {

	/* Support */
	add_theme_support('woocommerce');

	add_theme_support('custom-logo', [
		'header-text' => ['site-title']
	]);

	add_theme_support('custom-background', [
		'default-color' => 'f2f2f2'
	]);

	add_theme_support('custom-header', [
		'header-text' => false
	]);

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

/* Register sidebar */
add_action('widgets_init', function() {

	register_sidebar([
		'name' => __('Sidebar', 'sidelines'),
		'id' => 'sidebar'
	]);

	register_sidebar([
		'name' => __('Shop Sidebar', 'sidelines'),
		'id' => 'woo-sidebar'
	]);

});
