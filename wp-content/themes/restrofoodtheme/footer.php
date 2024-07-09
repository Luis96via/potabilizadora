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

    /**
    * @Restrofood Footer
    *
    * @Hook restrofood_footer_widget
    *
    * @Hooked restrofood_footer_widget_cb
    */
    do_action( 'restrofood_footer_widget' );


    /**
    * @Restrofood Back To Top
    *
    * @Hook restrofood_back_to_top
    *
    * @Hooked restrofood_back_to_top_cb
    */
    do_action( 'restrofood_back_to_top' );

    wp_footer();
?>
</body>
</html>