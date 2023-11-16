<?php

/**
 * Single Product Price
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/price.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.0.0
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly
}

global $product;

?>
<div class="mb-3">
	<h4 class="price"><?= do_shortcode("[money-format price='" . ($product->sale_price ?? $product->regular_price) . "']") ?></h4>

	<?php if ($product->sale_price) { ?>
		<div class="price-diskon">
			<span class="percentage-diskon text-danger"><?= round(((($product->regular_price / $product->sale_price) - 1) * 100)) . '%' ?></span>
			<span class="price-before-diskon text-decoration-line-through"><?= do_shortcode("[money-format price='$product->regular_price']") ?></span>
		</div>
	<?php } ?>
</div>