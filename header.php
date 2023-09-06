<?php
echo '<!DOCTYPE html>
<html '; language_attributes(); echo '>
    <head>
        <meta charset="'; bloginfo( 'charset' ); echo '">
        <meta name="description" content="'; bloginfo( 'description' ); echo '">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">';
        wp_head();
    echo '</head>
    <body '; body_class(); echo '>
        <header class="container main-header">
            <section class="section header-content">';
            if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
                include(TEMPLATEPATH . '/parts/header/brand.php');
                include(TEMPLATEPATH . '/parts/header/menu.php');
                include(TEMPLATEPATH . '/parts/header/header-cart.php');
                include(TEMPLATEPATH . '/parts/header/menu-button.php');
            } else {
                include(TEMPLATEPATH . '/parts/header/brand.php');
                include(TEMPLATEPATH . '/parts/header/menu.php');
                include(TEMPLATEPATH . '/parts/header/menu-button.php');
            }
            echo '</section>
        </header>';