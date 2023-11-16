<?php
// echo '<br /><a href="' . get_term_link($cat->slug, 'product_cat') . '">' . $cat->name . '</a>';
function jtc_get_all_categories($atts = [])
{
    $taxonomy     = $atts['taxonomy'] ?? 'product_cat';
    $orderby      = $atts['orderby'] ?? 'name';
    $show_count   = $atts['show_count'] ?? 0; // 1 for yes, 0 for no
    $pad_counts   = $atts['pad_counts'] ?? 0; // 1 for yes, 0 for no
    $hierarchical = $atts['hierarchical'] ?? 1; // 1 for yes, 0 for no  
    $title        = $atts['title'] ?? '';
    $empty        = $atts['empty'] ?? 0;

    $cats = [];

    $args = array(
        'taxonomy'     => $taxonomy,
        'orderby'      => $orderby,
        'show_count'   => $show_count,
        'pad_counts'   => $pad_counts,
        'hierarchical' => $hierarchical,
        'title_li'     => $title,
        'hide_empty'   => $empty
    );
    $all_categories = get_categories($args);
    foreach ($all_categories as $cat) {
        if ($cat->slug == 'uncategorized') {
            continue;
        }
        $cats['sub-cats'] = [];
        $cats[$cat->term_id] = $cat;
        if ($cat->category_parent == 0) {
            $category_id = $cat->term_id;
            $args['child_of'] = 0;
            $args['parent'] = $category_id;

            $sub_cats = get_categories($args);
            if ($sub_cats) {
                $cats[$cat->term_id]['sub-cats'] = $sub_cats;
            }
        }
    }

    return $cats;
}
