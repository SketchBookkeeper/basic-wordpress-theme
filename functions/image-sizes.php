<?php
/**
* Image Sizes
*
* @package Basic
*/

function basic_theme_setup_image_size() {
	// Full Page Image
	add_image_size( 'full-page-image-small', 960, 432, true );
	add_image_size( 'full-page-image-medium', 1280, 576, true );
	add_image_size( 'full-page-image-large', 1920, 864, true );
}

add_action( 'after_setup_theme', 'basic_theme_setup_image_size' );


/**
* Increase the max image size retrieved by wp_get_attachment_srcset
*/
function basic_max_srcset_image_width() {
	return 1930;
}

add_filter( 'max_srcset_image_width', 'basic_max_srcset_image_width', 10 , 2 );
