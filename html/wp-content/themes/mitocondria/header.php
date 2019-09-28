<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Mitocondria
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">


	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/iconmoon.css" type="text/css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap-grid.min.css" type="text/css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/tiny-slider.css" type="text/css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/animate.css" type="text/css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/estilos.css" type="text/css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header>
  <div class="wrap">
    <nav class="wow fadeInDown" id="navHead">
      <ul>
        <li><a data-href="llamado" class="a-nav">Home</a></li>
        <li><a data-href="features" class="a-nav">Features</a></li>
        <li><a data-href="about" class="a-nav">About Us</a></li>
        <li><a data-href="testimonials" class="a-nav">Testimonials</a></li>
        <li><a data-href="contact" class="a-nav">Contact</a></li>
      </ul>
    </nav>
    <h1 class="logo wow fadeInUp2" data-wow-delay=".3s">
      <a href="#">
        Landerz<span>.</span>
      </a>
    </h1>
    <div class="btn-menu close" id="btn-menu">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
</header>