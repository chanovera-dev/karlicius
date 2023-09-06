<?php
echo '<section id="contact-group" class="container contact-content">
    <div class="area">
        <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    <div class="section contact-section padding-section">';
echo '<div class="sites-and-form">';
    include(TEMPLATEPATH . '/parts/contact/services-pictures.php');
    include(TEMPLATEPATH . '/parts/contact/contact-form.php');
echo '</div>';
echo '<aside>'; 
    include(TEMPLATEPATH . '/parts/widgets/address.php');
echo '</aside>';
echo '</div></section>';