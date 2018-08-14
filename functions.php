<?php

function theme_scripts() {

    // Theme css file
    wp_enqueue_style('bb-style-first', get_template_directory_uri() . '/style.css', array(), '0.2');   

    // Main css file
    wp_enqueue_style('bb-main-first', get_template_directory_uri() . '/src/css/main.css', array(), '0.2');
}
add_action( 'wp_enqueue_scripts', 'theme_scripts');

?>