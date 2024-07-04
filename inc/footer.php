<?php

add_action('wp_footer', function () {
?>
    <!-- | -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script>
        /* AJAX FUNCTION 1 */
        function _AJAX_function_1(target, action, type, data, data_type, res_sub) {
            let admin_ajax_url = '<?php echo admin_url('admin-ajax.php'); ?>';
            // let loader = '<div id="loader">Please Wait</div>';
            // $('.hyperbola').append(loader);
            jQuery.ajax({
                url: admin_ajax_url + '?action=' + action,
                type: type,
                dataType: data_type,
                data: data,
            }).done(function(response) {
                if (res_sub == "") {
                    $(target).html(response);
                } else {
                    $(target).html(response.res_sub);
                }
                // console.log(new Date());
            }); //ajax done
        }
        $(function() {

            setInterval(function() {
                _AJAX_function_1('.pricing span', 'dex_get_cart_total_amount', 'POST', "", "", "");
                _AJAX_function_1('.dex_cart', 'dex_cart', 'POST', "", "", "");
                // console.log(new Date());
            }, 600);

        });
    </script>
<?php
});
