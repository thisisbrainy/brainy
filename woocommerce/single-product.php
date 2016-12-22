<?php

if(!defined('ABSPATH')) exit;

get_header();

?>

<div id="the-page">

	<div id="the-sidebar" class="right">
		<?php get_sidebar(); ?>
	</div>

	<div id="the-content" class="left">

		<?php

		do_action('woocommerce_before_main_content');

		while(have_posts()): the_post();

			wc_get_template_part('content', 'single-product');

		endwhile;

		do_action('woocommerce_after_main_content');

		?>

	</div>

</div>

<?php get_footer();
