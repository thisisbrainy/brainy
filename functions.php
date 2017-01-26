<?php

define('THE_DIR', __DIR__);

/* Require things */
require_once __DIR__ . '/includes/filters.php';
require_once __DIR__ . '/includes/actions.php';
require_once __DIR__ . '/includes/functions.php';

/* Assets */
the_asset('css', 'font-awesome.css');
the_asset('css', 'style.css');
the_asset('js', 'jquery.js');
the_asset('js', 'particles.js');
the_asset('js', 'brainy.js');

/* Variables */
$work = new WP_Query([
	'post_type' => 'bcpt_work',
	'posts_per_page' => 12
]);

$blog = new WP_Query([
	'post_type' => 'post',
	'posts_per_page' => 5
]);
