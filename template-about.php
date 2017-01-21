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
			<p>A WordPress development shop.</</p>
		</div>

	</section>

</div>

<section id="about" class="what-i-do-section">

	<div class="container">

		<h3 class="section-title">Competence</h3>

		<div class="what-i-do">

			<ul>

				<li>

					<h2>Ready-made WordPress solutions</h2>

					<p>Budget-friendly WordPress website on a ready-made theme from any respectable designer on <a href="https://themeforest.net/category/wordpress" target="_blanl">Themeforest</a>, fully set-up, secure and modified as per your needs.</p>

				</li>

				<li>

					<h2>Custom WordPress solutions</h2>

					<p>Be it transforming a raw design into a a pixel-perfect actual thing, a custom campaign website integrated with third-parties or a unique e-commerce solution.</p>

				</li>

				<li>

					<h2>Optimization</h2>

					<p>Age shows no mercy on anyone. Not even websites. What is slow, mobile-<em>un</em>friendly or perhaps broken entirely gets fast, responsive and fixed.</p>

				</li>

			</ul>

			<div class="clear"></div>

		</div> <!-- // what-i-do -->

	</div>

</section>

<div class="container">

	<section id="about">

		<h3 class="section-title">Work</h3>

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
