<?php /* Template name: Conocer */ get_header(); ?>
<main id="main">
    <div class="container">
        <section class="section padding-section">
            <ul class="slideshow">
                <li class="slide">¿Te diagnosticaron cáncer?</li>
                <li class="slide">¿Alguien en tu familia es paciente oncológico?</li>
                <li class="slide">¿Tienes algún tumor y aún no te diagnostican?</li>
            </ul>
        </section>
    </div>
    <div class="container">
        <section class="section padding-section">
            <img src="<?php ?>" alt="foto" srcset="">
            <ul class="about-list">
                <li><a href="#">Quienes somos</a></li>
                <li><a href="#">Qué hacemos</a></li>
            </ul>
        </section>
    </div>
    <div class="container">
        <section class="section padding-section">
            <ul class="resources-list">
                <li><a href="#">Recursos</a></li>
                <li><a href="#"></a>Grupos</li>
                <li><a href="#"></a>Ayuda</li>
            </ul>
        </section>
    </div>
    <div class="container">
        <section class="section padding-section">
            <?php
                global $post;
                
                $last_posts = get_posts(array('posts_per_page' => 2));
                
                foreach ( $last_posts as $post ) :
                setup_postdata( $post );
            ?>
            
            <article class="article">
                <?php 
                    if ( has_post_thumbnail() == false ) :
                        echo '<img class="thumbnail" src="'.get_template_directory_uri().'/assets/img/thumbnail.webp" alt="Miniatura por defecto" loading="lazy" width="300" height="200">';
                    else:
                        echo '<img class="thumbnail" src="'; the_post_thumbnail_url( 'media' ); echo '" alt="Imagen del artículo" loading="lazy" width="300" height="200">';
                    endif;
                ?>
                <div class="content">
                    <?php include(TEMPLATEPATH . '/parts/widgets/publicate-date.php'); ?>
                    <a class="permalink" href="<?php the_permalink() ?>" target="_blank"><?php the_title( '<h3 class="title">', '</h3>' ); ?></a>
                    <?php the_excerpt(); ?>
                </div>
                
            </article>
            
            <?php endforeach;
                wp_reset_postdata();
            ?>
        </section>
    </div>
</main>
<?php get_footer(); ?>