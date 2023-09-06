<?php
    get_header();
    echo '<main id="main">';
    if ( have_posts() ){  
        echo '<section class="container main-content"><div class="section padding-section archive-products">';
        while( have_posts() ){         
            the_post();
            get_template_part( 'templates/content', 'products' );          
        }
        echo '</div>';      
    } else {
        echo '<section class="container"><div class="section">' . '<p>' . __('Actualmente no hay artículos en esta tienda', 'renata') . '</p>' . '</div>';
    }
    echo '</section></main>';
    get_footer();