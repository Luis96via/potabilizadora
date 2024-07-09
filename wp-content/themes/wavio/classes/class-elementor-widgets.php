<?php

if (did_action( 'elementor/loaded' )) {
    if (!class_exists('Peerduck_Elementor_Widgets')) {
        class Peerduck_Elementor_Widgets
        {
            protected static $instance = null;

            public static function get_instance()
            {
                if (!isset(static::$instance)) {
                    static::$instance = new static;
                }

                return static::$instance;
            }

            protected function __construct()
            {
                require_once('class-elementor-recent-posts.php');
                add_action('elementor/widgets/widgets_registered', [$this, 'register_widgets']);
            }

            public function register_widgets()
            {
                \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Elementor\Peerduck_Recent_Posts());
            }

        }

        add_action('init', 'peerduck_elementor_init');
        function peerduck_elementor_init()
        {
            Peerduck_Elementor_Widgets::get_instance();
        }
    }
}