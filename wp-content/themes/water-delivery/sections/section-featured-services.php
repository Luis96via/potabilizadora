<?php 
/**
 * Template part for displaying Featured Services Section
 *
 *@package Water Delivery
 */
    $featured_services_column                  = water_delivery_get_option( 'featured_services_column' );
    $featured_services_content_type            = water_delivery_get_option( 'featured_services_content_type' );
    $featured_services_section_title            = water_delivery_get_option( 'featured_services_section_title' );
    $number_of_featured_services_items         = water_delivery_get_option( 'number_of_featured_services_items' );
    $featured_services_category                = water_delivery_get_option( 'featured_services_category' );

    if( $featured_services_content_type == 'featured_services_page' ) :
        for( $i=1; $i<=$number_of_featured_services_items; $i++ ) :
            $featured_services_posts[] = water_delivery_get_option( 'featured_services_page_'.$i );
        endfor;  
    elseif( $featured_services_content_type == 'featured_services_post' ) :
        for( $i=1; $i<=$number_of_featured_services_items; $i++ ) :
            $featured_services_posts[] = water_delivery_get_option( 'featured_services_post_'.$i );
        endfor;
    endif;
    ?>
    <div class="section-heading">
        <h1><?php echo esc_html($featured_services_section_title); ?></h1>
        <img src="<?php echo esc_url(get_template_directory_uri()."/assets/images/fast-delivery.png")?>">
    </div>
    <?php if( $featured_services_content_type == 'featured_services_page' ) : ?>
        <div class="section-content <?php echo esc_attr($featured_services_column); ?> clear">
            <?php $args = array (
                'post_type'     => 'page',
                'posts_per_page' => absint( $number_of_featured_services_items ),
                'post__in'      => $featured_services_posts,
                'orderby'       =>'post__in',
            );        
            $loop = new WP_Query($args);                        
            if ( $loop->have_posts() ) :
            $i=-1; $j=0; 
                while ($loop->have_posts()) : $loop->the_post(); $i++; $j++; ?>          
                
                <article>
                    <div class="services-block">
                        <div class="services-image" style="background-image: url('<?php the_post_thumbnail_url( 'full' ); ?>');">
                            <svg class="wave" id="svg" viewBox="0 0 1440 400" xmlns="http://www.w3.org/2000/svg" class="transition duration-300 ease-in-out delay-150">
                                <path d="M 0,400 C 0,400 0,133 0,133 C 92.64285714285714,126.71428571428571 185.28571428571428,120.42857142857142 301,129 C 416.7142857142857,137.57142857142858 555.4999999999999,161 696,169 C 836.5000000000001,177 978.7142857142858,169.57142857142858 1103,161 C 1227.2857142857142,152.42857142857142 1333.642857142857,142.71428571428572 1440,133 C 1440,133 1440,400 1440,400 Z" stroke="none" stroke-width="0" fill="#369bf3" fill-opacity="0.53" class="transition-all duration-300 ease-in-out delay-150 path-0"></path>
                                <path d="M 0,400 C 0,400 0,266 0,266 C 122.07142857142858,259.25 244.14285714285717,252.5 349,258 C 453.85714285714283,263.5 541.5,281.25 676,291 C 810.5,300.75 991.8571428571429,302.5 1127,297 C 1262.142857142857,291.5 1351.0714285714284,278.75 1440,266 C 1440,266 1440,400 1440,400 Z" stroke="none" stroke-width="0" fill="#369bf3" fill-opacity="1" class="transition-all duration-300 ease-in-out delay-150 path-1"></path>
                            </svg>
                        </div>
                        <div class="services-content">
                            <h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
                            <?php
                                $excerpt = water_delivery_the_excerpt( 20 );
                                echo wp_kses_post( wpautop( $excerpt ) );
                            ?>
                            <div class="read-more">
                                <a href="<?php the_permalink();?>" class="btn">
                                    <span>
                                        Read More
                                        <img src="<?php echo esc_url(get_template_directory_uri()."/assets/images/water-2.png")?>">
                                    </span>
                                </a>
                            </div><!-- .read-more -->
                        </div>
                    </div>
                </article>

                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div><!-- .section-content -->
    
    <?php else: ?>
        <div class="section-content <?php echo esc_attr($featured_services_column); ?> clear">
            <?php $args = array (
                'post_type'     => 'post',
                'posts_per_page' => absint( $number_of_featured_services_items ),
                'post__in'      => $featured_services_posts,
                'orderby'       =>'post__in',
                'ignore_sticky_posts' => true,
            );        
            $loop = new WP_Query($args);                        
            if ( $loop->have_posts() ) :
            $i=-1; $j=0; 
                while ($loop->have_posts()) : $loop->the_post(); $i++; $j++; ?>  
                
                <article>
                    <div class="services-block">
                        <div class="services-image" style="background-image: url('<?php the_post_thumbnail_url( 'full' ); ?>');">
                            <svg class="wave" id="svg" viewBox="0 0 1440 400" xmlns="http://www.w3.org/2000/svg" class="transition duration-300 ease-in-out delay-150">
                                <path d="M 0,400 C 0,400 0,133 0,133 C 92.64285714285714,126.71428571428571 185.28571428571428,120.42857142857142 301,129 C 416.7142857142857,137.57142857142858 555.4999999999999,161 696,169 C 836.5000000000001,177 978.7142857142858,169.57142857142858 1103,161 C 1227.2857142857142,152.42857142857142 1333.642857142857,142.71428571428572 1440,133 C 1440,133 1440,400 1440,400 Z" stroke="none" stroke-width="0" fill="#369bf3" fill-opacity="0.53" class="transition-all duration-300 ease-in-out delay-150 path-0"></path>
                                <path d="M 0,400 C 0,400 0,266 0,266 C 122.07142857142858,259.25 244.14285714285717,252.5 349,258 C 453.85714285714283,263.5 541.5,281.25 676,291 C 810.5,300.75 991.8571428571429,302.5 1127,297 C 1262.142857142857,291.5 1351.0714285714284,278.75 1440,266 C 1440,266 1440,400 1440,400 Z" stroke="none" stroke-width="0" fill="#369bf3" fill-opacity="1" class="transition-all duration-300 ease-in-out delay-150 path-1"></path>
                            </svg>
                        </div>
                        <div class="services-content">
                            <h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
                            <?php
                                $excerpt = water_delivery_the_excerpt( 20 );
                                echo wp_kses_post( wpautop( $excerpt ) );
                            ?>
                            <div class="read-more">
                                <a href="<?php the_permalink();?>" class="btn">
                                    <span>
                                        Read More
                                        <img src="<?php echo esc_url(get_template_directory_uri()."/assets/images/water-2.png")?>">
                                    </span>
                                </a>
                            </div><!-- .read-more -->
                        </div>
                    </div>
                </article>

                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div><!-- .section-content -->
    <?php endif;