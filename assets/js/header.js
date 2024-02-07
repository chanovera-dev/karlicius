// botón para abrir el menú mobile · vease './sections/header/menu--button.php'
function menuMobileButton(toggleButton) {
    const menuMobile =  document.querySelector('.menu-mobile-searchform__group')
    const header = document.getElementById('main-header');

    toggleButton.querySelector('.bars').classList.toggle('change');
    menuMobile.classList.toggle('open');
    if (header.classList.contains('shadow')) {
      header.classList.toggle('shadow');
    }
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