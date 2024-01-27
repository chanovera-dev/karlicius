<?php
        echo '
        <footer id="main-footer" class="container">
            <section class="section">

                <div class="copyright"><p>© '. get_bloginfo( 'name' ) . ' · ' . date("Y") . '</p></div>
            </section>
        </footer>';
        wp_footer();
    echo '
    </body>
</html>';
