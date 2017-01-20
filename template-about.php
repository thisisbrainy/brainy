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

	</section>

</div>

<section id="about" class="what-i-do-section">

	<div class="container">

		<h3 class="section-title">What I do</h3>

		<div class="what-i-do">

			<ul>

				<li>

					<h2>Ready-made websites</h2>

					<p>Budget-friendly WordPress website on a ready-made theme from a top-notch designer which I will set up, secure and modify per your needs.</p>

				</li>

				<li>

					<h2>Custom websites</h2>

					<p>Be it making a raw design into an actual thing, a custom campaign website integrated with third-parties or a unique e-commerce solution, I'm up for it.</p>

				</li>

				<li>

					<h2>Optimization</h2>

					<p>Sometimes websites get slow. Sometimes they break entirely. I'll do my utmost best to make your website as fast and unbreakable as possible.</p>

				</li>

			</ul>

			<div class="clear"></div>

		</div> <!-- // what-i-do -->

	</div>

</section>

<div class="container">

	<section id="about">

		<h3 class="section-title">What I've Done</h3>

		<div class="work">

			<ul>

				<?php if($work->have_posts()): while($work->have_posts()): $work->the_post(); ?>

					<li style="background:url(<?php the_post_thumbnail_url(); ?>) no-repeat;">

						<a target="_blank" href="<?php echo get_post_meta(get_the_ID(), 'link_to', true); ?>" title="<?php the_title(); ?>">

							<h3><?php the_title(); ?></h3>
							<p><?php echo get_the_content(); ?></p>
							<div class="date"><?php echo get_the_time('F jS, Y'); ?></div>

						</a>

					</li>

				<?php endwhile; endif; wp_reset_postdata(); ?>

			</ul>

			<div class="clear"></div>

		</div> <!-- // work -->

		<div class="call-to-action">

			<a href="mailto:brainy@brainy.blog">Let's work together</a>

		</div>

	</section>

</div>

<section id="about" class="blog-section">

	<div class="container">

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

	</div>

</section>

<?php get_footer();
