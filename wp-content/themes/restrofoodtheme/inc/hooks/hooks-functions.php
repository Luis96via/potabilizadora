<?php
	// Block direct access
	if( !defined( 'ABSPATH' ) ){
		exit( );
	}
	/**
	* @Packge 	   : Restrofood
	* @Version     : 1.0
	* @Author 	   : ThemeLooks
	* @Author URI  : https://www.themelooks.com/
	*
	*/

    // Blog Post Thumbnail Function
    if( !function_exists( 'restrofood_blog_posts_thumb_cb' ) ){
        function restrofood_blog_posts_thumb_cb(){
        // post image
            if( has_post_thumbnail() ){

                if( !is_single() ){
                    $wraperStart = '<div class="blog-image">';
                }else{
                    $wraperStart = '<div class="blog-details-image">';
                }

                if( !is_single() ){
                    $wraperEnd = '</div>';
                }else{
                    $wraperEnd = '</div>';
                }

                $html = '';
                $html .= $wraperStart;
                $html .= restrofood_img_tag(
                    array(
                        'url' => esc_url( get_the_post_thumbnail_url() ),
                    )
                );
                $html .= $wraperEnd;

                echo wp_kses_post( $html );

            }

            //End of post image

            //Thumbnail check and video and audio thumb show
            if( !is_single() && !has_post_thumbnail() ){
                $html = '';
                if( has_post_format( array( 'video' ) ) ){

                    $html .= '<div class="blog-video">';
                    $html .= restrofood_embedded_media( array( 'video', 'iframe' ) );
                    $html .= '</div>';

                }else{

                    if( has_post_format( array( 'audio' ) ) ){

                        $html .= '<div class="blog-audio">';
                        $html .= restrofood_embedded_media( array( 'audio', 'iframe' ) );
                        $html .= '</div>';
                    }
                }

                echo apply_filters( 'restrofood_post_embedded_media' ,$html );

            }
        }
    }

	// Restrofood Preloader
	if( !function_exists( 'restrofood_preloader_cb' ) ){
		function restrofood_preloader_cb(){
			if( class_exists( 'ReduxFramework' )  ){
				if( restrofood_opt( 'restrofood_display_preloader' ) ){
					$restrofood_proloader = true;
				}else{
					$restrofood_proloader = false;
				}
			}else{
				$restrofood_proloader = true;
			}
			if( $restrofood_proloader ){
				echo "<!-- Preloader -->";
				echo "<div class='preloader w-100 h-100 position-fixed'>";
					echo "<span class='loader'>";
						echo esc_html__( 'Loading…','restrofood' );
					echo "</span>";
				echo "</div>";
				echo "<!-- End Preloader -->";
		    }
		}
	}

	// Restrofood Header Function
	if( !function_exists( 'restrofood_header_cb' ) ){
		function restrofood_header_cb(){
			get_template_part( 'template-part/header-navbar' );

			if( !is_page_template( 'coming-soon.php' ) ){

	            $restrofood_page_header_enable = restrofood_meta( 'page_header' );

	            if ( is_page_template( 'template-builder.php' )   ) {

	                if( $restrofood_page_header_enable == 1 ){
	                    get_template_part( 'template-part/page-banner' );
	                }

	            }else{
	                get_template_part( 'template-part/page-banner' );
	            }
	        }
		}
	}

	// Blog, Single Post, Archive Wrapper Start Function
	if( !function_exists( 'restrofood_blog_section_wrapper_start_cb' ) ){
		function restrofood_blog_section_wrapper_start_cb(){
			echo '<section class="pb-140 pt-140">';
			    echo '<div class="container">';
			        echo '<div class="row">';
		}
	}
	// Page Wrapper Start Function
	if( !function_exists( 'restrofood_page_wrapper_start_cb' ) ){
		function restrofood_page_wrapper_start_cb(){
			echo '<section class="pb-140 pt-140">';
			    echo '<div class="container">';
			        echo '<div class="row">';
		}
	}

	// Blog, Single Post, Archive, Page Wrapper End Function
	if( !function_exists( 'restrofood_blog_section_wrapper_end_cb' ) ){
		function restrofood_blog_section_wrapper_end_cb(){
				    echo '</div>';
				echo '</div>';
			echo '</section>';
		}
	}

	// Blog, Single Post, Archive, Page Wrapper End Function
	if( !function_exists( 'restrofood_page_wrapper_end_cb' ) ){
		function restrofood_page_wrapper_end_cb(){
				    echo '</div>';
				echo '</div>';
			echo '</section>';
		}
	}

	// Blog Column Divider Start Function
	if( !function_exists( 'restrofood_blog_column_divider_start_wrapper_cb' ) ){
		function restrofood_blog_column_divider_start_wrapper_cb(){
			if( class_exists( 'ReduxFramework' ) && is_active_sidebar( 'restrofood_blog_sidebar' ) ){
				$restrofood_blog_layout = restrofood_opt( 'restrofood_blog_layout' );
				if( $restrofood_blog_layout == '1' ){
					$restrofood_blog_column = 'col-lg-12';
				}elseif( $restrofood_blog_layout == '2' ){
					$restrofood_blog_column = 'col-lg-8 order-last';
				}elseif( $restrofood_blog_layout == '3' ){
					$restrofood_blog_column = 'col-lg-8';
				}else{
					$restrofood_blog_column = 'col-lg-8';
				}
			}elseif( is_active_sidebar( 'restrofood_blog_sidebar' ) ){
				$restrofood_blog_column = 'col-lg-8';
			}else{
				$restrofood_blog_column = 'col-lg-12';
			}

			echo '<div class="'.esc_attr( $restrofood_blog_column ).'">';

		        echo '<div class="row blog-masonary">';
		}
	}


	// Blog Column Divider Start Function
	if( !function_exists( 'restrofood_blog_details_column_divider_start_wrapper_cb' ) ){
		function restrofood_blog_details_column_divider_start_wrapper_cb(){
			if( class_exists( 'ReduxFramework' ) && is_active_sidebar( 'restrofood_blog_sidebar' ) ){
				$restrofood_blog_layout = restrofood_opt( 'restrofood_blog_single_layout' );
				if( $restrofood_blog_layout == '1' ){
					$restrofood_blog_column = 'col-lg-12';
				}elseif( $restrofood_blog_layout == '2' ){
					$restrofood_blog_column = 'col-lg-8 order-last';
				}elseif( $restrofood_blog_layout == '3' ){
					$restrofood_blog_column = 'col-lg-8';
				}else{
					$restrofood_blog_column = 'col-lg-8';
				}
			}elseif( is_active_sidebar( 'restrofood_blog_sidebar' ) ){
				$restrofood_blog_column = 'col-lg-8';
			}else{
				$restrofood_blog_column = 'col-lg-12';
			}
			echo '<div class="'.esc_attr( $restrofood_blog_column ).'">';
		}
	}

	// Page Column Divider Start Function
	if( !function_exists( 'restrofood_page_column_divider_start_wrapper_cb' ) ){
		function restrofood_page_column_divider_start_wrapper_cb(){
			if( class_exists( 'ReduxFramework' ) && is_active_sidebar( 'restrofood_page_sidebar' ) ){
				$restrofood_page_layout = restrofood_opt( 'restrofood_page_layout' );
				if( $restrofood_page_layout == '1' ){
					$restrofood_page_column = 'col-lg-12';
				}elseif( $restrofood_page_layout == '2' ){
					$restrofood_page_column = 'col-lg-8 order-last';
				}elseif( $restrofood_page_layout == '3' ){
					$restrofood_page_column = 'col-lg-8';
				}else{
					$restrofood_page_column = 'col-lg-8';
				}
			}elseif( is_active_sidebar( 'restrofood_page_sidebar' ) ){
				$restrofood_page_column = 'col-lg-8';
			}else{
				$restrofood_page_column = 'col-lg-12';
			}
			echo '<div class="'.esc_attr( $restrofood_page_column ).'">';
		}
	}

	// Blog Sidebar Wrapper
	if( !function_exists( 'restrofood_blog_sidebar_wrapper_cb' ) ){
		function restrofood_blog_sidebar_wrapper_cb(){
			$restrofood_blog_layout = restrofood_opt( 'restrofood_blog_layout' );
			if( $restrofood_blog_layout != '1' ){
				get_sidebar();
			}
		}
	}

	// Blog Single Page Sidebar Wrapper
	if( !function_exists( 'restrofood_blog_single_sidebar_wrapper_cb' ) ){
		function restrofood_blog_single_sidebar_wrapper_cb(){
			$restrofood_blog_single_layout = restrofood_opt( 'restrofood_blog_single_layout' );
			if( $restrofood_blog_single_layout != '1' ){
				get_sidebar();
			}
		}
	}

	// Blog Single Page Sidebar Wrapper
	if( !function_exists( 'restrofood_page_sidebar_wrapper_cb' ) ){
		function restrofood_page_sidebar_wrapper_cb(){
			$restrofood_page_sidebar_layout = restrofood_opt( 'restrofood_page_layout' );
			if( $restrofood_page_sidebar_layout != '1' ){
				get_sidebar( 'page' );
			}
		}
	}

	// Blog Post Column
	if( !function_exists( 'restrofood_blog_post_column_cb' ) ){
		function restrofood_blog_post_column_cb(){
		$restrofood_post_column = restrofood_opt( 'restrofood_post_column' );
		if( class_exists( 'ReduxFramework' ) ){
			if( $restrofood_post_column == '1' ){
				$restrofood_blog_post_column = 'col-sm-12';
			}elseif(  $restrofood_post_column == '2' ){
				$restrofood_blog_post_column = 'col-sm-6';
			}elseif(  $restrofood_post_column == '3' ){
				$restrofood_blog_post_column = 'col-sm-4';
			}elseif(  $restrofood_post_column == '4' ){
				$restrofood_blog_post_column = 'col-sm-3';
			}else{
				$restrofood_blog_post_column = 'col-sm-6';
			}
		}else{
			$restrofood_blog_post_column = 'col-sm-6';
		}

		echo '<div class="'.esc_attr( $restrofood_blog_post_column . ' grid-item' ).'">';
		}
	}

	// Global Double Div End
	if( !function_exists( 'restrofood_double_div_end_wrapper_cb' ) ){
		function restrofood_double_div_end_wrapper_cb(){
				echo '</div>';
			echo '</div>';
		}
	}
	// Global Single Div End
	if( !function_exists( 'restrofood_single_div_end_wrapper_cb' ) ){
		function restrofood_single_div_end_wrapper_cb(){
			echo '</div>';
		}
	}

	// Blog Style Two Author Enable Disable
	if( !function_exists( 'restrofood_blog_author_enable_disable_cb' ) ){
		function restrofood_blog_author_enable_disable_cb(){
			if( class_exists( 'ReduxFramework' ) ){
				$restrofood_author_enable = restrofood_opt( 'restrofood_author_enable' );
				if( $restrofood_author_enable ){
					$restrofood_author_enable = true;
				}else{
					$restrofood_author_enable = false;
				}
			}else{
				$restrofood_author_enable = true;
			}
			if( $restrofood_author_enable ){
				echo '<li>'.esc_html__( 'Posted By:','restrofood' ).' <a href="'.esc_url( get_author_posts_url( get_the_author_meta('ID') ) ).'">'.esc_html( ucwords( get_the_author() ) ).'</a></li>';
			}
		}
	}


	// Blog Style Two Comment Enable Disable
	if( !function_exists( 'restrofood_blog_comment_enable_disable_cb' ) ){
		function restrofood_blog_comment_enable_disable_cb(){
			if( class_exists( 'ReduxFramework' ) ){
				$restrofood_comment_enable = restrofood_opt( 'restrofood_comment_enable' );
				if( $restrofood_comment_enable ){
					$restrofood_comment_enable = true;
				}else{
					$restrofood_comment_enable = false;
				}
			}else{
				$restrofood_comment_enable = true;
			}

			if( $restrofood_comment_enable ){
				echo '<li>';
				esc_html( comments_number( 'Comment: ','Comment: ','Comments: ' ) );
				echo '<span>'.esc_html( get_comments_number() ).'</span></li>';
			}
		}
	}

	// Blog Post Excerpt
	if( !function_exists( 'restrofood_blog_post_excerpt_cb' ) ){
		function restrofood_blog_post_excerpt_cb(){
			// Bizdidea Excerpt
			echo restrofood_paragraph_tag( array(
				'text'  => esc_html( get_the_excerpt() ),
				'class'	=> esc_attr( 'blog-excerpt' )
			) );
		}
	}

	// Blog Read More Button Text
	if( !function_exists( 'restrofood_blog_read_more_button_cb' ) ){
		function restrofood_blog_read_more_button_cb(){
			// Read More Button Text
			if( class_exists( 'ReduxFramework' ) ){
				if( restrofood_opt( 'restrofood_button_text' ) ){
					$restrofood_read_more_button_text = restrofood_opt( 'restrofood_button_text' );
				}
			}else{
				$restrofood_read_more_button_text = 'Read More';
			}
			if( !empty( $restrofood_read_more_button_text ) ){
				echo '<a href="'.esc_url( get_the_permalink() ).'" class="btn-inline">'.esc_html( $restrofood_read_more_button_text ).'</a>';
			}
		}
	}

	// Post Pagination
	if( !function_exists( 'restrofood_blog_post_pagination_cb' ) ){
		function restrofood_blog_post_pagination_cb(){
			if( class_exists( 'ReduxFramework' ) ){
				$restrofood_pagination_position = restrofood_opt( 'restrofood_pagination_position' );
				if( $restrofood_pagination_position == 'center' ){
					$pagination_position = 'justify-content-center';
				}else{
					$pagination_position = '';
				}
			}else{
				$pagination_position = 'justify-content-center';
			}
			if( get_previous_posts_link() || get_next_posts_link() ):
				echo '<div class="row">';
					echo '<div class="col-12">';
		                echo '<div class="pagination '.esc_attr( $pagination_position ).'">';
							echo '<ul class="nav align-items-center">';
								if( get_previous_posts_link() ) {
									echo '<li class="nav-btn prev">';
										previous_posts_link( '<i class="fa fa-angle-left"></i>' );
				                    echo '</li>';
								}
								$blog_paginate_links = paginate_links( array(
									'prev_next'          => false,
									'type'               => 'array',
								) );
								echo '<li>';
									echo join( '</li><li>', $blog_paginate_links );
								echo '</li>';
								if( get_next_posts_link() ) {
									echo '<li class="nav-btn next">';
										next_posts_link('<i class="fa fa-angle-right"></i>');
				                    echo '</li>';
								}
			                echo '</ul>';
		                echo '</div>';
		            echo '</div>';
	            echo '</div>';
			endif;
		}
	}

	// Single Post Navigation
	if( !function_exists( 'restrofood_single_post_navigation_cb' ) ){
		function restrofood_single_post_navigation_cb(){
			if( class_exists( 'ReduxFramework' ) ){
				$navigation_on_off = restrofood_opt( 'restrofood_enable_disable_navigation' );
			}else{
				$navigation_on_off = true;
			}
			if( $navigation_on_off ):
				$restrofood_prev_post = get_previous_post();
				$restrofood_next_post = get_next_post();
				if( !empty( $restrofood_prev_post ) && !empty( $restrofood_next_post ) ){
					$restrofood_div_pagination = ' d-flex';
				}else{
					$restrofood_div_pagination = '';
				}
				if( empty( $restrofood_prev_post ) || empty( $restrofood_next_post ) ){
					$restrofood_pagination_single_class = ' mw-100';
				}else{
					$restrofood_pagination_single_class = '';
				}
				if( $restrofood_prev_post || $restrofood_next_post ):

		?>
	<!-- Post Pagination Begin -->
	<div class="post-pagination<?php echo esc_attr( $restrofood_div_pagination );?> align-items-center justify-content-between flex-column flex-md-row">
		<!-- Single Post Pagination Begin -->
		<?php
			if( $restrofood_prev_post ) :
		?>
		<div class="single-post-pagination mb-50 mb-md-0 prev<?php echo esc_attr( $restrofood_pagination_single_class );?>">
			<a class="media align-items-center" href="<?php echo esc_url( get_permalink( $restrofood_prev_post->ID ) ); ?>">
				<?php if( get_the_post_thumbnail( $restrofood_prev_post->ID ) ):?>
				<div class="pagination-image">
					<?php echo wp_kses_post( get_the_post_thumbnail( $restrofood_prev_post->ID,array( 70, 70) ) ); ?>
					<i class="fa fa-angle-left"></i>
				</div>
				<?php endif;?>
				<div class="media-body">
					<span class="posted-on"><?php echo esc_html( get_the_time( 'd M Y',$restrofood_prev_post->ID ) );?></span>
					<h5><?php echo wp_kses_post( $restrofood_prev_post->post_title );?></h5>
				</div>
			</a>
		</div>
		<?php
			endif;
			if( $restrofood_next_post ):
		?>
		<div class="single-post-pagination mb-50 mb-md-0 next<?php echo esc_attr( $restrofood_pagination_single_class );?>">
			<a class="media flex-row-reverse" href="<?php echo esc_url( get_permalink( $restrofood_next_post->ID ) ); ?>">
				<?php if( get_the_post_thumbnail( $restrofood_next_post->ID ) ):?>
				<div class="pagination-image">
					<?php echo wp_kses_post( get_the_post_thumbnail( $restrofood_next_post->ID,array( 70, 70) ) ); ?>
					<i class="fa fa-angle-right"></i>
				</div>
				<?php endif;?>
				<div class="media-body text-right">
					<span class="posted-on"><?php echo esc_html( get_the_time( 'd M Y',$restrofood_next_post->ID ) );?></span>
					<h5><?php echo wp_kses_post( $restrofood_next_post->post_title );?></h5>
				</div>
			</a>
		</div>
		<?php endif;?>
		<!-- Single Post Pagination End -->
	</div>
	<!-- Post Pagination End -->
	<?php
		endif;
		endif;
		}
	}

	// Blog Post Comments Show Function
	if( !function_exists( 'restrofood_single_post_comments_show_wrap_cb' ) ){
		function restrofood_single_post_comments_show_wrap_cb(){
			// Comment Template
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}
		}
	}

	// Back To Top

	if( !function_exists( 'restrofood_back_to_top_cb' ) ){
		function restrofood_back_to_top_cb(){
			if( restrofood_opt( "restrofood_display_backtotop" ) ):
				echo '<!-- Back to Top Begin -->';
					echo '<a href="#" class="back-to-top">';
				        echo '<i class="fa fa-angle-up"></i>';
				    echo '</a>';
				echo '<!-- Back to Top End -->';
			endif;
		}
	}

	// footer Widget

	if( !function_exists( 'restrofood_footer_widget_cb' ) ){
		function restrofood_footer_widget_cb(){

				if( class_exists( 'ReduxFramework' ) && ( is_active_sidebar( 'footer_sidebar_one' ) || is_active_sidebar( 'footer_sidebar_two' ) || is_active_sidebar( 'footer_sidebar_three' ) || is_active_sidebar( 'footer_sidebar_four' ) ) ){
					$restrofood_footer_widget_enable = restrofood_opt( 'restrofood_footerwidget_enable' );
				}else{
					$restrofood_footer_widget_enable = '';
				}

				$restrofood_footer_widget_col = restrofood_opt( 'restrofood_footercol_switch' );


		        $restrofood_footer_widget_col_val = "";

				if( $restrofood_footer_widget_col == '1' ) {
	                $restrofood_footer_widget_col_val = '6';
	            }elseif( $restrofood_footer_widget_col == '2' ) {
	                $restrofood_footer_widget_col_val = '4';
	            }else{
	                $restrofood_footer_widget_col_val = '3';
	            }

				if( $restrofood_footer_widget_enable == '1' ){
					$restrofood_footer_padding_div = 'pt-60';
				}else{
					$restrofood_footer_padding_div = '';
				}

				if( class_exists( 'ReduxFramework' ) ){
					$restrofood_footer_bottom_active = restrofood_opt( 'restrofood_disable_footer_bottom' );
				}else{
					$restrofood_footer_bottom_active = '1';
				}

				if( $restrofood_footer_widget_enable == '1' || $restrofood_footer_bottom_active == '1' ):

		    ?>
		    <!-- Footer Begin -->
		    <footer class="footer c1-bg <?php echo esc_attr( $restrofood_footer_padding_div );?>">
				<?php
					if( restrofood_opt( 'restrofood_footer_style' ) == '1' ):
				?>
				<!-- Footer Top Begin -->
				<?php if( $restrofood_footer_widget_enable == '1' ):?>
				<div class="footer-top">
		        	<div class="container">
			            <div class="row">
			                <?php
			                    if( $restrofood_footer_widget_col == '1' || $restrofood_footer_widget_col == '2' || $restrofood_footer_widget_col == '3' ) :
			                        if( is_active_sidebar( 'footer_sidebar_one' ) ) :
			                ?>
			                <div class="col-lg-<?php echo esc_attr( $restrofood_footer_widget_col_val ); ?> col-sm-6">
			                    <?php
			                        dynamic_sidebar( 'footer_sidebar_one' );
			                    ?>
			                </div>
			                <?php
			                        endif;
			                    endif;

			                    if( $restrofood_footer_widget_col == '1' || $restrofood_footer_widget_col == '2' || $restrofood_footer_widget_col == '3' ) :
			                        if( is_active_sidebar( 'footer_sidebar_two' ) ) :
			                ?>
			                <div class="col-lg-<?php echo esc_attr( $restrofood_footer_widget_col_val ); ?> col-sm-6">
			                    <?php
			                        dynamic_sidebar( 'footer_sidebar_two' );
			                    ?>
			                </div>
			                <?php
			                        endif;
			                    endif;

			                    if( $restrofood_footer_widget_col != '1' ) :
			                        if( is_active_sidebar( 'footer_sidebar_three' ) ) :
			                ?>
			                <div class="col-lg-<?php echo esc_attr( $restrofood_footer_widget_col_val ); ?> col-sm-6">
			                    <?php
			                        dynamic_sidebar( 'footer_sidebar_three' );
			                    ?>
			                </div>
			                <?php
			                        endif;
			                    endif;

			                    if( $restrofood_footer_widget_col == '3' ) :
			                        if( is_active_sidebar( 'footer_sidebar_four' ) ):
			                ?>
			                <div class="col-lg-<?php echo esc_attr( $restrofood_footer_widget_col_val ); ?> col-sm-6">
			                    <?php
			                        dynamic_sidebar( 'footer_sidebar_four' );
			                    ?>
			                </div>
			                <?php
			                    endif;
			                endif;
			                ?>
			            </div>
		        	</div>
				</div>
				<?php endif;?>
				<!-- Footer Top End -->
				<?php
			 		else:
						echo '<div class="footer-top-style-two">';
				        	echo '<div class="container">';
						        echo '<div class="row">';
						        	echo '<div class="col-lg-12">';
										echo '<div class="restrofood-footer-top-content">';
											if( ! empty( restrofood_opt( 'restrofood_footer_logo','url' ) ) ){
							        			echo '<div class="footer-logo">';
													echo restrofood_img_tag( array(
														'url'	=> esc_url( restrofood_opt( 'restrofood_footer_logo','url' ) ),
													) );
						            			echo '</div>';
											}
											if( ! empty( restrofood_opt( 'restrofood_footer_description_text' ) ) ){
												echo '<span class="description">'.wp_kses_post( restrofood_opt( 'restrofood_footer_description_text' ) ).'</span>';
											}
											if( ! empty( restrofood_opt( 'restrofood_restaurant_opening_hour_text' ) ) ){
												echo '<p class="opening-hour">'.esc_html( restrofood_opt( 'restrofood_restaurant_opening_hour_text' ) ).'</p>';
											}
											if( class_exists( 'ReduxFramework' ) ){
												$placeholder = restrofood_opt( 'restrofood_newsletter_placeholder_text' );
											}else{
												$placeholder = esc_html__( 'Enter Your Email', 'restrofood' );
											}

											if( restrofood_opt( 'restrofood_disable_newletter' ) ){
												echo '<div class="newsletter-content newsletter-form">';
													echo '<form method="post" name="mc-embedded-subscribe-form" target="_blank" class="newsletter-form" id="subscribe_submit">';
														echo '<div class="theme-input-group">';
															echo '<input id="sectsubscribe_email" name="sectsubscribe_email" type="email" placeholder="'.esc_attr( $placeholder ).'" required>';
															echo '<button name="sectsubscribe" type="submit">';
																echo esc_html__( 'SUBSCRIBE','restrofood' );
															echo '</button>';
														echo '</div>';
													echo '</form>';
												echo '</div>';
											}
											if( has_nav_menu( 'footer-menu' ) && restrofood_opt( 'restrofood_disable_footer_menu' ) ){
												echo '<div class="footer-menu">';
													wp_nav_menu( array(
			                                            'theme_location'    => 'footer-menu',
			                                            'container'         => '',
			                                            'menu_class'        => 'nav align-items-center',
			                                        ) );
												echo '</div>';
											}
					            		echo '</div>';
					            	echo '</div>';
					            echo '</div>';
				        	echo '</div>';
						echo '</div>';
					endif;
				?>
				<!-- Footer Bottom Begin -->
				<?php if( $restrofood_footer_bottom_active == '1' ):?>
			    <div class="footer-bottom">
			        <div class="container">
			            <div class="row">
			                <div class="col-lg-12">
								<?php if( !class_exists( 'ReduxFramework' ) ):?>
				                	<p class="text-center"><?php echo sprintf( '&copy; Developed by <a href="%s">%s</a>, %s',esc_url('#'),esc_html__('Themelooks','restrofood'),date('Y') ); ?></p>
								<?php else:?>
									<p class="text-center">
										<?php echo wp_kses_post( restrofood_opt( 'restrofood_footer_text' ) );?>
									</p>
								<?php endif;?>
			                </div>
			            </div>
			        </div>
			    </div>
				<?php endif;?>
			    <!-- Footer Bottom End -->
		    </footer>
			<!-- Footer End -->
			<?php
			endif;
		}
	}