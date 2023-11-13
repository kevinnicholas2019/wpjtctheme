<?php get_header(); ?>

<div class="main-wrapper">
    <article class="main-content">
        <section class="content-header-attach bg-dark-custom">
            <?= get_template_part('template-parts/splide-content-header-attach-fade-vr') ?>
            <div class="container d-flex flex-column gap-5 align-items-center justify-content-center h-100">
                <div class="content-header-attach-texts">
                    <h1 class="text-center">BUY NOW!</h1>
                    <h5 class="text-center">Find your Unit & Part of Dynamo Starter, Alternator, Service Parts and More!</h5>
                </div>
                <form class="content-header-attach-form w-100 bg-dark-custom flex-row align-items-center justify-content-center p-4 gap-3 d-none d-lg-flex">
                    <input type="text" class="form-control py-3" placeholder="Select Category" />

                    <input type="text" class="form-control py-3" placeholder="Select Brand" />

                    <input type="text" class="form-control py-3" placeholder="What are you looking for?" />

                    <button type="submit" class="form-control btn btn-primary text-uppercase py-3" style="max-width: 150px;">
                        Search
                    </button>
                </form>

                <form class="content-header-attach-form w-100 bg-dark-custom flex-row align-items-center justify-content-center p-4 gap-2 d-flex d-lg-none">
                    <input type="text" class="form-control py-2" placeholder="What are you looking for?" />

                    <button type="submit" class="form-control btn btn-primary text-uppercase" style="width: 45px; height: 45px; padding: 0 !important;">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
                <div class="content-header-attach-texts">
                    <h5 class="text-center">Or list all available part equipment in our <a href="<?= get_permalink(wc_get_page_id('shop'));  ?>" class="btn btn-primary px-2">marketplace.</a></h5>
                </div>
            </div>
        </section>
        <section class="content-banner">
            <div class="container">
                <div class="splide splide-banner pt-3">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">Banner 01</li>
                            <li class="splide__slide">Banner 01</li>
                            <li class="splide__slide">Banner 01</li>
                            <li class="splide__slide">Banner 01</li>
                            <li class="splide__slide">Banner 01</li>
                            <li class="splide__slide">Banner 01</li>
                            <li class="splide__slide">Banner 01</li>
                            <li class="splide__slide">Banner 01</li>
                            <li class="splide__slide">Banner 01</li>
                            <li class="splide__slide">Banner 01</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="content-2 mb-5">
            <div class="container">
                <div class="content-2-title-container text-center text-md-start">
                    <h1 class="content-2-title text-uppercase">Categories</h1>
                </div>
                <div class="content-2-list-category mb-3 mt-5 row align-items-center justify-content-center">
                    <?= get_template_part('template-parts/content', 'only-category') ?>
                </div>
                <div class="content-2-find-more-container text-center">
                    <a href="<?= get_permalink(wc_get_page_id('shop')) ?>" class="btn btn-primary text-uppercase py-2">
                        Find more
                    </a>
                </div>
            </div>
        </section>
        <section class="content-3 mb-5">
            <div class="container">
                <div class="content-3-title-container text-center text-md-start">
                    <h1 class="content-3-title text-uppercase text-md-end text-center">Brands</h1>
                </div>
                <div class="splide splide-brand mt-5">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">Slide 01</li>
                            <li class="splide__slide">Slide 01</li>
                            <li class="splide__slide">Slide 01</li>
                            <li class="splide__slide">Slide 01</li>
                            <li class="splide__slide">Slide 01</li>
                            <li class="splide__slide">Slide 01</li>
                            <li class="splide__slide">Slide 01</li>
                            <li class="splide__slide">Slide 01</li>
                            <li class="splide__slide">Slide 01</li>
                            <li class="splide__slide">Slide 01</li>
                        </ul>
                    </div>

                    <!-- Add the progress bar element -->
                    <div class="my-slider-progress">
                    </div>
                </div>
            </div>
        </section>
        <div class="bg-primary-gradient p-1 mb-4"></div>
        <div class="position-relative">
            <div class="position-absolute" id="content-shop-start-pos" style="top: -225px;"></div>
        </div>
        <section class="content-shop mb-5">
            <div class="container">
                <div class="splide content-shop-choose-category mb-4">
                    <div class="splide__track">
                        <div class="splide__list d-flex flex-md-row">
                            <?php
                            require_once get_template_directory() . '/inc/jtc-get-onlyshow-categories.php';
                            $onlyshow_categories = jtc_get_onlyshow_categories();
                            $counter = count($onlyshow_categories);
                            $counter = $counter > 5 ? 5 : $counter;
                            for ($i = 0; $i < $counter; $i++) {
                                $category = $onlyshow_categories[$i];
                                $slug = $category;
                                $category = str_replace("-", " ", $category);
                            ?>
                                <a href="#content-shop-start-pos" class="splide__slide bg-primary-gradient text-white pt-2 pb-5 px-2 text-capitalize rounded" data-slug="<?= $slug ?>">
                                    <?= $category ?>
                                </a>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="content-shop-item-container">
                    <div class="content-shop-list-item-loading d-flex flex-wrap position-relative gap-3 d-none">
                        <?php for ($i = 0; $i < 12; $i++) { ?>
                            <?= get_template_part('template-parts/card-product', 'loading') ?>
                        <?php } ?>
                    </div>
                    <div class="content-shop-list-item d-flex flex-wrap position-relative gap-3 d-none">

                    </div>
                </div>
            </div>
        </section>
    </article>
</div>

<?php get_footer(); ?>