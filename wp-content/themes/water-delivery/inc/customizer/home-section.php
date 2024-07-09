<?php
/**
 * Home Page Options.
 *
 * @package Water Delivery
 */

$default = water_delivery_get_default_theme_options();

// Add Panel.
$wp_customize->add_panel( 'home_page_panel',
	array(
	'title'      => __( 'Homepage Sections', 'water-delivery' ),
	'priority'   => 130,
	'capability' => 'edit_theme_options',
	)
);

/**
* Section Customizer Options.
*/
require get_template_directory() . '/inc/customizer/home-sections/featured-slider.php';
require get_template_directory() . '/inc/customizer/home-sections/featured-features.php';
require get_template_directory() . '/inc/customizer/home-sections/featured-services.php';

