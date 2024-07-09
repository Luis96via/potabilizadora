<?php
/*
Register Fonts
*/
function wavio_fonts_url()
{
    $font_url = '';

    /*
    Translators: If there are characters in your language that are not supported
    by chosen font(s), translate this to 'off'. Do not translate into your own language.
     */
    if ('off' !== esc_html_x('on', 'Google font: on or off', 'wavio')) {
        $font_url = add_query_arg('family', 'Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=block', "//fonts.googleapis.com/css2");
    }

    return $font_url;
}

/*
Enqueue scripts and styles.
*/
function wavio_scripts()
{
    wp_enqueue_style('wavio-fonts', wavio_fonts_url(), array(), null);
}

add_action('wp_enqueue_scripts', 'wavio_scripts');