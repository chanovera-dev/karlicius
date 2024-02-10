<div id="hero" class="container">
    <section class="section">
        <div class="intro">
            <p><?php echo esc_html__('Hola, soy Chano Vera', 'karlicius'); ?></p>
            <h1><?php echo esc_html__('Desarrollo sitios web basados en Wordpress. Tiendas. Blogs. Servicios.', 'karlicius'); ?></h1>
            <p class="excerpt"><?php echo esc_html__('Me dedico a desarrollar sitios webs totalmente a la medida, siempre mejorando y entregando mejores productos.', 'karlicius'); ?></p>
            <div class="action">
                <button id="agendar" class="button" onclick="agendar()"><?php echo esc_html__('Agenda conmigo', 'karlicius'); ?></button>
                <a href=""><?php echo esc_html__('Mira mi portafolio', 'karlicius'); ?></a>
            </div>
        </div>
        <div class="hero-picture">
            <img src="<?php echo get_theme_mod('img_hero', get_bloginfo('template_url') . '/assets/img/webDesign.webp'); ?>" alt="computadoras mostrando sitios web">
        </div>
    </section>
</div>