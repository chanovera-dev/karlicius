<div class="author">
    <?php
        echo get_avatar( get_the_author_meta('email'), '43' ) . '
        <p class="author-name">'; the_author(); echo '</p>' . '
        <span class="author-ocupation">'; the_author_meta('description'); echo '</span>';
    ?>
</div>