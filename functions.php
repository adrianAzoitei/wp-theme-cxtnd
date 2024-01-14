<?php

function cxtnd_theme_support() {
    add_theme_support('widgets');
    add_theme_support('widgets-block-editor');
    add_theme_support('wp-block-styles');
    add_theme_support('post-thumbnails');
}

function cxtnd_register_styles() {
    $version = wp_get_theme()->get("version");
    wp_enqueue_style('cxtnd-style', get_template_directory_uri().'/style.css', array(), $version, 'all');
}

function cxtnd_register_scripts() {
    if (is_front_page()) {
        $version = wp_get_theme()->get("version");
        wp_enqueue_script('rive-canvas', 'https://unpkg.com/@rive-app/canvas@2.9.1', array(), '2.9.1', true);
        wp_enqueue_script('rive-menu', get_template_directory_uri().'/assets/js/rive_menu.js', array('rive-canvas'), $version, true);
        $translation_array = array( 'templateUrl' => get_template_directory_uri() );
        wp_localize_script( 'rive-menu', 'wp_localization', $translation_array );
    }
}

function add_query_vars_filter( $vars ){
    $vars[] = "category";
    return $vars;
}

add_action('wp_enqueue_scripts', 'cxtnd_register_styles');
add_action('wp_enqueue_scripts', 'cxtnd_register_scripts');

add_action('after_setup_theme', 'cxtnd_theme_support');

add_filter('query_vars', 'add_query_vars_filter');
?>