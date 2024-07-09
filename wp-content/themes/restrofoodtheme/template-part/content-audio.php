<?php
    // Block direct access
    if( !defined( 'ABSPATH' ) ){
      exit( );
    }
    /**
    * @Packge      : restrofood
    * @Version     : 1.0
    * @Author      : ThemeLooks
    * @Author URI  : https://www.themelooks.com/
    *
    */

    /**
    * @Post Column
    *
    * @Hook restrofood_blog_post_column
    *
    * @Hooked restrofood_blog_post_column_cb
    */
    do_action( 'restrofood_blog_post_column' );


    // Blog Template
    get_template_part( 'template-part/blog-style','one' );


    /**
    * @Single Div
    *
    * @Hook restrofood_single_div_end_wrapper
    *
    * @Hooked restrofood_single_div_end_wrapper_cb
    */
    do_action( 'restrofood_single_div_end_wrapper' );