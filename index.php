<?php
/*
Plugin Name: Dex Subscriptions Plus
Version:     1
Description: [dex_subscriptions] 
Author:     Dexter
*/

$path = plugin_dir_url(__FILE__);
define('DEX_PATH', $path);
define('DEX_PLUGIN_DIR', dirname(__FILE__) . '/');

include(DEX_PLUGIN_DIR . 'inc/functions.php');

/**************/


add_shortcode('dex_subscriptions', 'dex_subscriptions_cb');

function dex_subscriptions_cb($atts)
{
    ob_start();
?>
<!-- css link -->
<link rel="stylesheet" href="<?php echo DEX_PATH ?>css/style.css" />
<!-- Bootstrap CSS link -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
<style>
table.option-comparison-table {
    width: 70%;
    margin: auto;
    border: 0 !important;
}
</style>
<!-- SECTION 1 -->
<?php 
    if(!empty($atts)):
    if ($atts['step'] == 1) { ?>
<?php include(DEX_PLUGIN_DIR . 'inc/section_1.php'); ?>
<?php } elseif ($atts['step'] == 2) { ?>
<!-- SECTION 2 -->
<?php include(DEX_PLUGIN_DIR . 'inc/section_1.php'); ?>
<?php include(DEX_PLUGIN_DIR . 'inc/comparison.php'); ?>
<?php } elseif ($atts['step'] == 3) { ?>
<?php include(DEX_PLUGIN_DIR . 'inc/steps.php'); ?>
<?php include(DEX_PLUGIN_DIR . 'inc/form.php'); ?>
<?php } elseif ($atts['step'] == 4) { ?>
<?php include(DEX_PLUGIN_DIR . 'inc/steps.php'); ?>
<?php include(DEX_PLUGIN_DIR . 'inc/optional_addons.php'); ?>
<?php include(DEX_PLUGIN_DIR . 'inc/plan_cart.php'); ?>
<?php } else { ?>
<?php include(DEX_PLUGIN_DIR . 'inc/section_1.php'); ?>
<?php }   ?>
<?php include(DEX_PLUGIN_DIR . 'inc/footer.php'); ?>
<?php
    endif;
    $html = ob_get_clean();
    return $html;
}