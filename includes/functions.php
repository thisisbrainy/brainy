<?php

function sidelines_content() {

	if(have_posts()) {

		while(have_posts()) {

			the_post();

			if(is_page()) {

				require SIDELINES_DIR . '/views/page.php';

			}

			if(is_single() || is_home() || is_search() || is_archive() || is_tag() || is_category()) {

				require SIDELINES_DIR . '/views/post.php';

			}

		}

	} else {

		require SIDELINES_DIR . '/views/404.php';

	}

	if(is_single()) {

		require SIDELINES_DIR . '/views/partials/comments.php';

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

function sidelines_post_meta() {

	$tags = get_the_tags();
	$categories = get_the_category();

	echo '<span class="post-meta-date"><i class="fa fa-calendar"></i> ' . get_the_time('F jS, Y') . '</span>';
	echo '<span class="post-meta-by"><i class="fa fa-pencil"></i> ' . get_the_author_link() . '</span><br>';

	/*
	if(!empty($tags)) {

		echo '<span class="post-meta-tags"><i class="fa fa-tags"></i> ';

		$t_i = 0;
		$t_len = count($tags);

		foreach($tags as $tag) {

			echo '<a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a>';

			if($t_len !== 1 && $t_i !== $t_len - 1) {

				echo ', ';

			}

			$t_i++;

		}

		echo '</span><br>';

	}
	*/

	/*
	if(!empty($categories)) {

		echo '<span class="post-meta-categories"><i class="fa fa-tags"></i> ';

		$c_i = 0;
		$c_len = count($categories);

		foreach($categories as $category) {

			echo '<a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>';

			if($c_len !== 1 && $c_i !== $c_len - 1) {

				echo ', ';

			}

			$c_i++;

		}

		echo '</span><br>';

	}
	*/

	echo '<i class="fa fa-comments"></i> <a href="' . get_the_permalink() . '">' . get_comments_number() . ' ' . __('comments') . '</a>';

}
