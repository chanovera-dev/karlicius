// Obtén todas las estrellas
const stars = document.querySelectorAll('.woocommerce p.stars a');

// Itera a través de las estrellas
stars.forEach((star, index) => {
  // Agrega un evento hover a cada estrella
  star.addEventListener('mouseover', () => {
    // Llena las estrellas desde la actual hasta la primera
    for (let i = index; i >= 0; i--) {
      stars[i].classList.add('filled');
    }
  });

  // Agrega un evento para quitar el hover
  star.addEventListener('mouseout', () => {
    // Remueve la clase 'active' de todas las estrellas
    stars.forEach((s) => {
      s.classList.remove('filled');
    });
  });
});
