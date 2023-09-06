<?php
echo '<main id="main">
    <section class="container main-content">
        <article class="section padding-section">';
                the_title('<div class="title-wrapper"><h1 class="title">','</h1></div>');
                the_content();
        echo '</article>
    </section>
</main>'; 