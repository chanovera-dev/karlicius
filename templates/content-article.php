<?php
echo '<main id="main" class="main-content">
    <article>';
        include(TEMPLATEPATH . '/parts/sections/title-article.php');
        echo '<section class="container">
            <div class="section content-section padding-section">
                <div class="content">';
                    the_content();
                echo '</div>';
                include(TEMPLATEPATH . '/parts/sidebars/post.php');
            echo '</div>
        </section>
        <section id="contact-group" class="container comments-section-wrapper">
            <div class="section comments-section padding-section">
                <div class="comments">';
                    comments_template();
                echo '</div>';    
                if ( comments_open() ) : 
                    echo '<aside>';
                        include(TEMPLATEPATH . '/parts/widgets/address.php');
                    echo '</aside>';
                else:
                endif;
            echo '</div>
        </section>
    </article>
</main>';