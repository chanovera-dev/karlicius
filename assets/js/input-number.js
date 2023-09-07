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

window.addEventListener('DOMContentLoaded', function () {
    var reviewFormWrapper = document.getElementById('review_form_wrapper');
    if (reviewFormWrapper) {
        // Crea un nuevo elemento y agrega contenido HTML a él.
        var nuevoContenido = document.createElement('div');
        nuevoContenido.innerHTML = '<p>Contenido HTML agregado con JavaScript.</p>';

        // Agrega el nuevo contenido al final del elemento existente.
        reviewFormWrapper.appendChild(nuevoContenido);
    }
});