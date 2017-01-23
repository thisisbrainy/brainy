<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<header id="header">

		<div class="particles-container">

			<div id="particles"></div>

		</div>

		<div class="logo">
			<a href="<?php echo home_url('/'); ?>"></a>
		</div>

		<?php if(is_front_page()): ?>
		<div class="mast">
			<h2>Hi! This is Brainy.</h2>
			<p>A WordPress development shop.</p>
		</div>
		<?php endif; ?>

	</header>
