<?php

function karlicius_theme_custom_global() {
    ?>
        <style>
            /* G E N E R A L E S */
            *,:before,:after{box-sizing:border-box;margin:0;}
            html{scroll-behavior:smooth;}
            body{position:relative;overflow-x:hidden;background-color:var(--wp--preset--color--background);}
            :is(header,footer,aside) :is(ol,ul){padding-left:0;list-style:none;}
            .container .section{width:min(100% - 30px, 1096px);margin-inline:auto;}
            img{display:block;height:auto;}



            /* C A B E C E R A */
            #main-header{position:sticky;top:0;background-color:var(--wp--preset--color--background);transition:all .3s ease;z-index:2;}
            #main-header .section{display:flex;align-items:center;justify-content:space-between;height:var(--height--header);gap:30px;}
            /* scroll */
            @supports ( (-webkit-backdrop-filter:saturate(180%) blur(20px)) or (backdrop-filter:saturate(180%) blur(20px)) ){
                :is(.scroll-down,.scroll-up) #main-header,
                :is(.scroll-down,.scroll-up) #main-header{background:var(--wp--preset--color--translucid);backdrop-filter:saturate(180%) blur(20px);-webkit-backdrop-filter:saturate(180%) blur(20px);box-shadow:var(--wp--preset--shadow--card);}
            }


            /* A N E X O S · C A R R I T O · W I S H L I S T */
            .attachment-list__wrapper{margin-left:auto;z-index:1;}
            .attachment-list{height:21px;}
            .attachment-list li a.counter{display:inline-flex;gap:3px;color:var(--wp--preset--color--text-b);transition:all .3s ease;}
            .attachment-list li a.counter:hover{color:var(--wp--preset--color--text);}
            .attachment-list li a.counter .wrapper{position:relative;top:-10px;}
            .attachment-list li a.counter .wrapper .number{font-size:13px;color:var(--wp--preset--color--links);}



            /* P I E   D E   P Á G I N A */
            #main-footer{background-color:#323232;color:#868686;}
            /* aside */
            #main-footer aside{padding:30px 0;display:flex;flex-wrap:wrap;gap:50px;}
            /* títulos */
            #main-footer aside h2{margin-bottom:20px;}
            /* listas */
            #main-footer aside ul{display:grid;}
            #main-footer aside ul li{height:38px;display:inline-flex;align-items:center;gap:7px;color:#fff;}
            #main-footer aside ul li a{display:inline-flex;align-items:center;gap:7px;padding:5px 10px;position:relative;border-radius:3px;left:-10px;color:#fff;transition:all .3s ease;}
            #main-footer aside ul li a:hover{background-color:#414141;}
            /* copyright */
            #main-footer .copyright{padding:10px 0;text-align:center;border-top:1px solid #414141;}
        </style>
    <?php
}
add_action('wp_head', 'karlicius_theme_custom_global');