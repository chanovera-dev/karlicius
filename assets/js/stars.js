var image_to_show = '';
var variations = JSON.parse($(".variations_form").attr("data-product_variations"));

if (variations) {
    var first_attr = Object.keys(variations[0].attributes)[0];

    // Cuando se hace clic en un botón de variación
    $("ul[data-attribute_name='" + first_attr + "'] li").click(function () {
        var choice = $(this).attr("data-value");

        // Loop a través de las variaciones JSON
        for (const i in variations) {
            if (variations.hasOwnProperty(i)) {
                // Si el primer atributo tiene el mismo valor que se ha seleccionado
                if (choice === variations[i].attributes[first_attr]) {
                    // Cambiar la imagen destacada
                    if (variations[i].image) {
                        image_to_show = variations[i].image.src;
                    } else {
                        // Si no hay una imagen específica para la variación, usa la imagen principal del producto.
                        image_to_show = $(".single-product-main-image img").attr("src");
                    }
                    // Actualizar la imagen
                    $(".attachment-shop_single").attr("src", image_to_show).removeAttr("srcset");
                }
            }
        }
    });
}
