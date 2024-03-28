<?php

function karlicius_theme_custom_breakpoints() {
    ?>
        <style>
            :root{
                /* cabecera */
                --height--header:50px;

                /* página */
                --margin-bottom--post:30px;

                /* tienda */
                --grid-template-columns--lists:1fr 1fr;
                --gap--lists:10px;
            }

            @media screen and (min-width: 31px) and (max-width: 1023px){
                /* M E N Ú    M O B I L E */
                #main-header.container{height:50px;overflow:hidden;transition:all 1s ease;}
                #main-header.container.open{
                    animation-name:animation-menu; animation-direction:normal; animation-duration:.5s; animation-timing-function:ease; animation-iteration-count:1;
                    height:100svh;
                }
                @keyframes animation-menu{
                    0%  {height:50px;}
                    100%{height:100svh;}
                }
                #main-header.container .section{display:grid;grid-template-columns:auto 1fr auto;grid-template-rows:auto auto;align-items:baseline;gap:30px;padding:15px 0 15px;}
                /* botón para abrir el menú mobile */
                .menu-mobile__button{position:relative;padding:0;grid-column:3/4;border:0;background-color:transparent;width:18px;height:14px;z-index:4;}
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

                    /* tienda */
                    --grid-template-columns--lists:repeat(auto-fill, minmax(207px, 1fr));
                    --gap--lists:16px 12px;
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

                    /* división de columnas en el frontpage */
                    --grid-template-columns--two-columns:1fr 1fr;
                }
                /* M E N Ú    D E S K T O P */
                /* cabecera */
                .menu-mobile__button{display:none;}
                #main-header .section{display:flex;align-items:center;justify-content:space-between;height:var(--height--header);gap:0 30px;}
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
                    /* contenedor */
                    #menu-searchform__group .search-form__wrapper .search-form{max-width:38px;transition:all .3s ease;}
                    /* caja de búsqueda */
                    #menu-searchform__group .search-form__wrapper .search-form input[type=search]{opacity:0;}
                    /* botón búscar */
                    #menu-searchform__group .search-form__wrapper .search-form .search-submit__button{width:28px;height:28px;top:5px;right:5px;border:1px solid transparent;border-radius:3px;background-color:transparent;color:transparent;z-index:1;}
                    #menu-searchform__group .search-form__wrapper .search-form .search-submit__button:focus{outline:none;}
                    /* botón abrir búsqueda / cerrar búsqueda */
                    #menu-searchform__group .search-form__wrapper #close-search__button{display:grid;place-content:center;position:absolute;top:0;left:0;width:38px;height:38px;border:1px solid transparent;border-radius:3px;background-color:transparent;color:var(--wp--preset--color--text-b);transition:all .3s ease;z-index:2;}
                    #menu-searchform__group .search-form__wrapper #close-search__button:hover{color:var(--wp--preset--color--text);}
                    #menu-searchform__group .search-form__wrapper #close-search__button:focus{outline:none;background-color:var(--wp--preset--color--button-focus);color:#fff;}
                    #menu-searchform__group .search-form__wrapper #close-search__button .bi-x-circle{display:none;}
                    #menu-searchform__group .search-form__wrapper #close-search__button .bi-search{}
                    
                /* formulario de búsqueda · abierto */
                /* contenedor */
                #menu-searchform__group .search-form__wrapper.open .search-form{width:500px;max-width:500px;}
                /* caja de búsqueda */
                #menu-searchform__group .search-form__wrapper.open .search-form input[type=search]{opacity:1;padding-left:38px;padding-right:38px;}
                /* botón buscar */
                #menu-searchform__group .search-form__wrapper.open .search-form .search-submit__button{color:var(--wp--preset--color--text-b);}
                #menu-searchform__group .search-form__wrapper.open .search-form .search-submit__button:hover{color:var(--wp--preset--color--text);}
                #menu-searchform__group .search-form__wrapper.open .search-form .search-submit__button:focus{border:1px solid var(--wp-preset--color--button-focus);background-color:var(--wp--preset--color--button-focus);color:#fff;}
                /* botón abrir búsqueda / cerrar búsqueda */
                #menu-searchform__group .search-form__wrapper.open #close-search__button{color:var(--wp--preset--color--text-b);width:28px;height:28px;top:5px;left:5px;}
                #menu-searchform__group .search-form__wrapper.open #close-search__button:hover{color:var(--wp--preset--color--text-b);}
                #menu-searchform__group .search-form__wrapper.open #close-search__button:focus{background-color:var(--wp--preset--color--button-focus);color:#fff;}
                #menu-searchform__group .search-form__wrapper.open #close-search__button .bi-x-circle{display:inherit;}
                #menu-searchform__group .search-form__wrapper.open #close-search__button .bi-search{display:none;}



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