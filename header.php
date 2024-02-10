<?php

echo '
<!DOCTYPE html>
<html '; language_attributes(); echo '>
    <head>
        <meta charset="'; bloginfo( 'charset' ); echo '">
        <meta name="description" content="'; bloginfo( 'description' ); echo '">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">';
        wp_head();
    echo '
    </head>
    <body id="body" '; body_class(); echo '>';
        echo '
        <header id="main-header" class="container">
            <section class="section">';
                include(TEMPLATEPATH . '/sections/header/brand.php');
                include(TEMPLATEPATH . '/sections/header/menu.php');
                if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
                    include(TEMPLATEPATH . '/sections/header/attachment-list.php');
                } else {}
                include(TEMPLATEPATH . '/sections/header/menu-button.php');
            echo '
            </section>
        </header>';