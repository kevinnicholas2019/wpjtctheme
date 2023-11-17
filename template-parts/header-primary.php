<?php
require_once get_template_directory() . '/classes/class-jayatehnikcompany-menu-walker.php';
require_once get_template_directory() . '/inc/jtc-get-custom-logo.php';
?>

<div class="header-primary bg-dark-custom px-md-4 py-md-3 w-100 ps">
    <div class="text-center d-lg-flex flex-lg-row align-items-md-top align-content-around container">
        <div class="me-auto d-none d-lg-block">
            <a class="site-title d-flex align-items-center justify-content-center justify-content-lg-start h-100" href="<?= home_url() ?>">
                <?= jtc_get_custom_logo() ?>
                <div class="ms-2 title-tagline-container">
                    <div class="title"><?= get_bloginfo('name') ?></div>
                    <div class="tagline"><?= get_bloginfo('description') ?></div>
                </div>
            </a>
        </div>

        <nav class="navbar navbar-expand-lg">
            <div class="d-lg-none d-flex flex-row w-100">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="d-lg-none d-block mobile w-100">
                    <a class="site-title d-flex align-items-top align-content-around justify-content-center justify-content-lg-start mt-2" href="<?= home_url() ?>">
                        <div class="title-tagline-container me-2 d-sm-block d-none">
                            <div class="title"><?= get_bloginfo('name') ?></div>
                            <div class="tagline"><?= get_bloginfo('description') ?></div>
                        </div>
                        <div class="title-tagline-container-xs ms-auto ms-sm-0 d-block d-sm-none">
                            <div class="title"><?= get_bloginfo('name') ?></div>
                            <div class="tagline"><?= get_bloginfo('description') ?></div>
                        </div>
                        <div class="ms-auto ms-sm-2">
                            <?= jtc_get_custom_logo() ?>
                        </div>
                    </a>
                </div>
            </div>
            <div class="collapse navbar-collapse flex-lg-row mt-3 mt-lg-0" id="navigation">
                <?php
                wp_nav_menu(array(
                    'menu' => 'primary',
                    'container' => '',
                    'theme-location' => 'primary',
                    'menu_class' => 'navbar-nav text-sm-center text-md-left d-flex gap-2',
                    'container_class' => 'nav-item',
                    'walker' => new JTC_Menu_Walker(),
                ));
                ?>
                <hr class="d-lg-none d-block text-white">
                <div class="header-secondary d-lg-none d-block">
                    <div class="d-flex flex-md-row flex-column align-items-stretch gap-2">
                        <?= get_template_part('template-parts/toggler-lang') ?>
                        <div class="social-list d-flex gap-2 justify-content-center me-md-auto me-0 my-3 my-md-0">
                            <?php
                            if (is_active_sidebar('jtc-widget-socials')) {
                                dynamic_sidebar('jtc-widget-socials');
                            } else {
                            ?>
                                <a href="#" class="bg-linkedin"><i class="fab fa-linkedin-in fa-fw"></i></a>
                                <a href="#" class="bg-instagram"><i class="fab fa-instagram fa-fw"></i></a>
                                <a href="#" class="bg-whatsapp"><i class="fab fa-whatsapp fa-fw"></i></a>
                            <?php
                            }
                            ?>
                        </div>
                        <div class="d-flex flex-md-row flex-column gap-1">
                            <?php
                            if (get_option('users_can_register')) {
                                if (is_active_sidebar('jtc-widget-auth')) {
                                    dynamic_sidebar('jtc-widget-auth');
                                } else {
                            ?>
                                    <a class="btn btn-primary-outline" href="#"><span class="me-1">Login</span><i class="fa-solid fa-right-to-bracket"></i></a>
                                    <a class="btn btn-primary" href="#"><span class="me-1">Register</span></a>
                            <?php
                                }
                            }
                            ?>
                            <hr class="text-white">
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>