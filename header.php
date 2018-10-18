<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section
 *
 * @package standard-industries
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> style="margin-top: 0 !important;">
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="Content-Type" content="text/html; <?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>

	<script type="text/javascript">var pageTitle = '<?php echo esc_html( get_page_title() ); ?>';</script>

	<link type="img/png" rel="icon" href="<?php echo esc_url( get_template_directory_uri() ) . '/img/favicon.ico' ?>">

</head>
<body <?php body_class(); ?>>
	<?php if ( function_exists( 'gtm4wp_the_gtm_tag' ) ) { gtm4wp_the_gtm_tag(); } ?>
<!--[if lt IE 8]>
	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
	<?php include( 'nav.php' );?>
	<div class="wrapper">
