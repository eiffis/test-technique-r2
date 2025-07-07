<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package test-technique
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'test-technique' ); ?></a>
	<header id="masthead" class="site-header">
		<div class="header-gauche">
			<div class="container-logo">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/image_header.png" alt="Logo-site">
			</div>
			<div class="container-links">
				<span>Ut bibendum</span>
				<span>
					<strong>Suspendisse at</strong>
					<span class="fleche-bas">❯</span>
				</span>
				<span>Quisque</span>
				<span>lacus eu solades</span>
			</div>
		</div>
		<div class="header-droit">
			<a href="" class="bouton-header">
				<span>Fusce</span>
			</a>
		</div>
	</header><!-- #masthead -->
</div>
