<?php

function cxtnd_register_styles() {
    $version = wp_get_theme()->get("version");
    wp_enqueue_style('cxtnd-style', get_template_directory_uri().'/style.css', array(), $version, 'all');
}

function cxtnd_register_scripts() {
    $version = wp_get_theme()->get("version");
    wp_enqueue_script('rive-canvas', 'https://unpkg.com/@rive-app/canvas@2.9.1', array(), '2.9.1', true);
    wp_enqueue_script('rive-menu', get_template_directory_uri().'/assets/js/rive_menu.js', array('rive-canvas'), "2.5", true);
    $translation_array = array( 'templateUrl' => get_template_directory_uri() );
    wp_localize_script( 'rive-menu', 'wp_localization', $translation_array );
}

function add_query_vars_filter( $vars ){
    $vars[] = "category";
    return $vars;
}

add_action('wp_enqueue_scripts', 'cxtnd_register_styles');
add_action('wp_enqueue_scripts', 'cxtnd_register_scripts');

add_filter('query_vars', 'add_query_vars_filter');
?>