<?php
// Block direct access
if( !defined( 'ABSPATH' ) ){
	exit( );
}
/**
 * @Packge     : Restrofood
 * @Version    : 1.0
 * @Author     : ThemeLooks
 * @Author URI : https://www.themelooks.com/
 *
 */

?>
<div id="page-<?php the_ID(); ?>" <?php post_class( 'page-item' ); ?>>
	<?php

	echo '<div class="page--content mb-0">';
		 the_content();

		// Link Pages
		restrofood_link_pages();

	echo '</div>';
	// comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}

echo '</div>';