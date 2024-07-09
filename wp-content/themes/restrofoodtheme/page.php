<?php
    // Do not allow directly accessing this file.
    if ( ! defined( 'ABSPATH' ) ) {
        exit( );
    }
    /**
    * @Packge     : Restrofood
    * @Version    : 1.0
    * @Author     : ThemeLooks
    * @Author URI : https://www.themelooks.com/
    *
    */

    // Call Header
    get_header();

    /**
    * @Wrapper start With Section, Container, Row
    *
    * @Hook restrofood_page_wrapper_start
    *
    * @Hooked restrofood_page_wrapper_start_cb
    */
    do_action( 'restrofood_page_wrapper_start' );

    /**
    * @Page Column Wrapper
    *
    * @Hook restrofood_page_column_divider_start_wrapper
    *
    * @Hooked restrofood_page_column_divider_start_wrapper_cb
    */
    do_action( 'restrofood_page_column_divider_start_wrapper' );

    if( have_posts() ){
        while( have_posts() ){
            the_post();
            // Post Contant
            get_template_part( 'template-part/content', 'page' );
        }
        // Reset Data
        wp_reset_postdata();
    }else{
        get_template_part( 'template-part/content', 'none' );
    }

    /**
    * @Single Div
    *
    * @Hook restrofood_single_div_end_wrapper
    *
    * @Hooked restrofood_single_div_end_wrapper_cb
    */
    do_action( 'restrofood_single_div_end_wrapper' );

    /**
    * @Page Column Wrapper
    *
    * @Hook restrofood_page_sidebar_wrapper
    *
    * @Hooked restrofood_page_sidebar_wrapper_cb
    */
    do_action( 'restrofood_page_sidebar_wrapper' );

    /**
    * @Page End Wrapper
    *
    * @Hook restrofood_page_wrapper_end
    *
    * @Hooked restrofood_page_wrapper_end_cb
    */
    do_action( 'restrofood_page_wrapper_end' );

    // Call Footer
    get_footer();