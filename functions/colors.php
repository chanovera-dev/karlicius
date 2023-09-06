<?php

function theme_colors() {
    ?>
        <style>
            :root{
                /* globales */
                --color-body:rgba(255,255,255,.5);
                --color-body-hover:rgba(255,255,255,1);
                --color-main:#000;
                --color-link:#2ea8fa;
                --color-link-focus:#FF5733;
                --body-link-outline-focus:0 0 0 .3rem #FF5733;
                --main-link-outline-focus:0 0 0 .3rem #FF5733;
                --background-color-body:#1F1F1F;
                --background-color-main:#fff;
                
                /* líneas */
                --line-color:#f1f1f1;

                /* formularios */
                --border-color-input:#ddd;
                --background-color-input:#fff;
                --box-shadow-input-focus:0 0 0 .3rem rgba(255,87,51,.5);

                /* contacto */
                --box-shadow-picure:0 1px 1px hsl(0deg 0% 0% / 0.1),
                                    0 1px 2px hsl(0deg 0% 0% / 0.1),
                                    0 2px 4px hsl(0deg 0% 0% / 0.1),
                                    0 6px 8px hsl(0deg 0% 0% / 0.1),
                                    0 8px 16px hsl(0deg 0% 0% / 0.1);
            }

            /* cabecera */
            @supports ( (-webkit-backdrop-filter:saturate(180%) blur(20px)) or (backdrop-filter:saturate(180%) blur(20px)) ){
                .scroll-down .main-header,
                .scroll-up .main-header,
                .menu-searchform-group.active{background:rgba(0,0,0,.8); backdrop-filter:saturate(180%) blur(20px); -webkit-backdrop-filter:saturate(180%) blur(20px);}
                .background-blur,
                #contact-group .contact-section .sites-and-form .services-pictures figure figcaption{background:rgba(0,0,0,.4); backdrop-filter:saturate(180%) blur(20px); -webkit-backdrop-filter:saturate(180%) blur(20px);}
            }

            /* blog-v0.css + content-archive.v0.php
            @media screen and (min-width: 31px) and (max-width: 767px){
                @supports ( (-webkit-backdrop-filter:saturate(180%) blur(20px)) or (backdrop-filter:saturate(180%) blur(20px)) ){
                    .post .content{background:rgba(255,255,255,.75); backdrop-filter:saturate(180%) blur(20px); -webkit-backdrop-filter:saturate(180%) blur(20px);}
                }
            }

            @media(min-width:768px){
                @supports ( (-webkit-backdrop-filter:saturate(180%) blur(20px)) or (backdrop-filter:saturate(180%) blur(20px)) ){
                    .post .content p{background:rgba(241,241,241,.5); backdrop-filter:saturate(180%) blur(20px); -webkit-backdrop-filter:saturate(180%) blur(20px);}
                }
            }
            */
        </style>
    <?php
}
add_action('wp_head', 'theme_colors');
