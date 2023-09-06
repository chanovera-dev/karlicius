<div class="latest-comments-widget">
<?php
if ($comments = $wpdb->get_results(
    "SELECT comment_author, comment_author_url,
    comment_ID, comment_post_ID, comment_content
    FROM $wpdb->comments
    WHERE comment_approved = '1'
    ORDER BY comment_date_gmt DESC LIMIT 6")) :
?>
    <div class="title-wrapper">
        <h3 class="title"><?= __('Comentarios más recientes', 'karlicius'); ?></h3>
    </div>
    <ul class="latest-comments-list widget-wrapper">
        <?php
        global $comment;
        foreach ($comments as $comment) {
            echo '<li>';
            echo get_avatar( get_the_author_meta('email'), '43' );
            echo '<div class="comment"><p><b>' . get_comment_author_link($comment->comment_ID) . '</b>';
            echo '<a href="' . get_permalink($comment->comment_post_ID) . '#comment-' . $comment->comment_ID . '">' . get_the_title($comment->comment_post_ID) . '</a></p>';
            echo '<p>' . $comment->comment_content . '</p>';
            echo '</div>';
            echo '</li>';
        }
        ?>
    </ul>
<?php endif; ?>
</div>