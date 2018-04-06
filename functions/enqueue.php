<?php
/**
 * Enqueue
 *
 * @package Basic
 */

/**
 * Enqueue Styles / Scripts
 */
function basic_theme_styles_and_scripts() {
	// Styles
	wp_enqueue_style( 'app', THEME_CSS . '/app.css' );

	// Scripts
	wp_deregister_script( 'jquery' );
	wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', array(), '3.2.1', false );

	wp_enqueue_script( 'app', THEME_JS . '/app.js', array(), null, true );
	wp_enqueue_script( 'font-awesome', 'https://use.fontawesome.com/releases/v5.0.1/js/all.js', array(), null, true );
}

add_action( 'wp_enqueue_scripts', 'basic_theme_styles_and_scripts', 99 );


/**
 * Add attribute "defer" to font awesome script.
 */
function basic_add_attribute_defer( $tag, $handle ) {
	// Bail early if not font awesome script.
	if ( 'font-awesome' !== $handle ) {
		return $tag;
	}

	return str_replace( ' src', ' defer src', $tag );
}

add_filter( 'script_loader_tag', 'basic_add_attribute_defer', 10, 2 );
