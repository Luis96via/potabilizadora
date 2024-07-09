<?php
	// Block direct access
	if( !defined( 'ABSPATH' ) ){
		exit( );
	}
	/**
	* @Packge 	   : Restrofood
	* @Version     : 1.0
	* @Author 	   : ThemeLooks
	* @Author URI  : https://www.themelooks.com/
	*
	*/

	/**
	*
	* Define constant
	*
	*/
	// Base URI
	if( !defined( 'RESTROFOOD_THEME_DIR_URI' ) ){
		define( 'RESTROFOOD_THEME_DIR_URI',get_template_directory_uri().'/' );
	}

	// Css Assist URI
	if( !defined( 'RESTROFOOD_THEME_CSS_DIR_URI' ) ){
		define( 'RESTROFOOD_THEME_CSS_DIR_URI',RESTROFOOD_THEME_DIR_URI.'assets/css/' );
	}

	// Img Assist URI
	if( !defined('RESTROFOOD_IMG_DIR_URI' ) ){
		define( 'RESTROFOOD_IMG_DIR_URI',RESTROFOOD_THEME_DIR_URI.'assets/img/' );
	}

	// Js Assist URI
	if( !defined( 'RESTROFOOD_JS_DIR_URI' ) ){
		define( 'RESTROFOOD_JS_DIR_URI',RESTROFOOD_THEME_DIR_URI.'assets/js/' );
	}

	// Plugin Assist URI
	if( !defined( 'RESTROFOOD_PLUGINS_DIR_URI' ) ){
		define( 'RESTROFOOD_PLUGINS_DIR_URI',RESTROFOOD_THEME_DIR_URI.'assets/plugins/' );
	}


	// Base Directory
	if( !defined( 'RESTROFOOD_THEME_DIR_PATH' ) ){
		define( 'RESTROFOOD_THEME_DIR_PATH', get_parent_theme_file_path().'/' );
	}

	// Inc Folder Directory
	if( !defined( 'RESTROFOOD_INC_DIR_PATH' ) ){
		define( 'RESTROFOOD_INC_DIR_PATH',RESTROFOOD_THEME_DIR_PATH.'inc/' );
	}

	// Demo Data Folder Directory Path
	if( !defined( 'RESTROFOOD_DEMO_DIR_PATH' ) ){
		define( 'RESTROFOOD_DEMO_DIR_PATH', RESTROFOOD_INC_DIR_PATH.'demo-data/' );
	}

	// Demo Data Folder Directory URI
	if( !defined( 'RESTROFOOD_DEMO_DIR_URI' ) ){
		define( 'RESTROFOOD_DEMO_DIR_URI', RESTROFOOD_THEME_DIR_URI.'inc/demo-data/' );
	}

	// Hooks Folder Directory
	if( !defined( 'RESTROFOOD_HOOKS_DIR_PATH' ) ){
		define( 'RESTROFOOD_HOOKS_DIR_PATH',RESTROFOOD_INC_DIR_PATH.'hooks/' );
	}

	// Restrofood Framework Folder Directory
	if( !defined( 'RESTROFOOD_FRAMEWORK_DIR_PATH' ) ){
		define( 'RESTROFOOD_FRAMEWORK_DIR_PATH',RESTROFOOD_INC_DIR_PATH.'restrofood-framework/' );
	}

	// Restrofood Theme Support
	if( !defined( 'RESTROFOOD_THEME_SUPPORT_DIR_PATH' ) ){
		define( 'RESTROFOOD_THEME_SUPPORT_DIR_PATH',RESTROFOOD_INC_DIR_PATH.'theme-support/' );
	}

	/**
	* Include File
	*
	*/
	require_once( RESTROFOOD_INC_DIR_PATH.'restrofood-breadcrumb.php' );
	require_once( RESTROFOOD_INC_DIR_PATH.'restrofood-commoncss.php' );
	require_once( RESTROFOOD_INC_DIR_PATH.'restrofood-functions.php' );
	require_once( RESTROFOOD_INC_DIR_PATH.'wp-html-helper.php' );
	require_once( RESTROFOOD_INC_DIR_PATH.'restrofood-widget/restrofood-widgets.php' );
	require_once( RESTROFOOD_INC_DIR_PATH.'redux-custom-field/fa-icons.php' );
	require_once( RESTROFOOD_INC_DIR_PATH.'redux-custom-field/restrofood-option-slide-add-field.php' );

	/**
	* Style And Script Add File
	*/
	require_once( RESTROFOOD_THEME_SUPPORT_DIR_PATH.'restrofood-style-script.php' );

	/**
	* Hook File
	*/
	require_once( RESTROFOOD_HOOKS_DIR_PATH.'hooks.php' );
	require_once( RESTROFOOD_HOOKS_DIR_PATH.'hooks-functions.php' );

	/**
	* WooCommerce File
	*/
	require_once( RESTROFOOD_INC_DIR_PATH.'restrofood-woo-hooks.php' );
	require_once( RESTROFOOD_INC_DIR_PATH.'restrofood-woo-hooks-functions.php' );

	/**
	* Plugin File
	*/
	require_once( RESTROFOOD_FRAMEWORK_DIR_PATH.'plugin-activation/active-plugins.php' );
	require_once( RESTROFOOD_FRAMEWORK_DIR_PATH.'restrofood-options/restrofood-options.php' );
	require_once( RESTROFOOD_FRAMEWORK_DIR_PATH.'restrofood-meta/restrofood-meta.php' );


	/**
	* Demo Data
	*/
	if( class_exists( 'RestroFood' ) ){
		$restrofood_plugin_license = get_option( 'restrofood_plugin_lic_Key' );
		if( ! empty( $restrofood_plugin_license ) ){
			require_once( RESTROFOOD_DEMO_DIR_PATH.'demo-import.php' );
		}
	}