<?php 
get_header();

echo '
<main id="main">
    <div class="container">
        <section class="section">';
        
            if ( have_posts() ) {

                echo '
                <div class="posts__wrapper">

                    <div class="posts">';
                    
                    while( have_posts() ) {

                        the_post();
                        get_template_part( 'templates/content', 'archive' );

                    }
                    
                    echo '
                    </div>';
                    the_posts_pagination();

                echo '
                </div>';

                include(TEMPLATEPATH . '/sections/sidebars/blog__sidebar.php');

            } else {

                echo '<p>' . esc_html__('No se encontraron artículos', 'karlicius') . '</p>';
                
            }

        echo '
        </section>
    </div>
</main>';

get_footer();