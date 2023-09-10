document.addEventListener("DOMContentLoaded", function() {
    const stars = document.querySelectorAll(".woocommerce p.stars a");

    stars.forEach(function(star, index) {
        star.addEventListener("mouseenter", function() {
            // Agregar una clase 'hover' a la estrella actual
            star.classList.add("hover");
            
            // Quitar la clase 'hover' de las estrellas anteriores
            for (let i = 0; i < index; i++) {
                stars[i].classList.add("hover");
            }
        });

        star.addEventListener("mouseleave", function() {
            // Quitar la clase 'hover' de todas las estrellas
            stars.forEach(function(star) {
                star.classList.remove("hover");
            });
        });
    });
});
