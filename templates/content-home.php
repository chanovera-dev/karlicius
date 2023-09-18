<?php
echo '<article class="home-post">';
if ( has_post_thumbnail() == false ) :
    echo '<img class="thumbnail" src="'.get_template_directory_uri().'/assets/img/thumbnail.webp" alt="Miniatura por defecto" loading="lazy" width="300" height="200">';
else:
    echo '<img class="thumbnail" src="'; the_post_thumbnail_url( 'media' ); echo '" alt="Imagen del artículo" loading="lazy" width="300" height="200">';
endif;
echo '<div class="home-post-content"><div>';
the_category();
echo '<a class="permalink" href="'; the_permalink(); echo '" target="_blank">';
    the_title( '<h3 class="title">', '</h3>' );
echo '</a>';
the_excerpt();
echo '</div></div>';
echo '</article>';