<?php
echo '
<aside>
    <div class="archive-list-widget">
        <div class="title-wrapper">
            <h3 class="title">' . esc_html__('Archivos', 'karlicius') . '</h3>
        </div>
        <ul>';
            wp_get_archives();
        echo '
        </ul>
    </div>
</aside>';