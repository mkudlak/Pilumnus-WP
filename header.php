<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package base
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css' rel='stylesheet' typ='text/css'>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'base' ); ?></a>

	<header id="masthead" class="site-header">
	</header><!-- #masthead -->

	<div id="content" class="site-content">
