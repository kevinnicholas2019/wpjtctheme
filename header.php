<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php
    wp_head();
    ?>
</head>

<body <?php body_class(); ?>>
    <header id="headernav" class="header position-absolute w-100">
        <?= get_template_part('template-parts/header', 'secondary') ?>
        <?= get_template_part('template-parts/header', 'primary') ?>
        <?= get_template_part('template-parts/header', 'search') ?>
    </header>
    <main>