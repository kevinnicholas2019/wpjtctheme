<?php

if (!class_exists('JTC_Menu_Walker')) {

    class JTC_Menu_Walker extends Walker_Nav_Menu
    {
        public static function add_nav_link_class_to_a_link($atts, $item, $args)
        {
            $atts['class'] = 'nav-link';

            return $atts;
        }

        function start_el(&$output, $item, $depth = 0, $args = [], $id = 0)
        {
            array_push($item->classes, "nav-item");
            if ($item->current) {
                array_push($item->classes, "active");
                $item->title .= '';
            }

            add_filter('nav_menu_link_attributes', ['JTC_Menu_Walker', 'add_nav_link_class_to_a_link'], 99, 3);
            parent::start_el($output, $item, $depth, $args, $id);
        }
    }
}
