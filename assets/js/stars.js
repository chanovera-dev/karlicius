document.addEventListener("DOMContentLoaded", function() {
    const stars = document.querySelectorAll(".woocommerce p.stars a");

    stars.forEach(function(star, index) {
        star.addEventListener("mouseenter", function() {
            // Agregar una clase 'filled' a la estrella actual
            star.classList.add("filled");

            // Agregar una clase 'filled' a las estrellas anteriores
            for (let i = 0; i <= index; i++) {
                stars[i].classList.add("filled");
            }
        });

        star.addEventListener("mouseleave", function() {
            // Quitar la clase 'filled' de todas las estrellas
            stars.forEach(function(star) {
                star.classList.remove("filled");
            });
        });
    });
});
