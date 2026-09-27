<?php
function avion_scales_enqueue_styles() {
    wp_enqueue_style( 'avion-scales-style', get_stylesheet_uri(), array(), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'avion_scales_enqueue_styles' );
