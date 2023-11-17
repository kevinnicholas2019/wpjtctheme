<?php

/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

global $product;

get_header('shop'); ?>
<article class="main-wrapper-2 main-content">
    <section class="bg-primary-gradient jtc-padding-tatakan-header"></section>
    <section class="container">
        <div class="py-3 mb-4">
            <?php
            /**
             * woocommerce_before_main_content hook.
             *
             * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
             * @hooked woocommerce_breadcrumb - 20
             */
            do_action('woocommerce_before_main_content');
            ?>

            <?php
            /**
             * woocommerce_after_main_content hook.
             *
             * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
             */
            do_action('woocommerce_after_main_content');
            ?>
        </div>
    </section>
    <section class="container mb-lg-5 mb-3">
        <div class="row gap-3">
            <div class="col-lg-8">
                <?php while (have_posts()) : ?>
                    <?php the_post(); ?>

                    <?php get_template_part('template-parts/wc', 'content-single-product'); ?>

                <?php endwhile; // end of the loop. 
                ?>
            </div>
            <div class="col-lg-4">
                <div class="border bg-white rounded p-3">
                    <form class="cart" action="<?php echo esc_url(apply_filters('woocommerce_add_to_cart_form_action', $product->get_permalink())); ?>" method="post" enctype='multipart/form-data'>
                        <div class="form-group mb-3">
                            <h5 class="mb-4">Set Quantity</h5>
                            <?php do_action('woocommerce_before_add_to_cart_quantity'); ?>
                            <div class="row">
                                <div class="qty-group-container col-12 col-xl-7 col-xxl-6">
                                    <div class="qty-group input-group">
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary btn-minuse py-2 px-3" type="button" data-min="<?= $product->get_min_purchase_quantity() ?>">-</button>
                                        </span>
                                        <?php
                                        woocommerce_quantity_input(
                                            array(
                                                'min_value'   => apply_filters('woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product),
                                                'max_value'   => apply_filters('woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product),
                                                'input_value' => isset($_POST['quantity']) ? wc_stock_amount(wp_unslash($_POST['quantity'])) : $product->get_min_purchase_quantity(), // WPCS: CSRF ok, input var ok.
                                            )
                                        );
                                        ?>
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary btn-pluss py-2 px-3" type="button" data-max="<?= $product->get_stock_quantity() ?>">+</button>
                                        </span>
                                    </div>
                                </div>
                                <div class="mt-2 mt-xl-0 mb-xl-0 col-lg-12 col-xl-5 col-xxl-6 p-2">
                                    Total Stock : <b><?= $product->get_stock_quantity() ?></b>
                                </div>
                            </div>
                            <?php do_action('woocommerce_after_add_to_cart_quantity'); ?>
                        </div>
                        <div class="form-group">
                            <?php if ($product->sale_price) { ?>
                                <div>
                                    <p class="price-before-diskon text-end text-decoration-line-through text-lightgray"><?= do_shortcode("[money-format price='$product->regular_price']") ?></p>
                                </div>
                            <?php } ?>
                            <div class="d-flex">
                                <h6 class="fw-light text-lightgray">Subtotal</h6>
                                <h5 class="text-dark ms-auto"><?= do_shortcode("[money-format price='$product->sale_price']") ?></h5>
                            </div>
                        </div>
                        <div class="form-group">
                            <?php do_action('woocommerce_before_add_to_cart_button'); ?>

                            <button type="button" name="buy-now" value="<?php echo esc_attr($product->get_id()); ?>" class="btn btn-primary mb-2 w-100 alt<?php echo esc_attr(wc_wp_theme_get_element_class_name('button') ? ' ' . wc_wp_theme_get_element_class_name('button') : ''); ?>">Buy Now</button>

                            <button type="submit" name="add-to-cart" value="<?php echo esc_attr($product->get_id()); ?>" class="btn btn-primary-outline w-100 alt<?php echo esc_attr(wc_wp_theme_get_element_class_name('button') ? ' ' . wc_wp_theme_get_element_class_name('button') : ''); ?>"><?php echo esc_html($product->single_add_to_cart_text()); ?></button>

                            <?php do_action('woocommerce_after_add_to_cart_button'); ?>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</article>
<?php
get_footer('shop');

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
