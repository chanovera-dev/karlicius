<?php
        echo '
        <footer id="main-footer" class="container">
            <section class="section">
                <aside>';
                    include(TEMPLATEPATH . '/sections/widgets/contact.php');
                    $menu_id = get_nav_menu_locations()[ 'secondary' ];
                    $menu = wp_get_nav_menu_object( $menu_id );
                    $items = wp_get_nav_menu_items( $menu_id );
                    if (!empty($items)) {
                        echo '
                        <div class="menu">
                            <h2>' . $menu->name . '</h2>';
                            wp_nav_menu(
                                array(
                                    'container' => 'nav', 
                                    'container_class' => 'secondary', 
                                    'theme_location' => 'secondary',
                                ) 
                            );
                        echo '
                        </div>';
                    }
                echo '
                </aside>
                <div class="copyright"><p>© '. get_bloginfo( 'name' ) . ' ' . date("Y") . ' · ' . esc_html__('Todos los derechos reservados', 'karlicius') . '</p></div>
            </section>
        </footer>';
        wp_footer();
    echo '
    </body>
</html>';
