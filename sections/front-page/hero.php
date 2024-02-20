<div id="hero" class="background-hero container">
    <section class="hero section">
        <div class="intro">
            <p><?php echo get_theme_mod('presentation_name', 'Hola, soy Chano Vera'); ?></p>
            <h1><?php echo get_theme_mod('presentation_ocuppation', 'Desarrollo sitios web basados en Wordpress. Tiendas. Blogs. Servicios.'); ?></h1>
            <p class="excerpt"><?php echo get_theme_mod('presentation_excerpt', 'Me dedico a desarrollar sitios webs totalmente a la medida, siempre mejorando y entregando mejores productos.'); ?></p>
            <div class="action">
                <a href="#" id="agendar"><?php the_content(); ?></a>
                <a href=""><?php echo get_theme_mod('presentation_invitation', 'Mira mi portafolio'); ?></a>
            </div>
        </div>
        <?php if ( has_post_thumbnail() == false ) : ?>
        <div class="hero-picture">
            <img src="<?php echo get_theme_mod('img_hero', get_bloginfo('template_url') . '/assets/img/webDesign.webp'); ?>" alt="computadoras mostrando sitios web">
        </div>
        <?php else: ?>
            
        <?php endif; ?>
    </section>
    <aside class="section contact">
        <?php
            include(TEMPLATEPATH . '/sections/widgets/contact.php');
        ?>
    </aside>
</div>