<?php 
/**
 * Template part for displaying Featured features Section
 *
 *@package Water Delivery
 */
    $featured_features_column                  = water_delivery_get_option( 'featured_features_column' );
    $featured_features_content_type            = water_delivery_get_option( 'featured_features_content_type' );
    $featured_features_section_title            = water_delivery_get_option( 'featured_features_section_title' );
    $number_of_featured_features_items         = water_delivery_get_option( 'number_of_featured_features_items' );
    $featured_features_category                = water_delivery_get_option( 'featured_features_category' );

    if( $featured_features_content_type == 'featured_features_page' ) :
        for( $i=1; $i<=$number_of_featured_features_items; $i++ ) :
            $featured_features_posts[] = water_delivery_get_option( 'featured_features_page_'.$i );
        endfor;  
    elseif( $featured_features_content_type == 'featured_features_post' ) :
        for( $i=1; $i<=$number_of_featured_features_items; $i++ ) :
            $featured_features_posts[] = water_delivery_get_option( 'featured_features_post_'.$i );
        endfor;
    endif;
    ?>
    <div class="section-heading">
        <h1><?php echo esc_html($featured_features_section_title); ?></h1>
        <img src="<?php echo esc_url(get_template_directory_uri()."/assets/images/fast-delivery.png")?>">
    </div>
    <?php if( $featured_features_content_type == 'featured_features_page' ) : ?>
        <div class="section-content <?php echo esc_attr($featured_features_column); ?> clear">
            <?php $args = array (
                'post_type'     => 'page',
                'posts_per_page' => absint( $number_of_featured_features_items ),
                'post__in'      => $featured_features_posts,
                'orderby'       =>'post__in',
            );        
            $loop = new WP_Query($args);                        
            if ( $loop->have_posts() ) :
            $i=-1; $j=0; 
                while ($loop->have_posts()) : $loop->the_post(); $i++; $j++; 
                $featured_features_icon[$j] = water_delivery_get_option( 'featured_features_icon_'.$j ); ?>          
                
                <article>
                    <div class="features-block">
                    <?php if( !empty( $featured_features_icon[$j] ) ) : ?>
                        <div class="icon-container">
                            <a href="<?php the_permalink(); ?>">
                                <i class="<?php echo esc_attr( $featured_features_icon[$j] )?>"></i>
                            </a>
                        </div><!-- .icon-container -->
                    <?php endif; ?>
                        <h4 class="features-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
                        <div class="features-details">
                        <?php
                            $excerpt = water_delivery_the_excerpt( 12 );
                            echo wp_kses_post( wpautop( $excerpt ) );
                        ?>
                        </div>
                        <div class="read-more">
                            <a href="<?php the_permalink();?>">
                                <span>
                                    Read More 
                                </span>
                                <svg width="19px" height="19px" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            </a>
                        </div><!-- .read-more -->
                    
                    </div>
                </article>

                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div><!-- .section-content -->
    
    <?php else: ?>
        <div class="section-content <?php echo esc_attr($featured_features_column); ?> clear">
            <?php $args = array (
                'post_type'     => 'post',
                'posts_per_page' => absint( $number_of_featured_features_items ),
                'post__in'      => $featured_features_posts,
                'orderby'       =>'post__in',
                'ignore_sticky_posts' => true,
            );        
            $loop = new WP_Query($args);                        
            if ( $loop->have_posts() ) :
            $i=-1; $j=0; 
                while ($loop->have_posts()) : $loop->the_post(); $i++; $j++; 
                $featured_features_icon[$j] = water_delivery_get_option( 'featured_features_icon_'.$j ); ?>  
                
                <article>
                    
                </article>

                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div><!-- .section-content -->
    <?php endif;