<div id="biography" class="container">
    <section class="section">
    <div class="bio">
            <img src="<?php echo get_theme_mod('picture_me', get_bloginfo('template_url') . '/assets/img/me.webp'); ?>" alt="Jaquie" width="150" height="150" loading="lazy" >
            <h2 class="title"><?php echo get_theme_mod('name', 'Chano Vera'); ?></h2>
            <div class="bio-excerpt">
                <?php echo get_theme_mod('bio_excerpt', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'); ?>
            </div>
            <?php
                if ( is_active_sidebar('biography') ) {
                    echo '<div class="extend-biography">';
                    dynamic_sidebar('biography');
                    echo '</div>';
                }
                include(TEMPLATEPATH . '/sections/widgets/contact.php');
            ?>   
        </div>
        <?php
            if ( is_active_sidebar('works') ) {
                echo '
                <div class="certifications">';
                    dynamic_sidebar('works');
                echo '
                </div>';
            } 
            if ( is_active_sidebar('certifications') ) {
                echo '
                <div class="certifications">';
                    dynamic_sidebar('certifications');
                echo '
                </div>';
            }
        ?>
    </section>
</div>