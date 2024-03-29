<?php

// carga componentes (estilos, javascript, etc) en el header
function load_components_header() {
    // Estilos globales
    wp_dequeue_style( 'wp-block-library' );
    wp_deregister_script('wp-polyfill');
    wp_deregister_script('regenerator-runtime');
    //wp_register_style( 'global', get_template_directory_uri() . '/style.css', '', 1, 'all' );
    //wp_enqueue_style( 'global' );
}
add_action( 'wp_enqueue_scripts', 'load_components_header' );




// Carga componentes (estilos, javascript, etc) en el footer
function load_components_footer(){
    // JS de efectos en la cabecera
    wp_enqueue_script( 'header-scripts', get_template_directory_uri() . '/assets/js/header.js', array(), '1.0', true );
    wp_dequeue_style( 'wc-blocks-style' );
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

    add_theme_support( 'post-thumbnails', array( 'post', 'page' ) ); // Add it for posts
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
// anexo para activar woocommerce
if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
    require_once(get_template_directory() . '/functions/woocommerce.php');
} else {}



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



// deshabilita contact form 7 en todas las páginas | revisar templates.php para ver que páginas tienen habilitado contact form 7
add_filter( 'wpcf7_load_js', '__return_false' );
add_filter( 'wpcf7_load_css', '__return_false' );



// deshabilita estilos
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



// deshabilita scripts
function remove_custom_scripts() {
    if (!is_single()) {
        wp_dequeue_script('katex');
        wp_dequeue_script('enlighterjs');
    }
}
add_action('wp_print_scripts', 'remove_custom_scripts');



// mueve los scripts del head al footer
function mover_jquery_al_footer( $wp_scripts ) {
    if ( ! is_admin() ) {
        $wp_scripts->add_data( 'jquery', 'group', 1 );
        $wp_scripts->add_data( 'jquery-core', 'group', 1 );
        $wp_scripts->add_data( 'jquery-migrate', 'group', 1 );
    }
}
add_action( 'wp_default_scripts', 'mover_jquery_al_footer' );



// Registra los sidebars
function widgets_areas(){
    
    register_sidebar(
        array(
            'name' => __('Blog Sidebar','karlicius'),
            'id' => 'sidebar-1',
            'description' => __('Sidebar Widget Area','karlicius'),
            'before_title' => '<h2>',
            'after_title' => '</h2>',
            'before_widget' => '',
            'after_widget' => '',
        )
    );
    
    register_sidebar(
        array(
            'name' => __('Post Sidebar','karlicius'),
            'id' => 'sidebar-2',
            'description' => __('Sidebar Widget Area','karlicius'),
            'before_title' => '<h2>',
            'after_title' => '</h2>',
            'before_widget' => '',
            'after_widget' => '',
        )
    );
    
    register_sidebar(
        array(
            'name' => __('Biografía','karlicius'),
            'id' => 'biography',
            'description' => __('Sidebar Widget Area','karlicius'),
            'before_title' => '<h2>',
            'after_title' => '</h2>',
            'before_widget' => '',
            'after_widget' => '',
        )
    );

    register_sidebar(
        array(
            'name' => __('Trabajos','karlicius'),
            'id' => 'works',
            'description' => __('Sidebar Widget Area','karlicius'),
            'before_title' => '<h2>',
            'after_title' => '</h2>',
            'before_widget' => '',
            'after_widget' => '',
        )
    );
    
    register_sidebar(
        array(
            'name' => __('Certificaciones','karlicius'),
            'id' => 'certifications',
            'description' => __('Sidebar Widget Area','karlicius'),
            'before_title' => '<h2>',
            'after_title' => '</h2>',
            'before_widget' => '',
            'after_widget' => '',
        )
    );
    
}
add_action( 'widgets_init', 'widgets_areas' );



// Añade contenido debajo de los commentarios de los artículos
// function karlicius_content_into_comments(){ 
//     include (TEMPLATEPATH. '/dir/content'); 
// }
// add_action( 'comment_form', 'karlicius_content_into_comments' );



// function ver_archivos_cargados(){
//     global $wp_styles;
//     global $wp_scripts;
//     echo 'STYLES:';
//     echo '<pre>';
//     var_dump($wp_styles->queue);
//     echo '</pre>';
//     echo 'SCRIPTS:';
//     echo '<pre>';
//     var_dump($wp_scripts->queue);
//     echo '</pre>';
// }
// add_action("wp_footer", "ver_archivos_cargados");