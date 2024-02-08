<?php

function karlicius_theme_custom_breakpoints() {
    ?>
        <style>
            :root{
                /* cabecera */
                --height--header:50px;
            }

            @media screen and (min-width: 31px) and (max-width: 1023px){
                /* M E N Ú    D E S K T O P */
                #main-header .menu-searchform__group{display:none;}
            }

            @media(min-width:768px){
                :root{
                    --grid-template-columns--sites-and-form:1fr 1fr;
                }
            }

            @media(min-width:991px){
                :root{
                    /* cabecera */
                    --height--header:70px;

                    /* posts */
                    --grid-template-columns--posts:1fr 284px;
                }
            }

            @media(min-width:1024px){
                :root{
                    /* cabecera del artículo */
                    --justify-self--share:end;
                }
                /* cabecera */
                .menu-mobile__button{display:none;}
                <?php
                if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
                    echo '#main-header.container .section{display:grid;grid-template-columns:1fr auto 1fr;}';
                } else {}
                ?>
                /* formulario de búsqueda · cerrado */
                #menu-searchform__group .search-form__wrapper .search-form{max-width:38px;}
                #menu-searchform__group .search-form__wrapper .search-form input[type=search]{opacity:0;}
                #menu-searchform__group .search-form__wrapper .search-form .search-submit__button{width:38px;height:38px;top:0;right:0;border:1px solid transparent;background-color:transparent;color:var(--wp--preset--color--text-b);z-index:1;}
                #menu-searchform__group .search-form__wrapper .search-form:hover .search-submit__button{color:var(--wp--preset--color--text);}
                #menu-searchform__group .search-form__wrapper #close-search__button{display:grid;place-content:center;position:absolute;top:0;right:0;width:38px;height:38px;border:1px solid transparent;background-color:transparent;color:var(--wp--preset--color--text-b);transition:all .3s ease;z-index:2;}
                #menu-searchform__group .search-form__wrapper #close-search__button:hover{color:var(--wp--preset--color--text);}
                /* formulario de búsqueda · abierto */
                #menu-searchform__group .search-form__wrapper.open .search-form{max-width:300px;}


                /* M E N Ú   M O B I L E */
                .menu-mobile-searchform__group{display:none;}

                /* P U B L I C A C I O N E S */
                <?php
                    if ( is_archive() or is_search() ) {
                        ?>
                            .search.search-no-results #main .container .section{grid-template-columns:1fr;}
                            /* alineación de contenedores */
                            #main .container .section{grid-template-rows:auto 1fr;}
                            /* título de página */
                            #main .container .section .title-page{grid-column:1/1;}
                            /* posts */
                            #main .container .section .posts__wrapper{grid-column:1/2/}
                            /* sidebar */
                            #main .container .section aside{grid-column:2/3;grid-row:1/3;}
                        <?php
                    }
                ?>
            }

            @media(min-width:1200px){
                :root{
                }
            }
        </style>
    <?php
}
add_action('wp_head', 'karlicius_theme_custom_breakpoints');