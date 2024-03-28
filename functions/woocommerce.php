<?php

// Agrega soporte para woocommerce
function soporte_woocommerce(){ add_theme_support( 'woocommerce' ); }
add_action( 'after_setup_theme', 'soporte_woocommerce' );



add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );



//Disable all woocommerce stylesheets
add_filter( 'woocommerce_enqueue_styles', '__return_false' );



// mostrar el carrito en tiempo real
add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment' );

function woocommerce_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;

	ob_start();

    echo '
	<a class="counter cart-customlocation" href="'; echo esc_url(wc_get_cart_url()); echo '">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
            <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z"/>
        </svg>
        <div class="wrapper"><span class="number">'; echo sprintf ( WC()->cart->get_cart_contents_count() );  echo '</span></div>
    </a>';
	$fragments['a.cart-customlocation'] = ob_get_clean();
	return $fragments;
}



// crea un sidebar llamado woocommerce, da de baja la sidebar original y toma su lugar
function karlicius_widgets_init() {
    register_sidebar( array(
        'name'          => 'WooCommerce Sidebar',
        'id'            => 'woocommerce_sidebar',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'karlicius_widgets_init' );


 
// suplantando la sidebar de woocommerce
add_action( 'wp', function() {
    // remueve la sidebar original
    remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );

    // agrega la sidebar en las páginas de tienda, archivo, etc.
    if ( is_shop() || is_product_category() || is_tax(get_object_taxonomies( 'product' )) ) {
        // agrega la nueva sidebar en la posición 22
        add_action( 'woocommerce_before_main_content', function() {
            if ( is_active_sidebar( 'woocommerce_sidebar' ) ) {
                dynamic_sidebar( 'woocommerce_sidebar' );
            } else {
                get_sidebar( 'woocommerce' );
            }
        }, 22 );
    }
} );


// quitar el menú desplegable de ordenar por
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );

// quitar el contador de resultados
remove_action( 'woocommerce_before_shop_loop' , 'woocommerce_result_count', 20 );

// ocultar el título de las páginas de woocommerce
add_filter( 'woocommerce_show_page_title' , 'woo_hide_page_title' );
function woo_hide_page_title($title) {
    if (is_shop()) $title = false;
    return $title;
}
add_filter('woocommerce_show_page_title', 'bbloomer_hide_shop_page_title');


// A N E X O S
// Estilos particulares para los templates
require_once(get_template_directory() . '/functions/woocommerce/woocommerce-templates.php');