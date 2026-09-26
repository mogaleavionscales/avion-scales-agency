<?php
// Avion Scales Theme Setup
function avion_scales_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'avion_scales_setup');
