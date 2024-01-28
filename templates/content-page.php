<main id="main">
    <article>
        <div class="header-post container">
            <div class="background-blur"></div>
            <section class="section">
                <div class="title-and-data__wrapper">
                    <?php 
                        the_title('<h1 class="title-post">', '</h1>');
                        echo esc_html__('<p>Última edición en ', 'karlicius'); the_modified_time('F j, Y'); echo '.</p>';
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