<?php
/**
 * Header
 *
 * @package Basic
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body>
	<a href="#main-container" class="skip-nav"><?php esc_html_e( 'Skip nav to main content.', 'basic' ); ?></a>

	<main id="main-container">
