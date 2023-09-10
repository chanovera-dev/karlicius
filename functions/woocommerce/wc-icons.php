<?php

function theme_icons() {
    ?>
        <style>
            /* estrellas para calificar */
            .woocommerce p.stars a:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/star.svg');}
            .woocommerce p.stars a.star-1:hover:before,
            .woocommerce p.stars a.star-2:hover:before,
            .woocommerce p.stars a.star-3:hover:before,
            .woocommerce p.stars a.star-4:hover:before,
            .woocommerce p.stars a.star-5:hover:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/star-fill.svg');}
            .woocommerce p.stars a.star-1.active:before,
            .woocommerce p.stars a.star-2.active:before,
            .woocommerce p.stars a.star-3.active:before,
            .woocommerce p.stars a.star-4.active:before,
            .woocommerce p.stars a.star-5.active:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/star-fill.svg');}
        </style>
    <?php
}