<?php
	// Do not allow directly accessing this file.
	if ( ! defined( 'ABSPATH' ) ) {
	    exit( );
	}
	/**
	* @Packge    : restrofood
	* @version   : 1.0
	* @Author    : ThemeLooks
	* @Author URI: https://www.themelooks.com/
	* Template Name: Template Builder
	*/

	// Call Header
	get_header();

	// Container or wrapper div
	$restrofood_custom_page_layout = restrofood_meta( 'custom_page_layout' );

	$restrofood_page_custom_padding = restrofood_meta( 'custom_page_padding' );

	if( $restrofood_page_custom_padding ){
		$restrofood_page_custom_padding = 'style="padding-top:'.esc_attr( $restrofood_page_custom_padding ).'px;padding-bottom:'.esc_attr( $restrofood_page_custom_padding ).'px;"';
	}else{
		$restrofood_page_custom_padding = '';
	}

	if( $restrofood_custom_page_layout == '1' ){
		echo '<div class="container">';
			echo '<div class="row">';
				echo '<div class="col-sm-12">';
	}elseif( $restrofood_custom_page_layout == '2' ){
		echo '<div class="container-fluid">';
			echo '<div class="row">';
				echo '<div class="col-sm-12">';
	}else{
		echo '<div class="restrofood-fluid">';
	}
		echo '<div class="builder-page-wrapper" '.wp_kses_post( $restrofood_page_custom_padding ).'>';

		// Query
		if( have_posts() ){
			while( have_posts() ){
				the_post();
				the_content();
			}
		}

		echo '</div>';

	if( $restrofood_custom_page_layout == '1' ){
		echo '</div></div></div>';
	}elseif( $restrofood_custom_page_layout == '2' ){
		echo '</div></div></div>';
	}else{
		echo '</div>';
	}
	// Container or wrapper div end

	// Call Footer
	get_footer();