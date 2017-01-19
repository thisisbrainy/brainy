<?php

/**
 * @package WordPress
 * @subpackage brainy
 * @since 1.0
 *
 * Template Name: About
 */

get_header(); ?>

<div class="container">

	<section id="about">

		<div class="mast">
			<h2>Hi! This is Brainy.</h2>
			<p>A one-man WordPress development shop.</</p>
		</div>

		<h3 class="section-title">Work</h3>

		<div class="work">

			<ul>

				<?php if($work->have_posts()): while($work->have_posts()): $work->the_post(); ?>

					<li style="background:url(<?php the_post_thumbnail_url(); ?>) no-repeat;">

						<a target="_blank" href="<?php echo get_post_meta(get_the_ID(), 'link_to', true); ?>" title="<?php the_title(); ?>">

							<h3><?php the_title(); ?></h3>
							<p><?php echo get_the_content(); ?></p>

						</a>

					</li>

				<?php endwhile; endif; wp_reset_postdata(); ?>

			</ul>

			<div class="clear"></div>

		</div> <!-- // work -->

		<div class="call-to-action">

			<a href="mailto:brainy@brainy.blog">Let's work together</a>

		</div>

		<h3 class="section-title">Blog</h3>

		<div class="recent-posts">

			<ul>

				<?php if($blog->have_posts()): while($blog->have_posts()): $blog->the_post(); ?>

					<li>

						<a href="<?php the_permalink(); ?>">

							<h3><?php the_title(); ?></h3>
							<div class="date"><?php echo get_the_time('F jS, Y'); ?></div>

						</a>

					</li>

				<?php endwhile; endif; wp_reset_postdata(); ?>

			</ul>

		</div> <!-- // recent posts -->

		<div class="call-to-action">

			<a href="<?php echo home_url('/archive'); ?>">Archive</a>

		</div>

	</section>

</div>

<?php get_footer();
