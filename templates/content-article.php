<main id="main">
    <article>
        <div class="header-post container">
            <div class="background-blur"></div>
            <section class="section">
                <div class="title-and-data__wrapper">
                    <?php 
                        the_title('<h1 class="title-post">', '</h1>'); 
                        include(TEMPLATEPATH . '/sections/widgets/author.php');
                        include(TEMPLATEPATH . '/sections/widgets/date.php');
                    ?>
                </div>
                <aside>
                    <?php include(TEMPLATEPATH . '/sections/widgets/share.php'); ?>
                </aside>
            </section>
        </div>
        <div class="body-post container">
            <section class="section">
                <div class="content">
                    <?php the_content(); ?>
                </div>
                <aside>Sidebar atículos</aside>
            </section>
        </div>
        <div class="pagination-post container"></div>
        <div class="comments-post container">
            <section class="section comments">
                <?php comments_template(); ?>
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