<?php
/**
 * Loop Price
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/price.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;
 $currency =get_woocommerce_currency_symbol(get_option( 'woocommerce_currency' ));
?>

<?php if ( $price_html = $product->get_regular_price() ) : ?>
<div style="display:flex;justify-content: space-between;width: 80%;margin: 0 auto;">
    <div style="text-decoration:line-through;font-weight:bold;"><?=$product->get_regular_price()?><?=$currency?> </div>
    <div style="color:#c11b00;font-weight:bold;"><?=100 - round($product->get_sale_price() / $product->get_regular_price()  * 100)?>%</div>
    <div style="color:#c11b00;font-weight:bold;"><?=$product->get_sale_price()?><?=$currency?></div>
</div>
<?php endif; ?>
