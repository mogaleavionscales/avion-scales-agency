<?php
if (!defined('ABSPATH')) {
    exit;
}

function avion_scales_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 300,
        'flex-height' => true,
        'flex-width'  => true,
    ));
}
add_action('after_setup_theme', 'avion_scales_setup');

function avion_scales_scripts() {
    wp_enqueue_style('avion-style', get_stylesheet_uri(), array(), '1.0.0');
}
add_action('wp_enqueue_scripts', 'avion_scales_scripts');
