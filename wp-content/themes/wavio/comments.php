<?php
/**
 * The template file for displaying the comments and comment form.
 * @since Wavio 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
*/
if (post_password_required()) {
    return;
}

if ($comments) {
    ?>

    <div class="comments" id="comments">

        <?php
        $comments_number = absint(get_comments_number());
        ?>

        <div class="comments-header section-inner small max-percentage">

            <h4 class="comment-reply-title">
                <?php
                if (!have_comments()) {
                    esc_html_e('Leave a comment', 'wavio');
                } elseif (1 === $comments_number) {
                    /* translators: %s: Post title. */
                    printf(esc_html_x('One reply on &ldquo;%s&rdquo;', 'comments title', 'wavio'), get_the_title());
                } else {
                    printf(
                    /* translators: 1: Number of comments, 2: Post title. */
                        esc_html(_nx(
                            '%1$s reply on &ldquo;%2$s&rdquo;',
                            '%1$s replies on &ldquo;%2$s&rdquo;',
                            $comments_number,
                            'comments title',
                            'wavio'
                        )),
                        number_format_i18n($comments_number),
                        get_the_title()
                    );
                }

                ?>
            </h4><!-- .comments-title -->

        </div><!-- .comments-header -->

        <div class="comments-inner section-inner thin max-percentage">

            <?php
            wp_list_comments(
                array(
                    'walker' => new wavio_Walker_Comment(),
                    'avatar_size' => 120,
                    'style' => 'div',
                )
            );

            $comment_pagination = paginate_comments_links(
                array(
                    'echo' => false,
                    'end_size' => 0,
                    'mid_size' => 0,
                    'next_text' => esc_html__('Newer Comments', 'wavio') . ' <span aria-hidden="true">&rarr;</span>',
                    'prev_text' => '<span aria-hidden="true">&larr;</span> ' . esc_html__('Older Comments', 'wavio'),
                )
            );

            if ($comment_pagination) {
                $pagination_classes = '';

                // If we're only showing the "Next" link, add a class indicating so.
                if (false === strpos($comment_pagination, 'prev page-numbers')) {
                    $pagination_classes = ' only-next';
                }
                ?>

                <nav class="comments-pagination pagination<?php echo esc_attr($pagination_classes); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- static output ?>"
                     aria-label="<?php esc_attr_e('Comments', 'wavio'); ?>">
                    <?php echo wp_kses($comment_pagination, 'post'); ?>
                </nav>

                <?php
            }
            ?>

        </div><!-- .comments-inner -->

    </div><!-- comments -->

    <?php
}

if (comments_open() || pings_open()) {

    if ($comments) {
        echo '<hr class="styled-separator" aria-hidden="true" />';
    }

    // Change comments reply title to h4.
    comment_form(
        array(
            'class_form' => 'section-inner',
            'title_reply_before' => '<h4 id="reply-title" class="comment-reply-title">',
            'title_reply_after' => '</h4>',
        )
    );

} elseif (is_single()) {

    if ($comments) {
        echo '<hr class="styled-separator" aria-hidden="true" />';
    }

    ?>

    <div class="comment-respond" id="respond">
        <p class="comments-closed"><?php esc_html_e('Comments are closed.', 'wavio'); ?></p>
    </div><!-- #respond -->

    <?php
}
