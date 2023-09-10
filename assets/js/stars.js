document.addEventListener("DOMContentLoaded", function() {
    const stars = document.querySelectorAll(".woocommerce p.stars a");

    stars.forEach(function(star, index) {
        star.addEventListener("mouseenter", function() {
            // Cambia la imagen de fondo de todas las estrellas hasta la que se pasó el ratón
            for (let i = 0; i <= index; i++) {
                stars[i].style.backgroundImage = `url('<?php echo get_template_directory_uri(); ?>/assets/icons/star-fill.svg')`;
            }
        });

        star.addEventListener("mouseleave", function() {
            // Restaura la imagen de fondo de todas las estrellas
            stars.forEach(function(star) {
                star.style.backgroundImage = `url('<?php echo get_template_directory_uri(); ?>/assets/icons/star.svg')`;
            });
        });
    });
});
