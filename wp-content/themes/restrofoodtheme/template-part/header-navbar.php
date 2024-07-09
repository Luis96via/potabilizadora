<?php
    // Block direct access
    if( !defined( 'ABSPATH' ) ){
        exit( );
    }
    /**
    * @Packge     : Restrofood
    * @Version    : 1.0
    * @Author     : ThemeLooks
    * @Author URI : https://www.themelooks.com/
    *
    */
?>
<?php
    if( class_exists( 'ReduxFramework' ) ){
        $header_style = restrofood_opt( 'header_style' );
    }else{
        $header_style = 'two';
    }
    if( $header_style == 'one' ):
?>
    <!-- Header -->
    <header class="header">
        <div class="header-main">
            <div class="container-fluid">
                <div class="row align-items-center main-menu-wrapper justify-content-between">

                    <div class="col order-last order-sm-first">
                        <!-- Header Menu -->
                        <?php if( has_nav_menu( 'primary-menu' ) ):?>
                        <div class="main-menu d-flex align-items-center justify-content-end justify-content-sm-start">
                            <?php
                                echo '<!-- Menu Trigger -->';
                                    echo '<div class="menu-trigger">';
                                        echo '<span></span>';
                                    echo '</div>';
                                    echo '<!-- End Menu Trigger -->';
                                    echo '<!-- Main Menu -->';
                                    echo '<div class="nav-wrapper">';
                                        wp_nav_menu(array(
                                            'theme_location'    => 'primary-menu',
                                            'container'         => '',
                                            'menu_class'        => 'nav align-items-center',
                                        ));
                                    echo '</div>';
                                echo '<!-- End Main Menu -->';
                            ?>
                        </div>
                        <?php endif;?>
                        <!-- End Header Menu -->
                    </div>
                    <div class="col text-sm-center logo-holder">
                        <!-- Logo -->
                        <?php
                            if( has_custom_logo() ) {
                                $restrofood_custom_logo_id = get_theme_mod( 'custom_logo' );
                                $restrofood_logo = wp_get_attachment_image_src( $restrofood_custom_logo_id , 'full' );
                                echo '<a href="'.home_url('/').'">'.restrofood_img_tag(array(
                                    'url'   =>  esc_url( $restrofood_logo[0] )
                                )).'</a>';
                            }else{
                                echo restrofood_theme_logo();
                            }
                        ?>
                        <!-- End Logo -->
                    </div>
                    <div class="col text-right d-none d-sm-block">
                        <!-- Social Icons -->
                        <?php
                            $restrofood_social_icon_show = restrofood_opt( 'restrofood_show_hide_social_logo' );
                            if( function_exists( 'restrofood_social_icon' ) &&  $restrofood_social_icon_show ):
                        ?>
                            <ul class="social_icon_list">
                                <?php
                                    restrofood_social_icon();
                                ?>
                            </ul>
                        <?php endif;?>
                        <!-- End Social Icons -->
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header -->
    <?php
        else:
    ?>
    <!-- Header -->
    <header class="header">
        <div class="header-main2">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 d-flex align-items-center justify-content-between position-static">
                        <!-- Logo -->
                        <?php
                        echo '<div class="logo-holder">';
                            if( has_custom_logo() ) {
                                $restrofood_custom_logo_id = get_theme_mod( 'custom_logo' );
                                $restrofood_logo = wp_get_attachment_image_src( $restrofood_custom_logo_id , 'full' );
                                echo '<a href="'.home_url('/').'">'.restrofood_img_tag(array(
                                    'url'   =>  esc_url( $restrofood_logo[0] )
                                )).'</a>';
                            }else{
                                echo restrofood_theme_logo();
                            }
                        echo '</div>';
                        ?>
                        <!-- End Logo -->

                        <!-- Header Menu -->
                        <?php
                            if( has_nav_menu( 'primary-menu' ) ){
                                echo '<div class="main-menu align-items-center d-none d-lg-block">';
                                    echo '<!-- Menu Trigger -->';
                                        echo '<!-- End Menu Trigger -->';
                                        echo '<!-- Main Menu -->';
                                        echo '<div class="nav-wrapper">';
                                            wp_nav_menu(array(
                                                'theme_location'    => 'primary-menu',
                                                'container'         => '',
                                                'menu_class'        => 'nav align-items-center',
                                                'walker'            => new Restrofood_Menu_With_Description(),
                                            ));
                                        echo '</div>';
                                    echo '<!-- End Main Menu -->';
                                echo '</div>';
                            }
                            if( has_nav_menu( 'mobile-menu' ) ){
                                echo '<div id="menu-button" class="mobile_menu-button d-lg-none">';
                                    echo '<span></span>';
                                echo '</div>';
                                
                            }
                        ?>
                        <div class="header-right d-flex align-items-center">

                            <!-- End Header Menu -->
                            <!-- Social Icons -->
                            <?php
                                $account_button_text    = restrofood_opt( 'account_button_text' );
                                $account_button_url     = restrofood_opt( 'account_button_url' );
                                $account_button_image   = restrofood_opt( 'account_button_image', 'url' );

                                if( ! empty( $account_button_text ) || ! empty( $account_button_image ) ) {
                                    echo '<a href="'.esc_url( $account_button_url ).'" class="account">';

                                        if( !empty( $account_button_image ) ) {
                                            echo restrofood_img_tag( array(
                                                'url'   => esc_url( $account_button_image ),
                                                'class' => 'svg',
                                            ) );
                                        }

                                        echo '<span>'.esc_html( $account_button_text ).'</span>';
                                    echo '</a>';
                                }

                                $restrofood_social_icon_show = restrofood_opt( 'restrofood_show_hide_social_logo' );
                                if( function_exists( 'restrofood_social_icon' ) &&  $restrofood_social_icon_show ):
                            ?>
                                <ul class="social_icon_list">
                                    <?php
                                        restrofood_social_icon();
                                    ?>
                                </ul>
                            <?php endif;?>
                            <!-- End Social Icons -->
                        </div>
                    </div>
                </div>
                <?php 
                if( has_nav_menu( 'mobile-menu' ) ){
                    
                    echo '<!-- Mobile Menu -->';
                    echo '<div id="mobile_menu" class="offcanvas-panel mobile-menu-panel d-block d-lg-none">';
                        echo '<!-- Offcanvas Overlay -->';
                        echo '<div class="offcanvas-overlay"></div>';
                        echo '<!-- End Offcanvas Overlay -->';
                        echo '<!-- Panel -->';
                        echo '<div class="panel">';
                            echo '<!-- Offcanvas Header -->';
                            echo '<div class="offcanvas-header d-flex align-items-center justify-content-between">';
                                if( ! empty( restrofood_opt( 'mobile_offcanvas_logo','url' ) ) ){
                                    echo '<!-- Offcanvs Logo -->';
                                    echo '<div class="d-flex align-items-center">';
                                        echo '<a href="'.esc_url( restrofood_opt( 'logo_url' ) ).'">';
                                            echo restrofood_img_tag( array(
                                                'url'	=> esc_url( restrofood_opt( 'mobile_offcanvas_logo','url' ) ),
                                                'class' => 'svg',
                                            ) );
                                        echo '</a>';
                                    echo '</div>';
                                }
                                echo '<!-- End Offcanvs Logo -->';
                                echo '<!-- Offcanvas Close -->';
                                echo '<div class="offcanvas-close">';
                                    echo '<span></span>';
                                echo '</div>';
                                echo '<!-- End Offcanvas Close -->';
                            echo '</div>';
                            echo '<!-- End Offcanvas Header -->';
                            echo '<!-- Offcanvas Content -->';
                            echo '<div class="offcanvas-content">';
                                echo '<nav class="mobile_menu offcanvas-menu offcanvas-mobile">';
                                    wp_nav_menu( array(
                                        'theme_location'    => 'mobile-menu',
                                        'container'         => '',
                                        'menu_class'        => '',
                                    ));
                                echo '</nav>';
                            echo '</div>';
                            echo '<!-- End Offcanvas Content -->';
                        echo '</div>';
                        echo '<!-- End Panel -->';
                    echo '</div>';
                    echo '<!-- End Mobile Menu -->';
                }
                ?>
            </div>
        </div>
    </header>
    <?php endif;?>