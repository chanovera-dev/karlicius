<?php /* Template name: Inicio */
get_header();

echo '
<main id="main">';
    include(TEMPLATEPATH . '/sections/front-page/hero.php');
    include(TEMPLATEPATH . '/sections/front-page/calendar.php');
echo '
</main>';

get_footer();