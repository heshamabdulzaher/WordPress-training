<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Siwak-Elmarwa
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

<nav>
	<ul>
		<li>
			<a href="#">Home</a>
		</li>
		<li>
			<a href="#">About Us</a>
		</li>
		<li>
			<a href="#">Production Steps</a>
		</li>
		<li>
			<a href="#">Agents</a>
		</li>
		<li>
			<a href="#">Contact</a>
		</li>
	</ul>
</nav>