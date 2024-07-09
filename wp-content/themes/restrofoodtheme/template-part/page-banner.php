<?php
    // Block direct access
    if( !defined( 'ABSPATH' ) ){
        exit( );
    }
    /**
    * @Packge     : restrofood
    * @Version    : 1.0
    * @Author     : ThemeLooks
    * @Author URI : https://www.themelooks.com/
    *
    */

    $restrofood_title_breadcrumb_align = "";

    if( restrofood_meta( 'global_style' ) == 'single' && is_page() ){
        if( restrofood_meta( 'content_align' ) == 'left' ){
            $restrofood_title_breadcrumb_align = 'text-left';
        }elseif( restrofood_meta( 'content_align' ) == 'center'  ){
            $restrofood_title_breadcrumb_align = 'text-center';
        }else{
            $restrofood_title_breadcrumb_align = 'text-right';
        }
    }elseif( class_exists( 'ReduxFramework' ) ){
        if( restrofood_opt( 'restrofood_header_content_alignment' ) == 'left' ){
            $restrofood_title_breadcrumb_align = 'text-left';
        }elseif( restrofood_opt( 'restrofood_header_content_alignment' ) == 'center'  ){
            $restrofood_title_breadcrumb_align = 'text-center';
        }else{
            $restrofood_title_breadcrumb_align = 'text-right';
        }
    }else{
        $restrofood_title_breadcrumb_align = 'text-center';
    }

    if( restrofood_opt( 'restrofood_overlay_show_hide' ) ){
        $restrofood_page_overlay = 'page-title-bg-overlay';
    }else{
        $restrofood_page_overlay = '';
    }


?>

<!-- Page Title Begin -->
<section class="pt-140 pb-140 page-title-bg <?php echo esc_attr( $restrofood_page_overlay );?>">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-title <?php echo esc_attr( $restrofood_title_breadcrumb_align );?>">
                    <?php
                        if( restrofood_meta( 'global_style' ) == 'single' && is_page() ){
                            if( restrofood_meta( 'page_header_show_hide' ) == '1' ){
                                echo restrofood_page_banner_header();
                            }
                        }elseif( class_exists( 'ReduxFramework' ) ){
                            if( restrofood_opt( 'restrofood_header_text_show_hide' ) == true ){
                                echo restrofood_page_banner_header();
                            }
                        }else{
                            echo restrofood_page_banner_header();
                        }
                    ?>
                    <ul class="list-inline">
                        <?php
                            if( restrofood_meta( 'global_style' ) == 'single' && is_page() ){
                                if( restrofood_meta( 'breadcrumb_enable' ) == '1' ){
                                    echo restrofood_breadcrumb();
                                }
                            }elseif( class_exists( 'ReduxFramework' ) ){
                                if( restrofood_opt( 'restrofood_enable_bread' ) == '1' ){
                                    echo restrofood_breadcrumb();
                                }
                            }else{
                                echo restrofood_breadcrumb();
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Page Title End -->