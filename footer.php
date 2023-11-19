<div class="bg-dark-custom position-fixed w-100 h-100 d-none" id="categoryModalTatakanHitam" style="left: 0; top: 0; z-index: var(--z-index-category-dropdown)"></div>
</main>

<?php
require_once get_template_directory() . '/classes/class-jayatehnikcompany-menu-walker.php';
require_once get_template_directory() . '/inc/jtc-get-custom-logo.php';
global $wp;
$current_url = home_url(add_query_arg(array(), $wp->request));
?>

<footer class="footer">
    <div class="py-4 py-md-5 bg-dark">
        <div class="container d-flex gap-3 flex-wrap">
            <div class="col-xl-6 col-lg-6 col-12 mb-3 mb-lg-0">
                <div class="mb-4">
                    <a class="text-center site-title d-flex flex-column flex-md-row align-items-top justify-content-center justify-content-lg-start" href="<?= home_url() ?>">
                        <div class="mb-3 mb-md-0">
                            <?= jtc_get_custom_logo() ?>
                        </div>
                        <div class="ms-2 title-tagline-container" style="height: auto;">
                            <div class="title" style="height: auto; line-height: 2.5rem; margin-bottom: 1rem;"><?= get_bloginfo('name') ?></div>
                            <div class="tagline"><?= get_bloginfo('description') ?></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-12 mb-3 mb-lg-0 text-xl-start text-lg-center text-md-start text-sm-start text-center">
                <div class="mb-5 mb-md-4">
                    <h3 class="text-white mb-3">Navigation</h3>
                    <hr class="hr-primary ms-auto me-auto ms-sm-0 me-sm-auto ms-md-0 me-md-auto ms-lg-auto me-lg-auto ms-xl-0 me-xl-auto">
                    <?php
                    wp_nav_menu(array(
                        'menu' => 'primary',
                        'container' => '',
                        'theme-location' => 'primary',
                        'menu_class' => 'navbar-nav-footer d-flex gap-1 w-100 font-size-small',
                        'container_class' => 'nav-item',
                        'walker' => new JTC_Menu_Walker(),
                    ));
                    ?>
                </div>
                <div class="mb-5 mb-md-4">
                    <h3 class="text-white mb-3">Products</h3>
                    <hr class="hr-primary ms-auto me-auto ms-sm-0 me-sm-auto ms-md-0 me-md-auto ms-lg-auto me-lg-auto ms-xl-0 me-xl-auto">
                    <ul class="navbar-nav-footer d-flex flex-row justify-content-xl-start justify-content-lg-center justify-content-md-start justify-content-sm-start justify-content-center gap-2 w-100 font-size-small flex-wrap pe-xl-5 pe-0">
                        <?php
                        require_once get_template_directory() . '/inc/jtc-get-onlyshow-categories.php';
                        $onlyshow = jtc_get_onlyshow_categories();
                        foreach ($onlyshow as $cat) {
                            $cat = get_term_by('slug', $cat, 'product_cat');
                            if ($cat) {
                                $link = get_term_link($cat->slug, 'product_cat');
                        ?>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home nav-item menu-item-17 <?= $current_url . '/' == $link ? 'active' : '' ?>"><a href="<?= $link ?>" class="nav-link"><?= $cat->name ?></a></li>
                        <?php
                            }
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 mb-3 mb-lg-0 text-white d-flex flex-column">
                <div class="text-xl-start text-lg-center text-md-start text-sm-start text-center mb-5 mb-md-3">
                    <h3 class="text-white mb-3">Our Location</h3>
                    <hr class="hr-primary ms-auto me-auto ms-sm-0 me-sm-auto ms-md-0 me-md-auto ms-lg-auto me-lg-auto ms-xl-0 me-xl-auto">
                    <div class="font-size-small">
                        <?php
                        if (is_active_sidebar('jtc-widget-alamat-perusahaan')) {
                            dynamic_sidebar('jtc-widget-alamat-perusahaan');
                        } else {
                        ?>
                            <p>Jl. Taman Sari Raya No.1, Maphar, Kec. Taman Sari, Jakarta, Daerah Khusus Ibukota Jakarta 11160</p>
                        <?php
                        }
                        ?>
                        <br>
                        <?php
                        if (is_active_sidebar('jtc-widget-no-telepon')) {
                            dynamic_sidebar('jtc-widget-no-telepon');
                        } else {
                        ?>
                            <p><a href="https://wa.me/6281210007789" target="_blank">+62 812-1000-7789 (Anen)</a></p>
                            <p><a href="https://wa.me/6285310007789" target="_blank">+62 853-1000-7789 (Anen)</a></p>
                            <p><a href="https://wa.me/6285695163031" target="_blank">+62 856-9516-3031 (Kevin)</a></p>
                        <?php
                        }
                        ?>
                        <?php
                        if (is_active_sidebar('jtc-widget-email-perusahaab')) {
                            dynamic_sidebar('jtc-widget-email-perusahaab');
                        } else {
                        ?>
                            <p><a href="mailto:jayatehnikcompany@gmail.com?subject=Asking Product Ready (Tanya Barang)&body=Saya mau tanya apakah ada barang dengan no sparepart 'xxxxxx', mohon dibantu!">jayatehnikcompany@gmail.com</a></p>
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="text-xl-start text-lg-center text-md-start text-sm-start text-center">
                    <h3 class="text-white mb-3">Term & Policy</h3>
                    <hr class="hr-primary ms-auto me-auto ms-sm-0 me-sm-auto ms-md-0 me-md-auto ms-lg-auto me-lg-auto ms-xl-0 me-xl-auto">
                    <ul class="navbar-nav-footer d-flex flex-row justify-content-xl-start justify-content-lg-center justify-content-md-start justify-content-sm-start justify-content-center gap-3 w-100 font-size-small flex-wrap">
                        <?php
                        $arr = [
                            [
                                'name' => 'Term & Condition',
                                'link' => '#',
                            ],
                            [
                                'name' => 'Privacy Policy',
                                'link' => '#',
                            ],
                        ];
                        foreach ($arr as $data) {
                        ?>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home nav-item menu-item-17"><a href="<?= $data['link'] ?>" class="nav-link"><?= $data['name'] ?></a></li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="py-3 bg-primary-gradient">
        <div class="container text-white d-flex flex-md-row flex-column text-md-left text-center">
            <p class="copyright mb-md-0 mb-2">&copy; Toko Jaya Tehnik Company All Rights Reserved</p>
            <p class="copyright-2 mb-md-0 mb-0 ms-md-auto">&copy; <?= date('Y') ?> Powered by <a class="text-white text-decoration-underline" href="#" target="_blank">KN Tech Studio</a>.</p>
        </div>
    </div>
</footer>

<?php
wp_footer();
?>
</body>

</html>