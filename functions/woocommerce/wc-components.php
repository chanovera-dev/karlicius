<?php 

// Estilos para los archivos de la tienda
function shop_styles() {
    if ( is_shop() ) {
        wp_dequeue_style( 'wp-block-library' );
        wp_enqueue_style( 'shop-styles', get_template_directory_uri() . '/assets/css/shop.css' );
    }
}
add_action( 'wp_enqueue_scripts', 'shop_styles' );