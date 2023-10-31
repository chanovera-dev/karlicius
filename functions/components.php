<?php

// componentes para las páginas de tipo 'page'
function page_styles() {
    if ( is_page() ) {
        wp_dequeue_style( 'wp-block-library' );
        wp_enqueue_style( 'sections-styles', get_template_directory_uri() . '/assets/css/sections.css' );
    }
}
add_action( 'wp_enqueue_scripts', 'page_styles' );

// Estilos para el template de la página Resume
function resume_styles() {
    if ( is_page_template('resume.php') ) {
        wp_enqueue_style( 'resume-styles', get_template_directory_uri() . '/assets/css/resume.css' );
    }
}
add_action( 'wp_enqueue_scripts', 'resume_styles' );

// Estilos para la página blog
function blog_styles() {
    if ( is_home() or is_page_template('home.php') ) {
        wp_dequeue_style( 'wp-block-library' );
        wp_enqueue_style( 'blog-styles', get_template_directory_uri() . '/assets/css/blog.css' );
        wp_enqueue_style( 'sections-styles', get_template_directory_uri() . '/assets/css/sections.css' );
        wp_enqueue_style( 'widgets-styles', get_template_directory_uri() . '/assets/css/widgets.css' );
        wp_enqueue_style( 'pagination-styles', get_template_directory_uri() . '/assets/css/pagination.css' );
    }
}
add_action( 'wp_enqueue_scripts', 'blog_styles' );

// Estilos para la página frontal
function frontpage_styles() {
    if ( is_front_page() or is_page_template('front-page.php') ) {
        wp_dequeue_style( 'wp-block-library' );
        wp_enqueue_style( 'hero-styles', get_template_directory_uri() . '/assets/css/frontpage/hero.css' ); 
    }
}
add_action( 'wp_enqueue_scripts', 'frontpage_styles' );

// Estilos para todos los artículos
function single_styles() {
    if ( is_single() ) {
        wp_enqueue_style( 'single-styles', get_template_directory_uri() . '/assets/css/single.css' );
        wp_enqueue_style( 'sections-styles', get_template_directory_uri() . '/assets/css/sections.css' );
        wp_enqueue_style( 'widgets-styles', get_template_directory_uri() . '/assets/css/widgets.css' );
        wp_enqueue_style( 'contact-styles', get_template_directory_uri() . '/assets/css/contact.css' );
    }
}
add_action( 'wp_enqueue_scripts', 'single_styles' );

// Estilos para el template de la página Contacto
function contact_styles() {
    if ( is_page_template('contact.php') ) {
        wp_enqueue_style( 'sections-styles', get_template_directory_uri() . '/assets/css/sections.css' );
        wp_enqueue_style( 'contact-styles', get_template_directory_uri() . '/assets/css/contact.css' );
        wp_enqueue_style( 'widgets-styles', get_template_directory_uri() . '/assets/css/widgets.css' );
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

// Estilos para la página archivo
function archive_styles() {
    if ( is_archive() ) {
        wp_dequeue_style( 'wp-block-library' );
        wp_enqueue_style( 'blog-styles', get_template_directory_uri() . '/assets/css/blog.css' );
        wp_enqueue_style( 'sections-styles', get_template_directory_uri() . '/assets/css/sections.css' );
        wp_enqueue_style( 'widgets-styles', get_template_directory_uri() . '/assets/css/widgets.css' );
        wp_enqueue_style( 'pagination-styles', get_template_directory_uri() . '/assets/css/pagination.css' );
    }
}
add_action( 'wp_enqueue_scripts', 'archive_styles' );

// Estilos para la página búsqueda
function search_styles() {
    if ( is_search() ) {
        wp_dequeue_style( 'wp-block-library' );
        wp_enqueue_style( 'blog-styles', get_template_directory_uri() . '/assets/css/blog.css' );
        wp_enqueue_style( 'sections-styles', get_template_directory_uri() . '/assets/css/sections.css' );
        wp_enqueue_style( 'widgets-styles', get_template_directory_uri() . '/assets/css/widgets.css' );
        wp_enqueue_style( 'pagination-styles', get_template_directory_uri() . '/assets/css/pagination.css' );
    }
}
add_action( 'wp_enqueue_scripts', 'search_styles' );

// Estilos para la página 404
function page404_styles() {
    if ( is_404() ) {
        wp_enqueue_style( 'sections-styles', get_template_directory_uri() . '/assets/css/sections.css' );
        wp_enqueue_style( 'contact-styles', get_template_directory_uri() . '/assets/css/error404.css' );
        wp_enqueue_style( 'widgets-styles', get_template_directory_uri() . '/assets/css/widgets.css' );
        // habilita contact form 7 en esta plantilla
        if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
            wpcf7_enqueue_scripts();
          }
        if ( function_exists( 'wpcf7_enqueue_styles' ) ) {
            wpcf7_enqueue_styles();
        }
    }
}
add_action( 'wp_enqueue_scripts', 'page404_styles' );

// Estilos para la página frontal
function conocer_styles() {
    if ( is_page_template('conocer.php') ) {
        wp_dequeue_style( 'wp-block-library' );
        wp_enqueue_style( 'conocer-styles', get_template_directory_uri() . '/assets/css/conocer.css' ); 
    }
}
add_action( 'wp_enqueue_scripts', 'conocer_styles' );