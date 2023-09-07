<?php

//Show cart contents / total Ajax
add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment' );
function woocommerce_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;
	ob_start();
	?>
	<a class="cart-customlocation" href="<?php echo esc_url(wc_get_cart_url()); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>">
	    <?php echo sprintf(_n('%d', '%d', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?>
	</a>
	<?php
	$fragments['a.cart-customlocation'] = ob_get_clean();
	return $fragments;
}

// Agrega soporte para woocommerce
function soporte_woocommerce(){ add_theme_support( 'woocommerce' ); }
add_action( 'after_setup_theme', 'soporte_woocommerce' );

add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );

// Reemplaza los números de las valoraciones por iconos de estrellas
add_filter('woocommerce_get_star_rating_html', 'replace_star_ratings', 10, 2);
function replace_star_ratings($html, $rating) {
    $html = ""; // Erase default HTML
    for($i = 0; $i < 5; $i++) {
        $html .= $i < $rating ? '<svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16"><path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/></svg>' : '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16"><path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/></svg>';
    }
    return $html;
}

// Estilos particulares
require_once(get_template_directory() . '/functions/woocommerce/wc-components.php');

//Disable all woocommerce stylesheets
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

function disable_wp_blocks() {
	$wstyles = array("wc-blocks-style","wc-blocks-style-active-filters","wc-blocks-style-add-to-cart-form","wc-blocks-packages-style","wc-blocks-style-all-products","wc-blocks-style-all-reviews","wc-blocks-style-attribute-filter","wc-blocks-style-breadcrumbs","wc-blocks-style-catalog-sorting","wc-blocks-style-customer-account","wc-blocks-style-featured-category","wc-blocks-style-featured-product","wc-blocks-style-mini-cart","wc-blocks-style-price-filter","wc-blocks-style-product-add-to-cart","wc-blocks-style-product-button","wc-blocks-style-product-categories","wc-blocks-style-product-image","wc-blocks-style-product-image-gallery","wc-blocks-style-product-query","wc-blocks-style-product-results-count","wc-blocks-style-product-reviews","wc-blocks-style-product-sale-badge","wc-blocks-style-product-search","wc-blocks-style-product-sku","wc-blocks-style-product-stock-indicator","wc-blocks-style-product-summary","wc-blocks-style-product-title","wc-blocks-style-rating-filter","wc-blocks-style-reviews-by-category","wc-blocks-style-reviews-by-product","wc-blocks-style-product-details","wc-blocks-style-single-product","wc-blocks-style-stock-filter","wc-blocks-style-cart","wc-blocks-style-checkout","wc-blocks-style-mini-cart-contents","classic-theme-styles-inline");
	
	foreach ($wstyles as $wstyle){
	 wp_deregister_style($wstyle);  
	}
	
	$wscripts = array("wc-blocks-middleware","wc-blocks-data-store");
	 foreach ($wscripts as $wscript){
	 wp_deregister_script($wscript);  
	}
}
add_action( "init", "disable_wp_blocks",100 );

add_filter( 'comment_form_defaults', 'render_pros_cons_fields_for_anonymous_users', 10, 1 );
add_action( 'comment_form_top', 'render_pros_cons_fields_for_authorized_users' );
function get_pros_cons_fields_html() {
	ob_start();
	?>

	<p>Prueba</p>

	<?php
	return ob_get_clean();
}

function render_pros_cons_fields_for_authorized_users() {
	if ( ! is_product() || ! is_user_logged_in() ) {
		return;
	}
	
	echo get_pros_cons_fields_html();
}

function render_pros_cons_fields_for_anonymous_users( $defaults ) {
	if ( ! is_product() || is_user_logged_in() ) {
		return;
	}
	
	$defaults['comment_notes_before'] .= get_pros_cons_fields_html();
	
	return $defaults;
}