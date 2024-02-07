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
        include(TEMPLATEPATH . '/sections/header/menu-mobile.php');
        echo '
        <header id="main-header" class="container">
            <section class="section">';
                include(TEMPLATEPATH . '/sections/header/brand.php');
                include(TEMPLATEPATH . '/sections/header/menu.php');
                include(TEMPLATEPATH . '/sections/header/attachment-list.php');
                include(TEMPLATEPATH . '/sections/header/menu-button.php');
            echo '
            </section>
        </header>';