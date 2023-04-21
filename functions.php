<?php

function register_scripts() {
    wp_enqueue_style('develtio', get_stylesheet_directory_uri() . '/style.css');

    wp_enqueue_style('main', get_stylesheet_directory_uri() . '/css/main.css');
    wp_enqueue_style('rwd', get_stylesheet_directory_uri() . '/css/rwd.css');

    wp_enqueue_script('scripts', get_stylesheet_directory_uri() . '/js/scripts.js', ['jquery'], false, true);
}
add_action('wp_enqueue_scripts', 'register_scripts');