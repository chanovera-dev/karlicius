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
            #main-header.shadow{box-shadow:var(--wp--preset--shadow--card);}
            #main-header .section{display:flex;align-items:center;justify-content:space-between;height:var(--height--header);gap:30px;}



            /* B R A N D */
            #main-header .section .site-brand a{padding:7px 10px;border-radius:3px;position:relative;left:-10px;font-weight:500;color:var(--wp-preset--color--text-b);transition:all .3s ease;}
            #main-header .section .site-brand a:hover{color:var(--wp-preset--color--text);}
            #main-header .section .site-brand a:focus{outline:none;background-color:var(--wp--preset--color--button-focus);color:#fff;}



            /* A N E X O S · C A R R I T O · W I S H L I S T */
            .attachment-list__wrapper{margin-left:auto;z-index:1;}
            .attachment-list{height:21px;}
            .attachment-list li a.counter{display:inline-flex;gap:3px;color:var(--wp--preset--color--text-b);transition:all .3s ease;}
            .attachment-list li a.counter:hover{color:var(--wp--preset--color--text);}
            .attachment-list li a.counter .wrapper{position:relative;top:-10px;}
            .attachment-list li a.counter .wrapper .number{font-size:13px;color:var(--wp--preset--color--links);}



            /* B Ú S Q U E D A */
            .search-form{position:relative;}
            .search-form input[type=search]{width:100%;border-radius:4px;}
            .search-form .search-submit__button{position:absolute;width:28px;height:28px;right:5px;top:5px;border:1px solid var(--wp--preset--color--button);background-color:var(--wp--preset--color--button);color:#fff;border-radius:3px;transition:all .3s ease;}
            .search-form .search-submit__button:hover{border:1px solid var(--wp--preset--color--button-hover);background-color:var(--wp--preset--color--button-hover);}
            .search-form .search-submit__button:focus{outline:none;border:1px solid var(--wp--preset--color--button-focus);background-color:var(--wp--preset--color--button-focus);}
            #close-search__button{display:none;}



            /* P I E   D E   P Á G I N A */
            #main-footer{background-color:#323232;color:#a7a7a7;}
            /* aside */
            #main-footer aside{padding:30px 0;display:flex;flex-wrap:wrap;gap:50px;}
            /* títulos */
            #main-footer aside h2{margin-bottom:20px;}
            /* listas */
            #main-footer aside ul{display:grid;}
            #main-footer aside ul li{height:38px;display:inline-flex;align-items:center;gap:7px;color:#fff;}
            #main-footer aside ul li a{display:inline-flex;align-items:center;gap:7px;padding:5px 10px;position:relative;border-radius:3px;left:-10px;color:#fff;transition:all .3s ease;}
            #main-footer aside ul li a:hover{background-color:#414141;}
            #main-footer aside ul li a:focus{outline:none;background-color:var(--wp--preset--color--button-focus);}
            /* copyright */
            #main-footer .copyright{padding:10px 0;text-align:center;border-top:1px solid #414141;}
        </style>
    <?php
}
add_action('wp_head', 'karlicius_theme_custom_global');