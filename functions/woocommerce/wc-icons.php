<?php

function theme_icons() {
    ?>
        <style>
            /* Inicialmente, todas las estrellas están vacías */
            .woocommerce p.stars a:before {
                content: '';
                background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/star.svg');
            }

            /* Al pasar el ratón sobre una estrella, todas las estrellas anteriores se llenan */
            .woocommerce p.stars a.star-1:hover:before,
            .woocommerce p.stars a.star-2:hover:before,
            .woocommerce p.stars a.star-3:hover:before,
            .woocommerce p.stars a.star-4:hover:before,
            .woocommerce p.stars a.star-5:hover:before {
                content: '';
                background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/star-fill.svg');
            }

            /* Al hacer clic en una estrella o agregar la clase active, todas las estrellas anteriores se llenan */
            .woocommerce p.stars a.star-1.active:before,
            .woocommerce p.stars a.star-2.active:before,
            .woocommerce p.stars a.star-3.active:before,
            .woocommerce p.stars a.star-4.active:before,
            .woocommerce p.stars a.star-5.active:before,
            .woocommerce p.stars a.star-2:hover ~ a:before,
            .woocommerce p.stars a.star-3:hover ~ a:before,
            .woocommerce p.stars a.star-4:hover ~ a:before,
            .woocommerce p.stars a.star-5:hover ~ a:before {content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/star-fill.svg');}
        </style>
    <?php
}
add_action('wp_head', 'theme_icons');