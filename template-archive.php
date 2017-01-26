<?php

/**
 * @package WordPress
 * @subpackage brainy
 * @since 1.0
 *
 * Template Name: Archive
 */

get_header(); ?>

<section id="recent-posts" class="archive">

	<div class="container">

		<?php the_archive(); ?>

	</div>

</section>

<?php get_footer();
