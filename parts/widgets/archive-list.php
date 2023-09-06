<?php
$post_count = wp_count_posts();
if ( $post_count->publish > 0 ) :
echo '<div class="archive-list-widget"><div class="title-wrapper"><h3 class="title">'; echo __('Archivos', 'karlicius'); echo '</h3></div>';
echo '<ul>';
wp_get_archives();
echo '</ul>';
echo '</div>';
endif;