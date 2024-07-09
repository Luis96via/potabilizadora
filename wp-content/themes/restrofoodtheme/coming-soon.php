<?php
	// Do not allow directly accessing this file.
	if ( ! defined( 'ABSPATH' ) ) {
		exit( );
	}
	/**
	* @Packge    : restrofood
	* @version   : 1.0
	* @Author    : ThemeLooks
	* @Author URI: https://www.themelooks.com/
	*
	* template name: Coming Soon
	*
	*/
	get_header();

	?>
	<!-- Coming Soon Begin -->
	<section class="d-flex align-items-center justify-content-center min-vh-100 pt-5 pb-5 pb-lg-0 pt-lg-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Coming Sooon Image -->
                    <div class="mb-50 mb-lg-0">
						<?php
							if( !empty( restrofood_opt( 'restrofood_coming_image','url' ) ) ){
								echo restrofood_img_tag( array(
									'url'	=> esc_url( restrofood_opt( 'restrofood_coming_image','url' ) ),
								) );
							}
						?>
                    </div>
                    <!-- End Coming Soon Image -->
                </div>

                <div class="col-lg-6">
                    <!-- 404 Content -->
                    <div class="content-coming-soon">
						<?php
							if( !empty( restrofood_opt( 'restrofood_coming_soon_title' ) ) ){
								echo restrofood_heading_tag( array(
									'tag'	=>	'h1',
									'text'	=> esc_html( restrofood_opt( 'restrofood_coming_soon_title' ) )
								) );
							}
							if( !empty( restrofood_opt( 'restrofood_coming_soon_simple_title' ) ) ){
								echo restrofood_paragraph_tag( array(
									'text'	=> esc_html( restrofood_opt( 'restrofood_coming_soon_simple_title' ) )
								) );
							}

						?>
                        <div class="search-form">
							<?php
								if( !empty( restrofood_opt( 'restrofood_subscribe_form_title' ) ) ){
									echo restrofood_paragraph_tag( array(
										'text'	=>	esc_html(  restrofood_opt( 'restrofood_subscribe_form_title' ) ),
									) );
								}
								if( class_exists( 'ReduxFramework' ) ){
									$restrofood_subscribe_placeholder = restrofood_opt( 'restrofood_coming_soon_form_placeholder' );
								}else{
									$restrofood_subscribe_placeholder = 'Enter your email';
								}
								if( class_exists( 'ReduxFramework' ) ){
									$restrofood_subscribe_button = restrofood_opt( 'restrofood_coming_soon_button' );
								}else{
									$restrofood_subscribe_button = 'Subscribe';
								}
							?>
							<div class="newsletter-content">
	                            <form method="post" name="mc-embedded-subscribe-form" id="subscribe_submit">
	                                <div class="theme-input-group">
	                                    <input id="sectsubscribe_email" name="sectsubscribe_email" type="email" placeholder="<?php echo esc_attr( $restrofood_subscribe_placeholder );?>">
	                                    <button name="sectsubscribe" type="submit"><?php echo esc_html( $restrofood_subscribe_button )?></button>
	                                </div>
	                            </form>
							</div>
                        </div>
                    </div>
                    <!-- End Coming Content -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Coming Soon -->
	<?php wp_footer();?>
</body>
</html>