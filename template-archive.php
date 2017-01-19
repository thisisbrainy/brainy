<?php

/**
 * @package WordPress
 * @subpackage brainy
 * @since 1.0
 *
 * Template Name: Archive
 */

get_header(); ?>

<div class="container post">

	<section id="about">

		<?php the_archive(); ?>

	</section>

</div>

<?php get_footer();
