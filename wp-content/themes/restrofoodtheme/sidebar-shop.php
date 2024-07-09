<?php
	// Block direct access
	if( !defined( 'ABSPATH' ) ){
		exit( );
	}
	/**
	* @Packge 	   : restrofood
	* @Version     : 1.0
	* @Author 	   : ThemeLooks
	* @Author URI  : https://www.themelooks.com/
	*
	*/

	if( !is_active_sidebar( 'restrofood_woo_sidebar' ) ){
		return;
	}
?>
<div class="col-lg-4">
	<!-- Sidebar Begin -->
	<aside class="sidebar mt-80 mt-lg-0">
		<?php
			dynamic_sidebar( 'restrofood_woo_sidebar' );
		?>
	</aside>
	<!-- Sidebar End -->
</div>