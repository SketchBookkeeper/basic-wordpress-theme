<?php
/**
 * Index
 * Entry point for all function files.
 *
 * @package Basic
 */

$files = [
	'cleanup.php',
	'theme-support.php',
	'image-sizes.php',
	'post.php',
	'custom-post-types.php',
	'enqueue.php',
	'helpers.php',
	'custom.php',
];

foreach ( $files as $file ) {
	require_once $file;
}
