<?php

    echo '
    <article class="post">';

    if ( has_post_thumbnail() == false ) :
        echo '
        <img class="thumbnail" src="'.get_template_directory_uri().'/assets/img/thumbnail.webp" alt="Miniatura por defecto" loading="lazy" width="300" height="200">';
    else:
        echo 
        '<img class="thumbnail" src="'; the_post_thumbnail_url( 'media' ); echo '" alt="Imagen del artículo" loading="lazy" width="300" height="200">';
    endif;

    echo '<div class="date">' . get_the_date() . '</div>';

    echo '
        <a class="permalink" href="'; the_permalink(); echo '" target="_blank">'; the_title( '<h2 class="title">', '</h2>' ); echo '</a>';
        the_excerpt();
            
    echo '
    </article>'; 