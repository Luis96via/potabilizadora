<?php
	// Block direct access
	if( !defined( 'ABSPATH' ) ){
		exit( );
	}
	/**
	* @Packge 	   : Restrofood
	* @Version     : 1.0
	* @Author 	   : ThemeLooks
	* @Author URI  : https://www.themelooks.com/
	*
	*/

	if( !is_active_sidebar( 'restrofood_blog_sidebar' ) ){
		return;
	}
?>
<div class="col-lg-4">
	<!-- Sidebar Begin -->
	<aside class="blog-sidebar mt-80 mt-lg-0">
		<?php
			dynamic_sidebar( 'restrofood_blog_sidebar' );
		?>
	</aside>
	<!-- Sidebar End -->
</div>