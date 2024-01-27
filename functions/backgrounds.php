<?php

function karlicius_theme_custom_backgrounds() {
    ?>
        <style>
            <?php if ( has_post_thumbnail() == false ) : ?>
            
            <?php else: ?>
                /* cabecera */
                .single-post #main-header{position:fixed;width:100%;background-color:transparent;border-bottom:1px solid #ffffff21;}
                .single-post #main-header .attachment-list li a.counter{color:#fff;opacity:.5;}
                .single-post #main-header .attachment-list li a.counter:hover{opacity:1;}
                .single-post #main-header .menu-mobile__button .bars :is(.bar1,.bar2,.bar3){background-color:#fff;opacity:.5;}
                .single-post #main-header .menu-mobile__button .bars:hover :is(.bar1,.bar2,.bar3){opacity:1;}
                .single-post #main-header .menu-mobile__button .bars.change :is(.bar1,.bar2,.bar3){background-color:var(--wp--preset--color--text);opacity:1;}
                /* encabezado de artículo */
                .single-post #main .header-post.container{position:relative;padding-top:var(--height--header);background:url('<?php the_post_thumbnail_url( 'full' ); ?>'); background-repeat:no-repeat; background-position:50% 50%; background-size:cover;}
                .single-post #main .header-post.container .background-blur{position:absolute;top:0;left:0;width:100%;height:100%;z-index:0;}
                .single-post #main .header-post.container .section{position:relative;z-index:1;color:#fff;}
                .single-post #main .header-post.container .section aside .share a:where(:not(.wp-element-button)):any-link{color:#fff;}

                @supports ( (-webkit-backdrop-filter:saturate(180%) blur(20px)) or (backdrop-filter:saturate(180%) blur(20px)) ){
                    :is(.single-post.scroll-down,.single-post.scroll-up) #main-header{background:rgba(0,0,0,.8); backdrop-filter:saturate(180%) blur(20px); -webkit-backdrop-filter:saturate(180%) blur(20px);}
                    .background-blur{background:rgba(0,0,0,.4); backdrop-filter:saturate(180%) blur(20px); -webkit-backdrop-filter:saturate(180%) blur(20px);}
                }

                @media(min-width:1024px){
                    .single-post #main-header .menu-searchform__group nav ul li a{color:#fff;opacity:.5;}
                    .single-post #main-header .menu-searchform__group nav ul li a:hover{opacity:1;}
                }
            <?php endif; ?>

        </style>
    <?php
}
add_action('wp_head', 'karlicius_theme_custom_backgrounds');