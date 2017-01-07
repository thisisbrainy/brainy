<?php get_header(); ?>

<div id="the-page" class="wrap">

	<div id="the-content">

		<?php if(have_posts()): while(have_posts()): the_post(); ?>

			<article id="post" <?php post_class(); ?>>

				<?php if(has_post_thumbnail()): ?>

					<div class="post-thumbnail">
						<?php the_post_thumbnail(); ?>
					</div>

				<?php endif; ?>

				<?php the_title('<h2 class="post-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>'); ?></h2>

				<div class="post-content"><?php the_content(); ?></div>

			</article>

		<?php endwhile; endif; ?>

	</div>

</div>

<?php get_footer();
