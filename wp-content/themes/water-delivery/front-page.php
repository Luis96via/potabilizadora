<?php
/**
 * The template for displaying home page.
 * @package Water Delivery
 */

if ( 'posts' != get_option( 'show_on_front' ) ) { 
    get_header(); ?>
    <?php $enabled_sections = water_delivery_get_sections();
    if( is_array( $enabled_sections ) ) {
        foreach( $enabled_sections as $section ) {
            if( $section['id'] == 'featured-slider' ) { ?>
                <?php $enable_featured_slider_section = water_delivery_get_option( 'enable_featured_slider_section' );
                if(true ==$enable_featured_slider_section): ?>
                    <section id="<?php echo esc_attr( $section['id'] ); ?>">  
                        <?php get_template_part( 'sections/section', esc_attr( $section['id'] ) ); ?>
                    </section>
                <?php endif; ?>
            <?php } 
        } ?>
        <div id="content"> <?php
            foreach( $enabled_sections as $section ) {
                if( $section['id'] == 'featured-features' ) { ?>
                <?php $enable_featured_features_section = water_delivery_get_option( 'enable_featured_features_section' );
                    if(true ==$enable_featured_features_section): ?>
                        <section id="<?php echo esc_attr( $section['id'] ); ?>" class="section-gap">  
                            <div class="wrapper">
                                <?php get_template_part( 'sections/section', esc_attr( $section['id'] ) ); ?>
                            </div>
                        </section>
                <?php endif; ?>
    
                <?php } elseif( $section['id'] == 'featured-services' ) { ?>
                    <?php $enable_featured_services_section = water_delivery_get_option( 'enable_featured_services_section' );
                    if(true ==$enable_featured_services_section): ?>
                        <section id="<?php echo esc_attr( $section['id'] ); ?>" class="section-gap">  
                            <div class="wrapper">
                                <?php get_template_part( 'sections/section', esc_attr( $section['id'] ) ); ?>
                            </div>
                        </section>
                <?php endif; ?>
                <?php }
            }
        ?> 
        </div> <?php
    }
    if( true == water_delivery_get_option('enable_frontpage_content') ) { ?>
        <div class="wrapper section-gap">
            <?php include( get_page_template() ); ?>
        </div>
    <?php }
    get_footer();
} 
elseif ('posts' == get_option( 'show_on_front' ) ) {
    include( get_home_template() );
} 