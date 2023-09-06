<div class="latest-posts_widget">
    <div class="title-wrapper">
        <h3 class="title"><?= __('Artículos más recientes', 'karlicius') ?></h3>
    </div>
    <?php 

        global $post;

        $last_posts = get_posts(array('posts_per_page' => 6));

        foreach ( $last_posts as $post ) :
        setup_postdata( $post );

        include (TEMPLATEPATH. '/parts/widgets/latest-posts/post.php');

        endforeach;
        wp_reset_postdata();

    ?>
</div>