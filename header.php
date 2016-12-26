<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<div id="header">

		<div class="wrap">

			<h1 class="header-title left">
				<a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a>
			</h1>

			<div class="header-menu right">
				<?php wp_nav_menu(['theme_location' => 'primary', 'container' => '']); ?>
			</div>

		</div>

	</div>
