<?php

function karlicius_theme_custom_breakpoints() {
    ?>
        <style>
            :root{
                /* cabecera */
                --height--header:50px;
            }

            @media screen and (min-width: 31px) and (max-width: 1023px){
                /* M E N Ú    M O B I L E */
                #main-header.container .section{display:grid;grid-template-columns:auto 1fr auto;gap:30px;padding-top:10px;}
                /* botón para abrir el menú mobile */
                .menu-mobile__button{position:relative;padding:0;border:0;background-color:transparent;width:18px;height:14px;z-index:4;}
                .menu-mobile__button:hover{cursor:pointer;}
                .menu-mobile__button .bars{position:relative;display:inline-block;width:18px;height:14px;transition:all .3s ease;}
                .menu-mobile__button .bars :is(.bar1,.bar2,.bar3){width:18px;height:1px;transition:.4s;background-color:var(--wp--preset--color--attenuated);transition:all .3s ease;}
                .menu-mobile__button .bars:hover :is(.bar1,.bar2,.bar3){background-color:var(--wp--preset--color--text);}
                .menu-mobile__button .bars > div:not(:last-child){margin-bottom:5px;}
                /* botón para abrir el menú mobile · activo */
                .menu-mobile__button .bars.change{transform:rotate(45deg);top:-2px;}
                .menu-mobile__button .bars.change .bar2{width:0;}
                .menu-mobile__button .bars.change .bar1{transform:translateY(9px);}
                .menu-mobile__button .bars.change .bar3{transform:translateY(-3px) rotate(90deg);}

                /* menú */
                .menu-searchform__group{display:grid;gap:30px;grid-column:1/-1;grid-row:2/3;}
                .menu-searchform__group .search-form__wrapper{order:1;}
                .menu-searchform__group .nav__wrapper{order:2;}
                .menu-searchform__group nav ul{padding-left:0;list-style:none;}
                .menu-searchform__group nav ul li:not(:last-child){border-bottom:1px solid var(--wp--preset--color--line);}
                .menu-searchform__group nav ul li a{position:relative;left:-1px;display:inline-flex;align-items:center;height:38px;padding:0 10px;border-radius:3px;color:var(--wp--preset--color--text-b);transition:all .3s;}
                .menu-searchform__group nav ul li a:hover{color:var(--wp--preset--color--text);}
                .menu-searchform__group nav ul li a:focus{outline:none;background-color:var(--wp--preset--color--button-focus);color:#fff;}
                */
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
                /* M E N Ú    D E S K T O P */
                /* cabecera */
                .menu-mobile__button{display:none;}
                #main-header .section{display:flex;align-items:center;justify-content:space-between;height:var(--height--header);gap:30px;}
                <?php
                if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
                    echo '#main-header.container .section{display:grid;grid-template-columns:1fr auto 1fr;}';
                } else {}
                ?>
                .menu-searchform__group{display:flex;align-items:center;gap:20px;}
                .menu-searchform__group nav ul{display:flex;align-items:center;gap:10px;}
                .menu-searchform__group nav ul li a{display:inline-flex;align-items:center;height:38px;padding:0 10px;border-radius:3px;color:var(--wp--preset--color--text-b);transition:all .3s ease;}
                .menu-searchform__group nav ul li a:hover{color:var(--wp--preset--color--text);}
                .menu-searchform__group nav ul li a:focus{outline:none;background-color:var(--wp--preset--color--button-focus);color:#fff;}
                /* contenedor */
                #menu-searchform__group.menu-searchform__group.gap0{gap:0;}
                /* menú de navegación principal */
                .nav__wrapper{max-width:600px;transition:all .3s ease;}
                .nav__wrapper.hide{max-width:0;overflow:hidden;}
                /* formulario de búsqueda · cerrado */
                #menu-searchform__group .search-form__wrapper .search-form{max-width:38px;transition:all .3s ease;}
                #menu-searchform__group .search-form__wrapper .search-form input[type=search]{opacity:0;}
                #menu-searchform__group .search-form__wrapper .search-form .search-submit__button{width:38px;height:38px;top:0;right:0;border:1px solid transparent;background-color:transparent;color:var(--wp--preset--color--text-b);z-index:1;}
                #menu-searchform__group .search-form__wrapper .search-form .search-submit__button:focus{border:1px solid var(--wp--preset--color--button-focus);background-color:var(--wp--preset--color--button-focus);color:#fff;}
                #menu-searchform__group .search-form__wrapper .search-form:hover .search-submit__button{color:var(--wp--preset--color--text);}
                #menu-searchform__group .search-form__wrapper #close-search__button{display:grid;place-content:center;position:absolute;top:0;right:0;width:38px;height:38px;border:1px solid transparent;background-color:transparent;color:var(--wp--preset--color--text-b);opacity:0;transition:all .3s ease;z-index:2;}
                #menu-searchform__group .search-form__wrapper #close-search__button:hover{color:var(--wp--preset--color--text);}
                /* formulario de búsqueda · abierto */
                #menu-searchform__group .search-form__wrapper.open .search-form{width:500px;max-width:500px;padding-right:38px;}
                #menu-searchform__group .search-form__wrapper.open .search-form input[type=search]{opacity:1;padding-right:38px;}
                #menu-searchform__group .search-form__wrapper.open .search-form .search-submit__button{width:28px;height:28px;right:43px;top:5px;border:1px solid var(--wp--preset--color--button);background-color:var(--wp--preset--color--button);color:#fff;border-radius:3px;}
                #menu-searchform__group .search-form__wrapper.open .search-form .search-submit__button:hover{border:1px solid var(--wp--preset--color--button-hover);background-color:var(--wp--preset--color--button-hover);}
                #menu-searchform__group .search-form__wrapper.open .search-form .search-submit__button:focus{border:1px solid var(--wp-preset--color--button-focus);background-color:var(--wp--preset--color--button-focus);}
                #menu-searchform__group .search-form__wrapper.open #close-search__button{opacity:1;}



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