<?php

function custom_logo_setup() {
    add_theme_support('custom-logo', array(
        'height'      => 100, // Suggested height
        'width'       => 300, // Suggested width
        'flex-height' => true, // Allow flexible height
        'flex-width'  => true, // Allow flexible width
    ));
}
add_action('after_setup_theme', 'custom_logo_setup');

function register_menus() {
    register_nav_menus(array(
        'primary' => 'Primary Menu',
    ));
}
add_action('after_setup_theme', 'register_menus');