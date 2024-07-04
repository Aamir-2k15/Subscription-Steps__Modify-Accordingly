<?php


function dd($obj)
{
    echo '<pre>';
    print_r($obj);
    echo '</pre>';
}

add_action("wp_ajax_dex_get_cart_total_amount", "dex_get_cart_total_amount");
add_action("wp_ajax_nopriv_dex_get_cart_total_amount", "dex_get_cart_total_amount");
function dex_get_cart_total_amount()
{
    $cart_total_price = wc_prices_include_tax() ? WC()->cart->get_cart_contents_total() + WC()->cart->get_cart_contents_tax() : WC()->cart->get_cart_contents_total();
    echo wc_price($cart_total_price);
    exit;
}





add_action("wp_ajax_dex_cart", "dex_cart");
add_action("wp_ajax_nopriv_dex_cart", "dex_cart");
function dex_cart()
{
    foreach (WC()->cart->get_cart() as $cart_item_key =>  $cart_item) {
        $data = $cart_item['data'];
        if (isset($cart_item['ywsbs-subscription-info'])) : ?>
            <div class="row plan-cart">
                <div class="col-md-3">Package</div>
                <div class="col-md-5"><?php echo $data->get_name(); ?></div>
                <div class="col-md-4 text-center"><span>
                        <?php echo wc_price($data->get_price()); ?> <?php echo $cart_item['ywsbs-subscription-info']['price_time_option']; ?>
                    </span></div>
            </div>
        <?php
        else :
        ?>
            <div class="row plan-cart">
                <div class="col-md-3">Addons</div>
                <div class="col-md-5"><?php echo $data->get_name(); ?></div>
                <div class="col-md-4 text-center"><span>
                        + (<?php echo wc_price($data->get_price()); ?> x <?php echo  $cart_item['quantity']?>) per month
                    </span></div>
            </div>

<?php endif;
    }
    exit;
}
