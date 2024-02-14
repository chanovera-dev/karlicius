<main id="main">
    <article>
        <div class="header-post container" style="background:linear-gradient(45deg, rgba(187, 37, 36, 0.63), rgba(187, 37, 36, 0.83)), url('<?php the_post_thumbnail_url( 'full' ); ?>'); background-repeat:no-repeat; background-position:50% 50%; background-size:cover;">
            <div class="background-blur"></div>
            <section class="section">
                <div class="title-and-data__wrapper">
                    <?php 
                        the_title('<h1 class="title-post">', '</h1>');
                        echo '<p>' . esc_html__('Última edición en ', 'karlicius'); the_modified_time('F j, Y'); echo '.</p>';
                    ?>
                </div>
            </section>
        </div>
        <div class="body-post container">
            <section class="section">
                <div class="content">
                    <?php the_content(); ?>
                </div>
                <aside></aside>
            </section>
        </div>
    </article>
</main>