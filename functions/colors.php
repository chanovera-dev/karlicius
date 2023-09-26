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
                --background-gradient:linear-gradient(rgba(0,0,0,0), rgba(0,0,0,.75));
                
                /* líneas */
                --line-color:#f1f1f1;

                /* formularios */
                --border-color-input:#ddd;
                --background-color-input:#fff;
                --box-shadow-input-focus:0 0 0 .3rem rgba(255,87,51,.5);
                --button-shadow:rgba(255, 255, 255, .15) 0 -2px 0 inset,
                                0 1px 1px hsl(0deg 0% 0% / 0.05),
                                0 1px 2px hsl(0deg 0% 0% / 0.05),
                                0 2px 4px hsl(0deg 0% 0% / 0.05),
                                0 6px 8px hsl(0deg 0% 0% / 0.05),
                                0 8px 16px hsl(0deg 0% 0% / 0.05);
                --background-forms:radial-gradient(circle at 50% -20.71%, #fe8f62 0, #ff8564 8.33%, #ff7967 16.67%, #ff6c6b 25%, #fd5e6e 33.33%, #f84e73 41.67%, #f23c78 50%, #ea287e 58.33%, #e10e86 66.67%, #d6008f 75%, #ca0098 83.33%, #bb00a3 98.67%, #aa00ae 100%);

                /* artículos */
                --background-card:#f6f6f6;
                --background-note:#e1e1e1;
                --color-answer:#ea287e;
                --linear-gradient-question:linear-gradient(rgba(0,0,0,.07), rgba(0,0,0,0));
                --card-shadow:rgba(0,0,0,.08) 0 -2px 0 inset,
                                0 1px 1px hsl(0deg 0% 0% / 0.05),
                                0 1px 2px hsl(0deg 0% 0% / 0.05),
                                0 2px 4px hsl(0deg 0% 0% / 0.05),
                                0 6px 8px hsl(0deg 0% 0% / 0.05),
                                0 8px 16px hsl(0deg 0% 0% / 0.05);
                --picture-shadow:0 1px 1px hsl(0deg 0% 0% / 0.05),
                                 0 1px 2px hsl(0deg 0% 0% / 0.05),
                                 0 2px 4px hsl(0deg 0% 0% / 0.05),
                                 0 6px 8px hsl(0deg 0% 0% / 0.05),
                                 0 8px 16px hsl(0deg 0% 0% / 0.05);

                /* archivo */
                --background-color-tag-archive:#ea287e;

                /* contacto */
                --box-shadow-picture:0 1px 1px hsl(0deg 0% 0% / 0.1),
                                     0 1px 2px hsl(0deg 0% 0% / 0.1),
                                     0 2px 4px hsl(0deg 0% 0% / 0.1),
                                     0 6px 8px hsl(0deg 0% 0% / 0.1),
                                     0 8px 16px hsl(0deg 0% 0% / 0.1);

                /* producto */
                --box-shadow-onsale: 0 4px  30px  rgba(21, 80, 120, .1),
                                    0 4px  8px  rgba(21, 80, 120, .08),
                                    0 16px  16px  rgba(21, 80, 120, .09),
                                    0 24px  64px  rgba(21, 80, 120, .08);
            }

            /* cabecera */
            @supports ( (-webkit-backdrop-filter:saturate(180%) blur(20px)) or (backdrop-filter:saturate(180%) blur(20px)) ){
                .scroll-down .main-header,
                .scroll-up .main-header,
                .menu-searchform-group.active{background:rgba(0,0,0,.8); backdrop-filter:saturate(180%) blur(20px); -webkit-backdrop-filter:saturate(180%) blur(20px);}
                .background-blur,
                #contact-group .contact-section .sites-and-form .services-pictures figure figcaption,
                .blog .posts .home-post .home-post-content .post-categories li a{background:rgba(0,0,0,.4); backdrop-filter:saturate(180%) blur(20px); -webkit-backdrop-filter:saturate(180%) blur(20px);}
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

            .single-post .content .question:after{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/patch-question-day.svg');}
        </style>
    <?php
}
add_action('wp_head', 'theme_colors');
