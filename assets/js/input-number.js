const inputQty = document.getElementsByClassName("input-text qty text")[0];
inputQty.setAttribute("id", "input-qty");

const buttonLess = document.createElement("button");
const buttonPlus = document.createElement("button");
buttonLess.type = "button";
buttonPlus.type = "button";
buttonLess.id = "button-less";
buttonPlus.id = "button-plus";
buttonLess.innerText = "-";
buttonPlus.innerText = "+";

function down(){ this.parentNode.querySelector('[type=number]').stepDown(); }
buttonLess.onclick = down

function up(){ this.parentNode.querySelector('[type=number]').stepUp(); }
buttonPlus.onclick = up

inputQty.insertAdjacentElement("afterend", buttonPlus);
inputQty.insertAdjacentElement("beforebegin", buttonLess);

document.addEventListener('DOMContentLoaded', function() {
    const reviewFormWrapper = document.getElementById('review_form_wrapper');

    // Obtén la URL de la carpeta del tema actual
    const themeUrl = '<?php echo esc_url(get_template_directory_uri()); ?>';

    // Construye la URL completa al archivo datos.php
    const datosPhpUrl = themeUrl + '/assets/php/datos.php';

    // Realiza una solicitud fetch para obtener los datos de datos.php
    fetch(datosPhpUrl)
      .then(response => response.text())
      .then(data => {
        reviewFormWrapper.innerHTML = data;
      })
      .catch(error => {
        console.error('Error al obtener datos de PHP', error);
      });
  });