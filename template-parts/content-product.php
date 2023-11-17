<?php
$product = $args;

// Ensure visibility.
if (empty($product) || !$product->is_visible()) {
    return;
}

$post_thumbnail_id = $product->get_image_id();

if ($post_thumbnail_id) {
    $imgHtml = wp_get_attachment_image($post_thumbnail_id, 'thumbnail', false, ['class' => 'card-img object-fit-cover rounded w-100 h-100']);
} else {
    $imgHtml  = '<div class="woocommerce-product-gallery__image--placeholder">';
    $imgHtml .= sprintf('<img src="%s" alt="%s" class="wp-post-image" />', esc_url(wc_placeholder_img_src('woocommerce_single')), esc_html__('Awaiting product image', 'woocommerce'));
    $imgHtml .= '</div>';
}
?>

<!-- <div class="col-lg-2 col-md-4 col-6"> -->
<a href="<?= get_permalink($product->id) ?>" class="card card-product-jtc rounded jtc-fixed-height-card">
    <?= $imgHtml ?>
    <article class="p-2 card-detail">
        <h4 class="card-title"><?= $product->name ?></h4>
        <h4 class="card-harga"><?= do_shortcode("[money-format price='" . ($product->sale_price ?? $product->regular_price) . "']") ?></h4>
        <?php if ($product->sale_price) { ?>
            <h4 class="card-diskon"><span class="text-decoration-line-through"><?= do_shortcode("[money-format price='$product->regular_price']") ?></span> <span class="percentage-diskon text-danger"><?= round(((($product->regular_price / $product->sale_price) - 1) * 100)) . '%' ?></span></h4>
        <?php } ?>
        <h6 class="card-merk"><?= $product->merk ?></h6>
    </article>
</a>
<!-- </div> -->