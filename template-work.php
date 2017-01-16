<?php

/**
 * Template Name: Work
 */

get_header(); ?>

<div id="the-page" class="wrap">

	<div id="the-content" class="work">

		<ul>

			<?php if($work->have_posts()): while($work->have_posts()): $work->the_post(); ?>

				<li style="background:url(<?php the_post_thumbnail_url(); ?>);">

					<div class="inner">

						<h2><a href="<?php echo explode(':', get_the_title())[1]; ?>"><?php echo explode(':', get_the_title())[0]; ?></a></h2>

						<?php the_content(); ?>

						<small><?php the_time('Y'); ?></small>

					</div>

				</li>

				<li style="background:url(<?php the_post_thumbnail_url(); ?>);">

					<div class="inner">

						<h2><a href="<?php echo explode(':', get_the_title())[1]; ?>"><?php echo explode(':', get_the_title())[0]; ?></a></h2>

						<?php the_content(); ?>

						<small><?php the_time('Y'); ?></small>

					</div>

				</li>

			<?php endwhile; endif; wp_reset_postdata();	?>

		</ul>

	</div>

</div>

<?php get_footer();
