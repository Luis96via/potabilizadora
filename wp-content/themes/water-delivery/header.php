<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Water Delivery
 */
/**
* Hook - water_delivery_action_doctype.
*
* @hooked water_delivery_doctype -  10
*/
do_action( 'water_delivery_action_doctype' );
?>
<head>
<?php
/**
* Hook - water_delivery_action_head.
*
* @hooked water_delivery_head -  10
*/
do_action( 'water_delivery_action_head' );
?>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>

<?php

/**
* Hook - water_delivery_action_before.
*
* @hooked water_delivery_page_start - 10
*/
do_action( 'water_delivery_action_before' );

/**
*
* @hooked water_delivery_header_start - 10
*/
do_action( 'water_delivery_action_before_header' );

/**
*
*@hooked water_delivery_site_branding - 10
*@hooked water_delivery_header_end - 15 
*/
do_action('water_delivery_action_header');

/**
*
* @hooked water_delivery_content_start - 10
*/
do_action( 'water_delivery_action_before_content' );

/**
 * Banner start
 * 
 * @hooked water_delivery_banner_header - 10
*/
do_action( 'water_delivery_banner_header' );  
