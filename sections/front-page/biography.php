<div id="biography" class="container">
    <section class="section">
    <div class="bio">
            <img src="<?php echo get_theme_mod('picture_me', get_bloginfo('template_url') . '/assets/img/me.webp'); ?>" alt="Chano" width="150" height="150" loading="lazy" >
            <h2 class="title"><?php echo get_theme_mod('name', 'Chano Vera'); ?></h2>
            <div class="bio-excerpt">
                <?php echo get_theme_mod('bio_excerpt', 'Me he especializado en Wordpress porque para ti como usuario es fácil de usar y escalar, y yo como desarrollador puedo ofrecerte un sitio totalmente personalizado y ajustado a tu medida.'); ?>
            </div>
            <?php
                if ( is_active_sidebar('biography') ) {
                    echo '
                    <div class="extend-biography">';
                        dynamic_sidebar('biography');
                    echo '
                    </div>';
                }
            ?>   
        </div>
        <?php
            if ( is_active_sidebar('works') ) {
                echo '
                <div class="latest-works">';
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
    <section class="section contact">
        <?php
            echo '
            <aside>';
                include(TEMPLATEPATH . '/sections/widgets/contact.php');
            echo '
            </aside>';
        ?>
    </section>
</div>