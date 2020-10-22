<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package world
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/bootstrap.min.css">
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<!-- Slick Slider -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/slick.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/slick-theme.css">
	<!-- ArcticModal -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/jquery.arcticmodal-0.3.css">
	<!-- Main Style -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="http://world.timskot.ru/main.css">
	<?php wp_head(); ?>
</head>