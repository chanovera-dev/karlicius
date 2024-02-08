<?php
    echo '
    <div id="menu-searchform__group" class="menu-searchform__group">';

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
        <div class="search-form__wrapper">';
            get_search_form();
        echo '
        </div>';
    echo '
    </div>';