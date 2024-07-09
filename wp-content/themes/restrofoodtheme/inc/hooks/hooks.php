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
	/**
	*
	* @ Restrofood Preloader
	*
	*/
	add_action( 'restrofood_preloader','restrofood_preloader_cb' );

	/**
	*
	* @ Restrofood Header
	*
	*/
	add_action( 'restrofood_header','restrofood_header_cb' );

	/**
	*
	* @ Restrofood Blog Post Thumb
	*
	*/
	add_action( 'restrofood_blog_posts_thumb','restrofood_blog_posts_thumb_cb' );

	/**
	*
	* @ Blog, Single Post, Archive, Page Wrapper Start Hook
	*
	*/
	add_action( 'restrofood_blog_section_wrapper_start','restrofood_blog_section_wrapper_start_cb' );

	/**
	*
	* @ Blog, Single Post, Archive, Page Wrapper End Hook
	*
	*/
	add_action( 'restrofood_blog_section_wrapper_end','restrofood_blog_section_wrapper_end_cb' );

	/**
	*
	* @ Blog Column Divider Start Wrapper
	*
	*/
	add_action( 'restrofood_blog_column_divider_start_wrapper','restrofood_blog_column_divider_start_wrapper_cb' );


	/**
	*
	* @ Blog Details Column Divider Start Wrapper
	*
	*/
	add_action( 'restrofood_blog_details_column_divider_start_wrapper','restrofood_blog_details_column_divider_start_wrapper_cb' );

	/**
	*
	* @ Page Column Divider Start Wrapper
	*
	*/
	add_action( 'restrofood_page_column_divider_start_wrapper','restrofood_page_column_divider_start_wrapper_cb' );

	/**
	*
	* @ Service Details Column Divider Start Wrapper
	*
	*/
	add_action( 'restrofood_service_details_column_divider_start_wrapper','restrofood_service_details_column_divider_start_wrapper_cb' );

	/**
	*
	* @ Blog Sidebar
	*
	*/
	add_action( 'restrofood_blog_sidebar_wrapper','restrofood_blog_sidebar_wrapper_cb' );

	/**
	*
	* @ Blog Sidebar For Single Page
	*
	*/
	add_action( 'restrofood_blog_single_sidebar_wrapper','restrofood_blog_single_sidebar_wrapper_cb' );

	/**
	*
	* @ Page Sidebar
	*
	*/
	add_action( 'restrofood_page_sidebar_wrapper','restrofood_page_sidebar_wrapper_cb' );

	/**
	*
	* @ Service Details Sidebar
	*
	*/
	add_action( 'restrofood_service_details_sidebar_wrapper','restrofood_service_details_sidebar_wrapper_cb' );


	/**
	*
	* @ Blog Post Column
	*
	*/
	add_action( 'restrofood_blog_post_column','restrofood_blog_post_column_cb' );

	/**
	*
	* @ Double Div End Wrapper
	*
	*/
	add_action( 'restrofood_double_div_end_wrapper','restrofood_double_div_end_wrapper_cb' );

	/**
	*
	* @ Single Div End Wrapper
	*
	*/
	add_action( 'restrofood_single_div_end_wrapper','restrofood_single_div_end_wrapper_cb' );

	/**
	*
	* @ Restrofood Blog Author Enable And Disable
	*
	*/
	add_action( 'restrofood_blog_author_enable_disable','restrofood_blog_author_enable_disable_cb' );


	/**
	*
	* @ Restrofood Blog Comment Enable And Disable
	*
	*/
	add_action( 'restrofood_blog_comment_enable_disable','restrofood_blog_comment_enable_disable_cb' );

	/**
	*
	* @ Restrofood Blog Post Excerpt Cb
	*
	*/
	add_action( 'restrofood_blog_post_excerpt','restrofood_blog_post_excerpt_cb' );


	/**
	*
	* @ Restrofood Blog Read More Button
	*
	*/
	add_action( 'restrofood_blog_read_more_button','restrofood_blog_read_more_button_cb' );

	/**
	*
	* @ Restrofood Blog Post Pagination
	*
	*/
	add_action( 'restrofood_blog_post_pagination','restrofood_blog_post_pagination_cb' );


	/**
	*
	* @ Restrofood Singe Post Navigation
	*
	*/
	add_action( 'restrofood_single_post_navigation','restrofood_single_post_navigation_cb' );

	/**
	*
	* @ Restrofood Blog Post Comment
	*
	*/
	add_action( 'restrofood_single_post_comments_show_wrap','restrofood_single_post_comments_show_wrap_cb' );

	/**
	*
	* @ Restrofood Back To Top
	*
	*/
	add_action( 'restrofood_back_to_top','restrofood_back_to_top_cb' );

	/**
	*
	* @ Restrofood Footer Widget
	*
	*/
	add_action( 'restrofood_footer_widget','restrofood_footer_widget_cb' );

	/**
	*
	* @ Restrofood Page Wrapper Start
	*
	*/
	add_action( 'restrofood_page_wrapper_start','restrofood_page_wrapper_start_cb' );
	/**
	*
	* @ Restrofood Page Wrapper End
	*
	*/
	add_action( 'restrofood_page_wrapper_end','restrofood_page_wrapper_end_cb' );