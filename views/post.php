<article id="post" <?php post_class(); ?>>

	<?php if(has_post_thumbnail()): ?>

		<div class="post-thumbnail">
			<?php the_post_thumbnail(); ?>
		</div>

	<?php endif; ?>

	<?php the_title('<h2 class="post-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>'); ?></h2>

	<div class="post-content"><?php the_content(); ?></div>

	<div class="post-meta">

		<?php sidelines_posted_on(); ?>

	</div>

</article>
