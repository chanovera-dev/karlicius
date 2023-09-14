window.onload = function() {
  const stars = document.querySelectorAll('.stars a');

  stars.forEach((star, index) => {
    star.addEventListener('mouseover', () => {
      for (let i = 0; i <= index; i++) {
        stars[i].classList.add('active');
      }
    });

    star.addEventListener('mouseleave', () => {
      stars.forEach((s) => s.classList.remove('active'));
    });
  });
};

var image_to_show = '';
var variationsForm = document.querySelector(".variations_form");
var variationsData = variationsForm.getAttribute("data-product_variations");

if (variationsData) {
    var variations = JSON.parse(variationsData);
    var first_attr = Object.keys(variations[0].attributes)[0];
    var ulElements = document.querySelectorAll("ul[data-attribute_name='" + first_attr + "'] li");

    ulElements.forEach(function (li) {
        li.addEventListener("click", function () {
            var choice = li.getAttribute("data-value");

            for (var i = 0; i < variations.length; i++) {
                var variation = variations[i];

                if (variation.attributes[first_attr] === choice) {
                    if (variation.image) {
                        image_to_show = variation.image.src;
                    } else {
                        var mainImage = document.querySelector(".woocommerce-product-gallery__image a img");
                        image_to_show = mainImage.getAttribute("src");
                    }

                    var shopSingleImage = document.querySelector(".attachment-shop_single");
                    shopSingleImage.setAttribute("src", image_to_show);
                    shopSingleImage.removeAttribute("srcset");
                }
            }
        });
    });
}

