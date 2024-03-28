<?php
if (is_plugin_active('woocommerce/woocommerce.php')) {
    echo '
    <aside class="attachment-list__wrapper">
        <ul class="attachment-list">';
        if (is_plugin_active('yith-woocommerce-wishlist/init.php')) {
            echo 
            '<li>'.
                do_shortcode('[yith_wcwl_items_count]').
            '</li>';
        } else {}

        echo '
            <li>
                <a class="counter cart-customlocation" href="'; echo esc_url(wc_get_cart_url()); echo '">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                        <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z"/>
                    </svg>
                    <div class="wrapper"><span class="number">'; echo sprintf ( WC()->cart->get_cart_contents_count() );  echo '</span></div>
                </a>
            </li>
        </ul>
    </aside>'; 
}
