<?php

function theme_setup(){
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'theme_setup');


function custom_excerpt_length(){
    return 15;
}

add_filter('excerpt_length', 'custom_excerpt_length');

function add_theme_scripts(){
    wp_enqueue_style('main-stylesheet', get_stylesheet_url());

    wp_enqueue_style('magic', get_template_directory_url().'/css/magin.css');

    wp_enqueue_script('main', get_template_directory_url().'/js/main.js');
}

add_action('wp_enqueue_scripts', 'add_theme_scripts');


?>