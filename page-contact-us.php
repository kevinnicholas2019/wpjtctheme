<?php get_header(); ?>

<div class="main-wrapper">
    <article class="main-content">
        <div class="content-header-attach bg-dark-custom">
            <?= get_template_part('template-parts/splide-content-header-attach-fade-vr') ?>
            <div class="container d-flex flex-column gap-5 align-items-center justify-content-center h-100">
                <div class="content-header-attach-texts text-center">
                    <h1 class="heading"><?php the_title(); ?></h1>
                    <hr class="hr-primary ms-auto me-auto">
                    <h1 style="font-weight: 300;"><?= bloginfo('title') ?></h1>
                    <h3 style="font-weight: 200;"><?= bloginfo('description') ?></h3>
                </div>
            </div>
        </div>
        <div class="container p-3 py-5">
            <div class="row">
                <div class="col-xl-6">
                    <table class="table">
                        <tr>
                            <td><i class="fas fa-building"></i></td>
                            <td>Address</td>
                            <td>
                                <?php
                                if (is_active_sidebar('jtc-widget-alamat-perusahaan')) {
                                    dynamic_sidebar('jtc-widget-alamat-perusahaan');
                                } else {
                                ?>
                                    Jl. Taman Sari Raya No.1, Maphar, Kec. Taman Sari, Jakarta, Daerah Khusus Ibukota Jakarta 11160
                                <?php
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-phone-alt"></i></td>
                            <td>Get in Touch</td>
                            <td>
                                <table class="w-100 text-center">
                                    <tr>
                                        <td class="align-text-top">Anen</td>
                                        <td>
                                            <table class="w-100">
                                                <tr>
                                                    <td>
                                                        <a href="https://wa.me/6281210007789" target="_blank">+62 812-1000-7789</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="https://wa.me/6285310007789" target="_blank">+62 853-1000-7789</a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-text-top">Kevin</td>
                                        <td><a href="https://wa.me/6285695163031" target="_blank">+62 856-9516-3031</a></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                        <tr>
                            <td><i class="fas fa-envelope"></i></td>
                            <td>Email</td>
                            <td><a href="mailto:jayatehnikcompany@gmail.com?subject=Asking Product Ready (Tanya Barang)&body=Saya mau tanya apakah ada barang dengan no sparepart 'xxxxxx', mohon dibantu!">jayatehnikcompany@gmail.com</a></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-coffee"></i></td>
                            <td>Hours</td>
                            <td>
                                <table class="w-100">
                                    <?php $weekdayNow = date('l'); ?>
                                    <tr class="<?= $weekdayNow == 'Sunday' ? 'fw-bold text-warning' : '' ?>">
                                        <td>Sunday</td>
                                        <td>Closed</td>
                                    </tr>
                                    <tr class="<?= $weekdayNow != 'Sunday' ? 'fw-bold' : '' ?>">
                                        <td>Mon to Sat</td>
                                        <td>09.00-17.30</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-coffee"></i></td>
                            <td>Online Hours</td>
                            <td class="fw-bold">
                                09:00-22:00 (Everyday)
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-xl-6">
                    <?php
                    if (is_active_sidebar('jtc-widget-lokasi-peta-perusahaan')) {
                        dynamic_sidebar('jtc-widget-lokasi-peta-perusahaan');
                    } else {
                    ?>
                        <iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15867.081182287448!2d106.8266529!3d-6.1615107999999985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f55e962dbdff%3A0x3c969d5cd7eb06f3!2sJaya%20Tehnik%20Company!5e0!3m2!1sid!2sid!4v1699775801535!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <hr class="hr-primary w-100">
        <div class="position-relative">
            <div class="position-absolute" id="leave-a-reply-limit-top-area" style="top: -178px;"></div>
        </div>
        <div class="container" style="margin-top: 20px; margin-bottom: 80px;">
            <div>
                <?= do_shortcode('[contact-form-7 id="a244557" title="Contact Us Page Form"]') ?>
            </div>
        </div>
    </article>
</div>

<?php get_footer(); ?>