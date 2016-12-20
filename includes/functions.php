<?php

function sidelines_content() {

	if(have_posts()) {

		while(have_posts()) {

			the_post();

			if(is_page()) {

				require SIDELINES_DIR . '/views/page.php';

			}

			if(is_single() || is_home()) {

				require SIDELINES_DIR . '/views/post.php';

			}

		}

	} else {

		require SIDELINES_DIR . '/views/404.php';

	}

	if(is_home()) {

		sidelines_pagination();

	}

}

function sidelines_pagination() {

	require SIDELINES_DIR . '/views/partials/pagination.php';

}

function sidelines_asset($type, $filename, $cache = false) {

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