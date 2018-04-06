<?php
/**
* Custom Functions
*
* @package Basic
*/

/**
 * Loop through and output ACF flexible content blocks for the current page.
 *
 * @author Rich Edmunds
 */
function basic_display_content_blocks() {
	if ( have_rows( 'content_blocks' ) ) :
		while ( have_rows( 'content_blocks' ) ) :
			the_row();
			// Template part name MUST match layout ID (Name).
			// @example block-media_section
			get_template_part( 'template-parts/components/block', get_row_layout() );
		endwhile;

		wp_reset_postdata();
	endif;
}
