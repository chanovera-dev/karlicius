<?php
echo '
<div id="contact__group" class="container">
    <section class="section">
        <div class="sites-and-form">';
            include(TEMPLATEPATH . '/sections/contact/services-pictures.php');
            include(TEMPLATEPATH . '/sections/contact/contact-form.php');
        echo '
        </div>
        <aside>'; 
            include(TEMPLATEPATH . '/sections/widgets/contact.php');
        echo '
        </aside>
    </section>
</div>';