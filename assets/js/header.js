// botón para abrir el menú mobile · vease './sections/header/menu--button.php'
function menuMobileButton(toggleButton) {
    let menuMobile =  document.querySelector('.menu-mobile-searchform__group')

    toggleButton.querySelector('.bars').classList.toggle('change');
    menuMobile.classList.toggle('open');
}

function scrollPage() {
    const body = document.body;
    const scrollUp = "scroll-up";
    const scrollDown = "scroll-down";
    const header = document.getElementById('main-header');
    const menuMobile = document.getElementById('menu-mobile-searchform__group');
    let lastScroll = 0;
    
    window.addEventListener("scroll", () => {
      const currentScroll = window.pageYOffset;
      if (currentScroll <= 0) {
        body.classList.remove(scrollUp);
        return;
      }
      
      if (currentScroll > lastScroll && !body.classList.contains(scrollDown)) {
        // down
        body.classList.remove(scrollUp);
        body.classList.add(scrollDown);
        header.classList.add('shadow');
        if (!menuMobile.classList.contains('open')) {
          
        }
      } else if (currentScroll < lastScroll && body.classList.contains(scrollDown)) {
        // up
        body.classList.remove(scrollDown);
        body.classList.add(scrollUp);
        header.classList.add('shadow');
        if (!menuMobile.classList.contains('open')) {
          
        }
      }
      lastScroll = currentScroll;
    });
  }
  scrollPage();