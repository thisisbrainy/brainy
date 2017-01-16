<?php get_header(); ?>

<div id="the-page" class="wrap">

	<div id="the-content" class="blog">

		<?php if(have_posts()): while(have_posts()): the_post(); ?>

			<article id="post" <?php post_class(); ?>>

				<?php if(has_post_thumbnail()): ?>

					<div class="post-thumbnail">
						<?php the_post_thumbnail(); ?>
					</div>

				<?php endif; ?>

				<?php the_title('<h2 class="post-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>'); ?></h2>

				<div class="post-content"><?php the_content(); ?></div>

				<div class="post-meta">

					<span class="post-meta-date"><i class="fa fa-calendar"></i> <?php echo get_the_time('F jS, Y'); ?></span>
					<span class="post-meta-by"><i class="fa fa-pencil"></i> <?php echo get_the_author_link(); ?></span>

				</div>

			</article>

		<?php endwhile; endif; ?>

	</div>

</div>

<?php get_footer();
