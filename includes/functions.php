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

function the_archive() {

	$time_start = microtime(true);

	/** Set up a date interval object for 6 months ago (you can change as required) */
	$interval = new DateInterval('P60M');
	$interval->invert = 1;

	/** Grab the date as it was 6 months ago */
	$date = new DateTime(date('Y-m-d'));
	$date->add($interval);

	/** Query the database for all posts newer than the the given date interval */
	$args = array(
		'nopaging'          => true,
		'posts_per_page'    => -1,
		'post_type'         => 'post',
		'post_status'       => 'publish',
		'order_by'          => 'date',
		'date_query'        => array(
		  'after' => $date->format('Y-m-d')
		)
	);

	$month_query = new WP_Query($args);

	/** Check to ensure that there are articles for this month... */
	if($month_query->have_posts()) :

    $month_titles = array();
    $close_ul = false;

    //echo '<div class="recent-posts"><ul>';

    /** Set the attributes for displaying the title as an attribute */
    $title_attribute_args = array(
        'before'    => 'Visit article \'',
        'after'     => '\' ',
        'echo'      => false
    );

    /** Loop through each post for this month... */
    while($month_query->have_posts()) : $month_query->the_post();

      /** Check the month/year of the current post */
      $month_title = date('F Y', strtotime(get_the_date('Y-m-d H:i:s')));

      /** Maybe output a human friendly date, if it's not already been output */
      if(!in_array($month_title, $month_titles)) :

        if($close_ul) echo '</ul></div>';                                                             // Check if the unordered list of posts should be closed (it shouldn't for the first '$monthe_title')
        echo '<h3 class="section-title">' . $month_title . '</h3>';   // Output the '$month_title'
        echo '<div class="recent-posts"<ul>';                            // Open an unordered lists for the posts that are to come
        $month_titles[] = $month_title;                                                         // Add this `$month_title' to the array of `$month_titles` so that it is not repeated
        $close_ul = true;                                                                       // Indicate that the unordered list should be closed at the next oppurtunity

      endif;

      /** Output each article for this month */
      printf(
        '<li id="monthly-post-%1$s"><a href="%3$s" title="%4$s"><h3>%2$s</h3><div class="date">%5$s</div></a></li>',
        get_the_ID(),                               /** %1$s - The ID of the post */
        get_the_title(),                            /** %2$s - The article title */
        get_permalink(get_the_ID()),                /** %3$s - The article link */
        the_title_attribute($title_attribute_args),  /** %4$s - The title for use as an attribute */
				get_the_time('F jS, Y')
      );

    endwhile;

	  if($close_ul) echo '</ul></div>'; // Close the last unordered list of posts (if there are any shown)

	endif;

	/** Reset the query so that WP doesn't do funky stuff */
	wp_reset_query();

}
