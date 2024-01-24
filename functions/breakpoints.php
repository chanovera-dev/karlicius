<?php

function kenko_theme_custom_breakpoints() {
    ?>
        <style>
            :root{
                /* cabecera */
                --margin-left--attachment-list:auto;
            }

            @media screen and (min-width: 31px) and (max-width: 1023px){
                /* M E N Ú    M O B I L E */

                /* botón para abrir el menú mobile */
                .menu-mobile__button{position:relative;padding:0;border:0;background-color:transparent;width:18px;height:14px;z-index:4;}
                .menu-mobile__button:hover{cursor:pointer;}
                .menu-mobile__button .bars{position:relative;display:inline-block;width:18px;height:14px;transition:all .3s ease;}
                .menu-mobile__button .bars :is(.bar1,.bar2,.bar3){width:18px;height:1px;transition:.4s;background-color:var(--wp--preset--color--text);}
                .menu-mobile__button .bars:hover :is(.bar1,.bar2,.bar3){background-color:var(--wp--preset--color--text);}
                .menu-mobile__button .bars > div:not(:last-child){margin-bottom:5px;}
                /* botón para abrir el menú mobile · activo */
                .menu-mobile__button .bars.change{transform:rotate(45deg);top:-2px;}
                .menu-mobile__button .bars.change .bar2{width:0;}
                .menu-mobile__button .bars.change .bar1{transform:translateY(9px);}
                .menu-mobile__button .bars.change .bar3{transform:translateY(-3px) rotate(90deg);}
                .menu-mobile__button .bars.change :is(.bar1,.bar2,.bar3){background-color:var(--wp--preset--color--text);}

                /* menú */
                .menu-searchform__group{position:fixed;top:0;right:-100%;width:100%;height:100svh;padding:50px 15px 20px;background-color:var(--wp--preset--color--background);display:flex;flex-direction:column;gap:30px;transition:all .3s ease;z-index:3;}
                .menu-searchform__group.open{right:0;}
                .menu-searchform__group form{order:1;}
                .menu-searchform__group nav{order:2;}
                .menu-searchform__group nav ul li a{display:flex;align-items:center;height:38px;}
                .menu-searchform__group form.search-form{display:grid;grid-template-columns:1fr auto;gap:7px;}
                .menu-searchform__group form.search-form input[type=search]{width:100%;}
            }

            @media(min-width:768px){
                :root{
                }
            }

            @media(min-width:991px){
            }

            @media(min-width:1024px){
                :root{
                }
                /* cabecera */
                .menu-mobile__button{display:none;}
                #main-header .section{display:grid;grid-template-columns:1fr auto 1fr;}

                /* M E N Ú    D E S K T O P */
                .menu-searchform__group{display:flex;align-items:center;gap:30px;}
                .menu-searchform__group nav ul{display:flex;align-items:center;gap:30px;}
                .menu-searchform__group form.search-form{display:flex;align-items:center;gap:7px;}

            }

            @media(min-width:1200px){
                :root{
                }
            }
        </style>
    <?php
}
add_action('wp_head', 'kenko_theme_custom_breakpoints');