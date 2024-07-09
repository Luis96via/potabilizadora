<?php
/*
 * Generates inline CSS from Customizer settings.
 */
if (!function_exists('wavio_get_customizer_css')) {
    function wavio_get_customizer_css()
    {
        ob_start();

        get_template_part('template-parts/header-variables');

        echo '#header-wave {margin-bottom: -1px;}';
        echo '#magic-search .search-submit {display: none;}';
        echo '@media (min-width: 1025px) and (max-width: 1460px) {:root {zoom: 0.85;}}'; // Fix MacBook 13-inch viewport size.
        echo '#footer-wave {margin-top: -1px; margin-bottom: -2px; margin-left: -2px; margin-right: -2px;}';
        echo '.onsale .onsale-svg {height: 100%;}';

        if (get_theme_mod('meta_cat_switcher', false)) {
            echo '.entry-categories {display: none;}';
        }

        if (get_theme_mod('meta_author_switcher', false)) {
            echo '.post-author {display: none;}';
        }

        if (get_theme_mod('meta_date_switcher', false)) {
            echo '.post-date {display: none;}';
        }

        if (get_theme_mod('meta_comm_switcher', false)) {
            echo '.post-comment-link {display: none;}';
        }

        if (get_theme_mod('meta_pr_cat_switcher', false)) {
            echo '.product_meta .posted_in {display: none;}';
        }

        return ob_get_clean();
    }
}