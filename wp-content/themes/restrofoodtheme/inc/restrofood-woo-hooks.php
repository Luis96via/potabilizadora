<?php
    // Block direct access

    if( !defined( 'ABSPATH' ) ){
        exit( );
    }
    /**
    * @Packge     : restrofood
    * @Version    : 1.0
    * @Author     : ThemeLooks
    * @Author URI : https://www.themelooks.com/
    *
    */

    //filter hooks
    add_filter('woocommerce_show_page_title','__return_false');

    // remove hooks
    remove_action('woocommerce_before_main_content','woocommerce_output_content_wrapper',10);
    remove_action('woocommerce_before_main_content','woocommerce_breadcrumb',20);
    remove_action('woocommerce_after_main_content','woocommerce_output_content_wrapper_end',10);
    remove_action('woocommerce_before_shop_loop','woocommerce_result_count',20);
    remove_action('woocommerce_before_shop_loop','woocommerce_catalog_ordering',30);
    remove_action('woocommerce_single_product_summary','woocommerce_template_single_title',5);


    //adding new hooks
    add_action('woocommerce_before_main_content','restrofood_woocommerce_output_content_wrapper',10);
    add_action('woocommerce_after_main_content','restrofood_woocommerce_shop_page_product_column_end',10);
    add_action('woocommerce_sidebar','restrofood_woocommerce_output_content_wrapper_end',20);
    add_action('woocommerce_before_shop_loop','restrofood_woocommerce_result_count_catelog_wrapper',20);
    add_action('woocommerce_single_product_summary','restrofood_woocommerce_template_single_title',5);