<footer id="site-footer" role="contentinfo">

    <?php get_template_part('template-parts/footer-wave'); ?>

    <div class="footer-bg">

        <div class="footer-inner container-xl pt-sm-6 pb-2 pt-6 px-5">

            <?php get_template_part('template-parts/footer-widgets'); ?>

            <div class="footer-bottom">

                <div class="footer-credits">

                    <p class="footer-copyright"><?php if (false == get_theme_mod('copyright_text_switcher')) {
                            echo 'Copyright ';
                        } ?>&copy;<?php
                        echo date_i18n(
                        /* translators: Copyright date format, see https://www.php.net/date */
                            esc_html_x('Y ', 'copyright date format', 'wavio')
                        );
                        $cop_txt = get_theme_mod('copyright_text');
                        if ('' == $cop_txt) {
                            bloginfo('name');
                            esc_html_e('. All rights reserved. ', 'wavio');
                        } else {
                            echo wp_kses($cop_txt, 'regular');
                        } ?>

                    </p><!-- .footer-copyright -->

                </div><!-- .footer-credits -->

            </div><!-- .footer-bottom  -->

        </div><!-- .footer-inner -->

    </div><!-- .footer-bg -->

</footer><!-- #site-footer -->

<?php wp_footer(); ?>

</body>
</html>
