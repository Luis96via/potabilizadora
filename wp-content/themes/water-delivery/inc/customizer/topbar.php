<?php

$default = water_delivery_get_default_theme_options();
/**
* Add Header Top Panel
*/
$wp_customize->add_panel( 'header_top_panel', array(
    'title'          => __( 'Header Top', 'water-delivery' ),
    'priority'       => 20,
    'capability'     => 'edit_theme_options',
) );

/** Header contact info section */
$wp_customize->add_section(
    'header_contact_info_section',
    array(
        'title'    => __( 'Contact Info', 'water-delivery' ),
        'panel'    => 'header_top_panel',
        'priority' => 10,
    )
);

/** Header contact info control */
$wp_customize->add_setting( 
    'theme_options[show_header_contact_info]', 
    array(
        'default'           => $default['show_header_contact_info'],
        'sanitize_callback' => 'water_delivery_sanitize_checkbox',
    ) 
);

$wp_customize->add_control(
    'theme_options[show_header_contact_info]',
    array(
        'label'       => __( 'Show Contact Info', 'water-delivery' ),
        'section'     => 'header_contact_info_section',
        'type'        => 'checkbox',
    )
);

/** Phone */
$wp_customize->add_setting( 'theme_options[header_phone]', array(
    'sanitize_callback' => 'water_delivery_sanitize_phone_number',
) );

$wp_customize->add_control(
    'theme_options[header_phone]',
    array(
        'label'           => __( 'Phone', 'water-delivery' ),
        'description'     => __( 'Enter phone number.', 'water-delivery' ),
        'section'         => 'header_contact_info_section',
        'active_callback' => 'water_delivery_contact_info_ac',
    )
);

/** Header social links section */
$wp_customize->add_section(
    'header_social_links_section',
    array(
        'title'    => __( 'Social Links', 'water-delivery' ),
        'panel'    => 'header_top_panel',
        'priority' => 20,
    )
);

/** Header social links control */
$wp_customize->add_setting( 
    'theme_options[show_header_social_links]', 
    array(
        'default'           => $default['show_header_social_links'],
        'sanitize_callback' => 'water_delivery_sanitize_checkbox',
    ) 
);

$wp_customize->add_control(
    'theme_options[show_header_social_links]',
    array(
        'label'       => __( 'Show Social Links', 'water-delivery' ),
        'section'     => 'header_social_links_section',
        'type'        => 'checkbox',
    )
);

// Setting social_links.
$wp_customize->add_setting( 
    'theme_options[social_link_1]', 
    array(
        'sanitize_callback' => 'esc_url_raw',
    ) 
);

$wp_customize->add_control(
    'theme_options[social_link_1]',
    array(
        'label'           => __( 'Social Link 1', 'water-delivery' ),
        'description'     => __( 'Enter valid url.', 'water-delivery' ),
        'section'         => 'header_social_links_section',
        'type'            => 'url',
        'active_callback' => 'water_delivery_social_links_active',
    )
);

$wp_customize->add_setting( 
    'theme_options[social_link_2]', 
    array(
        'sanitize_callback' => 'esc_url_raw',
    ) 
);

$wp_customize->add_control(
    'theme_options[social_link_2]',
    array(
        'label'           => __( 'Social Link 2', 'water-delivery' ),
        'description'     => __( 'Enter valid url.', 'water-delivery' ),
        'section'         => 'header_social_links_section',
        'type'            => 'url',
        'active_callback' => 'water_delivery_social_links_active',
    )
);
$wp_customize->add_setting( 
    'theme_options[social_link_3]', 
    array(
        'sanitize_callback' => 'esc_url_raw',
    ) 
);

$wp_customize->add_control(
    'theme_options[social_link_3]',
    array(
        'label'           => __( 'Social Link 3', 'water-delivery' ),
        'description'     => __( 'Enter valid url.', 'water-delivery' ),
        'section'         => 'header_social_links_section',
        'type'            => 'url',
        'active_callback' => 'water_delivery_social_links_active',
    )
);

$wp_customize->add_setting( 
    'theme_options[social_link_4]', 
    array(
        'sanitize_callback' => 'esc_url_raw',
    ) 
);

$wp_customize->add_control(
    'theme_options[social_link_4]',
    array(
        'label'           => __( 'Social Link 4', 'water-delivery' ),
        'description'     => __( 'Enter valid url.', 'water-delivery' ),
        'section'         => 'header_social_links_section',
        'type'            => 'url',
        'active_callback' => 'water_delivery_social_links_active',
    )
);