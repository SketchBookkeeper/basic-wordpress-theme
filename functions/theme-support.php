<?php
/**
 * Theme Support
 *
 * @package Basic
 */

/**
 * Add Theme Support
 */
function basic_custom_support() {
	// Localize theme
	load_theme_textdomain( 'basic' );

	// Featured Images
	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'caption',
	) );

	add_theme_support( 'title-tag' );
}

add_action( 'after_setup_theme', 'basic_custom_support' );
