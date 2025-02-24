<?php

require_once "vendor/autoload.php";

use Kucrut\Vite;

add_theme_support('menus');
add_theme_support( 'custom-logo' );

add_action( 'after_setup_theme', function () {
    register_nav_menu( 'primary', 'Primary Menu' );
} );

add_action( 'wp_enqueue_scripts', function (): void {
    Vite\enqueue_asset(
        __DIR__ . '/dist',
        'main.js',
        [
            'handle' => 'mytheme-handle',
            'dependencies' => ['jquery'],
            'css-dependencies' => [],
            'css-media' => 'all',
            'css-only' => false,
            'in-footer' => true,
        ]
    );
} );

add_filter('show_admin_bar', '__return_false');