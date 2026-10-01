<?php
if (!defined('ABSPATH')) {
    exit;
}

function avion_scales_agency_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'avion_scales_agency_setup');

function avion_scales_agency_scripts() {
    wp_enqueue_style('avion-style', get_stylesheet_uri(), array(), '1.0');
}
add_action('wp_enqueue_scripts', 'avion_scales_agency_scripts');
