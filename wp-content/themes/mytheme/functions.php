<?php
// Theme setup
function mytheme_setup() {
    // Enable theme features
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('html5', ['search-form', 'gallery']);

    // Register navigation menu
    register_nav_menus([
        'primary' => __('Primary Menu', 'mytheme'),
    ]);
}
add_action('after_setup_theme', 'mytheme_setup');

// Enqueue scripts & styles
function mytheme_assets() {
    wp_enqueue_style('mytheme-style', get_stylesheet_uri());
    wp_enqueue_style('mytheme-custom', get_template_directory_uri() . '/css/custom.css', [], '1.0');
    wp_enqueue_script('mytheme-js', get_template_directory_uri() . '/js/main.js', [], '1.0', true);
}
add_action('wp_enqueue_scripts', 'mytheme_assets');

// Register Custom Post Type: Testimonials
function mytheme_register_testimonial_cpt() {
    register_post_type('testimonial', [
        'label' => 'Testimonials',
        'public' => true,
        'has_archive' => true,
        'show_in_rest' => true,
        'supports' => ['title', 'editor', 'thumbnail'],
        'menu_icon' => 'dashicons-testimonial',
    ]);
}
add_action('init', 'mytheme_register_testimonial_cpt');
