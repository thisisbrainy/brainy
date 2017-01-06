<?php

define('SIDELINES_DIR', __DIR__);

/* Require things */
require_once __DIR__ . '/includes/filters.php';
require_once __DIR__ . '/includes/actions.php';
require_once __DIR__ . '/includes/functions.php';

/* Assets */
sidelines_asset('css', 'font-awesome.css', true);
sidelines_asset('css', 'reset.css', true);
sidelines_asset('css', 'style.css', true);
