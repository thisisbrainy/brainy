<?php

function the_asset($type, $filename, $cache = false) {

	add_action('wp_enqueue_scripts', function() use($type, $filename, $cache) {

		$version = time();

		if($cache) {

			$version = false;

		}

		if($type === 'css') {

			wp_enqueue_style(str_replace('.', '-', $filename), get_template_directory_uri() . '/assets/css/' . $filename, false, $version);

		}

		if($type === 'js') {

			wp_enqueue_script(str_replace('.', '-', $filename), get_template_directory_uri() . '/assets/js/' . $filename, [], $version, true);

		}

	});

}
