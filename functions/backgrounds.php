<?php

function karlicius_theme_custom_backgrounds() {
    ?>
        <style>
            <?php if ( has_post_thumbnail() == false ) : ?>
            
            <?php else: ?>
                .single-post #main-header{position:fixed;width:100%;background-color:transparent;}
                .single-post #main .header-post.container{padding-top:var(--height--header);background:linear-gradient(to bottom, #0000005b, #00000000), url('<?php the_post_thumbnail_url( 'full' ); ?>'); background-repeat:no-repeat; background-position:50% 50%; background-size:cover;}
            <?php endif; ?>

        </style>
    <?php
}
add_action('wp_head', 'karlicius_theme_custom_backgrounds');