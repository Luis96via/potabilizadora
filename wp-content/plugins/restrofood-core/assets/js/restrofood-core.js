(function($) {
	"use strict";
	$(document).ready(function(){
		$(document).on("widget-updated",function(event,widget){
            var $widget_id = $(widget).attr("id");
            if( $widget_id.indexOf("restrofood_newsletter_widget") != '-1' ){
                var $img_val = $(".logo-image img").attr("src");
                $(".img_link").attr("value",$img_val);
            }
        });
        // Widget Image Upload
        $("body").off("click","button#logo_image");
        $("body").on("click","button#logo_image",function(e){
            e.preventDefault();
            var imageUploader = wp.media({
                'title'  : 'Upload Logo Image',
                'button' : {
                    'text' : 'Insert Image'
                },
                'multiple' : false
            });
            imageUploader.open();

             imageUploader.on("select", function(){

                 var image = imageUploader.state().get("selection").first().toJSON();
                 var link  = image.url;

                $(".logo-image img").attr("src",link);

                $(".img_link").attr("value",link);

                $(".img_link").trigger("change");
             });
        });
		$(document).on("widget-updated",function(event,widget){
            var $widget_id = $(widget).attr("id");
            if( $widget_id.indexOf("restrofood_newsletter_widget") != '-1' ){
                var $img_val = $(".logo-image img").attr("src");
                $(".img_link").attr("value",$img_val);
            }
        });
        // Widget Image Upload
        $("body").off("click","button#contact_logo_image");
        $("body").on("click","button#contact_logo_image",function(e){
            e.preventDefault();
            var imageUploader = wp.media({
                'title'  : 'Upload Logo Image',
                'button' : {
                    'text' : 'Insert Image'
                },
                'multiple' : false
            });
            imageUploader.open();

             imageUploader.on("select", function(){

                 var image = imageUploader.state().get("selection").first().toJSON();
                 var link  = image.url;

                $(".logo-image img").attr("src",link);

                $(".img_link").attr("value",link);

                $(".img_link").trigger("change");
             });
        });

        $(".moderna-admin").css({
            'margin': '25px 0px'
        });
        $(".logo-image img").css({
            'margin-top': '20px'
        });

		// Page template select condition
		var $selector = $( 'select#page_template' );
		function page_template_meta_box(){

			var $selector = $( 'select#page_template' ),
			$pageLayoutSection = $( '#_restrofoodpage_page_layout_section' ),
			$pageHeaderOp = $( '#_restrofoodpage_header_option' ),
			$singleHeader = $( '#_restrofoodpage_restrofood_header_option_make' )
			if( 'template-builder.php' == $selector.val() ){
					$pageLayoutSection.show();
					$pageHeaderOp.show();
			}else{
				$pageLayoutSection.hide();
				$pageHeaderOp.hide();
				$singleHeader.hide();
			}

		}
		// Default
		page_template_meta_box();
		// Onchange
		$selector.on( 'change', function(){
			page_template_meta_box();
		} );

	$( "#_restrofood_page_header1" ).on( "click", function(){
		$(".cmb2-id--restrofood-global-style").show();
		$(".cmb2-id--restrofood-content-align").show();
		$(".cmb2-id--restrofood-page-header-bg").show();
		$(".cmb2-id--restrofood-page-header-bg-color").show();
		$(".cmb2-id--restrofood-page-header-bg-repeat").show();
		$(".cmb2-id--restrofood-page-header-bg-size").show();
		$(".cmb2-id--restrofood-page-header-bg-attachment").show();
		$(".cmb2-id--restrofood-page-header-bg-position").show();
		$(".cmb2-id--restrofood-page-header-show-hide").show();
		$(".cmb2-id--restrofood-page-header-text-color").show();
		$(".cmb2-id--restrofood-breadcrumb-enable").show();
		$(".cmb2-id--restrofood-breadcrumb-link-color").show();
		$(".cmb2-id--restrofood-breadcrumb-link-hover-color").show();
		$(".cmb2-id--restrofood-breadcrumb-active-color").show();
		$(".cmb2-id--restrofood-breadcrumb-divider-color").show();

		var $single_selectors = $( 'select#_restrofood_global_style' );

		function page_single_template_meta_box(){

			var $single_selectors = $( 'select#_restrofood_global_style' );
			if( 'single' == $single_selectors.val() ){
					$(".cmb2-id--restrofood-content-align").show();
					$(".cmb2-id--restrofood-page-header-bg").show();
					$(".cmb2-id--restrofood-page-header-bg-color").show();
					$(".cmb2-id--restrofood-page-header-bg-repeat").show();
					$(".cmb2-id--restrofood-page-header-bg-size").show();
					$(".cmb2-id--restrofood-page-header-bg-attachment").show();
					$(".cmb2-id--restrofood-page-header-bg-position").show();
					$(".cmb2-id--restrofood-page-header-show-hide").show();
					$(".cmb2-id--restrofood-page-header-text-color").show();
					$(".cmb2-id--restrofood-breadcrumb-enable").show();
					$(".cmb2-id--restrofood-breadcrumb-link-color").show();
					$(".cmb2-id--restrofood-breadcrumb-link-hover-color").show();
					$(".cmb2-id--restrofood-breadcrumb-active-color").show();
					$(".cmb2-id--restrofood-breadcrumb-divider-color").show();
			}else{
				$(".cmb2-id--restrofood-content-align").hide();
				$(".cmb2-id--restrofood-page-header-bg").hide();
				$(".cmb2-id--restrofood-page-header-bg-color").hide();
				$(".cmb2-id--restrofood-page-header-bg-repeat").hide();
				$(".cmb2-id--restrofood-page-header-bg-size").hide();
				$(".cmb2-id--restrofood-page-header-bg-attachment").hide();
				$(".cmb2-id--restrofood-page-header-bg-position").hide();
				$(".cmb2-id--restrofood-page-header-show-hide").hide();
				$(".cmb2-id--restrofood-page-header-text-color").hide();
				$(".cmb2-id--restrofood-breadcrumb-enable").hide();
				$(".cmb2-id--restrofood-breadcrumb-link-color").hide();
				$(".cmb2-id--restrofood-breadcrumb-link-hover-color").hide();
				$(".cmb2-id--restrofood-breadcrumb-active-color").hide();
				$(".cmb2-id--restrofood-breadcrumb-divider-color").hide();
			}
		}
		page_single_template_meta_box();
		$single_selectors.on( 'change', function(){
			page_single_template_meta_box();
		} );
	});

	$( "#_restrofood_page_header2" ).on( "click", function(){
		$(".cmb2-id--restrofood-global-style").hide();
		$(".cmb2-id--restrofood-content-align").hide();
		$(".cmb2-id--restrofood-page-header-bg").hide();
		$(".cmb2-id--restrofood-page-header-bg-color").hide();
		$(".cmb2-id--restrofood-page-header-bg-repeat").hide();
		$(".cmb2-id--restrofood-page-header-bg-size").hide();
		$(".cmb2-id--restrofood-page-header-bg-attachment").hide();
		$(".cmb2-id--restrofood-page-header-bg-position").hide();
		$(".cmb2-id--restrofood-page-header-show-hide").hide();
		$(".cmb2-id--restrofood-page-header-text-color").hide();
		$(".cmb2-id--restrofood-breadcrumb-enable").hide();
		$(".cmb2-id--restrofood-breadcrumb-link-color").hide();
		$(".cmb2-id--restrofood-breadcrumb-link-hover-color").hide();
		$(".cmb2-id--restrofood-breadcrumb-active-color").hide();
		$(".cmb2-id--restrofood-breadcrumb-divider-color").hide();
	});
	// Page Tempalte
	var page_id = $('input[name="_restrofood_page_header"]:checked').attr('id');
	// Page template select condition
	if( page_id == '_restrofood_page_header1' ){
		$(".cmb2-id--restrofood-global-style").show();
		$(".cmb2-id--restrofood-content-align").show();
		$(".cmb2-id--restrofood-page-header-bg").show();
		$(".cmb2-id--restrofood-page-header-bg-color").show();
		$(".cmb2-id--restrofood-page-header-bg-repeat").show();
		$(".cmb2-id--restrofood-page-header-bg-size").show();
		$(".cmb2-id--restrofood-page-header-bg-attachment").show();
		$(".cmb2-id--restrofood-page-header-bg-position").show();
		$(".cmb2-id--restrofood-page-header-show-hide").show();
		$(".cmb2-id--restrofood-page-header-text-color").show();
		$(".cmb2-id--restrofood-breadcrumb-enable").show();
		$(".cmb2-id--restrofood-breadcrumb-link-color").show();
		$(".cmb2-id--restrofood-breadcrumb-link-hover-color").show();
		$(".cmb2-id--restrofood-breadcrumb-active-color").show();
		$(".cmb2-id--restrofood-breadcrumb-divider-color").show();

		var $single_selectors = $( 'select#_restrofood_global_style' );
		function page_single_template_meta_box(){

			var $single_selectors = $( 'select#_restrofood_global_style' );
			if( 'single' == $single_selectors.val() ){
					$(".cmb2-id--restrofood-content-align").show();
					$(".cmb2-id--restrofood-page-header-bg").show();
					$(".cmb2-id--restrofood-page-header-bg-color").show();
					$(".cmb2-id--restrofood-page-header-bg-repeat").show();
					$(".cmb2-id--restrofood-page-header-bg-size").show();
					$(".cmb2-id--restrofood-page-header-bg-attachment").show();
					$(".cmb2-id--restrofood-page-header-bg-position").show();
					$(".cmb2-id--restrofood-page-header-show-hide").show();
					$(".cmb2-id--restrofood-page-header-text-color").show();
					$(".cmb2-id--restrofood-breadcrumb-enable").show();
					$(".cmb2-id--restrofood-breadcrumb-link-color").show();
					$(".cmb2-id--restrofood-breadcrumb-link-hover-color").show();
					$(".cmb2-id--restrofood-breadcrumb-active-color").show();
					$(".cmb2-id--restrofood-breadcrumb-divider-color").show();
			}else{
				$(".cmb2-id--restrofood-content-align").hide();
				$(".cmb2-id--restrofood-page-header-bg").hide();
				$(".cmb2-id--restrofood-page-header-bg-color").hide();
				$(".cmb2-id--restrofood-page-header-bg-repeat").hide();
				$(".cmb2-id--restrofood-page-header-bg-size").hide();
				$(".cmb2-id--restrofood-page-header-bg-attachment").hide();
				$(".cmb2-id--restrofood-page-header-bg-position").hide();
				$(".cmb2-id--restrofood-page-header-show-hide").hide();
				$(".cmb2-id--restrofood-page-header-text-color").hide();
				$(".cmb2-id--restrofood-breadcrumb-enable").hide();
				$(".cmb2-id--restrofood-breadcrumb-link-color").hide();
				$(".cmb2-id--restrofood-breadcrumb-link-hover-color").hide();
				$(".cmb2-id--restrofood-breadcrumb-active-color").hide();
				$(".cmb2-id--restrofood-breadcrumb-divider-color").hide();
			}
		}
		page_single_template_meta_box();
		$single_selectors.on( 'change', function(){
			page_single_template_meta_box();
		} );
	}else{
		$(".cmb2-id--restrofood-global-style").hide();
		$(".cmb2-id--restrofood-content-align").hide();
		$(".cmb2-id--restrofood-page-header-bg").hide();
		$(".cmb2-id--restrofood-page-header-bg-color").hide();
		$(".cmb2-id--restrofood-page-header-bg-repeat").hide();
		$(".cmb2-id--restrofood-page-header-bg-size").hide();
		$(".cmb2-id--restrofood-page-header-bg-attachment").hide();
		$(".cmb2-id--restrofood-page-header-bg-position").hide();
		$(".cmb2-id--restrofood-page-header-show-hide").hide();
		$(".cmb2-id--restrofood-page-header-text-color").hide();
		$(".cmb2-id--restrofood-breadcrumb-enable").hide();
		$(".cmb2-id--restrofood-breadcrumb-link-color").hide();
		$(".cmb2-id--restrofood-breadcrumb-link-hover-color").hide();
		$(".cmb2-id--restrofood-breadcrumb-active-color").hide();
		$(".cmb2-id--restrofood-breadcrumb-divider-color").hide();
	}

	});
})(jQuery);