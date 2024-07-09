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
	*/

	// Date Enable Disable
	if( class_exists( 'ReduxFramework' ) ){
		$restrofood_date_enable = restrofood_opt( 'restrofood_date_enable' );
		if( $restrofood_date_enable ){
			$restrofood_date_enable = true;
		}else{
			$restrofood_date_enable = false;
		}
	}else{
		$restrofood_date_enable = true;
	}

?>
<div id="post-<?php the_ID(); ?>" <?php post_class( 'single-blog-item' ); ?>>
	<!-- Blog Image -->
	<?php
		echo '<!-- Blog Image -->';
			/**
			* @Blog Post Thumbnail
			*
			* @Hook restrofood_blog_posts_thumb
			*
			* @Hooked restrofood_blog_posts_thumb_cb
			*/
			do_action( 'restrofood_blog_posts_thumb' );
		echo '<!-- End Blog Image -->';

		echo '<div class="blog-content">';
			if( $restrofood_date_enable ){
				echo restrofood_anchor_tag(array(
					'url'	=> esc_url( restrofood_blog_date_permalink() ),
					'text'	=> esc_html( get_the_time( 'd M Y' ) ),
					'class' => esc_attr( 'posted' ),
				));
			}
			if( get_the_title() ){
				echo '<h3><a href="'.esc_url( get_the_permalink() ).'">'.wp_kses_post( get_the_title() ).'</a></h3>';
			}
			if( restrofood_opt( 'restrofood_show_post_excerpt' ) && !empty( restrofood_opt( 'restrofood_post_excerpt' ) ) ){
				echo '<p class="blog-excerpt">'.wp_kses_post( get_the_excerpt() ).'</p>';
			}
			/**
			* @Blog Read More Button
			*
			* @Hook restrofood_blog_read_more_button
			*
			* @Hooked restrofood_blog_read_more_button_cb
			*/
			do_action( 'restrofood_blog_read_more_button' );
		echo '</div>';
echo '</div>';