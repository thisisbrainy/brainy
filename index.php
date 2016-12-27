<?php get_header(); ?>

<div id="the-page" class="wrap">

	<div id="the-content"<?php if(is_checkout() || is_single() || is_home() || is_front_page()): ?> class="left<?php if(is_home() || is_single()): ?> is-blog<?php endif; ?>"<?php endif; ?>>
		<?php sidelines_content(); ?>
	</div>

	<?php if(is_checkout() || is_front_page()): ?>

		<div id="the-sidebar" class="right">

			<?php get_sidebar('woo'); ?>

		</div>

	<?php endif; ?>

	<?php if(is_home() || is_single()): ?>

		<div id="the-sidebar" class="right">

			<?php get_sidebar(); ?>

		</div>

	<?php endif; ?>

</div>

<?php get_footer();
