<?php
require_once get_template_directory() . '/inc/jtc-get-all-categories.php';
$cats = jtc_get_all_categories();
$curr_category = get_queried_object();
if ($curr_category && $cats[$curr_category->term_id]) {
    unset($cats[$curr_category->term_id]);
    array_unshift($cats, $curr_category);
}
?>
<aside id="sidebar" class="bg-white rounded shadow">
    <section class="p-3 bg-primary-gradient text-white rounded-top">
        <i class="fas fa-list me-2"></i><b>Category</b>
    </section>
    <section>
        <div class="list-group ps" style="height: 576px">
            <?php foreach ($cats as $cat) { ?>
                <?php if ($cat && $cat->slug && $cat->name) { ?>
                    <a class="list-group-item py-2 px-3 border-bottom <?= $curr_category && $curr_category->term_id == $cat->term_id ? 'active' : '' ?>" href="<?= get_term_link($cat->slug, 'product_cat') ?>"><?= $cat->name ?></a>
                <?php } ?>
            <?php } ?>
        </div>
    </section>
</aside>