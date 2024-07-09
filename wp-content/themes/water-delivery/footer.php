<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Water Delivery
 */

/**
 *
 * @hooked water_delivery_footer_start
 */
do_action( 'water_delivery_action_before_footer' );

/**
 * Hooked - water_delivery_footer_top_section -10
 * Hooked - water_delivery_footer_section -20
 */
do_action( 'water_delivery_action_footer' );

/**
 * Hooked - water_delivery_footer_end. 
 */
do_action( 'water_delivery_action_after_footer' );

wp_footer(); ?>

</body>  
</html>