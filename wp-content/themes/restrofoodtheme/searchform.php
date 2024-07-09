<?php
	if ( ! defined( 'ABSPATH' ) ) {
	    exit( );
	}

	/**
	* @Packge 	   : Restrofood
	* @Version     : 1.0
	* @Author 	   : ThemeLooks
	* @Author URI  : https://www.themelooks.com/
	*
	*/

?>
	<!-- Widget Search Begin -->
	<?php
	 	if( is_404() ):
		if( class_exists( 'ReduxFramework' ) ){
			$restrofood_form_placeholder = restrofood_opt( 'restrofood_404_form_placeholder' );
		}else{
			$restrofood_form_placeholder = "Search here";
		}

		if( class_exists( 'ReduxFramework' ) ){
			$restrofood_404_button = restrofood_opt( 'restrofood_404_button' );
		}else{
			$restrofood_404_button = "Search";
		}
	?>
	<form action="<?php echo esc_url( home_url('/') );?>" method="GET">
		<div class="theme-input-group">
			<input name='s' type="text" placeholder="<?php echo esc_attr( $restrofood_form_placeholder );?>">
			<button type="submit"><?php echo esc_attr( $restrofood_404_button );?></button>
		</div>
	</form>
	<?php else:?>
	<form action="<?php echo esc_url( home_url('/') );?>" method="GET">
		<div class="theme-input-group">
			<input name='s' value="<?php echo wp_kses_post( get_search_query() );?>" placeholder="<?php echo esc_attr__( 'Search here....','restrofood' );?>" class="theme-input-style" required>
			<button type="submit" class="submit-btn">
				<?php
					echo esc_html__( 'Search','restrofood' );
				?>
			</button>
		</div>
	</form>
	<!-- Widget Search End -->
	<?php endif;