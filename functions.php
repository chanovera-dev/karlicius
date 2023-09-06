<?php

// carga componentes (estilos, javascript, etc) en el header
function load_parts_header() {
    // Estilos globales
    wp_register_style( 'global', get_template_directory_uri() . '/style.css', '', 1, 'all' );
    wp_enqueue_style( 'global' );
}
add_action( 'wp_enqueue_scripts', 'load_parts_header' );

// Carga componentes (estilos, javascript, etc) en el footer
function load_parts_footer(){
    // JS de efectos en la cabecera
    wp_enqueue_script( 'header', get_template_directory_uri() . '/assets/js/header.js', '', 1, true ); 
    /* estilos css para los formularios */
    wp_enqueue_style( 'forms-styles', get_template_directory_uri() . '/assets/css/forms.css' ); 
}
add_action( 'get_footer', 'load_parts_footer' );

// Registro de menús
register_nav_menus( 
    array(
        'primary' => __( 'Primary', 'renata' ),
        'secondary' => __( 'Secondary', 'renata' ),
        'social' => __( 'Social', 'renata' ), 
    ) 
);

// Anexo para establecer las variables de los colores
require_once(get_template_directory() . '/functions/colors.php');

// Anexo para establecer los componentes de los templates
require_once(get_template_directory() . '/functions/components.php');

// Agrega soporte para los siguientes componentes
function theme_support(){
    // Carga el título de la página en el head
    add_theme_support( 'title-tag' );
    // Permite agregar un logo personalizado al sitio
    add_theme_support( 'custom-logo' );  
    // Activa las miniaturas en los artículos en portada
    add_theme_support( 'post-thumbnails' );  
}
add_action( 'after_setup_theme', 'theme_support' );

// Delimita el tamaño del excerpt 
function limite_excerpt($limite) { return 15; }
add_filter ('excerpt_length', 'limite_excerpt', 999);

// activa woocommerce
if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
    require_once(get_template_directory() . '/functions/woocommerce.php');
} else {}