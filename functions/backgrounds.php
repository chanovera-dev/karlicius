<?php

function karlicius_theme_custom_backgrounds() {
    ?>
        <style>
            <?php if ( has_post_thumbnail() == false ) : ?>
            
            <?php else: ?>
                .single-post #main-header{position:fixed;width:100%;background-color:transparent;}
                .single-post #main .header-post.container{position:relative;padding-top:var(--height--header);background:linear-gradient(to bottom, #0000005b, #00000000), url('<?php the_post_thumbnail_url( 'full' ); ?>'); background-repeat:no-repeat; background-position:50% 50%; background-size:cover;}
                .single-post #main .header-post.container .background-blur{position:absolute;top:0;left:0;width:100%;height:100%;z-index:0;}
                .single-post #main .header-post.container .section{position:relative;z-index:1;color:#fff;}
                .single-post #main .header-post.container .section a:where(:not(.wp-element-button)):any-link{color:#fff;}
                @supports ( (-webkit-backdrop-filter:saturate(180%) blur(20px)) or (backdrop-filter:saturate(180%) blur(20px)) ){
                .background-blur{background:rgba(0,0,0,.4); backdrop-filter:saturate(180%) blur(20px); -webkit-backdrop-filter:saturate(180%) blur(20px);}
            }
            <?php endif; ?>

        </style>
    <?php
}
add_action('wp_head', 'karlicius_theme_custom_backgrounds');