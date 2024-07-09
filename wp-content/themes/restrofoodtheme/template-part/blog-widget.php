<?php
    echo '<!-- Single Blog -->';
    echo '<div class="single-blog-item">';
        echo '<!-- Blog Image -->';
        /**
        * @Blog Post Thumbnail
        *
        * @Hook restrofood_blog_posts_thumb
        *
        * @Hooked restrofood_blog_posts_thumb_cb
        */
        do_action( 'restrofood_blog_posts_thumb' );
        echo '<!-- End Blog Image -->';

        echo '<div class="blog-content">';
            echo restrofood_anchor_tag(array(
                'url'	=> esc_url( restrofood_blog_date_permalink() ),
                'text'	=> esc_html( get_the_time( 'd M Y' ) ),
                'class' => esc_attr( 'posted' ),
            ));

            if( get_the_title() ){
				echo '<h3><a href="'.esc_url( get_the_permalink() ).'">'.wp_kses_post( get_the_title() ).'</a></h3>';
			}

            /**
			* @Blog Read More Button
			*
			* @Hook restrofood_blog_read_more_button
			*
			* @Hooked restrofood_blog_read_more_button_cb
			*/
			do_action( 'restrofood_blog_read_more_button' );
        echo '</div>';
    echo '</div>';
    echo '<!-- End Single Blog -->';