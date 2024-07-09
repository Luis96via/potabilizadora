<?php
/**
 * Displays the post header
 * @since Wavio 1.0
 */
?>

<header class="entry-header">

    <?php

    the_title('<h5 class="entry-title">', '</h5>');

    /**
     * Allow child themes and plugins to filter the display of the categories in the entry header.
     *
     * @param bool   Whether to show the categories in header, Default true.
     * @since Wavio 1.0
     *
     */
    $show_categories = apply_filters('wavio_show_categories_in_entry_header', true);

    if (true === $show_categories && has_category()) {
        ?>

        <div class="entry-categories">
            <span class="screen-reader-text"><?php esc_html_e('Categories', 'wavio'); ?></span>
            <div class="entry-categories-inner mb-3">
                <?php the_category(', '); ?>
            </div>
        </div>

        <?php
    }
    ?><div class="entry-excerpt"><?php the_excerpt(); ?></div><div class="blog-tile-wave"></div><?php
    // Default to displaying the post meta.
    wavio_the_post_meta(get_the_ID(), 'single-top');

    ?>

</header>
