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

// Obtén el elemento con el id "review_form_wrapper"
const reviewFormWrapper = document.getElementById("review_form_wrapper");

// Ruta completa al archivo datos.php
const phpScriptUrl = 'assets/php/datos.php';

// Hacer una solicitud fetch para obtener los datos de PHP
fetch(phpScriptUrl)
  .then(response => response.text())
  .then(data => {
    // Agregar el contenido de PHP al elemento HTML
    reviewFormWrapper.innerHTML = data;
  })
  .catch(error => {
    console.error('Error al obtener datos de PHP', error);
  });
