<?php

function theme_icons() {
    ?>
        <style>
            .wp-block-code:after{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/terminal-day.svg');}
        </style>
    <?php
}
add_action('wp_head', 'theme_icons');
