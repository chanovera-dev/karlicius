// Obtén todas las estrellas
const stars = document.querySelectorAll('.woocommerce p.stars a');

// Itera a través de las estrellas
stars.forEach((star, index) => {
  // Agrega un evento hover a cada estrella
  star.addEventListener('mouseover', () => {
    // Llena la estrella actual y las anteriores
    for (let i = 0; i <= index; i++) {
      stars[i].classList.add('active');
    }
  });

  // Agrega un evento de mouseout
  star.addEventListener('mouseout', () => {
    // Remueve la clase 'active' de todas las estrellas
    stars.forEach((s) => {
      s.classList.remove('active');
    });
  });
});
