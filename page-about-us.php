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
                <section class="who-we-are mb-4 col-lg-6">
                    <div>
                        <h1>Who We Are</h1>
                        <hr class="hr-primary me-auto">
                    </div>
                    <p>
                        <?php
                        if (is_active_sidebar('jtc-widget-deskripsi-perusahaan')) {
                            dynamic_sidebar('jtc-widget-deskripsi-perusahaan');
                        } else {
                        ?>
                            Jaya Tehnik Company is a company that focuses on providing spare parts and remanufacturing services for all types of heavy equipment with more than two decades of experience.<br><br>

                            The spare parts presented include Motor Starters, Armatures, Alternators, Solenoids, and many other types of spare parts classified as OEM products or original products from major brands such as Caterpillar, Hitachi, Komatsu, New Era, Yanmar, Denso, Woodward, and many other brands.<br><br>


                            Every product from Jaya Tehnik Company will go through an intensive checking process which ensures that each product functions optimally until the installation process is complete. Jaya Tehnik Company guarantees a 100% refund if the product received does not match the picture provided.<br><br>

                            Purchased products can be picked up directly at our office in Taman Sari Raya, West Jakarta or via delivery services such as online motorcycle taxis or expeditions.
                        <?php
                        }
                        ?>
                    </p>
                </section>
                <section class="our-contact col-lg-6 mb-4">
                    <div>
                        <h1>Our Contact</h1>
                        <hr class="hr-primary me-auto">
                        <a href="#">
                            <p>
                                <?php
                                if (is_active_sidebar('jtc-widget-alamat-perusahaan')) {
                                    dynamic_sidebar('jtc-widget-alamat-perusahaan');
                                } else {
                                ?>
                                    Jl. Taman Sari Raya No.1, Maphar, Kec. Taman Sari, Jakarta, Daerah Khusus Ibukota Jakarta 11160
                                <?php
                                }
                                ?>
                            </p>
                        </a>
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
                </section>
                <section class="d-flex flex-sm-row flex-column gap-3 mb-4 flex-wrap">
                    <a href="#" class="card col-lg-3 col-md-6 p-4 text-center">
                        <i class="text-primary far fa-building mb-3" style="font-size: 4.5rem;"></i>
                        <hr class="hr-primary ms-auto me-auto">
                        <h6>Field Company</h6>
                        <p>
                            <?php
                            if (is_active_sidebar('jtc-widget-bidang-perusahaan')) {
                                dynamic_sidebar('jtc-widget-bidang-perusahaan');
                            } else {
                            ?>
                                Supplier of Unit & Parts of Dynamo Starter, Alternator & Service Parts Diesel
                            <?php
                            }
                            ?>
                        </p>
                    </a>
                    <a href="#" class="card col-lg-3 col-md-6 p-4 text-center">
                        <i class="text-primary far fa-edit mb-3" style="font-size: 4.5rem;"></i>
                        <hr class="hr-primary ms-auto me-auto">
                        <h6>Since</h6>
                        <p>
                            <?php
                            if (is_active_sidebar('jtc-widget-tahun-berdiri')) {
                                dynamic_sidebar('jtc-widget-tahun-berdiri');
                            } else {
                            ?>
                                1973
                            <?php
                            }
                            ?>
                        </p>
                    </a>
                    <a href="#" class="card col-lg-3 col-md-6 p-4 text-center">
                        <i class="text-primary fas fa-users mb-3" style="font-size: 4.5rem;"></i>
                        <hr class="hr-primary ms-auto me-auto">
                        <h6>Number of Employees</h6>
                        <p>
                            <?php
                            if (is_active_sidebar('jtc-widget-jumlah-karyawan')) {
                                dynamic_sidebar('jtc-widget-jumlah-karyawan');
                            } else {
                            ?>
                                2
                            <?php
                            }
                            ?>
                        </p>
                    </a>
                    <a href="#" class="card col-lg-3 col-md-6 p-4 text-center">
                        <i class="text-primary fas fa-shopping-cart mb-3" style="font-size: 4.5rem;"></i>
                        <hr class="hr-primary ms-auto me-auto">
                        <h6>What We Sell</h6>
                        <p>
                            <?php
                            if (is_active_sidebar('jtc-widget-kami-menjual')) {
                                dynamic_sidebar('jtc-widget-kami-menjual');
                            } else {
                            ?>
                                Starter, Alternator, Armature, Field Coil, Regulator, Bendix Starter, Selenoid, Turbocharger, Regulator, Field Coil, Spare-part Starter, Spare-part Alternator, and Spare-part Heavy Equipment etc.
                            <?php
                            }
                            ?>
                        </p>
                    </a>
                </section>
                <section class="our-schedule d-flex flex-lg-row flex-column gap-3">
                    <div class="col-lg-6 col-12 mb-4">
                        <div>
                            <h1>Our Office Hours</h1>
                            <hr class="hr-primary me-auto">
                        </div>
                        <table class="table">
                            <?php $weekdayNow = date('l'); ?>
                            <tr class="<?= $weekdayNow == 'Sunday' ? 'fw-bold text-warning' : '' ?>">
                                <td>Sunday</td>
                                <td>Closed</td>
                            </tr>
                            <tr class="<?= $weekdayNow == 'Monday' ? 'fw-bold' : '' ?>">
                                <td>Monday</td>
                                <td>09.00-17.30</td>
                            </tr>
                            <tr class="<?= $weekdayNow == 'Tuesday' ? 'fw-bold' : '' ?>">
                                <td>Tuesday</td>
                                <td>09.00-17.30</td>
                            </tr>
                            <tr class="<?= $weekdayNow == 'Wednesday' ? 'fw-bold' : '' ?>">
                                <td>Wednesday</td>
                                <td>09.00-17.30</td>
                            </tr>
                            <tr class="<?= $weekdayNow == 'Thursday' ? 'fw-bold' : '' ?>">
                                <td>Thursday</td>
                                <td>09.00-17.30</td>
                            </tr>
                            <tr class="<?= $weekdayNow == 'Friday' ? 'fw-bold' : '' ?>">
                                <td>Friday</td>
                                <td>09.00-17.30</td>
                            </tr>
                            <tr class="<?= $weekdayNow == 'Saturday' ? 'fw-bold' : '' ?>">
                                <td>Saturday</td>
                                <td>09.00-17.30</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-lg-6 col-12 mb-4">
                        <div>
                            <h1 class="text-capitalize">our online working hours</h1>
                            <hr class="hr-primary me-auto">
                            <h3>09:00-22:00 (Everyday)</h3>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="bg-primary-gradient p-1 mb-4"></div>
        <div class="container">
            <section class="connect-with-us">
                <div class="text-center">
                    <h1>Connect With Us</h1>
                    <hr class="hr-primary ms-auto me-auto">
                    <a href="<?= get_permalink(get_page_by_path('contact-us')) . '#leave-a-reply-limit-top-area' ?>" class="mt-3 mb-5 btn btn-primary text-uppercase py-3">Send Inquiry<i class="fas fa-envelope ms-2"></i></a>
                </div>
            </section>
        </div>
    </article>
</div>

<?php get_footer(); ?>