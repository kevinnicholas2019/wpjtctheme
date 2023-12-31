<?php

//URI
$tempdir = get_template_directory_uri();
$sub_uri_css = $tempdir . '/assets/css';
$sub_uri_js = $tempdir . '/assets/js';
//THEME INFO
$theme = wp_get_theme();
$versiontheme = $theme->get('Version');

function jayatehnikcompany_theme_support()
{
    add_theme_support('html5');
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
    add_theme_support('woocommerce');
}

function jayatehnikcompany_add_woocommerce_support()
{
    add_theme_support('woocommerce');
    add_theme_support('woocommerce', array(
        'thumbnail_image_width' => 150,
        'single_image_width'    => 300,

        'product_grid'          => array(
            'default_rows'    => 3,
            'min_rows'        => 2,
            'max_rows'        => 8,
            'default_columns' => 4,
            'min_columns'     => 2,
            'max_columns'     => 5,
        ),
    ));
}

function jayatehnikcompany_menus()
{
    $locations = array(
        'primary' =>  'Desktop Primary Left Sidebar',
        'footer' =>  'Footer Menu Items'
    );

    register_nav_menus($locations);
}

function jayatehnikcompany_register_styles()
{
    global $versiontheme, $sub_uri_css, $tempdir;
    wp_enqueue_style('jayatehnik-bootstrap',  $sub_uri_css . '/bootstrap.css', array(), '5.3.2', 'all');
    wp_enqueue_style('jayatehnik-styles', $tempdir . '/style.css', array(), $versiontheme, 'all');
    if (is_front_page()) {
        wp_enqueue_style('jayatehnik-front-page-styles', $sub_uri_css . '/front-page.css', array(), $versiontheme, 'all');
    }
}

function jayatehnikcompany_register_scripts()
{
    global $versiontheme, $sub_uri_js;

    $ajax_data_array = array(
        'ajaxurl' => admin_url('admin-ajax.php'),
    );

    wp_enqueue_script('jayatehnik-script', $sub_uri_js . '/index.js', array('jquery'), $versiontheme, 'all');
    if (is_front_page()) {
        $ajax_data_array['security'] = wp_create_nonce('load_products_by_cat');
        wp_register_script('jayatehnik-front-page-script', $sub_uri_js . '/front-page.js', array('jquery'), $versiontheme, 'all');
        wp_localize_script('jayatehnik-front-page-script', 'wp', $ajax_data_array);
        wp_enqueue_script('jayatehnik-front-page-script');
    }
}

function jayatehnikcompany_widget_areas()
{
    //HEADER
    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '',
            'after_widget' => '',
            'name' => 'Widget Auth',
            'id' => 'jtc-widget-auth',
            'description' => 'Widget Auth',
        ),
    );

    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '',
            'after_widget' => '',
            'name' => 'Widget Request Chat & Call Area',
            'id' => 'jtc-widget-request-chat-and-call',
            'description' => 'Widget Request chat & call',
        ),
    );

    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '',
            'after_widget' => '',
            'name' => 'Widget Socials Area',
            'id' => 'jtc-widget-socials',
            'description' => 'Widget socials',
        ),
    );

    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '',
            'after_widget' => '',
            'name' => 'Footer Area',
            'id' => 'jtc-footer',
            'description' => 'Widget footer',
        ),
    );

    //ABOUT US
    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '',
            'after_widget' => '',
            'name' => 'Footer Area',
            'id' => 'jtc-footer',
            'description' => 'Widget footer',
        ),
    );
}

function jayatehnikcompany_woo_custom_product_searchform($form)
{
    $sitetitle = get_bloginfo('name');
    $form = '<form class="form w-100" role="search" method="get" id="searchform" action="' . esc_url(home_url('/')) . '">
		<div class="form-group">
			<label class="screen-reader-text" for="s">' . __('Search for:', 'woocommerce') . '</label>
			<input class="search-field form-control w-100" type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="' . __("Find unit & parts at $sitetitle", 'woocommerce') . '" />
			<input type="hidden" name="post_type" value="product" />
		</div>
        <input class="search-submit" type="submit" id="searchsubmit" value="' . esc_attr__('Search', 'woocommerce') . '" />
	</form>';
    return $form;
}


function jayatehnikcompany_replace_placeholder_search_text($form)
{
    $sitetitle = get_bloginfo('name');
    $pattern = '/placeholder=".*"/U';
    // $replacement = "placeholder='Cari barang di $sitetitle'";
    $str = __("Find unit & parts at $sitetitle", 'woocommerce');
    $replacement = "placeholder='$str'";
    $form = preg_replace($pattern, $replacement, $form);
    $pattern = '/(search-field)/';
    $replacement = 'search-field form-control w-100';
    $form = preg_replace($pattern, $replacement, $form);
    $pattern = '/class="search-submit" value=".*"/U';
    $str = esc_attr__('Search', 'woocommerce');
    $replacement = "class='search-submit' value='$str'";
    $form = preg_replace($pattern, $replacement, $form);
    return $form;
}

add_action('init', 'jayatehnikcompany_menus');
add_action('widgets_init', 'jayatehnikcompany_widget_areas');
add_action('after_setup_theme', 'jayatehnikcompany_theme_support');
add_action('after_setup_theme', 'jayatehnikcompany_add_woocommerce_support');
add_action('wp_enqueue_scripts', 'jayatehnikcompany_register_styles');
add_action('wp_enqueue_scripts', 'jayatehnikcompany_register_scripts');
// add_filter('get_search_form', 'jayatehnikcompany_replace_placeholder_search_text');
add_filter('get_search_form', 'jayatehnikcompany_woo_custom_product_searchform');

//AJAX FUNCTIONS
function get_products_by_cat_callback()
{
    check_ajax_referer('load_products_by_cat', 'security');
    $args = array(
        'limit' => 12,
        'status' => 'publish',
        'category' => $_POST['cats'],
        'orderby' => 'modified',
    );
    $products = wc_get_products($args);
    // for ($i = 0; $i < 12; $i++)
    foreach ($products as $product) {
        echo '<div class="col-lg-2 col-md-4 col-6">';
        echo get_template_part('template-parts/content-product', '', $product);
        echo '</div>';
        echo "\n";
    }
    wp_die();
}
add_action('wp_ajax_get_products_by_cat', 'get_products_by_cat_callback');
add_action('wp_ajax_nopriv_get_products_by_cat', 'get_products_by_cat_callback');


//SHORTCODE
function get_img_by_title($atts)
{
    $title = $atts['title'];
    // $class = $atts['class'];
    $style = $atts['style'];
    $size = $atts['size'] ?? 'original';
    $lazy = $atts['lazy'] ?? true;
    if ($lazy) {
        $atts['loading'] = 'lazy';
    }

    global $wpdb;
    $imgHtml = "";

    $attachments = $wpdb->get_results("SELECT * FROM $wpdb->posts WHERE post_title = '$title' AND post_type = 'attachment'", OBJECT);
    if ($attachments) {
        $attachment_id = $attachments[0]->ID;
        $imgHtml = wp_get_attachment_image($attachment_id, $size, false, $atts);
    }

    if (!$attachments || $imgHtml == "") {
        return '<img class="" src="" alt="image not found" >';
    }

    // $imgHtml = "<img class='$class' src='$attachment_url' alt='$attachments_alt_text' style='$style' width='$width' height='$height' loading='lazy'>";

    if ($lazy) {
        $imgHtml = apply_filters('woocommerce_single_product_image_thumbnail_html', $imgHtml, $attachment_id); // phpcs:disable WordPress.XSS.EscapeOutput.OutputNotEscaped
    }

    return $imgHtml;
}

function get_img_url_by_title($atts)
{
    $title = $atts['title'];
    $size = $atts['size'] ?? 'medium';

    global $wpdb;
    $attachment_url = [];

    $attachments = $wpdb->get_results("SELECT * FROM $wpdb->posts WHERE post_title = '$title' AND post_type = 'attachment'", OBJECT);
    if ($attachments) {
        $attachment_id = $attachments[0]->ID;
        $attachment_url = wp_get_attachment_image_src($attachment_id, $size);
    }

    if (!$attachments || !$attachment_url[0]) {
        return 'image-not-found';
    }

    $imgHtml = $attachment_url[0];
    return $imgHtml;
}

function get_img_url_by_title_detail($atts)
{
    $title = $atts['title'];
    $size = $atts['size'] ?? 'medium';

    global $wpdb;
    $attachment_url = [];

    $attachments = $wpdb->get_results("SELECT * FROM $wpdb->posts WHERE post_title = '$title' AND post_type = 'attachment'", OBJECT);
    if ($attachments) {
        $attachment_id = $attachments[0]->ID;
        $attachment_url = wp_get_attachment_image_src($attachment_id, $size);
    }

    if (!$attachments || !$attachment_url[0]) {
        return 'image-not-found';
    }

    return $attachment_url;
}

function money_format($atts)
{
    $symbolMoney = $atts['symbol'] ?? 'Rp';
    $price = $atts['price'];
    $decimal = $atts['decimal'] ?? 0;

    return $symbolMoney . number_format_i18n($price, $decimal);
}

add_shortcode('url-img-title', 'get_img_url_by_title');
add_shortcode('img-title', 'get_img_by_title');
add_shortcode('money-format', 'money_format');
