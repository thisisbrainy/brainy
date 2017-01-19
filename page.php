<?php

/**
 * @package WordPress
 * @subpackage brainy
 * @since 1.0
 */

get_header(); ?>

<div class="container post">

	<section id="post">

		<?php if(have_posts()): while(have_posts()): the_post(); ?>

			<article id="single-post">

				<h2 class="post-title">
					<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
				</h2>

				<div class="post-entry"><?php the_content(); ?></div>

			</article>

		<?php endwhile; endif; ?>

	</section>

</div>

<?php get_footer();
