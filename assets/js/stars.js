window.onload = function() {
  const stars = document.querySelectorAll('.stars span a');

  stars.forEach((star, index) => {
    star.addEventListener('mouseenter', () => {
      for (let i = 0; i <= index; i++) {
        stars[i].classList.add('active');
      }
    });

    star.addEventListener('mouseleave', () => {
      stars.forEach((s) => s.classList.remove('active'));
    });
  });
};
