<?php

function karlicius_theme_custom_backgrounds() {
    ?>
        <style>
            @supports ( (-webkit-backdrop-filter:saturate(180%) blur(20px)) or (backdrop-filter:saturate(180%) blur(20px)) ){
                :is(.scroll-down,.scroll-up) #main-header{background:rgba(255,255,255,.8); backdrop-filter:saturate(180%) blur(20px); -webkit-backdrop-filter:saturate(180%) blur(20px);}
            }
            <?php if ( has_post_thumbnail() == false ) : ?>

            <?php else: ?>
                /* cabecera */
                :is(.home,.single-post,.page-template-default) #main-header{position:fixed;width:100%;background-color:transparent;border-bottom:1px solid #ffffff21;}
                :is(.home,.single-post,.page-template-default) #main-header .section .site-brand a{color:#fff;opacity:.5;}
                :is(.home,.single-post,.page-template-default) #main-header .section .site-brand a:hover{color:#fff;opacity:1;}
                :is(.home,.single-post,.page-template-default) #main-header .section .site-brand a:focus{opacity:1;}
                :is(.home,.single-post,.page-template-default) #main-header .attachment-list li a.counter{color:#fff;opacity:.5;}
                :is(.home,.single-post,.page-template-default) #main-header .attachment-list li a.counter:hover{opacity:1;}
                :is(.home,.single-post,.page-template-default) #main-header .menu-mobile__button .bars :is(.bar1,.bar2,.bar3){background-color:#fff;opacity:.5;}
                :is(.home,.single-post,.page-template-default) #main-header .menu-mobile__button .bars:hover :is(.bar1,.bar2,.bar3){opacity:1;}
                :is(.home,.single-post,.page-template-default) #main-header .menu-mobile__button .bars.change :is(.bar1,.bar2,.bar3){background-color:var(--wp--preset--color--text);opacity:1;}
                /* encabezado de artículo */
                :is(.home,.single-post,.page-template-default) #main .header-post.container{position:relative;padding-top:var(--height--header);background:url('<?php the_post_thumbnail_url( 'full' ); ?>'); background-repeat:no-repeat; background-position:50% 50%; background-size:cover;}
                :is(.home,.single-post,.page-template-default) #main #hero.header-post.container{background:linear-gradient(to bottom, rgba(0,0,0,.6), rgba(0,0,0,0)), url('<?php the_post_thumbnail_url( 'full' ); ?>');}
                :is(.home,.single-post,.page-template-default) #main .header-post.container .background-blur{position:absolute;top:0;left:0;width:100%;height:100%;z-index:0;}
                :is(.home,.single-post,.page-template-default) #main .header-post.container .section{position:relative;z-index:1;color:#fff;}
                :is(.home,.single-post,.page-template-default) #main .header-post.container .section aside .share a:where(:not(.wp-element-button)):any-link,
                /* front page */
                :is(.home,.single-post,.page-template-default) #main #hero.container .section{grid-template-columns:var(--grid-template-columns--posts);}
                :is(.home,.single-post,.page-template-default) #main #hero.container .section .intro .action a:where(:not(.wp-element-button)):any-link{color:#fff;}

                @supports ( (-webkit-backdrop-filter:saturate(180%) blur(20px)) or (backdrop-filter:saturate(180%) blur(20px)) ){
                    :is(.home.scroll-down,.home.scroll-up) #main-header,
                    :is(.single-post.scroll-down,.single-post.scroll-up) #main-header,
                    :is(.page-template-default.scroll-down,.page-template-default.scroll-up) #main-header{background:rgba(0,0,0,.8); backdrop-filter:saturate(180%) blur(20px); -webkit-backdrop-filter:saturate(180%) blur(20px);}
                    .background-blur{background:rgba(0,0,0,.4); backdrop-filter:saturate(180%) blur(20px); -webkit-backdrop-filter:saturate(180%) blur(20px);}
                }

                @media(min-width:1024px){
                    :is(.home,.single-post,.page-template-default) #main-header .menu-searchform__group nav ul li a,
                    :is(.home,.single-post,.page-template-default) #menu-searchform__group .search-form__wrapper .search-form .search-submit__button{color:#fff;opacity:.5;}
                    :is(.home,.single-post,.page-template-default) #main-header .menu-searchform__group nav ul li a:hover,
                    :is(.home,.single-post,.page-template-default) #menu-searchform__group .search-form__wrapper .search-form:hover .search-submit__button{opacity:1;}
                    :is(.home,.single-post,.page-template-default) #main-header .menu-searchform__group nav ul li a:focus,
                    :is(.home,.single-post,.page-template-default) #menu-searchform__group .search-form__wrapper .search-form .search-submit__button:focus{opacity:1;}
                    :is(.home,.single-post,.page-template-default) #menu-searchform__group .search-form__wrapper.open .search-form .search-submit__button{color:var(--wp--preset--color--text-b);}
                }
            <?php endif; ?>

        </style>
    <?php
}
add_action('wp_head', 'karlicius_theme_custom_backgrounds');