<?php
        echo '
        <footer id="main-footer" class="container">
            <section class="section">

                <div class="copyright"><p>© '. get_bloginfo( 'name' ) . ' ' . date("Y") . ' · ' . esc_html__('Todos los derechos reservados', 'karlicius') . '</p></div>
            </section>
        </footer>';
        wp_footer();
    echo '
    </body>
</html>';
