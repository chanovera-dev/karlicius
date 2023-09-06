<div class="message">
    <h1>404</h1>
    <h3><?= __('No hemos encontrado la página que estás buscando.', 'renata') ?></h3>
    <p><?= __('Alguien, en algún lugar (no tú, no yo) cometió un error y el contenido que buscas ya no existe o ha sido movido.', 'renata') ?></p>
    <h3><?= __('Por favor utilice nuestro buscador para encontrar lo que busca.', 'renata') ?></h3>
    <?php get_search_form(); ?>
    <a href="<?php echo get_home_url( '/sitemap' ); ?>">
        <?= __('O consulte nuestro mapa del sitio', 'renata') ?>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
        </svg>
    </a>
</div>