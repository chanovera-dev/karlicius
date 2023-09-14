var image_to_show = '';
    var variations = JSON.parse($(".variations_form").attr("data-product_variations"));
    if(variations) {
        var first_attr = Object.keys(variations[0].attributes)[0];
        // when swatch button is clicked
        $("ul[data-attribute_name='"+first_attr+"'] li").click(function() {
            var choice = $(this).attr("data-value");
            var found = false;
            // loop variations JSON
            for(const i in variations) {
                if(found) continue;
                if(variations.hasOwnProperty(i)) {
                    // if first attribute has the same value as has been selected
                    if (choice === variations[i].attributes[Object.keys(variations[0].attributes)[0]]) {
                        // change featured image
                        image_to_show = variations[i].image_src;
                        found = true;
                    }
                }
            }
        });

        // after woo additional images has changed the image, change it again
        jQuery(".variations_form").on("wc_additional_variation_images_frontend_image_swap_done_callback", function() {
            if(image_to_show.length) {
                $(".attachment-shop_single").attr("src", image_to_show).removeAttr("srcset");
            }
        });

    }