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
    if ( is_single() or is_page() ) {
        wp_enqueue_style( 'single-styles', get_template_directory_uri() . '/assets/css/single.css' );
        wp_enqueue_style( 'sidebar-styles', get_template_directory_uri() . '/assets/css/sidebar.css' );
    }
}
add_action( 'wp_enqueue_scripts', 'single_styles' );



// Estilos para la página 404
function kenko_page404_styles() {
    if ( is_404() ) {
        wp_enqueue_style( 'error404-styles', get_template_directory_uri() . '/assets/css/error404.css' );
    }
}
add_action( 'wp_enqueue_scripts', 'kenko_page404_styles' );



// Estilos para el template de la página Contacto
function contact_styles() {
    if ( is_page_template('contact.php') ) {
        wp_enqueue_style( 'contact-styles', get_template_directory_uri() . '/assets/css/contact.css' );
        // habilita contact form 7 en esta plantilla
        if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
            wpcf7_enqueue_scripts();
          }
        if ( function_exists( 'wpcf7_enqueue_styles' ) ) {
            wpcf7_enqueue_styles();
        }
    }
}
add_action( 'wp_enqueue_scripts', 'contact_styles' );



// estilos para el template de la página frontal
function frontpage_styles() {
    if ( is_front_page() or is_page_template('front-page.php') ) {
        wp_enqueue_style( 'frontpage-styles', get_template_directory_uri() . '/assets/css/frontpage.css' );   
    }
}
add_action( 'wp_enqueue_scripts', 'frontpage-styles' );