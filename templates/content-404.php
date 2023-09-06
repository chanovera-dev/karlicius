<?php
echo '<section id="error404-group" class="container contact-content main-content">
    <div class="section contact-section padding-section">';
echo '<div class="sites-and-form">';
    include(TEMPLATEPATH . '/parts/404/message.php');
    include(TEMPLATEPATH . '/parts/contact/contact-form.php');
echo '</div>';
echo '<aside>'; 
    include(TEMPLATEPATH . '/parts/widgets/address.php');
echo '</aside>';
echo '</div></section>';