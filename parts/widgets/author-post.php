<?php
echo '<div class="author-post">';
    echo get_avatar( get_the_author_meta('email'), '43' );
    echo '<p class="author-name">'; the_author(); echo '</p>';
    echo '<span class="author-ocupation">'; the_author_meta('description'); echo '</span>';
echo '</div>';