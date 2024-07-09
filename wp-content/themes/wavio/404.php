<?php
get_header();
?>

    <main id="site-content" class="container flex-grow-1 pb-5 mt-3 mb-5" role="main">

        <div class="mb-5">

            <h2 class="text-center mb-4 font-weight-600"><?php
                echo wp_kses((__('Ooops. <span class="pr-color">Page Not Found!</span>', 'wavio')), 'regular'); ?></h2>
            <div class="text-center">
                <h6><?php
                    echo wp_kses((__('The page you are looking for doesnt exist.<br> Looks like you are in the wrong place.<br> Let us guide you back!', 'wavio')), 'regular' ); ?></h6>
            </div>
            <a class="d-block text-center mt-5" href="/">
                <div class="d-inline-block elementor-button-link elementor-button elementor-size-md"><?php esc_html_e('Go to homepage', 'wavio'); ?></div>
            </a>
        </div><!-- .section-inner -->

    </main><!-- #site-content -->
<?php
get_footer();
