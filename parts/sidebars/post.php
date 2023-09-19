<aside>
    <?php 
        if ( has_tag() == false ) :
        else:
            echo '<div class="tags-widget"><div class="title-wrapper"><h3 class="title">' . __('Etiquetas', 'karlicius') . '</h3></div>';
            include(TEMPLATEPATH . '/parts/widgets/tags.php');
            echo '</div>';
            
        endif;
        include (TEMPLATEPATH. '/parts/widgets/related-posts.php');
        include (TEMPLATEPATH. '/parts/widgets/latest-posts.php');
        include (TEMPLATEPATH. '/parts/widgets/latest-comments.php');
        if ( !comments_open() ) : include(TEMPLATEPATH . '/parts/widgets/address.php');
        else:
        endif; 
        
    ?>
</aside>