<?php

function enqueue_styles() {
        // Enqueue global styles
        wp_enqueue_style('index', get_template_directory_uri() . '/styles/index.css', array(), '1.0');
        wp_enqueue_style('header', get_template_directory_uri() . '/styles/header.css', array(), '1.0');
        wp_enqueue_style('main', get_template_directory_uri() . '/styles/main.css', array(), '1.0');
        wp_enqueue_style('footer', get_template_directory_uri() . '/styles/footer.css', array(), '1.0');

        // Enqueue specific styles
        // ...
}
add_action('wp_enqueue_scripts', 'enqueue_styles');

function enqueue_scripts() {
        wp_enqueue_script('navigation', get_template_directory_uri() . '/js/navigation.js', array('jquery'), '1.0');
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');

function enqueue_fontawesome() {
        wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css');
}
add_action('wp_enqueue_scripts', 'enqueue_fontawesome');