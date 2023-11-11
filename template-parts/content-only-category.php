<?php
require_once get_template_directory() . '/inc/jtc-get-onlyshow-categories.php';
$onlyshow = jtc_get_onlyshow_categories();

foreach ($onlyshow as $cat) {
    $cat = get_term_by('slug', $cat, 'product_cat');
    if ($cat) {
        $link = get_term_link($cat->slug, 'product_cat');
        $thumbnail_id = get_woocommerce_term_meta($cat->term_id, 'thumbnail_id', true);
        $imgurl = wp_get_attachment_url($thumbnail_id);

?>
        <div class="col-lg-3 col-md-4 col-sm-6 col-6 content-2-category-item text-center d-flex flex-column justify-content-center align-items-center gap-2">
            <div class="card w-100">
                <a href="<?= $link ?>">
                    <img src="<?= $imgurl ?>" alt="JTC Thumbnail of <?= $cat->name ?>" width="200" height="200">
                </a>
            </div>
            <h4 class="mb-5 text-capitalize">
                <?= $cat->name ?>
            </h4>
        </div>
<?php
    }
}
?>