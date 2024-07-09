<?php
/**
 * Active callback functions.
 *
 * @package Water Delivery
 */

function water_delivery_featured_slider_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[enable_featured_slider_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function water_delivery_featured_slider_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[featured_slider_content_type]' )->value();
    return ( water_delivery_featured_slider_active( $control ) && ( 'featured_slider_page' == $content_type ) );
}

function water_delivery_featured_slider_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[featured_slider_content_type]' )->value();
    return ( water_delivery_featured_slider_active( $control ) && ( 'featured_slider_post' == $content_type ) );
}


function water_delivery_featured_services_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[enable_featured_services_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function water_delivery_featured_services_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[featured_services_content_type]' )->value();
    return ( water_delivery_featured_services_active( $control ) && ( 'featured_services_page' == $content_type ) );
}

function water_delivery_featured_services_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[featured_services_content_type]' )->value();
    return ( water_delivery_featured_services_active( $control ) && ( 'featured_services_post' == $content_type ) );
}

function water_delivery_featured_features_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[enable_featured_features_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function water_delivery_featured_features_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[featured_features_content_type]' )->value();
    return ( water_delivery_featured_features_active( $control ) && ( 'featured_features_page' == $content_type ) );
}

function water_delivery_featured_features_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[featured_features_content_type]' )->value();
    return ( water_delivery_featured_features_active( $control ) && ( 'featured_features_post' == $content_type ) );
}

function water_delivery_featured_posts_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[enable_featured_posts_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

/**
 * Active Callback for top bar section
 */
function water_delivery_contact_info_ac( $control ) {

    $show_contact_info = $control->manager->get_setting( 'theme_options[show_header_contact_info]')->value();
    $control_id        = $control->id;
         
    if ( $control_id == 'theme_options[header_phone]' && $show_contact_info ) return true;

    return false;
}

function water_delivery_social_links_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[show_header_social_links]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}