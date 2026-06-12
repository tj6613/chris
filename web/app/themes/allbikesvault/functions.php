<?php
function allbikesvault_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'allbikesvault'),
    ));
}
add_action('after_setup_theme', 'allbikesvault_theme_setup');

function allbikesvault_enqueue_styles() {
    wp_enqueue_style('allbikesvault-style', get_stylesheet_uri(), array(), '1.0');
}
add_action('wp_enqueue_scripts', 'allbikesvault_enqueue_styles');
