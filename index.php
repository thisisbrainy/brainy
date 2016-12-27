<?php get_header(); ?>

<div id="the-page" class="wrap">

	<div id="the-content"<?php if(is_checkout()): ?> class="left"<?php endif; ?>>
		<?php sidelines_content(); ?>
	</div>

	<?php if(is_checkout()): ?>

		<div id="the-sidebar" class="right">

			<?php get_sidebar('woo'); ?>

		</div>

	<?php endif; ?>

</div>

<?php get_footer();
