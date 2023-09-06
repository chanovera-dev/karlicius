<?php
    echo '<div id="menu-searchform-group" class="menu-searchform-group">';   
        wp_nav_menu(
            array(
                'container' => 'nav', 
                'container_class' => 'primary', 
                'theme_location' => 'primary',
            ) 
        );
        get_search_form();
    echo '</div>';