<div class="heading">

	<h2 class="site-title">
		<a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a>
	</h2>

	<p class="site-tagline">
		<?php bloginfo('description'); ?>
	</p>

</div>

<?php dynamic_sidebar('sidebar'); ?>

<div class="footer">

	<p>
		&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?><br> Designed by <a href="https://asko.me">Asko</a><br> Powered by <a href="https://wordpress.org">WordPress</a>
	</p>

</div>
