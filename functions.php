<?php

// carga componentes (estilos, javascript, etc) en el header
function load_components_header() {
    // Estilos globales
    wp_dequeue_style( 'wp-block-library' );
    wp_register_style( 'global', get_template_directory_uri() . '/style.css', '', 1, 'all' );
    wp_enqueue_style( 'global' );
}
add_action( 'wp_enqueue_scripts', 'load_components_header' );




// Carga componentes (estilos, javascript, etc) en el footer
function load_components_footer(){
    // JS de efectos en la cabecera
    wp_enqueue_script( 'header-scripts', get_template_directory_uri() . '/assets/js/header.js', array(), '1.0', true );
}
add_action( 'get_footer', 'load_components_footer' );



function karlicius_theme_support(){ 
    
    add_theme_support( 'title-tag' );
    
    add_theme_support( 'automatic-feed-links' );
    
    add_theme_support( 'custom-logo', array( 
    'height' => 240,
    'width' => 240, 
    'flex-height' => true,
    ) );

    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );
    
    add_theme_support( 'post-formats', array(
        'aside',
        'image', 
        'video',
        'quote',
        'link',
        'gallery',
        'status',
        'audio',
        'chat',
    ) );
    
    add_theme_support( 'customize-selective-refresh-widgets' );

    add_theme_support( 'post-thumbnails', array( 'post' ) ); // Add it for posts
	set_post_thumbnail_size( 200, 200, true ); // Normal post thumbnails, hard crop mode
	add_image_size( 'post-image', 600, 200, true ); // Post thumbnails, hard crop mode
	add_image_size( 'slider-image', 920, 300, true ); // Post thumbnails for slider, hard crop mode

	add_theme_support('custom-background');

} 
add_action('after_setup_theme', 'karlicius_theme_support');



// Registro de menús
register_nav_menus( 
    array(
        'primary' => __( 'Primary', 'karlicius' ),
        'secondary' => __( 'Secondary', 'karlicius' ),
        'social' => __( 'Social', 'karlicius' ), 
    ) 
);



// A N E X O S
// establecer los breakpoints
require_once(get_template_directory() . '/functions/breakpoints.php');
// Anexo para definir los componentes personalizados en las plantillas
require_once(get_template_directory() . '/functions/templates.php');
// Anexo para definir los backgrounds en las plantillas
require_once(get_template_directory() . '/functions/backgrounds.php');
/* anexo para cargar el css que se usa en todas las páginas */
require_once(get_template_directory() . '/functions/global.php');
/* anexo para cargar el css de formularios */
require_once(get_template_directory() . '/functions/forms.php');



// Delimita el tamaño del excerpt a 25 palabras
function limite_excerpt($limite) { return 20; }
add_filter ('excerpt_length', 'limite_excerpt', 999);



// salida de wp_archive_list() personalizada
function custom_archives_link($link_html, $url, $text, $format, $before, $after) {
    // Modify the $link_html to customize the link structure
    $custom_link = '<li><a href="' . esc_url($url) . '">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-archive" viewBox="0 0 16 16">
        <path d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1V2zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5H2zm13-3H1v2h14V2zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
    </svg>
    ' . $text . '</a></li>';
    // Return the modified link HTML
    return $before . $custom_link . $after;
}
add_filter('get_archives_link', 'custom_archives_link', 10, 6);



// deshabilita contact form 7 en todas las páginas | revisar components.php para ver que páginas tienen habilitado contact form 7
add_filter( 'wpcf7_load_js', '__return_false' );
add_filter( 'wpcf7_load_css', '__return_false' );



function remove_custom_styles(){
    if (!is_single()) {
        wp_dequeue_style("enlighterjs");
        wp_deregister_style("enlighterjs");
        wp_dequeue_style("katex");
        wp_deregister_style("katex");
    }
    wp_dequeue_style("wp-emoji-styles");
    wp_deregister_style("wp-emoji-styles");
    wp_dequeue_style("core-block-supports-duotone");
    wp_deregister_style("core-block-supports-duotone");
}
add_action("wp_print_styles", "remove_custom_styles");



function ver_archivos_cargados(){
    global $wp_styles;
    global $wp_scripts;
    echo 'STYLES:';
    echo '<pre>';
    var_dump($wp_styles->queue);
    echo '</pre>';
    echo 'SCRIPTS:';
    echo '<pre>';
    var_dump($wp_scripts->queue);
    echo '</pre>';
}
add_action("wp_footer", "ver_archivos_cargados");