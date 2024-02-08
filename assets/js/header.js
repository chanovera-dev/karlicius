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



function openSearchform() {
  var searchForm = document.getElementById('search-form');
  var closeButton = document.getElementById('close-search__button');

  searchForm.classList.toggle('open');
}

// Llamar a la función al cargar el documento
document.addEventListener('DOMContentLoaded', function() {
  openSearchform();
});