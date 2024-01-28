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
                .menu-searchform__group{position:fixed;top:0;right:-100%;width:100%;height:100svh;padding:50px 15px 20px;background-color:var(--wp--preset--color--background);display:flex;flex-direction:column;gap:30px;transition:all .3s ease;z-index:3;}
                .menu-searchform__group.open{right:0;}
                .menu-searchform__group form{order:1;}
                .menu-searchform__group nav{order:2;}
                .menu-searchform__group nav ul li:not(:last-child){border-bottom:1px solid var(--wp--preset--color--line);}
                .menu-searchform__group nav ul li a{display:flex;align-items:center;height:38px;color:var(--wp--preset--color--text);}
                .menu-searchform__group form.search-form{display:grid;grid-template-columns:1fr auto;gap:7px;}
                .menu-searchform__group form.search-form input[type=search]{width:100%;}
            }

            @media(min-width:768px){
                :root{
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
                #main-header .section{display:grid;grid-template-columns:1fr auto 1fr;}

                /* M E N Ú    D E S K T O P */
                .menu-searchform__group{display:flex;align-items:center;gap:30px;}
                .menu-searchform__group nav ul{display:flex;align-items:center;gap:30px;}
                .menu-searchform__group nav ul li a{color:var(--wp--preset--color--text-b);transition:all .3s ease;}
                .menu-searchform__group nav ul li a:hover{color:var(--wp--preset--color--text);}
                .menu-searchform__group form.search-form{display:flex;align-items:center;gap:7px;}

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

                /* footer */
                #main-footer aside .menu{margin-left:auto;position:relative;right:-10px;}
                #main-footer aside .menu h2{margin-left:10px;}
            }

            @media(min-width:1200px){
                :root{
                }
            }
        </style>
    <?php
}
add_action('wp_head', 'karlicius_theme_custom_breakpoints');