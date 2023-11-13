<?php
$product = $args;
$product_image = wp_get_attachment_image_src(get_post_thumbnail_id($product->id), 'single-post-thumbnail');
$product_image_alt = get_post_meta($product->id, '_wp_attachment_image_alt', TRUE);
?>

<div class="col-lg-2 col-md-4 col-6">
    <a href="<?= get_permalink($product->id) ?>" class="card card-product-jtc rounded jtc-fixed-height-card">
        <img class="card-img object-fit-cover rounded" src="<?= $product_image[0] ?>" alt="<?= $product_image_alt ?>">
        <div class="p-2 card-detail">
            <h4 class="card-title"><?= $product->name ?></h4>
            <h4 class="card-harga"><?= do_shortcode("[money-format price='$product->sale_price']") ?></h4>
            <?php if ($product->regular_price) { ?>
                <h4 class="card-diskon"><span class="text-decoration-line-through"><?= do_shortcode("[money-format price='$product->regular_price']") ?></span> <span class="percentage-diskon text-danger"><?= round(((($product->regular_price / $product->sale_price) - 1) * 100)) . '%' ?></span></h4>
            <?php } ?>
            <h6 class="card-merk"><?= $product->merk ?></h6>
        </div>
    </a>
</div>