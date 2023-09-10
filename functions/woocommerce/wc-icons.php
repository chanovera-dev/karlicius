<?php

function theme_icons() {
    ?>
        <style>
            /* Inicialmente, todas las estrellas están vacías */
.woocommerce p.stars a:before {
    content: '';
    background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/star.svg');
}

/* Al pasar el ratón sobre una estrella o hacer clic, las estrellas anteriores se llenan progresivamente */
.woocommerce p.stars a.star-1.active:before,
.woocommerce p.stars a.star-2.active:before,
.woocommerce p.stars a.star-3.active:before,
.woocommerce p.stars a.star-4.active:before,
.woocommerce p.stars a.star-5.active:before {
    content: '';
    background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/star-fill.svg');
}

.woocommerce p.stars a.star-1.active:before {
    background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/star-fill.svg');
}

.woocommerce p.stars a.star-2.active:before,
.woocommerce p.stars a.star-2:hover ~ a:before {
    background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/star-fill.svg');
}

.woocommerce p.stars a.star-3.active:before,
.woocommerce p.stars a.star-3:hover ~ a:before {
    background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/star-fill.svg');
}

.woocommerce p.stars a.star-4.active:before,
.woocommerce p.stars a.star-4:hover ~ a:before {
    background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/star-fill.svg');
}

.woocommerce p.stars a.star-5.active:before,
.woocommerce p.stars a.star-5:hover ~ a:before {
    background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/star-fill.svg');
}

        </style>
    <?php
}
add_action('wp_head', 'theme_icons');