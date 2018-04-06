<?php
/**
* Functions
*
* @package Basic
*/

define( 'THEME_URI', get_template_directory_uri() );
define( 'THEME_IMAGES', THEME_URI . '/assets/theme-images' );
define( 'THEME_CSS', THEME_URI . '/assets/dist' );
define( 'THEME_JS', THEME_URI . '/assets/dist' );

require get_parent_theme_file_path( 'functions/index.php' );
