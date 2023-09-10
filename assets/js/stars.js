document.addEventListener("DOMContentLoaded", function() {
    const stars = document.querySelectorAll(".woocommerce p.stars a");

    stars.forEach(function(star, index) {
        star.addEventListener("mouseenter", function() {
            // Agregar una clase para marcar como estrella seleccionada
            star.classList.add("selected");
            // Remover clases de estrellas que no están seleccionadas
            for (let i = 0; i < index; i++) {
                stars[i].classList.remove("selected");
            }
        });

        star.addEventListener("mouseleave", function() {
            // Remover todas las clases cuando se sale del área de calificación
            stars.forEach(function(star) {
                star.classList.remove("selected");
            });
        });
    });
});
