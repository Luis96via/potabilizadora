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
    // enqueue css
    function restrofood_common_custom_css(){
        wp_enqueue_style( 'restrofood-color-schemes', esc_url( get_template_directory_uri() ).'/assets/css/color.schemes.css' );
    	$restrofood_theme_color                     = restrofood_opt( 'restrofood_unlimited_color' );
    	$restrofood_css_editor                      = restrofood_opt( 'restrofood_css_editor' );
    	$restrofood_back_to_top_icon_opacity        = restrofood_opt( 'restrofood_backtotop_icon_background_opacity' );
    	$restrofood_coming_soon_placeholder_color   = restrofood_opt( 'restrofood_coming_soon_form_placeholder_color' );
    	$restrofood_404_placeholder_color           = restrofood_opt( 'restrofood_404_form_placeholder_color' );
    	$customcss = "";

    	if( restrofood_meta( 'global_style' ) == 'single' && is_page() ){
            if( !empty( restrofood_meta( 'page_header_bg' ) ) ){
                $restrofood_header_bg = restrofood_meta( 'page_header_bg' );
            }
    		$pagehederbgcolor 		= restrofood_meta( 'page_header_bg_color' );

            if( restrofood_meta( 'page_header_bg_repeat' ) == 'norepeat' ){
                $pagehederbgrepeat = 'no-repeat';
            }elseif( restrofood_meta( 'page_header_bg_repeat' ) == 'repeatall' ){
                $pagehederbgrepeat = 'repeat-all';
            }elseif( restrofood_meta( 'page_header_bg_repeat' ) == 'repeathor' ){
                $pagehederbgrepeat = 'repeat-x';
            }elseif( restrofood_meta( 'page_header_bg_repeat' ) == 'repeatver' ){
                $pagehederbgrepeat = 'repeat-y';
            }elseif( restrofood_meta( 'page_header_bg_repeat' ) == 'inherit' ){
                $pagehederbgrepeat = 'inherit';
            }else{
                $pagehederbgrepeat = '';
            }

            if( restrofood_meta( 'page_header_bg_size' ) == 'inherit' ){
                $pagehederbgsize = 'inherit';
            }elseif( restrofood_meta( 'page_header_bg_size' ) == 'cover' ){
                $pagehederbgsize = 'cover';
            }elseif( restrofood_meta( 'page_header_bg_size' ) == 'contain' ){
                $pagehederbgsize = 'contain';
            }else{
                $pagehederbgsize = '';
            }

            if( restrofood_meta( 'page_header_bg_attachment' ) == 'fixed' ){
                $pagehederbgattachment = 'fixed';
            }elseif( restrofood_meta( 'page_header_bg_attachment' ) == 'scroll' ){
                $pagehederbgattachment = 'scroll';
            }elseif( restrofood_meta( 'page_header_bg_attachment' ) == 'inherit' ){
                $pagehederbgattachment = 'inherit';
            }else{
                $pagehederbgattachment = '';
            }

    		$pagehederbgposition 	= restrofood_meta( 'page_header_bg_position' );

            if( restrofood_meta( 'page_header_bg_position' ) == 'lefttop' ){
                $pagehederbgposition = 'left top';
            }elseif( restrofood_meta( 'page_header_bg_position' ) == 'leftcenter' ){
                $pagehederbgposition = 'left center';
            }elseif( restrofood_meta( 'page_header_bg_position' ) == 'leftbottom' ){
                $pagehederbgposition = 'left bottom';
            }elseif( restrofood_meta( 'page_header_bg_position' ) == 'centertop' ){
                $pagehederbgposition = 'center top';
            }elseif( restrofood_meta( 'page_header_bg_position' ) == 'centercenter' ){
                $pagehederbgposition = 'center center';
            }elseif( restrofood_meta( 'page_header_bg_position' ) == 'centerbottom' ){
                $pagehederbgposition = 'center bottom';
            }elseif( restrofood_meta( 'page_header_bg_position' ) == 'righttop' ){
                $pagehederbgposition = 'right top';
            }elseif( restrofood_meta( 'page_header_bg_position' ) == 'rightcenter' ){
                $pagehederbgposition = 'right center';
            }elseif( restrofood_meta( 'page_header_bg_position' ) == 'rightbottom' ){
                $pagehederbgposition = 'right bottom';
            }else{
                $pagehederbgposition = '';
            }
    		$pagehedertextcolor 	= restrofood_meta( 'page_header_text_color' );
    		$pagehederbreadcolor 	= restrofood_meta( 'breadcrumb_link_color' );
    		$pagehederbreadcolorhov = restrofood_meta( 'breadcrumb_link_hover_color' );
    		$pagehederbreadcoloract = restrofood_meta( 'breadcrumb_active_color' );
    		$pagehederbreadcolordiv = restrofood_meta( 'breadcrumb_divider_color' );
    	}else{
            // Global Settings
            $restrofood_header_bg    = restrofood_opt( 'restrofood_header_bg','background-image' );
            $pagehederbgcolor 		= restrofood_opt( 'restrofood_header_bg','background-color' );
            $pagehederbgrepeat 		= restrofood_opt( 'restrofood_header_bg','background-repeat' );
            $pagehederbgsize 		= restrofood_opt( 'restrofood_header_bg','background-size' );
            $pagehederbgattachment 	= restrofood_opt( 'restrofood_header_bg','background-attachment' );
            $pagehederbgposition 	= restrofood_opt( 'restrofood_header_bg','background-position' );
    		$pagehedertextcolor 	= restrofood_opt( 'restrofood_header_text_color' );
    		$pagehederbreadcolor 	= restrofood_opt( 'restrofood_link_color' );
    		$pagehederbreadcolorhov	= restrofood_opt( 'restrofood_link_hover_color' );
    		$pagehederbreadcoloract	= restrofood_opt( 'restrofood_active_color' );
    		$pagehederbreadcolordiv	= restrofood_opt( 'restrofood_divider_color' );
        }

        if( !empty( $restrofood_header_bg ) ){
    		$customcss .= ".page-title-bg{
	        	background-image:url('{$restrofood_header_bg}');
        	}";
    	}
		if( !empty( $pagehederbgcolor ) ){
    		$customcss .= ".page-title-bg{
	        	background-color:{$pagehederbgcolor};
        	}";
    	}
		if( !empty( $pagehederbgrepeat ) ){
    		$customcss .= ".page-title-bg{
	        	background-repeat:{$pagehederbgrepeat};
        	}";
    	}
		if( !empty( $pagehederbgsize ) ){
    		$customcss .= ".page-title-bg{
	        	background-size:{$pagehederbgsize};
        	}";
    	}
		if( !empty( $pagehederbgattachment ) ){
    		$customcss .= ".page-title-bg{
	        	background-attachment:{$pagehederbgattachment};
        	}";
    	}
		if( !empty( $pagehederbgposition ) ){
    		$customcss .= ".page-title-bg{
	        	background-position:{$pagehederbgposition};
        	}";
    	}

		if( !empty( $pagehedertextcolor ) ){
    		$customcss .= ".page-title h2{
	        	color:{$pagehedertextcolor};
        	}";
    	}
		if( !empty( $pagehederbreadcolor ) ){
    		$customcss .= ".page-title  .list-inline #breadcrumb a{
				color:{$pagehederbreadcolor};
			}";
    	}
		if( !empty( $pagehederbreadcolorhov ) ){
    		$customcss .= ".page-title  .list-inline #breadcrumb a:hover{
				color:{$pagehederbreadcolorhov};
			}";
    	}
		if( !empty( $pagehederbreadcoloract ) ){
    		$customcss .= ".page-title  .list-inline li.active{
				color:{$pagehederbreadcoloract};
			}";
    	}
		if( !empty( $pagehederbreadcolordiv ) ){
    		$customcss .= ".page-title li:not(:last-child):after{
				color:{$pagehederbreadcolordiv};
			}";
    	}
		if( !empty( $restrofood_back_to_top_icon_opacity ) ){
    		$customcss .= ".back-to-top:hover{
				opacity:{$restrofood_back_to_top_icon_opacity};
			}";
    	}
		if( !empty( $restrofood_coming_soon_placeholder_color ) ){
    		$customcss .= ".content-coming-soon .search-form .theme-input-group input::placeholder{
				color:{$restrofood_coming_soon_placeholder_color}!important;
			}";
    	}
		if( !empty( $restrofood_404_placeholder_color ) ){
    		$customcss .= ".content404 .search-form .theme-input-group input::placeholder{
				color:{$restrofood_404_placeholder_color}!important;
			}";
    	}


        // Theme Color

        if( !empty( $restrofood_theme_color ) ){
            $customcss .= ".c1, a, h1,
            h2,
            h3,
            h4,
            h5,
            h6,
            blockquote cite,
            .btn, .page-title ul li:not(:last-child),
            .header .header-main .main-menu #menu-button,
            .header .header-main .main-menu .nav li ul li a,
            .banner .slider-counter span {
				color:{$restrofood_theme_color} !important;
			}";
        }

        // Background Color

        if( !empty( $restrofood_theme_color ) ){
            $customcss .= ".c1-bg,
            ::-moz-selection,
            .owl-carousel button.owl-dot,
            .title-border span:first-child,
            .header .header-main .menu-trigger span,
            .header .header-main .menu-trigger span:before,
            .header .header-main .menu-trigger span:after,
            .header .header-main #menu-button span,
            .header .header-main #menu-button span:before,
            .header .header-main #menu-button span:after{
				background-color:{$restrofood_theme_color} !important;
			}";
        }



        // Custom Css
        $customContainerWidth = restrofood_opt('restrofood_theme_custom_container');


        if( !empty( $customContainerWidth ) ) {
            $customcss .= "
                @media (min-width: 1200px) {
                .container, .container-lg, .container-md, .container-sm, .container-xl {
                    max-width: $customContainerWidth;
                }}";
        }

        // Border Color

        if( !empty( $restrofood_theme_color ) ){
            $customcss .= ".c1-bo{
				border-color:{$restrofood_theme_color} !important;
			}";
        }

        if( !empty( $restrofood_css_editor ) ){
            $customcss .= $restrofood_css_editor;
        }
        wp_add_inline_style( 'restrofood-color-schemes', $customcss );

    }
    add_action( 'wp_enqueue_scripts', 'restrofood_common_custom_css', 50 );