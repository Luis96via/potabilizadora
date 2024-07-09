<?php 
/**
 * Template part for displaying Slider Section
 *
 *@package Water Delivery
 */

    $data_slick_speed                        = water_delivery_get_option( 'data_slick_speed' );
    $data_slick_infinite                     = water_delivery_get_option( 'data_slick_infinite' );
    $data_slick_dots                         = water_delivery_get_option( 'data_slick_dots' );
    $data_slick_arrows                       = water_delivery_get_option( 'data_slick_arrows' );
    $data_slick_autoplay                     = water_delivery_get_option( 'data_slick_autoplay' );
    $data_slick_draggable                    = water_delivery_get_option( 'data_slick_draggable' );
    $data_slick_fade                         = water_delivery_get_option( 'data_slick_fade' );
    $featured_slider_content_type            = water_delivery_get_option( 'featured_slider_content_type' );
    $number_of_featured_slider_items         = water_delivery_get_option( 'number_of_featured_slider_items' );

    if( $featured_slider_content_type == 'featured_slider_page' ) :
        for( $i=1; $i<=$number_of_featured_slider_items; $i++ ) :
            $featured_slider_posts[] = water_delivery_get_option( 'featured_slider_page_'.$i );
        endfor;  
    elseif( $featured_slider_content_type == 'featured_slider_post' ) :
        for( $i=1; $i<=$number_of_featured_slider_items; $i++ ) :
            $featured_slider_posts[] = water_delivery_get_option( 'featured_slider_post_'.$i );
        endfor;
    endif;
    ?>

    <?php
        if( $data_slick_infinite == 0 )
            $data_slick_infinite = 'false';
        else
            $data_slick_infinite = 'true';
    ?>

    <?php
        if( $data_slick_dots == 0 )
            $data_slick_dots = 'false';
        else
            $data_slick_dots = 'true';
    ?>

    <?php
        if( $data_slick_arrows == 0 )
            $data_slick_arrows = 'false';
        else
            $data_slick_arrows = 'true';
    ?>

    <?php
        if( $data_slick_autoplay == 0 )
            $data_slick_autoplay = 'false';
        else
            $data_slick_autoplay = 'true';
    ?>

    <?php
        if( $data_slick_draggable == 0 )
            $data_slick_draggable = 'false';
        else
            $data_slick_draggable = 'true';
    ?>

    <?php
        if( $data_slick_fade == 0 )
            $data_slick_fade = 'false';
        else
            $data_slick_fade = 'true';
    ?>

    <?php if( $featured_slider_content_type == 'featured_slider_page' ) : ?>
        <div class="section-content" data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "infinite": <?php echo esc_attr( $data_slick_infinite ); ?>, "speed": <?php echo esc_attr( $data_slick_speed ); ?>, "dots": <?php echo esc_attr( $data_slick_dots ); ?>, "arrows": <?php echo esc_attr( $data_slick_arrows ); ?>, "autoplay": <?php echo esc_attr( $data_slick_autoplay ); ?>, "draggable": <?php echo esc_attr( $data_slick_draggable ); ?>, "fade": <?php echo esc_attr( $data_slick_fade ); ?> }'>
            <?php $args = array (
                'post_type'     => 'page',
                'posts_per_page' => absint( $number_of_featured_slider_items ),
                'post__in'      => $featured_slider_posts,
                'orderby'       =>'post__in',
            );        
            $loop = new WP_Query($args);                        
            if ( $loop->have_posts() ) :
            $i=-1; $j=0; 
                while ($loop->have_posts()) : $loop->the_post(); $i++; $j++;

                $class='';
                if ($i==0) {
                    $class='display-block';
                } else{
                    $class='display-none';}
                ?>        
                
                <article class="<?php echo esc_attr($class); ?> slider-content">
                    <div class="wrapper content">
                        <div class="flex-box">

                            <div class="slider-block">
                                <h1><?php the_title();?></h1>
                                <?php
                                    $excerpt = water_delivery_the_excerpt( 30 );
                                    echo wp_kses_post( wpautop( $excerpt ) );
                                ?>
                                <?php $readmore_text = water_delivery_get_option( 'readmore_text' );?>
                                <?php if (!empty($readmore_text) ) :?>
                                    <div class="read-more">
                                        <a href="<?php the_permalink();?>" class="btn">
                                            <span>
                                                <?php echo esc_html($readmore_text);?>
                                                <img src="<?php echo esc_url(get_template_directory_uri()."/assets/images/water.png")?>">
                                            </span>
                                        </a>
                                    </div><!-- .read-more -->
                                <?php endif; ?>
                            </div>
                            <div class="slider-image">
                                <div class="drop-position">
                                    <div class="drop"></div>
                                </div>
                                <div class="drop-position-2">
                                    <div class="drop-2"></div>
                                </div>
                                <div class="img-block">
                                    <div class="img-block2">
                                        <svg class="svg">
                                            <clipPath id="my-clip-path" clipPathUnits="objectBoundingBox"><path d="M0.812,0.079 C0.675,0.008,0.3,0,0.165,0.073 C0.03,0.147,0,0.371,0.001,0.519 C0.001,0.667,0.019,0.884,0.169,0.959 C0.319,1,0.765,1,0.901,0.971 C1,0.894,1,0.647,0.985,0.498 C0.97,0.35,0.949,0.15,0.812,0.079 C0.675,0.008,0.3,0,0.165,0.073"></path></clipPath>
                                        </svg>
                                        <div class="clipped" style="background-image: url('<?php the_post_thumbnail_url( 'full' ); ?>');">
                                            <div class="slider-info">
                                            <h1><?php the_title();?></h1>
                                        <?php
                                            $excerpt = water_delivery_the_excerpt( 30 );
                                            echo wp_kses_post( wpautop( $excerpt ) );
                                        ?>
                                        <?php $readmore_text = water_delivery_get_option( 'readmore_text' );?>
                                        <?php if (!empty($readmore_text) ) :?>
                                            <div class="read-more">
                                                <a href="<?php the_permalink();?>" class="btn">
                                                    <span>
                                                        <?php echo esc_html($readmore_text);?>
                                                        <img src="<?php echo esc_url(get_template_directory_uri()."/assets/images/water.png")?>">
                                                    </span>
                                                </a>
                                            </div><!-- .read-more -->
                                        <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="overimage"></div>
                </article>

                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div><!-- .section-content -->
    
    <?php else: ?>
        <div class="section-content" data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "infinite": <?php echo esc_attr( $data_slick_infinite ); ?>, "speed": <?php echo esc_attr( $data_slick_speed ); ?>, "dots": <?php echo esc_attr( $data_slick_dots ); ?>, "arrows": <?php echo esc_attr( $data_slick_arrows ); ?>, "autoplay": <?php echo esc_attr( $data_slick_autoplay ); ?>, "draggable": <?php echo esc_attr( $data_slick_draggable ); ?>, "fade": <?php echo esc_attr( $data_slick_fade ); ?> }'>
            <?php $args = array (
                'post_type'     => 'post',
                'posts_per_page' => absint( $number_of_featured_slider_items ),
                'post__in'      => $featured_slider_posts,
                'orderby'       =>'post__in',
                'ignore_sticky_posts' => true,
            );        
            $loop = new WP_Query($args);                        
            if ( $loop->have_posts() ) :
            $i=-1; $j=0; 
                while ($loop->have_posts()) : $loop->the_post(); $i++; $j++;

                $featured_slider_post_readmore_text[$j] = water_delivery_get_option( 'featured_slider_post_readmore_text_'.$j );

                $class='';
                if ($i==0) {
                    $class='display-block';
                } else{
                    $class='display-none';}
                ?>            
                
                <article class="<?php echo esc_attr($class); ?> slider-content">
                    <div class="wrapper content">
                        <div class="flex-box">

                            <div class="slider-block">
                                <h1><?php the_title();?></h1>
                                <?php
                                    $excerpt = water_delivery_the_excerpt( 30 );
                                    echo wp_kses_post( wpautop( $excerpt ) );
                                ?>
                                <?php $readmore_text = water_delivery_get_option( 'readmore_text' );?>
                                <?php if (!empty($readmore_text) ) :?>
                                    <div class="read-more">
                                        <a href="<?php the_permalink();?>" class="btn">
                                            <span>
                                                <?php echo esc_html($readmore_text);?>
                                                <img src="<?php echo esc_url(get_template_directory_uri()."/assets/images/water.png")?>">
                                            </span>
                                        </a>
                                    </div><!-- .read-more -->
                                <?php endif; ?>
                            </div>
                            <div class="slider-image">
                                <div class="drop-position">
                                    <div class="drop"></div>
                                </div>
                                <div class="drop-position-2">
                                    <div class="drop-2"></div>
                                </div>
                                <div class="img-block">
                                    <div class="img-block2">
                                        <svg class="svg">
                                            <clipPath id="my-clip-path" clipPathUnits="objectBoundingBox"><path d="M0.812,0.079 C0.675,0.008,0.3,0,0.165,0.073 C0.03,0.147,0,0.371,0.001,0.519 C0.001,0.667,0.019,0.884,0.169,0.959 C0.319,1,0.765,1,0.901,0.971 C1,0.894,1,0.647,0.985,0.498 C0.97,0.35,0.949,0.15,0.812,0.079 C0.675,0.008,0.3,0,0.165,0.073"></path></clipPath>
                                        </svg>
                                        <div class="clipped" style="background-image: url('<?php the_post_thumbnail_url( 'full' ); ?>');">
                                            <div class="slider-info">
                                            <h1><?php the_title();?></h1>
                                        <?php
                                            $excerpt = water_delivery_the_excerpt( 30 );
                                            echo wp_kses_post( wpautop( $excerpt ) );
                                        ?>
                                        <?php $readmore_text = water_delivery_get_option( 'readmore_text' );?>
                                        <?php if (!empty($readmore_text) ) :?>
                                            <div class="read-more">
                                                <a href="<?php the_permalink();?>" class="btn">
                                                    <span>
                                                        <?php echo esc_html($readmore_text);?>
                                                        <img src="<?php echo esc_url(get_template_directory_uri()."/assets/images/water.png")?>">
                                                    </span>
                                                </a>
                                            </div><!-- .read-more -->
                                        <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="overimage"></div>
                </article>

                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div><!-- .section-content -->
    <?php endif;