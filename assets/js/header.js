// botón para abrir el menú mobile · vease './sections/header/menu--button.php'
function menuMobileButton(toggleButton) {
    const menuMobile =  document.querySelector('.menu-mobile-searchform__group');
    const header = document.getElementById('main-header');

    toggleButton.querySelector('.bars').classList.toggle('change');
    menuMobile.classList.toggle('open');
    if ( header.classList.contains('shadow') ) {
      header.classList.toggle('shadow');
    }
}

function scrollPage() {
    const body = document.body;
    const scrollUp = "scroll-up";
    const scrollDown = "scroll-down";
    const header = document.getElementById('main-header');
    const menuMobile =  document.querySelector('.menu-mobile-searchform__group');
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
        if ( !menuMobile.classList.contains('open') ) {
          header.classList.add('shadow');
        }
      } else if (currentScroll < lastScroll && body.classList.contains(scrollDown)) {
        // up
        body.classList.remove(scrollDown);
        body.classList.add(scrollUp);
        if ( !menuMobile.classList.contains('open') && !header.classList.contains('shadow') ) {
          header.classList.add('shadow');
        }
      }
      lastScroll = currentScroll;
    });
}
scrollPage();



let firstSearchForm = document.querySelector('.search-form');

if (firstSearchForm) {
    firstSearchForm.id = 'busqueda';
}

function openSearchform() {
  let searchForm = document.getElementById('busqueda');
  searchForm.classList.toggle('open'); 
  console.log('abrir formulario');
}



// Selecciona el formulario de búsqueda por su ID
var formularioBusqueda = document.querySelector('.search-form');

// Si el formulario de búsqueda no tiene un ID, puedes seleccionarlo por su clase
// var formularioBusqueda = document.querySelector('.search-form');

// Ahora puedes trabajar con el formulario de búsqueda, por ejemplo, agregar un evento de envío
if (formularioBusqueda) {
    formularioBusqueda.addEventListener('submit', function(event) {
        // Aquí puedes agregar el código para manejar la acción de envío del formulario
        // Por ejemplo, prevenir que el formulario se envíe y ejecutar una función de búsqueda personalizada
        event.preventDefault();
        console.log('Formulario de búsqueda enviado');
        // Agrega aquí tu lógica de búsqueda personalizada
    });
} else {
    console.log('El formulario de búsqueda no se encontró');
}