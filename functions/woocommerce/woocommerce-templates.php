<?php

// Estilos para los archivos de la tienda
function shop_styles() {
    if ( is_shop() || is_product_category() || is_tax(get_object_taxonomies( 'product' )) ) {

        // estilos css para la tienda
        wp_enqueue_style( 'shop-styles', get_template_directory_uri() . '/assets/css/woocommerce/shop.css' );
        /* listas */
        wp_enqueue_style( 'lists-styles', get_template_directory_uri() . '/assets/css/woocommerce/lists.css' );
        /* estilos css para la paginación */
        wp_enqueue_style( 'pagination-styles', get_template_directory_uri() . '/assets/css/pagination.css' );

        // unhook the WooCommerce wrappers
        remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
        remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
        // crea contenedores para envolver antes de el breadcrumbs hasta después de la sidebar
        add_action('woocommerce_before_main_content', 'karlicius_wrapper_start', 10);
        add_action('woocommerce_sidebar', 'karlicius_wrapper_end', 10);
        // antes del breadcrumb
        function karlicius_wrapper_start() {
            echo '<main id="main"><div class="container"><section class="section">';
        }
        // después de la sidebar original, termina en posición 10
        function karlicius_wrapper_end() {
            echo '</section></div></main>';
        }



        // abre un contenedor para la sidebar
        add_action('woocommerce_before_main_content', 'sidebar_container_start', 21);
        function sidebar_container_start() {
            echo '<aside id="sidebar-woocommerce--desktop">';
        }
        // cierra el contenedor de la sidebar
        add_action('woocommerce_before_main_content', 'sidebar_container_end', 23);
        function sidebar_container_end() {
            echo '</aside>';
        }
        
    }
}
add_action( 'wp_enqueue_scripts', 'shop_styles' );