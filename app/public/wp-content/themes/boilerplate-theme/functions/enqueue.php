<?php

function enqueue_styles() {
        // Enqueue global styles
        wp_enqueue_style('index', get_template_directory_uri() . '/styles/index.css', array(), '1.0');
        wp_enqueue_style('header', get_template_directory_uri() . '/styles/header.css', array(), '1.0');
        wp_enqueue_style('footer', get_template_directory_uri() . '/styles/footer.css', array(), '1.0');

        // Enqueue specific styles
        // ...
}
add_action('wp_enqueue_scripts', 'enqueue_styles');