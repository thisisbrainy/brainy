<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<div id="header">

		<div class="wrap">

			<h1 class="header-title">
				<a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a>
			</h1>

			<div class="header-menu">

				<?php wp_nav_menu(['theme_location' => 'primary', 'container' => '']); ?>

			</div>

		</div>

	</div>
