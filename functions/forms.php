<?php

function karlicius_theme_custom_forms() {
    ?>
        <style>
            /* etiquetas */
            p:has(label){margin-bottom:20px;}
            p:has(label) label{color:var(--wp--preset--color--text-b);}
            p:has(label) :is(
                input[type=text],
                input[type=email],
                input[type=tel],
                input[type=url],
                input[type=search],
                textarea){margin-top:5px;}
            form.search-form:has(label) .screen-reader-text{display:none;}

            /* inputs de entrada · nominal */
            input[type=text],
            input[type=email],
            input[type=tel],
            input[type=url],
            input[type=search],
            textarea{
                border:1px solid var(--wp--preset--color--border);
                background-color:var(--wp--preset--color--background);
                font-family:var(--wp--preset--font-family--roboto);
                font-size:var(--wp--preset--font-size--medium);
                color:var(--wp--preset--color--text);
                width:100%;
                height:38px;
                padding:0 10px;
                border-radius:3px;
                transition:all .3s ease;
            }
            textarea{padding:10px;height:auto;}

            /* inputs de entrada · placeholder */
            input[type=text]::placeholder,
            input[type=email]::placeholder,
            input[type=tel]::placeholder,
            input[type=url]::placeholder,
            input[type=search]::placeholder,
            textarea::placeholder{
                font-size:var(--wp--preset--font-size--medium);
                font-family:var(--wp--preset--font-family--roboto);
                color:var(--wp--preset--color--attenuated);
                transition:all .3s ease;
            }

            /* inputs de entrada · hover */
            input[type=text]:hover,
            input[type=email]:hover,
            input[type=tel]:hover,
            input[type=url]:hover,
            input[type=search]:hover,
            textarea:hover{border:1px solid var(--wp--preset--color--border-hover);}

            /* inputs de entrada · focus */
            input[type=text]:focus,
            input[type=email]:focus,
            input[type=tel]:focus,
            input[type=url]:focus,
            input[type=search]:focus,
            textarea:focus{
                outline:none;
                border:1px solid var(--wp--preset--color--border-focus);
                box-shadow:var(--wp--preset--shadow--input);
            }

            /* formulario de cantidad · nominal */
            input[type=number]{
                border:1px solid transparent;
                background-color:var(--wp--preset--color--background);
                font-family:var(--wp--preset--font-family--roboto);
                font-size:var(--wp--preset--font-size--medium);
                color:var(--wp--preset--color--text);
                height:42px;
                padding:0 10px;
                border-radius:0;
                transition:all .3s ease;
            }

            /* formulario de cantidad · focus */
            input[type=number]{
                outline:none;
            }

            /* formulario de envio · nominal */
            input[type=submit]{
                padding:0 20px;
                font-family:var(--wp--preset--font-family--roboto);
                font-size:var(--wp--preset--font-size--medium);
                font-weight:500;
                background-color:var(--wp--preset--color--button);
                border:1px solid var(--wp--preset--color--button);
                color:#fff;
                border-radius:3px;
                height:38px;
                transition:all .3s ease;
            }

            /* formulario de envio · hover */
            input[type=submit]:hover{
                background-color:var(--wp--preset--color--button-hover);
                border:1px solid var(--wp--preset--color--button-hover);
            }

            /* formulario de envio · focus */
            input[type=submit]:focus{
                outline:none;
                background-color:var(--wp--preset--color--links);
                border:1px solid var(--wp--preset--color--border-focus);
                box-shadow:var(--wp--preset--shadow--input);
            }
        </style>
    <?php
}
add_action('wp_head', 'karlicius_theme_custom_forms');