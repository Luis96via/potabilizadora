<?php
	/**
	 * Plugin Name: Restrofood Core
	 * Description: This is a helper plugin of restrofood theme
	 * Version:     1.0.2
	 * Author:      Themelooks
	 * Author URI:  https://themelooks.com
	 * License:     GPL2
	 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
	 * Domain Path: /languages
	 * Text Domain: restrofood
	 */
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly.
	}

	// Define Constant
	define( 'RESTROFOOD_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );

	define( 'RESTROFOOD_PLUGINURL', plugin_dir_url( __FILE__) );

	define( 'RESTROFOOD_PLUGIN_TEMP', dirname( __FILE__ ).'/restrofood-template/' );

	define('RESTROFOOD_ADDONS', plugin_dir_path( __FILE__ ) .'addons/' );
	// load textdomain
	load_plugin_textdomain( 'restrofood', false, basename( dirname( __FILE__ ) ) . '/languages' );

	// include file.
	require_once dirname( __FILE__ ) . '/inc/about-us.php';
	require_once dirname( __FILE__ ) . '/inc/contact-widgets.php';
	require_once dirname( __FILE__ ) . '/inc/newsletter-widget.php';
	require_once dirname( __FILE__ ) . '/inc/recent-post-widget.php';
	require_once dirname( __FILE__ ) . '/inc/MailChimp.php';
	require_once dirname( __FILE__ ) . '/inc/restrofood-functions.php';
	require_once dirname( __FILE__ ) . '/inc/cmb2-tabs.php';
	require_once dirname( __FILE__ ) . '/addons/addons.php';

	define('CMB2_EXT', dirname( __FILE__ ).'/cmb2-ext/' );

	require_once( CMB2_EXT . 'cmb2-icon-picker.php' );
	require_once( CMB2_EXT . 'slider-meta-field.php' );
	require_once( CMB2_EXT . 'switch_metafield.php' );

	/** ADDITIONAL JS */
	function restrofood_additional_script(){
		wp_enqueue_script( 'custom', RESTROFOOD_PLUGINURL . 'assets/js/restrofood-core.js', array( 'jquery' ), '', true );
	}
	add_action( 'admin_enqueue_scripts','restrofood_additional_script' );

	function restrofood_additional_frontend_script(){
		$apiKey = restrofood_opt( 'restrofood_map_apikey' );

		if( $apiKey ){
			wp_enqueue_script( 'maps-googleapis', 'https://maps.googleapis.com/maps/api/js?key='.$apiKey );
		}

	}
	add_action( 'wp_enqueue_scripts','restrofood_additional_frontend_script');


