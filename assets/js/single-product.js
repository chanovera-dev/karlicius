// agrega botones para el input de números en el producto
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

// hace una llamada ajax para importar un archivo php al formulario de reviews
window.addEventListener('DOMContentLoaded', function () {
    var reviewFormWrapper = document.getElementById('review_form_wrapper');
    if (reviewFormWrapper) {
        // Crea un nuevo elemento para el contenido.
        var nuevoContenido = document.createElement('aside');
        // Realiza una solicitud AJAX al servidor de WordPress para obtener el contenido del shortcode.
        var xhr = new XMLHttpRequest();
        xhr.open('GET', '/wp-admin/admin-ajax.php?action=get_custom_address', true);
        xhr.onload = function () {
            if (xhr.status === 200) {
                // El contenido de respuesta contiene el resultado del shortcode.
                nuevoContenido.innerHTML = xhr.responseText;
                // Agrega el nuevo contenido al final del elemento existente.
                reviewFormWrapper.appendChild(nuevoContenido);
            }
        };
        xhr.send();
    }
});
