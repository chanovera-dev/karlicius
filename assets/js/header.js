// botón para abrir el menú mobile · vease './sections/header/menu--button.php'
function menuMobileButton(toggleButton) {
    const header = document.getElementById('main-header');

    toggleButton.querySelector('.bars').classList.toggle('change');
    header.classList.toggle('open');
}

function scrollPage() {
    const body = document.body;
    const scrollUp = "scroll-up";
    const scrollDown = "scroll-down";
    const header = document.getElementById('main-header');
    let lastScroll = 0;
    
    window.addEventListener("scroll", () => {
      const currentScroll = window.pageYOffset;
      if (currentScroll <= 0) {
        body.classList.remove(scrollUp);
        header.classList.remove('shadow');
        return;
      }
      
      if (currentScroll > lastScroll && !body.classList.contains(scrollDown)) {
        // down
        body.classList.remove(scrollUp);
        body.classList.add(scrollDown);
        header.classList.add('shadow');
      } else if (currentScroll < lastScroll && body.classList.contains(scrollDown)) {
        // up
        body.classList.remove(scrollDown);
        body.classList.add(scrollUp);
      }
      lastScroll = currentScroll;
    });
}
scrollPage();


function openSearchform() {
  const group = document.querySelector('.menu-searchform__group');
  const searchForm = document.querySelector('.search-form__wrapper');
  const nav = document.querySelector('.nav__wrapper');

  group.classList.toggle('gap0');
  searchForm.classList.toggle('open'); 
  nav.classList.toggle('hide');
}


// formato de los números de contacto
document.addEventListener('DOMContentLoaded', function() {
  let numerosContacto = document.querySelectorAll('.customer-service');
  
  numerosContacto.forEach(function(numeroContacto) {
      let numeroCompleto = numeroContacto.textContent;
      let numeroFormateado = formatoNumero(numeroCompleto);
      numeroContacto.textContent = numeroFormateado;
  });
});

function formatoNumero(numero) {
  numero = numero.slice(0, 0) + '(' + numero.slice(0);
  numero = numero.slice(0, 4) + ') ' + numero.slice(4);
  numero = numero.slice(0, 9) + '-' + numero.slice(9);
  return numero;
}