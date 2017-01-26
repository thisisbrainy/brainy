<?php

/**
 * @package WordPress
 * @subpackage brainy
 * @since 1.0
 */

get_header(); ?>

<article id="post">

	<?php if(have_posts()): while(have_posts()): the_post(); ?>

		<h2 class="post-title">
			<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
		</h2>

		<div class="post-entry"><?php the_content(); ?></div>

		<div class="post-meta">

			<span class="post-meta-date"><i class="fa fa-calendar"></i> <?php echo get_the_time('F jS, Y'); ?></span>
			<span class="post-meta-by"><i class="fa fa-pencil"></i> <?php echo get_the_author_link(); ?></span>

		</div>

	<?php endwhile; endif; ?>
	
</article>

<?php get_footer();
