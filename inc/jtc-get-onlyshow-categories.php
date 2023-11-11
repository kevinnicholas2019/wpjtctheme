<?php
function jtc_get_onlyshow_categories()
{
    return array(
        'starter',
        'alternator',
        'armature',
        'field-coil',
        'regulator',
        'bendix-starter',
        'solenoid',
        'turbocharger'
    );
}

function jtc_get_categories_order_by_custom_query($order_by = 'ASC')
{
    $slugs = jtc_get_onlyshow_categories();
    $i = 1;
    $q = "CASE\n";
    foreach ($slugs as $slug) {
        $q .= "WHEN slug = '$slug' then $i\n";
        $i++;
    }
    $q .= "END $order_by";
}
