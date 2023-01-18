<?php 

// Adding the styles to the wordpress queue

function hispanos_enqueue_styles() {
    wp_enqueue_style('hispanos-main-style', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'hispanos_enqueue_styles');

// Adding the styles to the wordpress queue
function hispanos_enqueue_scripts() {
    wp_enqueue_style('hispanos-main-style', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'hispanos_enqueue_scripts');
