<?php
    /**
     * The template for displaying product content within loops
     *
     * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
     *
     * HOWEVER, on occasion WooCommerce will need to update template files and you
     * (the theme developer) will need to copy the new files to your theme to
     * maintain compatibility. We try to do this as little as possible, but it does
     * happen. When this occurs the version of the template file will be bumped and
     * the readme will list any important changes.
     *
     * @see     https://docs.woocommerce.com/document/template-structure/
     * @package WooCommerce\Templates
     * @version 3.6.0
     */

    defined( 'ABSPATH' ) || exit;

    global $product;

    // Ensure visibility.
    if ( empty( $product ) || ! $product->is_visible() ) {
        return;
    }
    ?>
    <article <?php wc_product_class( '', $product ); ?>>
        <?php
            echo '<div class="content-wrapper">';
            if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, array(150,200)); else echo '<img src="'.wc_placeholder_img_src().'" alt="Placeholder" />'; // Imagen del producto
                the_title('<h3 class="title">', '</h3>'); // Título del producto
                echo '<div class="excerpt-wrapper">' . apply_filters( 'woocommerce_short_description', $product->post->post_excerpt ) . '</div>'; // Descripción corta del producto
            echo '</div>';
            do_action( 'woocommerce_after_shop_loop_item_title' ); // Contiene woocommerce_template_loop_rating, woocommerce_show_product_loop_sale_flash, woocommerce_template_loop_price | Rating, Saldos y Precios
            echo '<div class="button-cart-wrapper">'; 
                woocommerce_template_loop_add_to_cart( $loop->post, $product );
            echo '</div>';
            echo '<a class="link-to-product" href="' . get_permalink( $loop->post->ID ) . '" class="permalink" title="' . esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID) . '">';
                echo __('Saber más');
                echo '<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/></svg>';
            echo '</a>'; // Enlace al producto
        ?>
    </article>