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

			<div class="header-menu left">

				<?php wp_nav_menu(['theme_location' => 'primary', 'container' => '']); ?>

			</div>

			<div class="header-search right">

				<form method="get" id="search-form" name="search" action="<?php echo home_url('/'); ?>" class="hidden">
					<input type="search" name="s">
				</form>

				<a href="javascript:;" id="search-button"><i class="fa fa-search"></i></a>

			</div>

			<div class="clear"></div>

		</div>

	</div>
