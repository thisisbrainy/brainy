<?php

define('SIDELINES_DIR', __DIR__);

/* Require things */
require_once __DIR__ . '/includes/filters.php';
require_once __DIR__ . '/includes/actions.php';
require_once __DIR__ . '/includes/functions.php';

/* Assets */
sidelines_asset('css', 'font-awesome.css');
sidelines_asset('css', 'reset.css');
sidelines_asset('css', 'style.css');
sidelines_asset('js', 'jquery.js');
//sidelines_asset('js', 'hyphenator.js', true);
sidelines_asset('js', 'sidelines.js');
