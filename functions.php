<?php

add_theme_support('menus');

add_action( 'after_setup_theme', 'project_name_register_nav_menu' );

function project_name_register_nav_menu() {
    register_nav_menu( 'primary', 'Primary Menu' );
}

function project_name_enqueue_assets() {

    $jsUrl = get_template_directory_uri() . '/dist/assets/main.js';
    $jsTime = filemtime( get_template_directory() . '/dist/assets/main.js' );
    $args = array(
        'in_footer' => true,
        'strategy'  => 'defer',
    );

    $cssUrl = get_template_directory_uri() . '/dist/assets/main.css';
    $cssTime = filemtime( get_template_directory() . '/dist/assets/main.css' );

    wp_enqueue_script('my-theme', $jsUrl, ['jquery'], $jsTime, $args);
    wp_enqueue_style('my-theme', $cssUrl, [], $cssTime);
}

add_action('wp_enqueue_scripts', 'project_name_enqueue_assets');