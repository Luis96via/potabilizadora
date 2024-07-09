<?php

$columns = get_query_var('columns');

$number_of_posts = get_query_var('number_of_posts', 0); // Custom number of posts

if (get_query_var('paged')) {

    $paged = get_query_var('paged');

} elseif (get_query_var('page')) {

    $paged = get_query_var('page');

} else {

    $paged = 1;
}

if (isset($_GET['s'])) {

    $wp_query = new WP_Query(array(
        's' => esc_sql($_GET['s']),
        'paged' => (int)$paged,
    ));
} else {

    $wp_query = new WP_Query(array(
        'post_type' => 'post',
        'paged' => (int)$paged,
    ));
}

if ($wp_query->have_posts()) {

    $i = 0;

    $col_counter = 0;

    while ($wp_query->have_posts()) {
        $i++;

        $col_counter = $col_counter + 1;

        $wp_query->the_post();


        if ($number_of_posts + 1 !== $i) {

            if ($col_counter == 1) {
                echo '<div class="row">';
            }
            get_template_part('template-parts/blog-tile');
        }

        if ($wp_query->current_post < $number_of_posts - 1) {
            if ($col_counter == $columns) {
                $col_counter = 0;
                echo '</div>';
            }
        } else {
            $add_col = $columns - $col_counter;
            $ic = 1;
            while ($ic <= $add_col) {
                $ic++;
                echo '<div class="col-lg"></div>';
            }
            echo '</div>';
        }


        if ($number_of_posts - 1 === $wp_query->current_post || $wp_query->post_count - 1 === $wp_query->current_post) {
            wp_reset_query();
            break;
        }


    }


} else {
    ?>

    <h5 class="text-center"><?php esc_html_e('Empty Blog', 'wavio'); ?></h5>
    <?php
}