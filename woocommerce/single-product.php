<?php

if(!defined('ABSPATH')) exit;

global $product;

get_header();

?>

<div id="the-page" class="wrap">

	<div id="the-content" class="left">

		<?php

		do_action('woocommerce_before_main_content');

		while(have_posts()): the_post();

			echo '<h1 class="page-title">' . get_the_title() . '<div class="right"><span class="price">' . $product->get_price_html() . '</span></div></h1>';

			wc_get_template_part('content', 'single-product');

		endwhile;

		do_action('woocommerce_after_main_content');

		?>

	</div>

	<div id="the-sidebar" class="right">

		<?php get_sidebar('woo'); ?>

	</div>

</div>

<?php get_footer();
