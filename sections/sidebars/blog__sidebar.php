<?php
echo '
<aside>
    <div class="categories__list">
        <div class="title-wrapper">
            <h2 class="title">' . esc_html__('Categorías', 'karlicius') . '</h2>
        </div>
        <ul>';
        $args = array(
            'orderby' => 'name',
            'order' => 'ASC',
            'style' => 'list',
            'show_count' => 1, // Mostrar el número de entradas en cada categoría
            'title_li' => '', // Dejar en blanco para evitar mostrar un título
        );

        $categories = get_categories($args);

        foreach ($categories as $category) {
            echo '
            <li>
                <a href="' . get_category_link($category->term_id) . '">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark" viewBox="0 0 16 16">
                        <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
                    </svg>
                    ' . $category->name . '
                </a>
            </li>';
        }

        echo '
        </ul>
    </div>
    <div class="archive__list">
        <div class="title-wrapper">
            <h2 class="title">' . esc_html__('Archivo', 'karlicius') . '</h2>
        </div>
        <ul>';
            wp_get_archives();
        echo '
        </ul>
    </div>
    <div class="latest-comments">';

    if ($comments = $wpdb->get_results(
        "SELECT comment_author, comment_author_url,
        comment_ID, comment_post_ID, comment_content
        FROM $wpdb->comments
        WHERE comment_approved = '1'
        ORDER BY comment_date_gmt DESC LIMIT 6")) :
        echo '
        <div class="title-wrapper">
            <h2 class="title">' . esc_html__('Comentarios más recientes', 'karlicius') . '</h2>
        </div>
        <ul class="latest-comments__list">';
            global $comment;
            foreach ($comments as $comment) {
                echo '<li class="comment__wrapper">';
                echo get_avatar( get_the_author_meta('email'), '43' );
                echo '<div class="comment"><p><b>' . get_comment_author_link($comment->comment_ID) . '</b>';
                echo '<a href="' . get_permalink($comment->comment_post_ID) . '#comment-' . $comment->comment_ID . '">' . esc_html__(' en ', 'karlicius') . get_the_title($comment->comment_post_ID) . '</a></p>';
                echo '<p>' . $comment->comment_content . '</p>';
                echo '</div>';
                echo '</li>';
            }
        echo '
        </ul>';
    endif;
    echo '
    </div>
</aside>';