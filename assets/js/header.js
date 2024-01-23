// botón para abrir el menú mobile · vease './sections/header/menu--button.php'
function menuMobileButton(toggleButton) {
    let menuMobile =  document.querySelector('.menu-searchform__group')

    toggleButton.querySelector('.bars').classList.toggle('change');
    menuMobile.classList.toggle('open');
}