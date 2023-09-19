<div class="latest-posts_widget">
    <div class="title-wrapper">
        <h3 class="title"><?= __('Artículos relacionados', 'karlicius') ?></h3>
    </div>
    <?php 
        global $post;

        // Obtener las categorías del post actual
        $post_categories = wp_get_post_categories($post->ID);

        if ($post_categories) {
            $args = array(
                'posts_per_page' => 6,
                'category__in' => $post_categories, // Filtrar por categorías del post actual
                'post__not_in' => array($post->ID), // Excluir el post actual
            );

            $related_posts = get_posts($args);

            foreach ($related_posts as $post) :
                setup_postdata($post);

                include(TEMPLATEPATH . '/parts/widgets/latest-posts/post.php');

            endforeach;
            wp_reset_postdata();
        }
    ?>
</div>
