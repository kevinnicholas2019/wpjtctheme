<?php
function jtc_get_custom_logo($class = 'logo', $attrs = '')
{
    if (function_exists('the_custom_logo')) {
        $site_title_with_tagline = get_bloginfo('name') . ' - ' . get_bloginfo('description');
        $custom_logo_id = get_theme_mod('custom_logo');
        $logo_src = wp_get_attachment_image_src($custom_logo_id);
        $logo_src = $logo_src[0];

        return "<img class='$class' src='$logo_src' alt='$site_title_with_tagline' $attrs>";
    }
    return "";
}
