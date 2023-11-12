<?php
require_once get_template_directory() . '/classes/class-jayatehnikcompany-menu-walker.php';
require_once get_template_directory() . '/inc/jtc-get-custom-logo.php';
?>

<footer class="footer">
    <div class="py-5 bg-dark">
        <div class="container d-flex gap-3 flex-wrap">
            <div class="col-lg-6 col-12 mb-3 mb-lg-0">
                <a class="text-center site-title d-flex align-items-top justify-content-center justify-content-lg-start h-100" href="<?= home_url() ?>">
                    <div class="d-none d-sm-block">
                        <?= jtc_get_custom_logo() ?>
                    </div>
                    <div class="ms-2 title-tagline-container" style="height: auto;">
                        <div class="title" style="height: auto; line-height: 2.5rem; margin-bottom: 1rem;"><?= get_bloginfo('name') ?></div>
                        <div class="tagline"><?= get_bloginfo('description') ?></div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-12 mb-3 mb-lg-0 text-xl-start text-lg-center text-md-start text-sm-start text-center">
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
            <div class="col-lg-3 col-md-6 col-12 mb-3 mb-lg-0 text-white text-xl-start text-lg-center text-md-start text-sm-start text-center">
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
                        <p>+62 812-1000-7789 (Anen)</p>
                        <p>+62 53-1000-7789 (Anen)</p>
                        <p>+62 56-9516-3031 (Kevin)</p>
                    <?php
                    }
                    ?>
                    <?php
                    if (is_active_sidebar('jtc-widget-email-perusahaab')) {
                        dynamic_sidebar('jtc-widget-email-perusahaab');
                    } else {
                    ?>
                        <p>jayatehnikcompany@gmail.com</p>
                    <?php
                    }
                    ?>
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