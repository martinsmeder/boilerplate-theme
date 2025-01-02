<?php
// Enqueue styles and scripts
function theme_enqueue_styles() {
    wp_enqueue_style('style', get_stylesheet_uri()); // This loads your theme's main style.css
}

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

// Enable support for custom logo
function theme_custom_logo_setup() {
    add_theme_support('custom-logo', array(
        'height'      => 100, // Suggested height
        'width'       => 300, // Suggested width
        'flex-height' => true, // Allow flexible height
        'flex-width'  => true, // Allow flexible width
    ));
}

add_action('after_setup_theme', 'theme_custom_logo_setup');

// Register navigation menu
function theme_register_menus() {
    register_nav_menus(array(
        'primary' => 'Primary Menu',
    ));
}

add_action('after_setup_theme', 'theme_register_menus');