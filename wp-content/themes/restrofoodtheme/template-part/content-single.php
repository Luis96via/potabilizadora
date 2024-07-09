<?php
   // Block direct access
   if( !defined( 'ABSPATH' ) ){
       exit( );
   }
   /**
    * @Packge     : Restrofood
    * @Version    : 1.0
    * @Author     : ThemeLooks
    * @Author URI : https://www.themelooks.com/
    *
    */
    echo '<div class="blog-details">';


    // Post Title
    if( restrofood_opt( 'restrofood_single_title_position' ) == '2' || restrofood_opt( 'restrofood_single_title_position' ) == '3' ){
        echo '<div class="post-title">';
            echo '<h2>'.wp_kses_post( get_the_title() ).'</h2>';
        echo '</div>';
    }

    /**
    * @Blog Post Thumbnail
    *
    * @Hook restrofood_blog_posts_thumb
    *
    * @Hooked restrofood_blog_posts_thumb_cb
    */
    do_action( 'restrofood_blog_posts_thumb' );

    echo '<div class="post-meta">';
        echo '<ul class="list-inline">';
            // Category
            if( class_exists( 'ReduxFramework' ) ){
                $restrofood_single_post_category_enable = restrofood_opt( 'restrofood_single_enable_category' );
            }else{
                $restrofood_single_post_category_enable = true;
            }
            if( $restrofood_single_post_category_enable ){
                $restrofood_single_page_category = get_the_category();
                if( is_array( $restrofood_single_page_category ) && !empty( $restrofood_single_page_category ) ){
                    if( count( $restrofood_single_page_category ) < 2 ){
                        $restrofood_category_text = 'Category: ';
                    }else{
                        $restrofood_category_text = 'Categories: ';
                    }
                    echo '<li>'.esc_html( $restrofood_category_text );
                    foreach ( $restrofood_single_page_category as $key => $single_category ) {
                        echo ' <a href="'.esc_url( get_category_link( $single_category->term_id ) ).'">'.esc_html( $single_category->name ) .'</a>';
                    }
                    echo '</li>';
                }
            }
            /**
            * @Blog Author
            *
            * @Hook restrofood_blog_author_enable_disable
            *
            * @Hooked restrofood_blog_author_enable_disable_cb
            */
            do_action( 'restrofood_blog_author_enable_disable' );

            // Post Date
            if( class_exists( 'ReduxFramework' ) ){
                $restrofood_single_post_date_enable = restrofood_opt( 'restrofood_single_post_time_enable' );
            }else{
                $restrofood_single_post_date_enable = true;
            }
            if( $restrofood_single_post_date_enable ){
                echo '<li>'.esc_html__( 'Posted On:','restrofood' ).' <a class="date-color" href="'.esc_url( restrofood_blog_date_permalink() ).'">'.esc_html( get_the_time( 'd F, Y' ) ).'</a></li>';
            }


        echo '</ul>';
    echo '</div>';

        echo '<div class="blog-details-content">';
            the_content() ;
            // Link Pages
            restrofood_link_pages();

        echo '</div>';
        if( class_exists( 'ReduxFramework' ) && get_the_tags() ){
            $restrofood_tag_enable = restrofood_opt( 'restrofood_single_tag_enable_disable' );
        }elseif( get_the_tags() ){
            $restrofood_tag_enable = true;
        }else{
            $restrofood_tag_enable = '';
        }

        if( $restrofood_tag_enable ):
            echo '<div class="row">';
                echo '<div class="col-12">';
                    echo '<div class="post-tags">';
                        echo '<ul class="list-inline">';
                            if( get_the_tags() ){
                                $restrofood_tag_count = get_the_tags();
                                if( count( $restrofood_tag_count ) < 2 ){
                                    $restrofood_tag_count_text = 'Tag: ';
                                }else{
                                    $restrofood_tag_count_text = 'Tags: ';
                                }
                                echo '<li class="mr-1">'.esc_html( $restrofood_tag_count_text ).'</li>';
                                echo '<li>';
                                foreach ( $restrofood_tag_count as $tag_value ) {
                                    echo ' <a href="'.esc_url( get_tag_link( $tag_value->term_id ) ).'">' . esc_html( '#'.$tag_value->name ) . '</a>' ;
                                }
                                echo ' </li>';
                            }
                        echo '</ul>';
                    echo '</div>';
                echo '</div>';
            echo '</div>';
        endif;

        /**
        * @Blog Single Post Navigation
        *
        * @Hook restrofood_single_post_navigation
        *
        * @Hooked restrofood_single_post_navigation_cb
        */
        do_action( 'restrofood_single_post_navigation' );

        /**
        * @Blog Single Post Comment
        *
        * @Hook restrofood_single_post_comments_show_wrap
        *
        * @Hooked restrofood_single_post_comments_show_wrap_cb
        */
        do_action( 'restrofood_single_post_comments_show_wrap' );

    echo '</div>';