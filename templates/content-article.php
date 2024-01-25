<main id="main">
    <article>
        <div class="header-post container">
            <section class="section">

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
        <div class="pagination-post container"></div>
        <div class="comments-post container">
            <section class="section">
                <div class="comments">
                    <?php comments_template(); ?>
                </div>
                <aside>
                    <?php
                        if ( comments_open() ) : include(TEMPLATEPATH . '/sections/widgets/contact.php');
                        endif;
                    ?>
                </aside>
            </section>
        </div>
    </article>
</main>