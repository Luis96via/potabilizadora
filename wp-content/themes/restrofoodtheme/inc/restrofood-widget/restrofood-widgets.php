<?php
	function restrofood_widgets_init() {
		register_sidebar(
			array(
				'name'          => esc_html__( 'Blog Page Sidebar', 'restrofood' ),
				'id'            => 'restrofood_blog_sidebar',
				'description'   => esc_html__( 'Add widgets here to appear in your sidebar.', 'restrofood' ),
				'before_widget' => '<div class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<div class="widget-title"><h4>',
				'after_title'   => '</h4></div>',
			)
		);
		register_sidebar(
			array(
				'name'          => esc_html__( 'Page Sidebar', 'restrofood' ),
				'id'            => 'restrofood_page_sidebar',
				'description'   => esc_html__( 'Add Widgets Here To Appear In Your Page Sidebar.', 'restrofood' ),
				'before_widget' => '<div class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<div class="widget-title"><h3>',
				'after_title'   => '</h3></div>',
			)
		);
		if( class_exists( 'ReduxFramework' ) ):
			register_sidebar(
				array(
					'name'          => esc_html__( 'Footer Sidebar One', 'restrofood' ),
					'id'            => 'footer_sidebar_one',
					'description'   => esc_html__( 'Add widgets here to appear in your footer sidebar.', 'restrofood' ),
					'before_widget' => '<div class="widget %2$s">',
					'after_widget'  => '</div>',
					'before_title'  => '<div class="widget-title"><h3>',
					'after_title'   => '</h3></div>',
				)
			);
			register_sidebar(
				array(
					'name'          => esc_html__( 'Footer Sidebar Two', 'restrofood' ),
					'id'            => 'footer_sidebar_two',
					'description'   => esc_html__( 'Add widgets here to appear in your footer sidebar.', 'restrofood' ),
					'before_widget' => '<div class="widget %2$s">',
					'after_widget'  => '</div>',
					'before_title'  => '<div class="widget-title"><h3>',
					'after_title'   => '</h3></div>',
				)
			);
			register_sidebar(
				array(
					'name'          => esc_html__( 'Footer Sidebar Three', 'restrofood' ),
					'id'            => 'footer_sidebar_three',
					'description'   => esc_html__( 'Add widgets here to appear in your footer sidebar.', 'restrofood' ),
					'before_widget' => '<div class="widget %2$s">',
					'after_widget'  => '</div>',
					'before_title'  => '<div class="widget-title"><h3>',
					'after_title'   => '</h3></div>',
				)
			);
			register_sidebar(
				array(
					'name'          => esc_html__( 'Footer Sidebar Four', 'restrofood' ),
					'id'            => 'footer_sidebar_four',
					'description'   => esc_html__( 'Add widgets here to appear in your footer sidebar.', 'restrofood' ),
					'before_widget' => '<div class="widget %2$s">',
					'after_widget'  => '</div>',
					'before_title'  => '<div class="widget-title"><h3>',
					'after_title'   => '</h3></div>',
				)
			);
		endif;

		if( class_exists('woocommerce') ) {
			register_sidebar(
				array(
					'name'          => esc_html__( 'WooCommerce Sidebar', 'restrofood' ),
					'id'            => 'restrofood_woo_sidebar',
					'description'   => esc_html__( 'Add widgets here to appear in your woocommerce page sidebar.', 'restrofood' ),
					'before_widget' => '<div class="widget %2$s">',
					'after_widget'  => '</div>',
					'before_title'  => '<div class="widget-title"><h3>',
					'after_title'   => '</h3></div>',
				)
			);
		}
	}
	add_action( 'widgets_init', 'restrofood_widgets_init' );