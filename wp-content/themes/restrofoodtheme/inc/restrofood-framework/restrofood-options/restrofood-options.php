<?php
    /**
     * ReduxFramework Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    // This is your option name where all the Redux data is stored.
    $opt_name = "restrofood_opt";

    // This line is only for altering the demo. Can be easily removed.
    $opt_name = apply_filters( 'redux_demo/opt_name', $opt_name );

    /*
     *
     * --> Used within different fields. Simply examples. Search for ACTUAL DECLARATION for field examples
     *
     */

    $sampleHTML = '';
    function WP_ReFilesystem( $args = false, $context = false, $allow_relaxed_file_ownership = false ) {
        if ( file_exists( get_template_directory() . '/info-html.html' ) ) {
            Redux_Functions::initWpFilesystem();

            global $wp_filesystem;

            $sampleHTML = $wp_filesystem->get_contents( get_template_directory(). '/info-html.html' );
        }
    }

	$alowhtml = array(
		'p' => array(
			'class' => array()
		),
		'span' => array()
	);

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'menu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => esc_html__( 'Restrofood Theme Options', 'restrofood' ),
        'page_title'           => esc_html__( 'Restrofood Theme Options', 'restrofood' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => true,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => true,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => false,
        // Show the time the page took to load, etc
        'update_notice'        => true,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => true,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

        // OPTIONAL -> Give you extra features
        'page_priority'        => null,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => '',
        // Page slug used to denote the panel, will be based off page title then menu title then opt_name if not provided
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => true,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'red',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */


    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => esc_html__( 'Theme Information 1', 'restrofood' ),
            'content' => wp_kses( __( '<p>This is the tab content, HTML is allowed.</p>', 'restrofood' ), $alowhtml )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => esc_html__( 'Theme Information 2', 'restrofood' ),
            'content' => wp_kses( __( '<p>This is the tab content, HTML is allowed.</p>', 'restrofood' ), $alowhtml )
        )
    );
    Redux::set_help_tab( $opt_name, $tabs );

    // Set the help sidebar
    $content = wp_kses( __('<p>This is the sidebar content, HTML is allowed.</p>', 'restrofood' ), $alowhtml );
    Redux::set_help_sidebar( $opt_name, $content );

    // -> START General Fields

    Redux::setSection( $opt_name, array(
        'title'            => esc_html__( 'General', 'restrofood' ),
        'id'               => 'restrofood_general',
        'customizer_width' => '450px',
        'icon'             => 'el el-cog el-spin',
        'fields'           => array(
            array(
                'id'       => 'restrofood_display_preloader',
                'type'     => 'switch',
                'title'    => esc_html__( 'Display Preloader', 'restrofood' ),
                'subtitle' => esc_html__( 'Switch On to Display Preloader.', 'restrofood' ),
                'default'  => true,
            ),
            array(
                'id'       => 'restrofood_preloader_background',
                'type'     => 'color',
                'title'    => esc_html__( 'Preloader Combination Background ( First One )', 'restrofood' ),
                'subtitle' => esc_html__( 'Set Preloader Combination Background ( First One )', 'restrofood' ),
                'output'   => array( 'background' => '.preloader .loader' ),
                'required' => array( 'restrofood_display_preloader','equals','1' ),
            ),
            array(
                'id'       => 'restrofood_preloader_background_two',
                'type'     => 'color',
                'title'    => esc_html__( 'Preloader Combination Background ( Second One )', 'restrofood' ),
                'subtitle' => esc_html__( 'Set Preloader Combination Background ( Second One )', 'restrofood' ),
                'output'   => array( 'background' => '.preloader .loader:before' ),
                'required' => array( 'restrofood_display_preloader','equals','1' ),
            ),
            array(
                'id'       => 'restrofood_preloader_background_three',
                'type'     => 'color',
                'title'    => esc_html__( 'Preloader Combination Background ( Third One )', 'restrofood' ),
                'subtitle' => esc_html__( 'Set Preloader Combination Background ( Third One )', 'restrofood' ),
                'output'   => array( 'background' => '.preloader .loader:after' ),
                'required' => array( 'restrofood_display_preloader','equals','1' ),
            ),
            array(
                'id'       => 'restrofood_display_backtotop',
                'type'     => 'switch',
                'title'    => esc_html__( 'Display Back To Top Button', 'restrofood' ),
                'subtitle' => esc_html__( 'Switch On to Display back to top button.', 'restrofood' ),
                'default'  => true,
            ),
            array(
                'id'       => 'restrofood_backtotop_icon_color',
                'type'     => 'color',
                'title'    => esc_html__( 'Back To Top Icon Color', 'restrofood' ),
                'subtitle' => esc_html__( 'Set Back To Top Icon Color', 'restrofood' ),
                'output'   => array( '.back-to-top.show i' ),
                'required' => array( 'restrofood_display_backtotop','equals','1' ),
            ),
            array(
                'id'       => 'restrofood_backtotop_icon_background_color',
                'type'     => 'color',
                'output'   => array( 'background' => '.back-to-top' ),
                'title'    => esc_html__( 'Back To Top Background Color', 'restrofood' ),
                'subtitle' => esc_html__( 'Set Back To Top Background Color', 'restrofood' ),
                'required' => array( 'restrofood_display_backtotop','equals','1' ),
            ),
            array(
                'id'       => 'restrofood_backtotop_icon_background_color_on_hover',
                'type'     => 'color',
                'output'   => array( 'background' => '.back-to-top:hover' ),
                'title'    => esc_html__( 'Back To Top Background Hover Color', 'restrofood' ),
                'subtitle' => esc_html__( 'Set Back To Top Background Hover Color', 'restrofood' ),
                'required' => array( 'restrofood_display_backtotop','equals','1' ),
            ),
            array(
                'id'       => 'restrofood_backtotop_icon_color_on_hover',
                'type'     => 'color',
                'output'   => array( '.back-to-top:hover i' ),
                'title'    => esc_html__( 'Back To Top Icon Color On Hover', 'restrofood' ),
                'subtitle' => esc_html__( 'Set Back To Top Icon Color On Hover', 'restrofood' ),
                'required' => array( 'restrofood_display_backtotop','equals','1' ),
            ),
            array(
                'id'        => 'restrofood_backtotop_icon_background_opacity',
                'type'      => 'slider',
                'output'    => array( 'background' => '.back-to-top' ),
                'title'     => esc_html__( 'Back To Top Background Opacity On Hover', 'restrofood' ),
                'subtitle'  => esc_html__( 'Set Back To Top Background Opacity On Hover', 'restrofood' ),
                "default"   => 0.6,
                "min"       => 0.0,
                "step"      => 0.1,
                "max"       => 1,
                'resolution' => 0.1,
                'required'   => array( 'restrofood_display_backtotop','equals','1' ),
            ),
            array(
                'id'          => 'restrofood_body_fonts',
                'type'        => 'typography',
                'title'       => esc_html__('Body Typography', 'restrofood'),
                'google'      => true,
                'font-backup' => true,
                'output'      => array( 'body', 'p' ),
                'units'       =>'px',
                'subtitle'    => esc_html__('Typography option with each property can be called individually.', 'restrofood'),
                'text-align'  => false,
                'line-height' => false,
                'font-backup' => false,
                'color'       => false,
                'font-size'   => false,
                'subsets'     => false,
                'line-height' => false,
            ),
            array(
                'id'          => 'restrofood_header_fonts',
                'type'        => 'typography',
                'title'       => esc_html__('Heading Typography', 'restrofood'),
                'google'      => true,
                'font-backup' => true,
                'output'      => array( 'h1', 'h2', 'h3', 'h4', 'h5', 'h6'),
                'units'       => 'px',
                'subtitle'    => esc_html__('Typography option with each property can be called individually.', 'restrofood'),
                'text-align'  => false,
                'line-height' => false,
                'font-backup' => false,
                'color'       => false,
                'font-size'   => false,
                'subsets'     => false,
                'line-height' => false,
            ),
            array(
                'id'       => 'restrofood_unlimited_color',
                'type'     => 'color',
                'title'    => esc_html__('Custom Theme Color', 'restrofood'),
                'subtitle' => esc_html__('Pick a unlimited mian color for the theme (default: #3f5efb).', 'restrofood'),
                'validate' => 'color'
            ),
			array(
                'id'       => 'restrofood_map_apikey',
                'type'     => 'text',
                'title'    => esc_html__( 'API Key', 'restrofood' ),
                'subtitle' => esc_html__( 'Set your google map api key', 'restrofood' )
            ),

        )
    ) );

    /* End General Fields */


    // -> START Header / Menu
    Redux::setSection( $opt_name, array(
        'title'            => esc_html__( 'Header', 'restrofood' ),
        'id'               => 'restrofood_header',
        'customizer_width' => '400px',
        'icon'             => 'el el-adjust'
    ) );
    //start nav bar
    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Header Nav bar', 'restrofood'),
        'id'         => 'restrofood_navbar_header_option',
        'icon'       => 'el el-hand-right',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'        => 'header_style',
                'type'      => 'button_set',
                'title'     => esc_html__( 'Header Style', 'restrofood' ),
                'subtitle'  => esc_html__( 'Set Header Style', 'restrofood' ),
                'options'       => array(
                    'one'          => esc_html__( 'Style One', 'restrofood' ),
                    'two'          => esc_html__( 'Style Two', 'restrofood' ),
                ),
                'default'   => 'two',
            ),
            array(
                'id'       => 'restrofood_site_logo',
                'type'     => 'media',
                'url'      => true,
                'title'    => esc_html__( 'Logo', 'restrofood' ),
                'compiler' => 'true',
                'subtitle' => esc_html__( 'Upload your site logo for header ( recommendation png format ).', 'restrofood' ),
            ),
			array(
                'id'       => 'restrofood_site_logo_dimensions',
                'type'     => 'dimensions',
                'output'   => array( '.header .logo-holder a img.default-logo' ),
                'units'    => array('em','px','%'),
                'title'    => esc_html__('Logo Dimensions (Width/Height).', 'restrofood'),
                'subtitle' => esc_html__('Set logo dimensions to choose width, height, and unit.', 'restrofood'),
            ),
			array(
                'id'       => 'restrofood_site_logomargin_dimensions',
                'type'     => 'spacing',
				'mode'     => 'margin',
                'output'   => array( '.header .logo-holder a img.default-logo' ),
				'units_extended' => 'false',
                'units'    => array('em','px' ),
                'title'    => esc_html__('Logo Top and Bottom Margin.', 'restrofood'),
				'left'     => false,
                'right'    => false,
                'subtitle' => esc_html__('Set logo top and bottom margin.', 'restrofood'),
                'default'            => array(
                    'margin-top'     => '0px',
                    'margin-bottom'  => '0px',
                    'units'          => 'px'
                )
            ),
            array(
                'id'       => 'restrofood_site_title',
                'type'     => 'text',
                'validate' => 'html',
                'title'    => esc_html__( 'Text Logo', 'restrofood' ),
                'subtitle' => esc_html__( 'Write your logo text use as logo ( You can use span tag for text color ).', 'restrofood' ),
                'default'  => wp_kses( esc_html__( 'restrofood', 'restrofood' ), $alowhtml ),
            ),
            array(
                'id'       => 'restrofood_text_logo_color',
                'type'     => 'color',
                'title'    => esc_html__( 'Text Logo Color', 'restrofood' ),
                'subtitle' => esc_html__( 'Set Text Logo Color.  Make Sure You Using Text Logo', 'restrofood' ),
                'output'   => array( '.header .logo-holder h2 a.text-logo' ),
            ),
            array(
                'id'       => 'restrofood_text_logo_color_hover',
                'type'     => 'color',
                'title'    => esc_html__( 'Text Logo Color On Hover', 'restrofood' ),
                'subtitle' => esc_html__( 'Set Text Logo Color When hover. Make Sure You Using Text Logo', 'restrofood' ),
                'output'   => array( '.header .logo h2 a:hover' ),
            ),
            array(
                'id'       => 'restrofood_sticky_site_logo',
                'type'     => 'media',
                'url'      => true,
                'title'    => esc_html__( 'Sticky Logo', 'restrofood' ),
                'compiler' => 'true',
                'subtitle' => esc_html__( 'Upload Sticky logo for header ( recommendation png format ).', 'restrofood' ),
            ),
			array(
                'id'       => 'restrofood_sticky_site_logo_dimensions',
                'type'     => 'dimensions',
                'output'   => array( '.header .logo-holder a img.sticky-logo' ),
                'units'    => array('em','px','%'),
                'title'    => esc_html__('Sticky Logo Dimensions (Width/Height).', 'restrofood'),
                'subtitle' => esc_html__('Set Sticky logo dimensions to choose width, height, and unit.', 'restrofood'),
            ),
			array(
                'id'       => 'restrofood_sticky_site_logomargin_dimensions',
                'type'     => 'spacing',
				'mode'     => 'margin',
                'output'   => array( '.header .logo-holder a img.sticky-logo' ),
				'units_extended' => 'false',
                'units'    => array('em','px' ),
                'title'    => esc_html__('Sticky Logo Top and Bottom Margin.', 'restrofood'),
				'left'     => false,
                'right'    => false,
                'subtitle' => esc_html__( 'Set Sticky logo top and bottom margin.', 'restrofood' ),
                'default'            => array(
                    'margin-top'     => '0px',
                    'margin-bottom'  => '0px',
                    'units'          => 'px'
                )
            ),
            array(
                'id'       => 'account_button_image',
                'type'     => 'media',
                'url'      => true,
                'title'    => esc_html__( 'Account Button Image', 'restrofood' ),
                'compiler' => 'true',
                'subtitle' => esc_html__( 'Upload Account Button Image', 'restrofood' ),
            ),
            array(
                'id'       => 'account_button_text',
                'type'     => 'text',
                'title'    => esc_html__( 'Account Button Text', 'restrofood' ),
                'subtitle' => esc_html__( 'Set Account Button Text', 'restrofood' ),
                'default'  => esc_html__( 'Account', 'restrofood' ),
            ),
            array(
                'id'       => 'account_button_url',
                'type'     => 'text',
                'title'    => esc_html__( 'Account Button Url', 'restrofood' ),
                'subtitle' => esc_html__( 'Set Account Button Url', 'restrofood' ),
                'default'  => esc_html__( '#', 'restrofood' ),
            ),
            array(
                'id'            => 'restrofood_show_hide_social_logo',
                'type'          => 'switch',
                'title'         => esc_html__( 'Show Social Icon','restrofood' ),
                'subtitle'      => esc_html__( 'Switch On To Show Social Icon', 'restrofood' ),
                'default'       => false,
            ),
            array(
                'id'       => 'restrofood_theme_custom_container',
                'type'     => 'text',
                'title'    => esc_html__( 'Custom Container Width', 'restrofood' ),
                'subtitle' => esc_html__( 'Set Custom Container Width E.g 1290px', 'restrofood' )
            )
        ),
    ) );
    //    end header nav
    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Menu', 'restrofood'),
        'id'         => 'restrofood_page_header_menu_option',
        'icon'       => 'el el-credit-card',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'restrofood_menu_trigger_bg',
                'type'     => 'color',
                'output'   => array( 'background-color'  =>   '.header .header-main .menu-trigger span,.header .header-main .menu-trigger span:before,.header .header-main .menu-trigger span:after' ),
                'title'    => esc_html__( 'Menu Trigger Background Color', 'restrofood' ),
                'subtitle' => esc_html__( 'Set Menu Trigger Background Color', 'restrofood' ),
            ),
            array(
                'id'       => 'restrofood_menu_trigger_cross_bg',
                'type'     => 'color',
                'output'   => array( 'background-color'  =>   '.header .header-main .menu-trigger.active span:before,.header .header-main .menu-trigger.active span:after' ),
                'title'    => esc_html__( 'Menu Cross Trigger Background Color', 'restrofood' ),
                'subtitle' => esc_html__( 'Set Menu Cross Trigger Background Color', 'restrofood' ),
            ),
            array(
                'id'       => 'restrofood_header_background_color',
                'type'     => 'color',
                'output'   => array( 'background-color'  =>   'header.header .main-menu-wrapper' ),
                'title'    => esc_html__( 'Header Background Color', 'restrofood' ),
                'subtitle' => esc_html__( 'Set Header Background Color', 'restrofood' ),
            ),
            array(
                'id'       => 'restrofood_header_background_color_when_menu_show',
                'type'     => 'color',
                'output'   => array( 'background-color'  =>   '.header .header-main .main-menu-wrapper:after' ),
                'title'    => esc_html__( 'Header Background Color When Menu Come', 'restrofood' ),
                'subtitle' => esc_html__( 'Set Header Background Color When Menu Come', 'restrofood' ),
            ),
            array(
                'id'       => 'restrofood_menu_color',
                'type'     => 'color',
                'output'   => array('.header .header-main .main-menu .nav li a'),
                'title'    => esc_html__( 'Header Menu Color', 'restrofood' ),
                'subtitle' => esc_html__( 'Set Header Menu Color', 'restrofood' ),
            ),
            array(
                'id'       => 'restrofood_menu_active_color',
                'type'     => 'color',
                'output'   => array('.header .header-main .main-menu .nav li.current-menu-item > a, .header .header-main .main-menu .nav li.current-menu-parent > a,.header .header-main .main-menu .nav li.current-menu-ancestor > a'),
                'title'    => esc_html__( 'Header Menu Active Color', 'restrofood' ),
                'subtitle' => esc_html__( 'Set Header Menu Active Color', 'restrofood' ),
            ),
            array(
                'id'       => 'restrofood_menu_hover_color',
                'type'     => 'color',
                'output'   => array('.header .header-main .main-menu .nav li a:hover'),
                'title'    => esc_html__( 'Header Menu Hover Color', 'restrofood' ),
                'subtitle' => esc_html__( 'Set Header Menu Hover  Color', 'restrofood' ),
            ),
            array(
                'id'       => 'restrofood_sub_menu_bg',
                'type'     => 'color',
                'output'   => array( 'background-color' => '.header .header-main .main-menu .nav li ul' ),
                'title'    => esc_html__( 'Header Sub Menu Background Color', 'restrofood' ),
                'subtitle' => esc_html__( 'Set Header Sub Menu Background Color', 'restrofood' ),
            ),
            array(
                'id'       => 'restrofood_sub_menu_text_color',
                'type'     => 'color',
                'output'   => array('.header .header-main .main-menu .nav li ul li a'),
                'title'    => esc_html__( 'Header Sub Menu Color', 'restrofood' ),
                'subtitle' => esc_html__( 'Set Header Sub Menu Color', 'restrofood' ),
            ),
            array(
                'id'       => 'restrofood_sub_menu_hover_text_color',
                'type'     => 'color',
                'output'   => array('.header .header-main .main-menu .nav li ul li a:hover'),
                'title'    => esc_html__( 'Header Sub Menu Hover Color', 'restrofood' ),
                'subtitle' => esc_html__( 'Set Header Sub Menu Hover Color', 'restrofood' ),
            ),
            array(
                'id'       => 'restrofood_sticky_menu_trigger_bg',
                'type'     => 'color',
                'output'   => array( 'background-color'  =>   '.header .header-main.sticky .menu-trigger span,.header .header-main.sticky .menu-trigger span:before,.header .header-main.sticky .menu-trigger span:after' ),
                'title'    => esc_html__( 'Sticky Menu Trigger Background Color', 'restrofood' ),
                'subtitle' => esc_html__( 'Set Sticky Menu Trigger Background Color', 'restrofood' ),
            ),
            array(
                'id'       => 'restrofood_sticky_menu_trigger_cross_bg',
                'type'     => 'color',
                'output'   => array( 'background-color'  =>   '.header .header-main.sticky .menu-trigger.active span:before,.header .header-main.sticky .menu-trigger.active span:after' ),
                'title'    => esc_html__( 'Sticky Menu Cross Trigger Background Color', 'restrofood' ),
                'subtitle' => esc_html__( 'Set Sticky Menu Cross Trigger Background Color', 'restrofood' ),
            ),
            array(
                'id'       => 'restrofood_sticky_header_background_color',
                'type'     => 'color',
                'output'   => array( 'background-color'  =>   'header.header .header-main.sticky .main-menu-wrapper' ),
                'title'    => esc_html__( 'Sticky Header Background Color', 'restrofood' ),
                'subtitle' => esc_html__( 'Set Sticky Header Background Color', 'restrofood' ),
            ),
            array(
                'id'       => 'restrofood_sticky_header_background_color_when_menu_show',
                'type'     => 'color',
                'output'   => array( 'background-color'  =>   '.header .header-main.sticky .main-menu-wrapper:after' ),
                'title'    => esc_html__( 'Sticky Header Background Color When Menu Come', 'restrofood' ),
                'subtitle' => esc_html__( 'Set Sticky Header Background Color When Menu Come', 'restrofood' ),
            ),
            array(
                'id'       => 'restrofood_sticky_menu_color',
                'type'     => 'color',
                'output'   => array( '.header .header-main.sticky .main-menu .nav > li > a' ),
                'title'    => esc_html__( 'Sticky Menu Text Color', 'restrofood' ),
                'subtitle' => esc_html__( 'Set Sticky Menu Text Color', 'restrofood' ),
            ),
            array(
                'id'       => 'restrofood_sticky_menu_active_color',
                'type'     => 'color',
                'output'   => array('.header .header-main.sticky .main-menu .nav li.current-menu-item > a, .header .header-main.sticky .main-menu .nav li.current-menu-parent > a,.header .header-main.sticky .main-menu .nav li.current-menu-ancestor > a'),
                'title'    => esc_html__( 'Sticky Menu Active Text Color', 'restrofood' ),
                'subtitle' => esc_html__( 'Set Sticky Menu Active Text Color', 'restrofood' ),
            ),
            array(
                'id'       => 'restrofood_sticky_menu_hover_color',
                'type'     => 'color',
                'output'   => array('.header .header-main.sticky .main-menu .nav li a:hover'),
                'title'    => esc_html__( 'Sticky Menu Hover Text Color', 'restrofood' ),
                'subtitle' => esc_html__( 'Set Sticky Menu Hover Text Color', 'restrofood' ),
            ),
            array(
                'id'       => 'restrofood_sticky_sub_menu_bg',
                'type'     => 'color',
                'output'   => array( 'background-color' => '.header .header-main.sticky .main-menu .nav li ul' ),
                'title'    => esc_html__( 'Sticky Sub Menu Background Color', 'restrofood' ),
                'subtitle' => esc_html__( 'Set Sticky Sub Menu Background Color', 'restrofood' ),
            ),
            array(
                'id'       => 'restrofood_sticky_sub_menu_text_color',
                'type'     => 'color',
                'output'   => array( '.header .header-main.sticky .main-menu .nav li ul li a'),
                'title'    => esc_html__( 'Sticky Sub Menu Text Color', 'restrofood' ),
                'subtitle' => esc_html__( 'Set Sticky Sub Menu Text Color', 'restrofood' ),
            ),
            array(
                'id'       => 'restrofood_sticky_sub_menu_hover_text_color',
                'type'     => 'color',
                'output'   => array('.header .header-main.sticky .main-menu .nav li ul li a:hover'),
                'title'    => esc_html__( 'Header Sub Menu Hover Color', 'restrofood' ),
                'subtitle' => esc_html__( 'Set Header Sub Menu Hover Color', 'restrofood' ),
            ),

        )
    ) );
    //    Mobile Menu
    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Mobile Menu', 'restrofood'),
        'id'         => 'restrofood_mobile_menu_option',
        'icon'       => 'el el-magic',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'mobile_menu_trigger_color',
                'type'     => 'color',
                'output'   => array( 'background-color' => '#menu-button span, #menu-button span:before, #menu-button span:after'),
                'title'    => esc_html__( 'Hamburger Menu Color', 'restrofood' ),
                'subtitle' => esc_html__( 'Set Hamburger Menu Color', 'restrofood' ),
            ),
            array(
                'id'       => 'mobile_offcanvas_logo',
                'type'     => 'media',
                'compiler' => true,
                'title'    => esc_html__( 'Offcanvas Menu Logo', 'restrofood' ),
                'subtitle' => esc_html__( 'Set Offcanvas Menu Logo', 'restrofood' ),
            ),
            array(
                'id'       => 'logo_url',
                'type'     => 'text',
                'title'    => esc_html__( 'Logo Url', 'restrofood' ),
                'subtitle' => esc_html__( 'Set Logo Url', 'restrofood' ),
            ),
            array(
                'id'       => 'offcanvas_bg_color',
                'type'     => 'color',
                'output'   => array( 'background-color' => '.offcanvas-panel.mobile-menu-panel .panel'),
                'title'    => esc_html__( 'Menu Offcanvas Background Color', 'restrofood' ),
                'subtitle' => esc_html__( 'Set Menu Offcanvas Background Color', 'restrofood' ),
            ),
            array(
                'id'       => 'menu_color',
                'type'     => 'color',
                'output'   => array( 'color' => '.mobile-menu-panel .offcanvas-menu ul li a'),
                'title'    => esc_html__( 'Menu Color', 'restrofood' ),
                'subtitle' => esc_html__( 'Set Menu Color', 'restrofood' ),
            ),
            array(
                'id'       => 'menu_icon_color',
                'type'     => 'color',
                'output'   => array( 'color' => '.mobile-menu-panel .offcanvas-menu.mobile_menu ul li .submenu-button:after'),
                'title'    => esc_html__( 'Menu Icon Color', 'restrofood' ),
                'subtitle' => esc_html__( 'Set Menu Icon Color', 'restrofood' ),
            ),

        )
    ) );
    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Page Header', 'restrofood'),
        'id'         => 'restrofood_page_header_option',
        'icon'       => 'el el-credit-card',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'        => 'restrofood_header_bg',
                'type'      => 'background',
                'title'     => esc_html__( 'Common Header Background', 'restrofood' ),
                'subtitle'  => esc_html__( 'Upload Common Header Background', 'restrofood' ),
            ),
            array(
                'id'            => 'restrofood_overlay_show_hide',
                'type'          => 'switch',
                'title'         => esc_html__( 'Show Overlay','restrofood' ),
                'subtitle'      => esc_html__( 'Switch On To Show Overlay.', 'restrofood' ),
                'default'       => false,
            ),
            array(
                'id'            => 'restrofood_overlay_color',
                'type'          => 'color',
                'title'         => esc_html__('Overlay Color','restrofood'),
                'subtitle'      => esc_html__('Set Overlay Color', 'restrofood'),
                'output'        => array( 'background-color'    => '.page-title-bg-overlay:after' ),
                'required'      => array( 'restrofood_overlay_show_hide','equals','1' ),
            ),
            array(
                'id'        => 'restrofood_overlay_opacity',
                'type'      => 'slider',
                'output'    => array( 'opacity' => '.page-title-bg-overlay:after' ),
                'title'     => esc_html__( 'Back To Top Background Opacity', 'restrofood' ),
                'subtitle'  => esc_html__( 'Set Back To Top Background Opacity', 'restrofood' ),
                "default"   => 0.3,
                "min"       => 0.0,
                "step"      => 0.1,
                "max"       => 1,
                'resolution' => 0.1,
                'required'   => array( 'restrofood_overlay_show_hide','equals','1' ),
            ),
            array(
                'id'        => 'restrofood_header_content_alignment',
                'type'      => 'button_set',
                'title'     => esc_html__( 'Title And Breadcrumb Alignment', 'restrofood' ),
                'subtitle'  => esc_html__( 'Set Title And Breadcrumb Alignment', 'restrofood' ),
                'options'       => array(
                    'left'         => esc_html__( 'Left', 'restrofood' ),
                    'center'       => esc_html__( 'Center', 'restrofood' ),
                    'right'        => esc_html__( 'Right', 'restrofood' ),
                ),
                'default'   => 'center',
            ),
            array(
                'id'            => 'restrofood_header_text_show_hide',
                'type'          => 'switch',
                'title'         => esc_html__( 'Show Page header?','restrofood' ),
                'subtitle'      => esc_html__( 'Switch On To Show Page Header', 'restrofood' ),
                'default'       => true,
            ),
            array(
                'id'            => 'restrofood_header_text_color',
                'type'          => 'color',
                'title'         => esc_html__('Page header text color','restrofood'),
                'subtitle'      => esc_html__('Page header text color', 'restrofood'),
                'required'  => array( 'restrofood_header_text_show_hide','equals','1' ),
            ),
            array(
                'id'            => 'restrofood_enable_bread',
                'type'          => 'button_set',
                'title'         => esc_html__('Breadcrumb Hide/Show', 'restrofood'),
                'subtitle'      => esc_html__('Hide / Show breadcrumb from all page and post ( Default settings hide ).', 'restrofood'),
                'options'       => array(
                    '1'         => esc_html__( 'show', 'restrofood' ),
                    '2'         => esc_html__( 'hide', 'restrofood' )
                ),
                'default'       => '1'
            ),
            array(
                'id'            => 'restrofood_link_color',
                'type'          => 'color',
                'output'        => array( '.page-title .title-bc ol.breadcrumb a' ),
                'title'         => esc_html__('Breadcrumb Link color', 'restrofood'),
                'subtitle'      => esc_html__('Set Breadcrumb Link Color', 'restrofood'),
                'required'      => array( 'restrofood_enable_bread','equals','1' ),
            ),
            array(
                'id'            => 'restrofood_link_hover_color',
                'type'          => 'color',
                'output'        => array( '.restrofood--page-title .title-bc ol.breadcrumb a:hover' ),
                'title'         => esc_html__('Breadcrumb Link Hover color', 'restrofood'),
                'subtitle'      => esc_html__('Set Breadcrumb Link Hover Color', 'restrofood'),
                'required'      => array( 'restrofood_enable_bread','equals','1' ),
            ),
            array(
                'id'            => 'restrofood_active_color',
                'type'          => 'color',
                'output'        => array( '.restrofood--page-title .title-bc ol.breadcrumb li.active' ),
                'title'         => esc_html__('Breadcrumb Active Color', 'restrofood'),
                'subtitle'      => esc_html__('Active color of breadcrumb', 'restrofood'),
                'required'      => array( 'restrofood_enable_bread','equals','1' ),
            ),
            array(
                'id'            => 'restrofood_divider_color',
                'type'          => 'color',
                'output'        => array( '.restrofood--page-title .title-bc ol.breadcrumb li:before' ),
                'title'         => esc_html__( 'Breadcrumb divider Color', 'restrofood' ),
                'subtitle'      => esc_html__( 'Choose Breadcrumb Divider Color', 'restrofood' ),
                'required'      => array( 'restrofood_enable_bread','equals','1' ),
            ),

        ),

    ) );

    /* End Header */
    // -> START Blog
    Redux::setSection( $opt_name, array(
        'title'            => esc_html__( 'Blog', 'restrofood' ),
        'id'               => 'restrofood_blogger',
        'customizer_width' => '400px',
        'icon'             => 'el el-blogger'
    ) );
    // Blog Option Start
    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Blog', 'restrofood' ),
        'id'         => 'restrofood_blog',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'restrofood_blog_layout',
                'type'     => 'image_select',
                'title'    => esc_html__( 'Select Blog Page Layout', 'restrofood' ),
                'subtitle' => esc_html__( 'Choose Your Blog Sidebar Layout ', 'restrofood' ),
                'options'  => array(
                    '1'       => array(
                        'alt' => '1 Column',
                        'img' => ReduxFramework::$_url . 'assets/img/1col.png'
                    ),
                    '2'       => array(
                        'alt' => '2 Column Left',
                        'img' => ReduxFramework::$_url . 'assets/img/2cl.png'
                    ),
                    '3'       => array(
                        'alt' => '2 Column Right',
                        'img' => ReduxFramework::$_url . 'assets/img/2cr.png'
                    ),

                ),
                'default'   => '3'
            ),
            array(
                'id'       => 'restrofood_post_column',
                'type'     => 'button_set',
                'title'    => esc_html__('Post Column', 'restrofood'),
                'subtitle' => esc_html__('Set Post Column', 'restrofood'),
                'options'  => array(
                    '1'     => esc_html__( 'Full Width', 'restrofood' ),
                    '2'     => esc_html__( '2 Column', 'restrofood' ),
                    '3'     => esc_html__( '3 Column', 'restrofood' ),
                    '4'     => esc_html__( '4 Column', 'restrofood' ),
                 ),
                'default' => '2'
            ),
            array(
                'id'        => 'restrofood_title_color',
                'type'      => 'color',
                'title'     => esc_html__( 'Post Title Color','restrofood' ),
                'subtitle'  => esc_html__( 'Set Post Title Color','restrofood' ),
                'output'    => array( '.single-blog-item .blog-content h3' ),
            ),
            array(
                'id'        => 'restrofood_title_color_on_hover',
                'type'      => 'color',
                'title'     => esc_html__( 'Title Color On Hover','restrofood' ),
                'subtitle'  => esc_html__( 'Set Title Color On Hover','restrofood' ),
                'output'    => array( '.single-blog-item .blog-content h3:hover' ),
            ),
            array(
                'id'        => 'restrofood_show_post_excerpt',
                'type'      => 'switch',
                'title'     => esc_html__( 'Switch On To Show Excerpt.','restrofood' ),
                'default'   => false,
            ),
            array(
                'id'        => 'restrofood_post_excerpt',
                'type'      => 'text',
                'title'     => esc_html__( 'Post Excerpt','restrofood' ),
                'subtitle'  => esc_html__( 'How Many Words You Want To Show On Blog','restrofood' ),
                'required'  => array( 'restrofood_show_post_excerpt','equals','1' ),
            ),
            array(
                'id'        => 'restrofood_post_excerpt_color',
                'type'      => 'color',
                'title'     => esc_html__( 'Post Excerpt Color','restrofood' ),
                'subtitle'  => esc_html__( 'Set Blog Post Excerpt Color','restrofood' ),
                'output'    => array( 'p.blog-excerpt' ),
                'required'  => array( 'restrofood_show_post_excerpt','equals','1' ),
            ),
            array(
                'id'        => 'restrofood_button_text',
                'type'      => 'text',
                'title'     => esc_html__( 'Read More Button Text','restrofood' ),
                'default'   => esc_html__( 'Read More','restrofood' ),
            ),
            array(
                'id'        => 'restrofood_read_more_button_color',
                'type'      => 'color',
                'title'     => esc_html__( 'Read More Text Color','restrofood' ),
                'subtitle'  => esc_html__( 'Set Read More Text Color','restrofood' ),
                'output'    => array( '.single-blog-item .blog-content a.btn-inline' ),
            ),
            array(
                'id'        => 'restrofood_read_more_button_color_on_hover',
                'type'      => 'color',
                'title'     => esc_html__( 'Read More Text Color When Hover','restrofood' ),
                'subtitle'  => esc_html__( 'Set Read More Text Color When Hover','restrofood' ),
                'output'    => array( '.single-blog-item .blog-content a.btn-inline:hover' ),
            ),
            array(
                'id'        => 'restrofood_read_more_border_color',
                'type'      => 'color',
                'title'     => esc_html__( 'Border Color After Read More Text On Hover','restrofood' ),
                'subtitle'  => esc_html__( 'Set Border Color After Read More Text On Hover','restrofood' ),
                'output'    => array( 'background-color'    =>  '.single-blog-item .blog-content a.btn-inline:hover:after' ),
            ),
            array(
                'id'        => 'restrofood_pagination_position',
                'type'      => 'button_set',
                'title'     => esc_html__( 'Pagination Position','restrofood' ),
                'subtitle'  => esc_html__( 'Set Pagination Position','restrofood' ),
                'options'       => array(
                    'Left'         => esc_html__( 'Left', 'restrofood' ),
                    'center'       => esc_html__( 'Center', 'restrofood' ),
                ),
                'default'   => 'center',
            ),
            array(
                'id'        => 'restrofood_post_pagination_active_color',
                'type'      => 'color',
                'output'    => array( '.pagination span.page-numbers.current' ),
                'title'     => esc_html__( 'Post Pagination Active Color','restrofood' ),
                'subtitle'  => esc_html__( 'Set Post Pagination Active Color','restrofood' ),
            ),
            array(
                'id'        => 'restrofood_post_pagination_active_background',
                'type'      => 'color',
                'output'    => array( 'background-color'  =>  '.pagination span.page-numbers.current' ),
                'title'     => esc_html__( 'Post Pagination Active Background','restrofood' ),
                'subtitle'  => esc_html__( 'Set Post Pagination Active Background','restrofood' ),
            ),
            array(
                'id'       => 'restrofood_post_pagination_color',
                'type'     => 'color',
                'output'   => array( '.pagination .nav .page-numbers' ),
                'title'    => esc_html__( 'Page Number Color','restrofood' ),
                'subtitle' => esc_html__( 'Set Page Number Color','restrofood' ),
            ),
            array(
                'id'       => 'restrofood_post_pagination_bg',
                'type'     => 'color',
                'output'   => array( 'Background-color'   =>  '.pagination .nav a.page-numbers' ),
                'title'    => esc_html__( 'Page Number Background','restrofood' ),
                'subtitle' => esc_html__( 'Set Page Number Background','restrofood' ),
            ),
            array(
                'id'       => 'restrofood_post_pagination_hover_bg',
                'type'     => 'color',
                'output'   => array( 'Background-color' =>'.pagination .nav .page-numbers:hover' ),
                'title'    => esc_html__( 'Page Number Background On Hover','restrofood' ),
                'subtitle' => esc_html__( 'Set Page Number Background On Hover','restrofood' ),
            ),
            array(
                'id'       => 'restrofood_post_pagination_hover_text_color',
                'type'     => 'color',
                'output'   => array( '.pagination .nav a.page-numbers:hover' ),
                'title'    => esc_html__( 'Page Number Color On Hover','restrofood' ),
                'subtitle' => esc_html__( 'Set Page Number Color On Hover','restrofood' ),
            ),
            array(
                'id'       => 'restrofood_post_pagination_prev_icon_color',
                'type'     => 'color',
                'output'   => array( '.pagination .nav .prev a i' ),
                'title'    => esc_html__( 'Prev Icon Color','restrofood' ),
                'subtitle' => esc_html__( 'Set Prev Icon Color','restrofood' ),
            ),
            array(
                'id'       => 'restrofood_post_pagination_prev_icon_background',
                'type'     => 'color',
                'output'   => array( 'background'   =>  '.pagination .nav .prev a' ),
                'title'    => esc_html__( 'Prev Icon Background','restrofood' ),
                'subtitle' => esc_html__( 'Set Prev Icon Background','restrofood' ),
            ),
            array(
                'id'       => 'restrofood_post_pagination_prev_icon_color_on_hover',
                'type'     => 'color',
                'output'   => array( '.pagination .nav .prev a:hover i' ),
                'title'    => esc_html__( 'Prev Icon Color On Hover','restrofood' ),
                'subtitle' => esc_html__( 'Set Prev Icon Color On Hover','restrofood' ),
            ),
            array(
                'id'       => 'restrofood_post_pagination_prev_icon_background_on_hover',
                'type'     => 'color',
                'output'   => array( 'background'   =>  '.pagination .nav .prev a:hover' ),
                'title'    => esc_html__( 'Prev Icon Backgorund On Hover','restrofood' ),
                'subtitle' => esc_html__( 'Set Prev Icon Backgorund On Hover','restrofood' ),
            ),
            array(
                'id'       => 'restrofood_post_pagination_next_icon_color',
                'type'     => 'color',
                'output'   => array( '.pagination .nav .next a i' ),
                'title'    => esc_html__( 'Next Icon Color','restrofood' ),
                'subtitle' => esc_html__( 'Set Next Icon Color','restrofood' ),
            ),
            array(
                'id'       => 'restrofood_post_pagination_next_icon_background',
                'type'     => 'color',
                'output'   => array( 'background'   =>  '.pagination .nav .next a' ),
                'title'    => esc_html__( 'Next Icon Background','restrofood' ),
                'subtitle' => esc_html__( 'Set Next Icon Background','restrofood' ),
            ),
            array(
                'id'       => 'restrofood_post_pagination_next_icon_color_on_hover',
                'type'     => 'color',
                'output'   => array( '.pagination .nav .next a:hover i' ),
                'title'    => esc_html__( 'Next Icon Color On Hover','restrofood' ),
                'subtitle' => esc_html__( 'Set Next Icon Color On Hover','restrofood' ),
            ),
            array(
                'id'       => 'restrofood_post_pagination_next_icon_background_on_hover',
                'type'     => 'color',
                'output'   => array( 'background'   =>  '.pagination .nav .next a:hover' ),
                'title'    => esc_html__( 'Next Icon Backgorund On Hover','restrofood' ),
                'subtitle' => esc_html__( 'Set Next Icon Backgorund On Hover','restrofood' ),
            ),
        ),
    ) );
    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Meta Data', 'restrofood' ),
        'id'         => 'restrofood_blog_meta_data',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'        => 'restrofood_date_enable',
                'type'      => 'switch',
                'title'     => esc_html__( 'On/Off Date','restrofood' ),
                'subtitle'  => esc_html__( 'Switch On To Show Date','restrofood' ),
                'default'   => true,
            ),
            array(
                'id'        => 'restrofood_date_color',
                'type'      => 'color',
                'title'     => esc_html__( 'Date Text Color','restrofood' ),
                'subtitle'  => esc_html__( 'Set Date Text Color','restrofood' ),
                'output'    => array( '.single-blog-item .blog-content .posted' ),
                'required'  => array( 'restrofood_date_enable','equals','1' ),
            ),
            array(
                'id'        => 'restrofood_date_color_on_hover',
                'type'      => 'color',
                'title'     => esc_html__( 'Date Text Color On Hover','restrofood' ),
                'subtitle'  => esc_html__( 'Set Date Text Color On Hover','restrofood' ),
                'output'    => array( '.single-blog-item .blog-content .posted:hover' ),
                'required'  => array( 'restrofood_date_enable','equals','1' ),
            ),
        ),
    ));
    // Blog Single Page
    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Blog Details', 'restrofood' ),
        'id'         => 'restrofood_blog_single',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'restrofood_blog_single_layout',
                'type'     => 'image_select',
                'title'    => esc_html__( 'Select Blog Details Layout', 'restrofood' ),
                'subtitle' => esc_html__( 'Choose Blog Details Layout', 'restrofood' ),
                'options'  => array(
                    '1'       => array(
                        'alt' => '1 Column',
                        'img' => ReduxFramework::$_url . 'assets/img/1col.png'
                    ),
                    '2'       => array(
                        'alt' => '2 Column Left',
                        'img' => ReduxFramework::$_url . 'assets/img/2cl.png'
                    ),
                    '3'       => array(
                        'alt' => '2 Column Right',
                        'img' => ReduxFramework::$_url . 'assets/img/2cr.png'
                    ),

                ),
                'default'  => '3'
            ),
            array(
                'id'       => 'restrofood_single_title_position',
                'type'     => 'button_set',
                'title'    => esc_html__( 'Title Position', 'restrofood' ),
                'subtitle' => esc_html__( 'Set Title Position', 'restrofood' ),
                'options'  => array(
                    '1'         => esc_html__( 'Before Breadcrumb','restrofood' ),
                    '2'         => esc_html__( 'Before Thumbnail','restrofood' ),
                    '3'         => esc_html__( 'Both Position','restrofood' ),
                ),
                'default'  => '1',
            ),
            array(
                'id'       => 'restrofood_single_enable_category',
                'type'     => 'switch',
                'title'    => esc_html__( 'Category','restrofood' ),
                'subtitle' => esc_html__( 'Switch On To Display Category','restrofood' ),
                'default'  => true,
            ),
            array(
                'id'       => 'restrofood_single_category_color',
                'type'     => 'color',
                'output'   => array( '.post-meta ul li:first-child a' ),
                'title'    => esc_html__( 'Category Color','restrofood' ),
                'subtitle' => esc_html__( 'Set Category Color','restrofood' ),
                'required' => array( 'restrofood_single_enable_category','equals','1' ),
            ),
            array(
                'id'       => 'restrofood_single_category_color_hover',
                'type'     => 'color',
                'output'   => array( '.post-meta ul li:first-child a:hover' ),
                'title'    => esc_html__( 'Category Color On Hover','restrofood' ),
                'subtitle' => esc_html__( 'Set Category Color On Hover','restrofood' ),
                'required' => array( 'restrofood_single_enable_category','equals','1' ),
            ),
            array(
                'id'       => 'restrofood_author_enable',
                'type'     => 'switch',
                'title'    => esc_html__( 'Author','restrofood' ),
                'subtitle' => esc_html__( 'Switch On To Display Author','restrofood' ),
                'default'  => true,
            ),
            array(
                'id'       => 'restrofood_single_author_color',
                'type'     => 'color',
                'output'   => array( '.post-meta ul li:nth-child(2) a' ),
                'title'    => esc_html__( 'Category Color','restrofood' ),
                'subtitle' => esc_html__( 'Set Category Color','restrofood' ),
                'required' => array( 'restrofood_author_enable','equals','1' ),
            ),
            array(
                'id'       => 'restrofood_single_author_color_hover',
                'type'     => 'color',
                'output'   => array( '.post-meta ul li:nth-child(2) a:hover' ),
                'title'    => esc_html__( 'Category Color On Hover','restrofood' ),
                'subtitle' => esc_html__( 'Set Category Color On Hover','restrofood' ),
                'required' => array( 'restrofood_author_enable','equals','1' ),
            ),
            array(
                'id'       => 'restrofood_single_post_time_enable',
                'type'     => 'switch',
                'title'    => esc_html__( 'Date','restrofood' ),
                'subtitle' => esc_html__( 'Switch On To Display Time','restrofood' ),
                'default'  => true,
            ),
            array(
                'id'       => 'restrofood_single_post_time_color',
                'type'     => 'color',
                'output'   => array( '.post-meta ul li a.date-color' ),
                'title'    => esc_html__( 'Date Color','restrofood' ),
                'subtitle' => esc_html__( 'Set Date Color','restrofood' ),
                'required' => array( 'restrofood_single_post_time_enable','equals','1' ),
            ),
            array(
                'id'       => 'restrofood_single_post_time_color_hover',
                'type'     => 'color',
                'output'   => array( '.post-meta ul li a.date-color:hover' ),
                'title'    => esc_html__( 'Date Hover Color','restrofood' ),
                'subtitle' => esc_html__( 'Set Date Hover Color','restrofood' ),
                'required' => array( 'restrofood_single_post_time_enable','equals','1' ),
            ),
            array(
                'id'       => 'restrofood_single_tag_enable_disable',
                'type'     => 'switch',
                'title'    => esc_html__( 'Tags','restrofood' ),
                'subtitle' => esc_html__( 'Switch On To Display Tags','restrofood' ),
                'default'  => true,
            ),
            array(
                'id'       => 'restrofood_single_tag_background',
                'type'     => 'color',
                'title'    => esc_html__( 'Tags Background Color','restrofood' ),
                'subtitle' => esc_html__( 'Set Tags Background Color','restrofood' ),
                'output'   => array( 'background-color' =>  '.blog-details .post-tags ul li a' ),
                'required' => array( 'restrofood_single_tag_enable_disable','equals','1' ),
            ),
            array(
                'id'       => 'restrofood_single_tag_color',
                'type'     => 'color',
                'title'    => esc_html__( 'Tags Color','restrofood' ),
                'subtitle' => esc_html__( 'Set Tags Color','restrofood' ),
                'output'   => array( '.blog-details .post-tags ul li a' ),
                'required' => array( 'restrofood_single_tag_enable_disable','equals','1' ),
            ),
            array(
                'id'       => 'restrofood_single_tag_hover_color',
                'type'     => 'color',
                'title'    => esc_html__( 'Tags Color On Hover','restrofood' ),
                'subtitle' => esc_html__( 'Set Tags Color On Hover','restrofood' ),
                'output'   => array( '.blog-details .post-tags ul li a:hover' ),
                'required' => array( 'restrofood_single_tag_enable_disable','equals','1' ),
            ),
            array(
                'id'       => 'restrofood_enable_disable_navigation',
                'type'     => 'switch',
                'title'    => esc_html__( 'Navigation','restrofood' ),
                'subtitle' => esc_html__( 'Switch On To Enable Navigation','restrofood' ),
                'default'  => true,
            ),
        ),
    ));

    // Page Option Start
    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Page', 'restrofood' ),
        'id'         => 'restrofood_page',
        'icon'       => 'el el-file',
        'fields'     => array(
         array(
                'id'       => 'restrofood_page_layout',
                'type'     => 'image_select',
                'title'    => esc_html__( 'Select page layout', 'restrofood' ),
                'subtitle' => esc_html__( 'Choose your page layout ', 'restrofood' ),
                'options'  => array(
                    '1'    => array(
                        'alt' => '1 Column',
                        'img' => ReduxFramework::$_url . 'assets/img/1col.png'
                    ),
                    '2'     => array(
                        'alt' => '2 Column Left',
                        'img' => ReduxFramework::$_url . 'assets/img/2cl.png'
                    ),
                    '3'     => array(
                        'alt' => '2 Column Right',
                        'img' => ReduxFramework::$_url . 'assets/img/2cr.png'
                    ),

                ),
                'default'  => '1'
            ),
        ),
    ) );

    // Subscribe
    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Subscribe', 'restrofood' ),
        'id'         => 'restrofood_subscribe',
        'icon'       => 'el el-arrow-right',
        'fields'     => array(
            array(
                'id'        => 'mailchimp_api_key',
                'type'      => 'text',
                'title'     => esc_html__( 'Mailchimp API Key', 'restrofood' ),
                'subtitle'  => esc_html__( 'Set Mailchimp API Key', 'restrofood' ),
            ),
            array(
                'id'        => 'mailchimp_list_id',
                'type'      => 'text',
                'title'     => esc_html__( 'Mailchimp List Id', 'restrofood' ),
                'subtitle'  => esc_html__( 'Set Mailchimp List Id', 'restrofood' ),
            ),
        ),
    ) );

    // Coming Soon
    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Coming Soon', 'restrofood' ),
        'id'         => 'restrofood_coming_soon',
        'icon'       => 'el el-bullhorn',
        'fields'     => array(
            array(
                'id'        => 'restrofood_coming_image',
                'type'      => 'media',
                'url'       => true,
                'compiler'  => true,
                'title'     => esc_html__( 'Coming Soon Image', 'restrofood' ),
                'subtitle'  => esc_html__( 'Set Coming Soon Image', 'restrofood' ),
            ),
            array(
                'id'       => 'restrofood_coming_soon_title',
                'type'     => 'text',
                'title'    => esc_html__( 'Coming Soon Title', 'restrofood' ),
                'subtitle' => esc_html__( 'Set Coming Soon Title', 'restrofood' ),
            ),
            array(
                'id'       => 'restrofood_coming_soon_title_color',
                'type'     => 'color',
                'title'    => esc_html__( 'Coming Soon Title Color', 'restrofood' ),
                'subtitle' => esc_html__( 'Set Coming Soon Title Color', 'restrofood' ),
                'output'   => array( '.content-coming-soon h1' ),
            ),
            array(
                'id'       => 'restrofood_coming_soon_simple_title',
                'type'     => 'text',
                'title'    => esc_html__( 'Coming Soon Simple Text', 'restrofood' ),
                'subtitle' => esc_html__( 'Set Coming Soon Simple Text', 'restrofood' ),
            ),
            array(
                'id'       => 'restrofood_coming_soon_simple_title_color',
                'type'     => 'color',
                'output'   => array( '.content-coming-soon > p' ),
                'title'    => esc_html__( 'Coming Soon Simple Text', 'restrofood' ),
                'subtitle' => esc_html__( 'Set Coming Soon Simple Text Color', 'restrofood' ),
            ),
            array(
                'id'       => 'restrofood_subscribe_form_title',
                'type'     => 'text',
                'title'    => esc_html__( 'Coming Soon Subscribe Form Title', 'restrofood' ),
                'subtitle' => esc_html__( 'Set Coming Soon Subscribe Form Title', 'restrofood' ),
            ),
            array(
                'id'       => 'restrofood_subscribe_form_title_color',
                'type'     => 'color',
                'output'   => array( '.search-form > p' ),
                'title'    => esc_html__( 'Subscribe Form Title Color', 'restrofood' ),
                'subtitle' => esc_html__( 'Set Subscribe Form Title Color', 'restrofood' ),
            ),
            array(
                'id'       => 'restrofood_coming_soon_form_placeholder',
                'type'     => 'text',
                'title'    => esc_html__( 'Form Placeholder Text', 'restrofood' ),
                'subtitle' => esc_html__( 'Set Form Placeholder Text', 'restrofood' ),
                'default'  => esc_html__( 'Enter your email','restrofood' )
            ),
            array(
                'id'       => 'restrofood_coming_soon_form_background',
                'type'     => 'color',
                'title'    => esc_html__( 'Form Background', 'restrofood' ),
                'subtitle' => esc_html__( 'Set Form Background', 'restrofood' ),
                'output'   => array( 'background-color' =>  '.content-coming-soon .search-form .theme-input-group input' ),
            ),
            array(
                'id'       => 'restrofood_coming_soon_form_focus_background',
                'type'     => 'color',
                'title'    => esc_html__( 'Form Focus Background', 'restrofood' ),
                'subtitle' => esc_html__( 'Set Form Focus Background', 'restrofood' ),
                'output'   => array( 'background-color' =>  '.content-coming-soon .search-form .theme-input-group input:focus' ),
            ),
            array(
                'id'       => 'restrofood_coming_soon_form_placeholder_color',
                'type'     => 'color',
                'title'    => esc_html__( 'Form Placeholder Text Color', 'restrofood' ),
                'subtitle' => esc_html__( 'Set Form Placeholder Text Color', 'restrofood' ),
            ),
            array(
                'id'       => 'restrofood_coming_soon_button',
                'type'     => 'text',
                'title'    => esc_html__( 'Button Text', 'restrofood' ),
                'subtitle' => esc_html__( 'Set Button Text', 'restrofood' ),
                'default'  => esc_html__( 'Subscribe', 'restrofood' ),
            ),
            array(
                'id'       => 'restrofood_coming_soon_search_btn_color',
                'type'     => 'color',
                'output'   => array( '.content-coming-soon .theme-input-group button' ),
                'title'    => esc_html__( 'Coming Soon Subscribe Button Color', 'restrofood' ),
                'subtitle' => esc_html__( 'Set Coming Soon Subscribe Button Color', 'restrofood' ),
            ),
            array(
                'id'       => 'restrofood_coming_soon_subscribe_btn_bg_color',
                'type'     => 'color',
                'title'    => esc_html__( 'Coming Soon Subscribe Button Background Color', 'restrofood' ),
                'subtitle' => esc_html__( 'Set Coming Soon Subscribe Button Background Color', 'restrofood' ),
                'output'   => array( 'background-color' => '.content-coming-soon .theme-input-group button' ),
            ),
        ),
    ) );

    // Social Icon
    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Social', 'restrofood' ),
        'id'         => 'restrofood_social_icon',
        'icon'       => 'el el-universal-access',
        'fields'     => array(
            array(
                'id'          => 'social_icon_slide',
                'type'        => 'slides',
                'title'       => esc_html__('Add Social Icon', 'restrofood'),
                'show'        => array(
                   'image_upload'   => false,
                   'title'          => false,
                   'description'    => false,
                   'url'            => true,
                   'progress'       => false,
                   'icon'           => true,
                   'facts-number'   => false,
                ),
            ),
            array(
                'id'       => 'social_icon_one_color',
                'type'     => 'color',
                'output'   => array( '.social_icon_list li a' ),
                'title'    => esc_html__( 'Social Icon Color', 'restrofood' ),
                'subtitle' => esc_html__( 'Set Social Icon Color', 'restrofood' ),
                'default'  => '#000000',
            ),
            array(
                'id'       => 'social_icon_one_color_hover',
                'type'     => 'color',
                'output'   => array( '.social_icon_list li a:hover' ),
                'title'    => esc_html__( 'Social Icon Hover Color', 'restrofood' ),
                'subtitle' => esc_html__( 'Set Social Icon Hover Color', 'restrofood' ),
            ),
        ),
    ) );
    // 404 Page Option Start
    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( '404 Page', 'restrofood' ),
        'id'         => 'restrofood_fof',
        'icon'       => 'el el-ban-circle',
        'fields'     => array(
            array(
                'id'       => 'restrofood_404_image',
                'type'     => 'media',
                'compiler' => true,
                'title'    => esc_html__( '404 Image', 'restrofood' ),
                'subtitle' => esc_html__( 'Set 404 Image', 'restrofood' ),
                'default'  => array(
                   'url'   => esc_url( RESTROFOOD_IMG_DIR_URI. 'feature/404.png' )
               ),
            ),
            array(
                'id'       => 'restrofood_404_title',
                'type'     => 'text',
                'title'    => esc_html__( '404 Title', 'restrofood' ),
                'subtitle' => esc_html__( 'Set Coming Soon Title', 'restrofood' ),
                'default'  => esc_html__( '404 Error!','restrofood' ),
            ),
            array(
                'id'       => 'restrofood_404_title_color',
                'type'     => 'color',
                'title'    => esc_html__( '404 Title Color', 'restrofood' ),
                'subtitle' => esc_html__( 'Set Coming Soon Title Color', 'restrofood' ),
                'output'   => array( '.content404 h1' ),
            ),
            array(
                'id'       => 'restrofood_404_simple_title',
                'type'     => 'text',
                'title'    => esc_html__( '404 Simple Text', 'restrofood' ),
                'subtitle' => esc_html__( 'Set 404 Simple Text', 'restrofood' ),
            ),
            array(
                'id'       => 'restrofood_404_simple_title_color',
                'type'     => 'color',
                'output'   => array( '.content404 > p' ),
                'title'    => esc_html__( '404 Simple Text', 'restrofood' ),
                'subtitle' => esc_html__( 'Set 404 Simple Text Color', 'restrofood' ),
            ),
            array(
                'id'       => 'restrofood_404_form_title',
                'type'     => 'text',
                'title'    => esc_html__( '404 Search Form Title', 'restrofood' ),
                'subtitle' => esc_html__( 'Set 404 Search Form Title', 'restrofood' ),
                'default'  => esc_html__( 'What Are You Looking For Search Here', 'restrofood' ),
            ),
            array(
                'id'       => 'restrofood_404_form_title_color',
                'type'     => 'color',
                'output'   => array( '.search-form > p' ),
                'title'    => esc_html__( 'Search Form Title Color', 'restrofood' ),
                'subtitle' => esc_html__( 'Set Search Form Title Color', 'restrofood' ),
            ),
            array(
                'id'       => 'restrofood_404_form_placeholder',
                'type'     => 'text',
                'title'    => esc_html__( 'Form Placeholder Text', 'restrofood' ),
                'subtitle' => esc_html__( 'Set Form Placeholder Text', 'restrofood' ),
                'default'  => esc_html__( 'Search Here','restrofood' )
            ),
            array(
                'id'       => 'restrofood_404_form_background',
                'type'     => 'color',
                'title'    => esc_html__( 'Form Background', 'restrofood' ),
                'subtitle' => esc_html__( 'Set Form Background', 'restrofood' ),
                'output'   => array( 'background-color' =>  '.content404 .search-form .theme-input-group input' ),
            ),
            array(
                'id'       => 'restrofood_404_form_focus_background',
                'type'     => 'color',
                'title'    => esc_html__( 'Form Focus Background', 'restrofood' ),
                'subtitle' => esc_html__( 'Set Form Focus Background', 'restrofood' ),
                'output'   => array( 'background-color' =>  '.content404 .search-form .theme-input-group input:focus' ),
            ),
            array(
                'id'       => 'restrofood_404_form_placeholder_color',
                'type'     => 'color',
                'title'    => esc_html__( 'Form Placeholder Text Color', 'restrofood' ),
                'subtitle' => esc_html__( 'Set Form Placeholder Text Color', 'restrofood' ),
            ),
            array(
                'id'       => 'restrofood_404_button',
                'type'     => 'text',
                'title'    => esc_html__( 'Button Text', 'restrofood' ),
                'subtitle' => esc_html__( 'Set Button Text', 'restrofood' ),
                'default'  => esc_html__( 'Search', 'restrofood' ),
            ),
            array(
                'id'       => 'restrofood_404_search_btn_color',
                'type'     => 'color',
                'output'   => array( '.content404 .theme-input-group button' ),
                'title'    => esc_html__( '404 Search Button Color', 'restrofood' ),
                'subtitle' => esc_html__( 'Set 404 Search Button Color', 'restrofood' ),
            ),
            array(
                'id'       => 'restrofood_404_subscribe_btn_bg_color',
                'type'     => 'color',
                'title'    => esc_html__( '404 Search Button Background Color', 'restrofood' ),
                'subtitle' => esc_html__( 'Set 404 Search Button Background Color', 'restrofood' ),
                'output'   => array( 'background-color' => '.content404 .theme-input-group button' ),
            ),
        ),
    ) );

    // -> START Woo Page Option
    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Woocommerce Page', 'restrofood' ),
        'id'         => 'restrofood_woo_page_page',
        'icon'  => 'el el-shopping-cart',
        'fields'     => array(
            array(
                'id'       => 'restrofood_woo_shoppage_sidebar',
                'type'     => 'image_select',
                'title'    => esc_html__( 'Set Shop Page Sidebar.', 'restrofood' ),
                'subtitle' => esc_html__( 'Choose shop page sidebar', 'restrofood' ),
                //Must provide key => value(array:title|img) pairs for radio options
                'options'  => array(
                    '1' => array(
                        'alt' => esc_attr__('1 Column','restrofood'),
                        'img' => esc_url( get_template_directory_uri(). '/assets/img/no-sideber.png')
                    ),
                    '2' => array(
                        'alt' => esc_attr__('2 Column Left','restrofood'),
                        'img' => esc_url( get_template_directory_uri() .'/assets/img/left-sideber.png')
                    ),
                    '3' => array(
                        'alt' => esc_attr__('2 Column Right','restrofood'),
                        'img' => esc_url(  get_template_directory_uri() .'/assets/img/right-sideber.png' )
                    ),

                ),
                'default'  => '1'
            ),
            array(
                'id'       => 'restrofood_woo_product_col',
                'type'     => 'image_select',
                'title'    => esc_html__( 'Product Column', 'restrofood' ),
                'subtitle' => esc_html__( 'Set your woocommerce product column.', 'restrofood' ),
                //Must provide key => value(array:title|img) pairs for radio options
                'options'  => array(
                    '2' => array(
                        'alt' => esc_attr__('2 Columns','restrofood'),
                        'img' => esc_url( get_template_directory_uri() .'/assets/img/2col.png')
                    ),
                    '3' => array(
                        'alt' => esc_attr__('3 Columns','restrofood'),
                        'img' => esc_url(  get_template_directory_uri() .'/assets/img/3col.png' )
                    ),
                    '4' => array(
                        'alt' => esc_attr__('4 Columns','restrofood'),
                        'img' => esc_url( get_template_directory_uri(). '/assets/img/4col.png')
                    ),
                    '6' => array(
                        'alt' => esc_attr__('6 Columns','restrofood'),
                        'img' => esc_url(  get_template_directory_uri() .'/assets/img/6col.png' )
                    ),

                ),
                'default'  => '3'
            ),
			array(
                'id'       => 'restrofood_woo_product_perpage',
                'type'     => 'text',
                'title'    => esc_html__( 'Product Per Page', 'restrofood' ),
				'default' => '10'
            ),
            array(
                'id'       => 'restrofood_woo_singlepage_sidebar',
                'type'     => 'image_select',
                'title'    => esc_html__( 'Product Single Page sidebar', 'restrofood' ),
                'subtitle' => esc_html__( 'Choose product single page sidebar.', 'restrofood' ),
                //Must provide key => value(array:title|img) pairs for radio options
                'options'  => array(
                    '1' => array(
                        'alt' => esc_attr__('1 Column','restrofood'),
                        'img' => esc_url( get_template_directory_uri(). '/assets/img/no-sideber.png')
                    ),
                    '2' => array(
                        'alt' => esc_attr__('2 Column Left','restrofood'),
                        'img' => esc_url( get_template_directory_uri() .'/assets/img/left-sideber.png')
                    ),
                    '3' => array(
                        'alt' => esc_attr__('2 Column Right','restrofood'),
                        'img' => esc_url(  get_template_directory_uri() .'/assets/img/right-sideber.png' )
                    ),

                ),
                'default'  => '1'
            ),
            array(
                'id'       => 'restrofood_product_details_title_position',
                'type'     => 'button_set',
                'default'  => 'header',
                'options'  => array(
                    'header'        => esc_html__('On Header','restrofood'),
                    'below'         => esc_html__('Below Thumbnail','restrofood'),
                ),
                'title'    => esc_html__('Product Details Title Position', 'restrofood'),
                'subtitle' => esc_html__('Control product details title position from here.', 'restrofood'),
            ),
			array(
                'id'       => 'restrofood_woo_relproduct_num',
                'type'     => 'text',
                'title'    => esc_html__( 'Related products number', 'restrofood' ),
                'subtitle' => esc_html__( 'Set how many related products you want to show in single product page.', 'restrofood' ),
                'default'  => 3
            ),
            array(
                'id'       => 'restrofood_woo_related_product_col',
                'type'     => 'image_select',
                'title'    => esc_html__( 'Related Product Column', 'restrofood' ),
                'subtitle' => esc_html__( 'Set your woocommerce related product column.', 'restrofood' ),
                //Must provide key => value(array:title|img) pairs for radio options
                'options'  => array(
                    '2' => array(
                        'alt' => esc_attr__('2 Columns','restrofood'),
                        'img' => esc_url( get_template_directory_uri() .'/assets/img/2col.png')
                    ),
                    '3' => array(
                        'alt' => esc_attr__('3 Columns','restrofood'),
                        'img' => esc_url(  get_template_directory_uri() .'/assets/img/3col.png' )
                    ),
                    '4' => array(
                        'alt' => esc_attr__('4 Columns','restrofood'),
                        'img' => esc_url( get_template_directory_uri(). '/assets/img/4col.png')
                    ),
                    '6' => array(
                        'alt' => esc_attr__('6 Columns','restrofood'),
                        'img' => esc_url(  get_template_directory_uri() .'/assets/img/6col.png' )
                    ),

                ),
                'default'  => '4'
            ),
            array(
                'id'       => 'restrofood_woo_upsellproduct_num',
                'type'     => 'text',
                'title'    => esc_html__( 'Upsells products number', 'restrofood' ),
                'subtitle' => esc_html__( 'Set how many upsells products you want to show in single product page.', 'restrofood' ),
                'default'  => 3,
            ),

            array(
                'id'       => 'restrofood_woo_upsell_product_col',
                'type'     => 'image_select',
                'title'    => esc_html__( 'Upsells Product Column', 'restrofood' ),
                'subtitle' => esc_html__( 'Set your woocommerce upsell product column.', 'restrofood' ),
                //Must provide key => value(array:title|img) pairs for radio options
                'options'  => array(
                    '2' => array(
                        'alt' => esc_attr__('2 Columns','restrofood'),
                        'img' => esc_url( get_template_directory_uri() .'/assets/img/2col.png')
                    ),
                    '3' => array(
                        'alt' => esc_attr__('3 Columns','restrofood'),
                        'img' => esc_url(  get_template_directory_uri() .'/assets/img/3col.png' )
                    ),
                    '4' => array(
                        'alt' => esc_attr__('4 Columns','restrofood'),
                        'img' => esc_url( get_template_directory_uri(). '/assets/img/4col.png')
                    ),
                    '6' => array(
                        'alt' => esc_attr__('6 Columns','restrofood'),
                        'img' => esc_url(  get_template_directory_uri() .'/assets/img/6col.png' )
                    ),

                ),
                'default'  => '4'
            ),
            array(
                'id'       => 'restrofood_woo_crosssellproduct_num',
                'type'     => 'text',
                'title'    => esc_html__( 'Cross sell products number', 'restrofood' ),
                'subtitle' => esc_html__( 'Set how many cross sell products you want to show in single product page.', 'restrofood' ),
                'default'  => 3,
            ),

            array(
                'id'       => 'restrofood_woo_crosssell_product_col',
                'type'     => 'image_select',
                'title'    => esc_html__( 'Cross sell Product Column', 'restrofood' ),
                'subtitle' => esc_html__( 'Set your woocommerce cross sell product column.', 'restrofood' ),
                //Must provide key => value(array:title|img) pairs for radio options
                'options'  => array(
                    '6' => array(
                        'alt' => esc_attr__('2 Columns','restrofood'),
                        'img' => esc_url( get_template_directory_uri() .'/assets/img/2col.png')
                    ),
                    '3' => array(
                        'alt' => esc_attr__('3 Columns','restrofood'),
                        'img' => esc_url(  get_template_directory_uri() .'/assets/img/3col.png' )
                    ),
                    '4' => array(
                        'alt' => esc_attr__('4 Columns','restrofood'),
                        'img' => esc_url( get_template_directory_uri(). '/assets/img/4col.png')
                    ),
                    '6' => array(
                        'alt' => esc_attr__('6 Columns','restrofood'),
                        'img' => esc_url(  get_template_directory_uri() .'/assets/img/6col.png' )
                    ),

                ),
                'default'  => '4'
            ),
        ),
    ) );
    /* End Woo Page option */

    // -> start footer
    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Footer', 'restrofood' ),
        'id'         => 'restrofood_footer',
        'icon'       => 'el el-home',
        'fields'     => array(
            array(
                'id'       => 'restrofood_footer_style',
                'type'     => 'button_set',
                'title'    => esc_html__( 'Footer Style', 'restrofood' ),
                'options'  => array(
                    '1'         => esc_html__( 'Style One', 'restrofood' ),
                    '2'         => esc_html__( 'Style Two', 'restrofood' ),
                ),
                'default'   => '1'
            ),
            array(
                'id'        => 'restrofood_footer_background',
                'type'      => 'background',
                'output'    => array( 'footer.footer' ),
                'title'     => esc_html__( 'Footer Background ', 'restrofood' ),
                'subtitle'  => esc_html__( 'Set Footer Background .', 'restrofood' ),
                'preview'   => false,
                'required'  => array( 'restrofood_footer_style', 'equals', '2' ),
            ),
            array(
                'id'        => 'restrofood_footer_logo',
                'type'      => 'media',
                'url'       => true,
                'title'     => esc_html__( 'Footer Logo', 'restrofood' ),
                'compiler'  => 'true',
                'subtitle'  => esc_html__( 'Upload Footer Logo', 'restrofood' ),
                'required'  => array( 'restrofood_footer_style', 'equals', '2' ),
            ),
            array(
                'id'        => 'restrofood_footer_description_text',
                'type'      => 'text',
                'title'     => esc_html__( 'Footer Description Text', 'restrofood' ),
                'subtitle'  => esc_html__( 'Set Footer Description Text', 'restrofood' ),
                'default'   => wp_kses_post( 'Footer Description','restrofood' ),
                'required'  => array( 'restrofood_footer_style', 'equals', '2' ),
            ),
            array(
                'id'        => 'restrofood_restaurant_opening_hour_text',
                'type'      => 'text',
                'title'     => esc_html__( 'Restaurant Opening Hour Text', 'restrofood' ),
                'subtitle'  => esc_html__( 'Set Restaurant Opening Hour Text', 'restrofood' ),
                'default'   => esc_html__( 'Opening Hours: Sun - Fri  (9am - 6pm)','restrofood' ),
                'required'  => array( 'restrofood_footer_style', 'equals', '2' ),
            ),
            array(
                'id'       => 'restrofood_disable_newletter',
                'type'     => 'switch',
                'title'    => esc_html__( 'Disable Newsletter?', 'restrofood' ),
                'subtitle' => esc_html__( 'Switch On to Display Newsletter.', 'restrofood' ),
                'default'  => true,
                'required' => array( 'restrofood_footer_style', 'equals', '2' ),
            ),
            array(
                'id'        => 'restrofood_newsletter_placeholder_text',
                'type'      => 'text',
                'title'     => esc_html__( 'Newsletter Placeholder Text', 'restrofood' ),
                'subtitle'  => esc_html__( 'Set Newsletter Placeholder Text', 'restrofood' ),
                'default'   => esc_html__( 'Enter Your Email','restrofood' ),
                'required'  => array( 'restrofood_disable_newletter', 'equals', true ),
            ),
            array(
                'id'       => 'restrofood_disable_footer_menu',
                'type'     => 'switch',
                'title'    => esc_html__( 'Disable Footer Menu?', 'restrofood' ),
                'subtitle' => esc_html__( 'Switch On to Display Footer Menu.', 'restrofood' ),
                'default'  => true,
                'required' => array( 'restrofood_footer_style', 'equals', '2' ),
            ),
            array(
                'id'       => 'restrofood_footerwidget_enable',
                'type'     => 'button_set',
                'title'    => esc_html__( 'Footer Widget Enabled/Disabled', 'restrofood' ),
                'options'  => array(
                    '1'         => esc_html__( 'enabled','restrofood' ),
                    '2'         => esc_html__( 'disable','restrofood' ),
                ),
                'default'   => '2',
                'required'  => array( 'restrofood_footer_style','equals','1' ),
            ),
            array(
                'id'       => 'restrofood_footercol_switch',
                'type'     => 'image_select',
                'title'    => esc_html__( 'Select Widget Column', 'restrofood' ),
                'options'  => array(
                    '1'       => array(
                        'alt'   => '2 Column Left',
                        'img'   => ReduxFramework::$_url . 'assets/img/2-col-portfolio.png'
                    ),
                    '2'       => array(
                        'alt'   => '3 Column Right',
                        'img'   => ReduxFramework::$_url . 'assets/img/3-col-portfolio.png'
                    ),

                    '3'       => array(
                        'alt'   => '4 Column Right',
                        'img'   => ReduxFramework::$_url . 'assets/img/4-col-portfolio.png'
                    ),

                ),
                'default'   => '2',
                'required'  => array( 'restrofood_footerwidget_enable','equals','1' ),
            ),
            array(
                'id'        => 'restrofood_footer_widget_background',
                'type'      => 'background',
                'output'    => array( 'footer.footer' ),
                'title'     => esc_html__( 'Footer widget Background ', 'restrofood' ),
                'subtitle'  => esc_html__( 'Set Footer Widget Background .', 'restrofood' ),
                'preview'   => false,
                'required'  => array( 'restrofood_footerwidget_enable','equals','1' ),
            ),
            array(
                'id'        => 'restrofood_footer_widget_title_color',
                'type'      => 'color',
                'output'    => array( '.footer .widget .widget-title h3' ),
                'title'     => esc_html__( 'Footer widget title color ', 'restrofood' ),
                'subtitle'  => esc_html__( 'Set footer widget title color .', 'restrofood' ),
                'required'  => array( 'restrofood_footerwidget_enable','equals','1' ),
            ),
            array(
                'id'        => 'restrofood_footer_widget_color',
                'type'      => 'color',
                'output'    => array( '.footer p, .footer li' ),
                'title'     => esc_html__( 'Footer Content  color', 'restrofood' ),
                'subtitle'  => esc_html__( 'Set footer Content  color .', 'restrofood' ),
                'required'  => array( 'restrofood_footerwidget_enable','equals','1' ),
            ),
            array(
                'id'        => 'restrofood_footer_widget_ancor_color',
                'type'      => 'color',
                'output'    => array( '.footer a' ),
                'title'     => esc_html__( 'Footer widget Ancor Color', 'restrofood' ),
                'subtitle'  => esc_html__( 'Set Footer widget Widget Color', 'restrofood' ),
                'required'  => array( 'restrofood_footerwidget_enable','equals','1' ),
            ),
            array(
                'id'        => 'restrofood_footer_widget_ancor_hover_color',
                'type'      => 'color',
                'output'    => array( '.footer a:hover' ),
                'title'     => esc_html__( 'Footer widget Ancor Hover Color', 'restrofood' ),
                'subtitle'  => esc_html__( 'Set Footer Widget Ancor Hover Color', 'restrofood' ),
                'required'  => array( 'restrofood_footerwidget_enable','equals','1' ),
            ),
            array(
                'id'       => 'restrofood_disable_footer_bottom',
                'type'     => 'switch',
                'title'    => esc_html__( 'Disable Footer Bottom', 'restrofood' ),
                'subtitle' => esc_html__( 'Switch On to Display Footer Bottom.', 'restrofood' ),
                'default'  => true,
            ),
            array(
                'id'       => 'restrofood_footer_bottom_background',
                'type'     => 'color',
                'title'    => esc_html__( 'Footer Bottom Background', 'restrofood' ),
                'subtitle' => esc_html__( 'Set Footer Bottom Background', 'restrofood' ),
                'output'   => array( 'background-color'    =>   '.footer .footer-bottom' ),
                'required' => array( 'restrofood_disable_footer_bottom','equals','1' ),
            ),
            array(
                'id'       => 'restrofood_footer_text',
                'type'     => 'text',
                'title'    => esc_html__( 'Footer Copyright Text', 'restrofood' ),
                'subtitle' => esc_html__( 'Set Footer Copyright Text', 'restrofood' ),
                'default'  => wp_kses_post( '&copy; Developed by <a href="'.esc_url( home_url('/') ).'">Themelooks</a> '.date('Y').'','restrofood' ),
                'required'  => array( 'restrofood_disable_footer_bottom','equals','1' ),
            ),
            array(
                'id'       => 'restrofood_footer_bottom_color',
                'type'     => 'color',
                'title'    => esc_html__( 'Footer Text Color', 'restrofood' ),
                'subtitle' => esc_html__( 'Set Footer Text Color', 'restrofood' ),
                'output'   => array( '.footer-bottom p' ),
                'required'  => array( 'restrofood_disable_footer_bottom','equals','1' ),
            ),
            array(
                'id'       => 'restrofood_footer_ancor_color',
                'type'     => 'color',
                'title'    => esc_html__( 'Footer Anchor Color', 'restrofood' ),
                'subtitle' => esc_html__( 'Set Footer Anchor Color', 'restrofood' ),
                'output'   => array( '.footer-bottom p a' ),
                'required'  => array( 'restrofood_disable_footer_bottom','equals','1' ),
            ),
            array(
                'id'       => 'restrofood_footer_widget_ancor_hover_color',
                'type'     => 'color',
                'title'    => esc_html__( 'Footer Anchor Color On Hover', 'restrofood' ),
                'subtitle' => esc_html__( 'Set Footer Anchor Color On Hover', 'restrofood' ),
                'output'   => array( '.footer-bottom p a:hover' ),
                'required'  => array( 'restrofood_disable_footer_bottom','equals','1' ),
            ),
        ),
    ) );
    // -> START Custom Css
    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Custom Css', 'restrofood' ),
        'id'         => 'restrofood_custom_css_section',
        'icon'       => 'el el-css',
        'fields'     => array(
            array(
                'id'       => 'restrofood_css_editor',
                'type'     => 'ace_editor',
                'title'    => esc_html__('CSS Code', 'restrofood'),
                'subtitle' => esc_html__('Paste your CSS code here.', 'restrofood'),
                'mode'     => 'css',
                'theme'    => 'monokai',
            )
        ),
    ) );

    /* End custom css */

    /*
     * <--- END SECTIONS
     */


    /*
     *
     * YOU MUST PREFIX THE FUNCTIONS BELOW AND ACTION FUNCTION CALLS OR ANY OTHER CONFIG MAY OVERRIDE YOUR CODE.
     *
     */

    /*
    *
    * --> Action hook examples
    *
    */

    // If Redux is running as a plugin, this will remove the demo notice and links
    //add_action( 'redux/loaded', 'remove_demo' );

    // Function to test the compiler hook and demo CSS output.
    // Above 10 is a priority, but 2 in necessary to include the dynamically generated CSS to be sent to the function.
    //add_filter('redux/options/' . $opt_name . '/compiler', 'compiler_action', 10, 3);

    // Change the arguments after they've been declared, but before the panel is created
    //add_filter('redux/options/' . $opt_name . '/args', 'change_arguments' );

    // Change the default value of a field after it's been set, but before it's been useds
    //add_filter('redux/options/' . $opt_name . '/defaults', 'change_defaults' );

    // Dynamically add a section. Can be also used to modify sections/fields
    //add_filter('redux/options/' . $opt_name . '/sections', 'dynamic_section');

    /**
     * This is a test function that will let you see when the compiler hook occurs.
     * It only runs if a field    set with compiler=>true is changed.
     * */
    if ( ! function_exists( 'compiler_action' ) ) {
        function compiler_action( $options, $css, $changed_values ) {
            echo '<h1>'.esc_html__( 'The compiler hook has run!', 'restrofood' ).'</h1>';
            echo "<pre>";
            print_r( $changed_values ); // Values that have changed since the last save
            echo "</pre>";
            //print_r($options); //Option values
            //print_r($css); // Compiler selector CSS values  compiler => array( CSS SELECTORS )
        }
    }

    /**
     * Custom function for the callback validation referenced above
     * */
    if ( ! function_exists( 'redux_validate_callback_function' ) ) {
        function redux_validate_callback_function( $field, $value, $existing_value ) {
            $error   = false;
            $warning = false;

            //do your validation
            if ( $value == 1 ) {
                $error = true;
                $value = $existing_value;
            } elseif ( $value == 2 ) {
                $warning = true;
                $value   = $existing_value;
            }

            $return['value'] = $value;

            if ( $error == true ) {
                $return['error'] = $field;
                $field['msg']    = esc_html__( 'your custom error message', 'restrofood' );
            }

            if ( $warning == true ) {
                $return['warning'] = $field;
                $field['msg']      = esc_html__( 'your custom warning message', 'restrofood' );
            }

            return $return;
        }
    }

    /**
     * Custom function for the callback referenced above
     */
    if ( ! function_exists( 'redux_my_custom_field' ) ) {
        function redux_my_custom_field( $field, $value ) {
            print_r( $field );
            echo '<br/>';
            print_r( $value );
        }
    }

    /**
     * Custom function for filtering the sections array. Good for child themes to override or add to the sections.
     * Simply include this function in the child themes functions.php file.
     * NOTE: the defined constants for URLs, and directories will NOT be available at this point in a child theme,
     * so you must use get_template_directory_uri() if you want to use any of the built in icons
     * */
    if ( ! function_exists( 'dynamic_section' ) ) {
        function dynamic_section( $sections ) {
            //$sections = array();
            $sections[] = array(
                'title'  => esc_html__( 'Section via hook', 'restrofood' ),
                'desc'   => wp_kses( esc_html__( '<p class="description">This is a section created by adding a filter to the sections array. Can be used by child themes to add/remove sections from the options.</p>', 'restrofood' ), $alowhtml),
                'icon'   => 'el el-paper-clip',
                // Leave this as a blank section, no options just some intro text set above.
                'fields' => array()
            );

            return $sections;
        }
    }

    /**
     * Filter hook for filtering the args. Good for child themes to override or add to the args array. Can also be used in other functions.
     * */
    if ( ! function_exists( 'change_arguments' ) ) {
        function change_arguments( $args ) {
            //$args['dev_mode'] = true;

            return $args;
        }
    }

    /**
     * Filter hook for filtering the default value of any given field. Very useful in development mode.
     * */
    if ( ! function_exists( 'change_defaults' ) ) {
        function change_defaults( $defaults ) {
            $defaults['str_replace'] = esc_html__( 'Testing filter hook!', 'restrofood' );

            return $defaults;
        }
    }