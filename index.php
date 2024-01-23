<?php

get_header();

echo '
<main id="main">
    <div class="container">
        <section class="section">
            <h1>' . esc_html__('Bienvenido al index de ', 'karlicius'); bloginfo('name'); echo '</h1>
        </section>
    </div>
</main>';

get_footer();