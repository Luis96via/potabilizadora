<?php
/**
 * Customizer settings for this theme.
 * @since Wavio 1.0
 */
if (!class_exists('wavio_Customize')) {
    /**
     * CUSTOMIZER SETTINGS
     */
    class wavio_Customize
    {

        /**
         * Register customizer options.
         *
         * @param WP_Customize_Manager $wp_customize Theme Customizer object.
         */
        public static function register($wp_customize)
        {
            /* ========================================================================= */
            /*
             * COLORS
             */

            // Primary color
            $wp_customize->add_setting('pr_color', array(
                'default' => '#379eff',
                'transport' => 'refresh',
                'sanitize_callback' => 'sanitize_hex_color'
            ));

            $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'pr_color', array(
                'section' => 'colors',
                'label' => esc_html__('Primary color', 'wavio'),
                'description' => esc_html__('Sets main accent color.', 'wavio'),
            )));


            // Primary hover color
            $wp_customize->add_setting('pr_h_color', array(
                'default' => '#081F46',
                'transport' => 'refresh',
                'sanitize_callback' => 'sanitize_hex_color'
            ));

            $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'pr_h_color', array(
                'section' => 'colors',
                'label' => esc_html__('Primary hover color', 'wavio'),
                'description' => esc_html__('Sets link hover color.', 'wavio'),
            )));


            // Primary background color
            $wp_customize->add_setting('pr_bg_color', array(
                'default' => '#eef9ff',
                'transport' => 'refresh',
                'sanitize_callback' => 'sanitize_hex_color'
            ));

            $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'pr_bg_color', array(
                'section' => 'colors',
                'label' => esc_html__('Primary background color', 'wavio'),
                'description' => esc_html__("Changes header background and second accent colors. If there is no changing of the header color that means the current page uses Elementor builder’s header instead of the site's global, so you need to change the color on the page.", 'wavio'),
            )));


            // Footer background color
            $wp_customize->add_setting('f_bg_color', array(
                'default' => '#120d48',
                'transport' => 'refresh',
                'sanitize_callback' => 'sanitize_hex_color'
            ));

            $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'f_bg_color', array(
                'section' => 'colors',
                'label' => esc_html__('Footer background color', 'wavio'),
                'description' => esc_html__("Changes footer background color.", 'wavio'),
            )));


            // Primary dark color
            $wp_customize->add_setting('pr_d_color', array(
                'default' => '#000000',
                'transport' => 'refresh',
                'sanitize_callback' => 'sanitize_hex_color'
            ));

            $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'pr_d_color', array(
                'section' => 'colors',
                'label' => esc_html__('Primary dark color', 'wavio'),
                'description' => esc_html__('Sets text color in paragraphs.', 'wavio'),
            )));


            // h1 title color
            $wp_customize->add_setting('title_color', array(
                'default' => '#081F46',
                'transport' => 'refresh',
                'sanitize_callback' => 'sanitize_hex_color'
            ));

            $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'title_color', array(
                'section' => 'colors',
                'label' => esc_html__('Title color', 'wavio'),
                'description' => esc_html__('Sets color for titles.', 'wavio'),
            )));


            // Footer widget title color
            $wp_customize->add_setting('fw_title_color', array(
                'default' => '#ffffff',
                'transport' => 'refresh',
                'sanitize_callback' => 'sanitize_hex_color'
            ));

            $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'fw_title_color', array(
                'section' => 'colors',
                'label' => esc_html__('Footer widget title color', 'wavio'),
            )));


            // Header links hover color
            $wp_customize->add_setting('header_h_color', array(
                'default' => '#eef9ff',
                'transport' => 'refresh',
                'sanitize_callback' => 'sanitize_hex_color'
            ));

            $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'header_h_color', array(
                'section' => 'colors',
                'label' => esc_html__('Header links hover color', 'wavio'),
            )));


            // Button background color 1
            $wp_customize->add_setting('btn_bg_color_1', array(
                'default' => '#67b5ff',
                'transport' => 'refresh',
                'sanitize_callback' => 'sanitize_hex_color'
            ));

            $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'btn_bg_color_1', array(
                'section' => 'colors',
                'label' => esc_html__('Button background first color', 'wavio'),
            )));


            // Button background color 2
            $wp_customize->add_setting('btn_bg_color_2', array(
                'default' => '#4d86ff',
                'transport' => 'refresh',
                'sanitize_callback' => 'sanitize_hex_color'
            ));

            $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'btn_bg_color_2', array(
                'section' => 'colors',
                'label' => esc_html__('Button background second color', 'wavio'),
            )));


            // Button hover color
            $wp_customize->add_setting('btn_h_color', array(
                'default' => '#379eff',
                'transport' => 'refresh',
                'sanitize_callback' => 'sanitize_hex_color'
            ));

            $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'btn_h_color', array(
                'section' => 'colors',
                'label' => esc_html__('Button hover color', 'wavio'),
            )));


            // Social icon text color
            $wp_customize->add_setting('social_icon_txt_color', array(
                'default' => '#ffffff',
                'transport' => 'refresh',
                'sanitize_callback' => 'sanitize_hex_color'
            ));

            $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'social_icon_txt_color', array(
                'section' => 'colors',
                'label' => esc_html__('Social icon color', 'wavio'),
            )));


            // Social icon background color
            $wp_customize->add_setting('social_icon_color', array(
                'default' => '#379eff',
                'transport' => 'refresh',
                'sanitize_callback' => 'sanitize_hex_color'
            ));

            $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'social_icon_color', array(
                'section' => 'colors',
                'label' => esc_html__('Social icon circle background color', 'wavio'),
            )));


            // Social icon background hover color
            $wp_customize->add_setting('social_icon_h_color', array(
                'default' => '#4d86ff',
                'transport' => 'refresh',
                'sanitize_callback' => 'sanitize_hex_color'
            ));

            $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'social_icon_h_color', array(
                'section' => 'colors',
                'label' => esc_html__('Social icon circle background hover color', 'wavio'),
            )));


            // Woocommerce price filter widget color
            $wp_customize->add_setting('woo_pr_fil_bg_color', array(
                'default' => '#379eff',
                'transport' => 'postMessage',
                'sanitize_callback' => 'sanitize_hex_color'
            ));

            $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'woo_pr_fil_bg_color', array(
                'section' => 'colors',
                'label' => esc_html__('Woocommerce price filter widget color', 'wavio'),
            )));

            // Text selection background color
            $wp_customize->add_setting('txt_select_bg_color', array(
                'default' => '#ecf4ff',
                'transport' => 'refresh',
                'sanitize_callback' => 'sanitize_hex_color'
            ));

            $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'txt_select_bg_color', array(
                'section' => 'colors',
                'label' => esc_html__('Text selection background color', 'wavio'),
                'description' => esc_html__('Changes text selection background color. Try to select text on a page.', 'wavio'),
            )));


            // Price color
            $wp_customize->add_setting('price_color', array(
                'default' => '#081F46',
                'transport' => 'refresh',
                'sanitize_callback' => 'sanitize_hex_color'
            ));

            $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'price_color', array(
                'section' => 'colors',
                'label' => esc_html__('Price color', 'wavio'),
                'description' => esc_html__('Sets color for price text on product tiles.', 'wavio'),
            )));


            // Color for title on product tile
            $wp_customize->add_setting('price_tile_color', array(
                'default' => '#081F46',
                'transport' => 'refresh',
                'sanitize_callback' => 'sanitize_hex_color'
            ));

            $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'price_tile_color', array(
                'section' => 'colors',
                'label' => esc_html__('Product title color', 'wavio'),
                'description' => esc_html__('Sets color for title on product tile.', 'wavio'),
            )));


            // Color of sale badge
            $wp_customize->add_setting('sale_badge_bg_color', array(
                'default' => '#379eff',
                'transport' => 'refresh',
                'sanitize_callback' => 'sanitize_hex_color'
            ));

            $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sale_badge_bg_color', array(
                'section' => 'colors',
                'label' => esc_html__('Color of sale badge', 'wavio'),
                'description' => esc_html__('Sets color of sale badge on product tile.', 'wavio'),
            )));


            // Cart count color
            $wp_customize->add_setting('cart_count_color', array(
                'default' => '#379eff',
                'transport' => 'refresh',
                'sanitize_callback' => 'sanitize_hex_color'
            ));

            $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'cart_count_color', array(
                'section' => 'colors',
                'label' => esc_html__('Cart count color', 'wavio'),
                'description' => esc_html__('Sets background color for count badge on cart icon on the header. Add product to cart to see the badge.', 'wavio'),
            )));


            // Success icon color
            $wp_customize->add_setting('success_icon_color', array(
                'default' => '#379eff',
                'transport' => 'postMessage',
                'sanitize_callback' => 'sanitize_hex_color'
            ));

            $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'success_icon_color', array(
                'section' => 'colors',
                'label' => esc_html__('Success icon color', 'wavio'),
                'description' => esc_html__('Sets icon color on success notice ✔', 'wavio'),
            )));


            /* end COLORS */
            /* ========================================================================= */
            /*
             * HEADER
             */

            $wp_customize->add_section('header', array(
                'title' => esc_html__('Header', 'wavio')
            ));


            // Switcher for enable address on the header
            $wp_customize->add_setting('h_address_switcher', array(
                'default' => false,
                'transport' => 'refresh',
                'sanitize_callback' => 'sanitize_text_field'
            ));

            $wp_customize->add_control('h_address_switcher', array(
                'section' => 'header',
                'label' => esc_html__('Enable address on the header?', 'wavio'),
                'type' => 'checkbox'
            ));


            // Address text
            $wp_customize->add_setting('h_address_text', array(
                'default' => '25 W 51st St, New York, NY 10019',
                'transport' => 'refresh',
                'sanitize_callback' => 'sanitize_text_field'
            ));

            $wp_customize->add_control('h_address_text', array(
                'section' => 'header',
                'label' => esc_html__('Address text.', 'wavio'),
                'description' => esc_html__('Field for business address.', 'wavio'),
                'type' => 'text'
            ));


            // Address link
            $wp_customize->add_setting('h_address_link', array(
                'default' => 'https://g.page/bryant-park-new-york',
                'transport' => 'refresh',
                'sanitize_callback' => 'sanitize_text_field'
            ));

            $wp_customize->add_control('h_address_link', array(
                'section' => 'header',
                'label' => esc_html__('Address link.', 'wavio'),
                'description' => wp_kses((__('You can use any map service here, for example <a href="https://www.google.com/maps" target="_blank">Google Maps</a>, just find your place in Google Maps, copy link and put it to this field to set.', 'wavio')), 'link'),
                'type' => 'text'
            ));


            // Switcher for enable Call Us on the header
            $wp_customize->add_setting('h_call_switcher', array(
                'default' => false,
                'transport' => 'refresh',
                'sanitize_callback' => 'sanitize_text_field'
            ));

            $wp_customize->add_control('h_call_switcher', array(
                'section' => 'header',
                'label' => esc_html__('Enable Call Us on the header?', 'wavio'),
                'type' => 'checkbox'
            ));


            // Call phone number
            $wp_customize->add_setting('h_call_number', array(
                'default' => '212.262.3200',
                'transport' => 'refresh',
                'sanitize_callback' => 'sanitize_text_field'
            ));

            $wp_customize->add_control('h_call_number', array(
                'section' => 'header',
                'label' => esc_html__('Phone number.', 'wavio'),
                'description' => esc_html__('You can use any phone number format here e.g. 123-AWESOME-BUSINESS or +1 234 56 78.', 'wavio'),
                'type' => 'text'
            ));


            // Call text
            $wp_customize->add_setting('h_call_txt', array(
                'default' => esc_html__('Call Us', 'wavio'),
                'transport' => 'refresh',
                'sanitize_callback' => 'sanitize_text_field'
            ));

            $wp_customize->add_control('h_call_txt', array(
                'section' => 'header',
                'label' => esc_html__('Call Us text.', 'wavio'),
                'description' => esc_html__('Use any or default Call Us text (it also uses Call Us text if this field is blank).', 'wavio'),
                'type' => 'text'
            ));


            /* end HEADER */
            /* ========================================================================= */
            /*
             * FOOTER
             */

            $wp_customize->add_section('footer', array(
                'title' => esc_html__('Footer', 'wavio')
            ));

            // Switcher for Copyright text
            $wp_customize->add_setting('copyright_text_switcher', array(
                'default' => false,
                'transport' => 'refresh',
                'sanitize_callback' => 'sanitize_text_field'
            ));

            $wp_customize->add_control('copyright_text_switcher', array(
                'section' => 'footer',
                'label' => esc_html__('Disable "Copyright" text before the year', 'wavio'),
                'type' => 'checkbox'
            ));

            // Custom copyright
            $wp_customize->add_setting('copyright_text', array(
                'default' => '',
                'transport' => 'refresh',
                'sanitize_callback' => 'sanitize_text_field'
            ));

            $wp_customize->add_control('copyright_text', array(
                'section' => 'footer',
                'label' => esc_html__('Custom copyright text.', 'wavio'),
                'description' => esc_html__('Leave blank to use default copyright.', 'wavio'),
                'type' => 'text'
            ));

            /* end FOOTER */
            /* ========================================================================= */
            /*
             * TWEAKS
             */

            $wp_customize->add_section('tweaks', array(
                'title' => esc_html__('Tweaks', 'wavio')
            ));


            // Show/hide
            $wp_customize->add_setting('add_to_cart_switcher', array(
                'default' => false,
                'transport' => 'postMessage',
                'sanitize_callback' => 'sanitize_text_field'
            ));

            $wp_customize->add_control('add_to_cart_switcher', array(
                'section' => 'tweaks',
                'label' => esc_html__('Disable "Add to cart" button on product tiles', 'wavio'),
                'type' => 'checkbox'
            ));


            // Disable post category meta text
            $wp_customize->add_setting('meta_cat_switcher', array(
                'default' => false,
                'transport' => 'postMessage',
                'sanitize_callback' => 'sanitize_text_field'
            ));

            $wp_customize->add_control('meta_cat_switcher', array(
                'section' => 'tweaks',
                'label' => esc_html__('Disable post category meta text', 'wavio'),
                'type' => 'checkbox'
            ));


            // Disable post author meta text
            $wp_customize->add_setting('meta_author_switcher', array(
                'default' => false,
                'transport' => 'postMessage',
                'sanitize_callback' => 'sanitize_text_field'
            ));

            $wp_customize->add_control('meta_author_switcher', array(
                'section' => 'tweaks',
                'label' => esc_html__('Disable post author meta text', 'wavio'),
                'type' => 'checkbox'
            ));


            // Disable post date meta text
            $wp_customize->add_setting('meta_date_switcher', array(
                'default' => false,
                'transport' => 'postMessage',
                'sanitize_callback' => 'sanitize_text_field'
            ));

            $wp_customize->add_control('meta_date_switcher', array(
                'section' => 'tweaks',
                'label' => esc_html__('Disable post date meta text', 'wavio'),
                'type' => 'checkbox'
            ));

            // Disable post comments meta text
            $wp_customize->add_setting('meta_comm_switcher', array(
                'default' => false,
                'transport' => 'postMessage',
                'sanitize_callback' => 'sanitize_text_field'
            ));

            $wp_customize->add_control('meta_comm_switcher', array(
                'section' => 'tweaks',
                'label' => esc_html__('Disable post comments meta text', 'wavio'),
                'type' => 'checkbox'
            ));


            // Disable product category meta text
            $wp_customize->add_setting('meta_pr_cat_switcher', array(
                'default' => false,
                'transport' => 'postMessage',
                'sanitize_callback' => 'sanitize_text_field'
            ));


            // Enable search an entire website, not just products
            $wp_customize->add_setting('search_switcher', array(
                'default' => false,
                'transport' => 'postMessage',
                'sanitize_callback' => 'sanitize_text_field'
            ));

            $wp_customize->add_control('search_switcher', array(
                'section' => 'tweaks',
                'label' => esc_html__('Enable search an entire website, not just products', 'wavio'),
                'type' => 'checkbox'
            ));


            /* end TWEAKS */
            /* ========================================================================= */


            /* -----------------------------*/
            /* end Customize Settings */
            /* -----------------------------*/
        }
    }


    // Setup the Theme Customizer settings and controls.
    add_action('customize_register', array('wavio_Customize', 'register'));

}