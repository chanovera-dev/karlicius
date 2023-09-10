jQuery(document).ready(function($) {
    // Cuando se pasa el ratón sobre una estrella
    $('p.stars a').on('mouseenter', function() {
        // Obtenemos el número de la estrella en la que se pasó el ratón
        var starNumber = $(this).index() + 1;

        // Cambiamos la imagen de fondo de todas las estrellas anteriores
        for (var i = 1; i <= starNumber; i++) {
            $('p.stars a.star-' + i + ':before').css('background-image', 'url(<?php echo get_template_directory_uri(); ?>/assets/icons/star-fill.svg)');
        }
    });

    // Cuando se sale del área de calificación
    $('p.stars').on('mouseleave', function() {
        // Restauramos la imagen de fondo de todas las estrellas
        $('p.stars a:before').css('background-image', 'url(<?php echo get_template_directory_uri(); ?>/assets/icons/star.svg)');
    });
});
