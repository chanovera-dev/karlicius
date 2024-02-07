<?php
    echo '
    <div id="menu-mobile-searchform__group" class="menu-mobile-searchform__group">';

        get_search_form();

        $menu_primary_id = get_nav_menu_locations()['primary'];
        $items_primary = wp_get_nav_menu_items($menu_primary_id);

        if (!empty($items_primary)) {
            wp_nav_menu(
                array(
                    'container' => 'nav',
                    'container_class' => 'primary',
                    'theme_location' => 'primary',
                )
            );
        }

    echo '
    </div>';