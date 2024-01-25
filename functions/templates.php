<?php

// Estilos para la página archivo                                                           
function karlicius_posts_styles() {
    if ( is_home() or is_page_template('home.php') or is_archive() or is_search() ) {
        wp_enqueue_style( 'posts-styles', get_template_directory_uri() . '/assets/css/posts.css' );
        wp_enqueue_style( 'pagination-styles', get_template_directory_uri() . '/assets/css/pagination.css' );
        wp_enqueue_style( 'sidebar-styles', get_template_directory_uri() . '/assets/css/sidebar.css' );
    }
}
add_action( 'wp_enqueue_scripts', 'karlicius_posts_styles' );



// Estilos para todos los artículos
function single_styles() {
    if ( is_single() ) {
        wp_enqueue_style( 'single-styles', get_template_directory_uri() . '/assets/css/single.css' );
        wp_enqueue_style( 'sidebar-styles', get_template_directory_uri() . '/assets/css/sidebar.css' );
    }
}
add_action( 'wp_enqueue_scripts', 'single_styles' );