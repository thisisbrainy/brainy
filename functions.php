<?php

define('THE_DIR', __DIR__);

/* Require things */
require_once __DIR__ . '/includes/filters.php';
require_once __DIR__ . '/includes/actions.php';
require_once __DIR__ . '/includes/functions.php';

/* Assets */
the_asset('css', 'font-awesome.css', true);
the_asset('css', 'overall.css', true);
the_asset('css', 'header.css', true);
the_asset('css', 'style.css', true);
the_asset('js', 'jquery.js', true);
the_asset('js', 'hyphenator.js', true);
the_asset('js', 'particles.js', true);
the_asset('js', 'brainy.js', true);

/* Variables */
$work = new WP_Query([
	'post_type' => 'bcpt_work',
	'posts_per_page' => 12
]);

$blog = new WP_Query([
	'post_type' => 'post',
	'posts_per_page' => 5
]);
