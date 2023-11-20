<div class="header-search bg-dark-custom">
    <div class="container d-flex flex-lg-row flex-column-reverse align-items-lg-center align-items-unset gap-3 gap-lg-0">
        <div class="d-flex flex-row align-items-center flex-fill">
            <div class="d-flex align-items-center dropdown dropdown-hovered pe-3" id="dropdownCategoryMenuLinkContainer">
                <a href="#" role="button" id="dropdownCategoryMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="d-lg-inline d-none">Category</span>
                    <i class="fas fa-list d-lg-none d-inline"></i>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownCategoryMenuLink" id="dropdownCategoryMenuLink2">
                    <nav class="container p-md-0 px-1 mb-2">
                        <div class="nav nav-tabs d-flex" id="nav-cat-tab" role="tablist">
                            <button class="nav-link flex-fill active" id="nav-cat-products-tab" data-bs-toggle="tab" data-bs-target="#nav-cat-products" type="button" role="tab" aria-controls="nav-cat-products" aria-selected="true">Products</button>
                            <button class="nav-link flex-fill" id="nav-cat-brands-tab" data-bs-toggle="tab" data-bs-target="#nav-cat-brands" type="button" role="tab" aria-controls="nav-cat-brands" aria-selected="false">Brands</button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-cat-tabContent">
                        <div class="h-100 tab-pane fade show active" id="nav-cat-products" role="tabpanel" aria-labelledby="nav-cat-products-tab">
                            <div class="d-flex flex-column flex-lg-row align-items-start container h-100 p-md-0 px-1">
                                <div class="nav row-gap-2 flex-row flex-lg-column nav-pills me-3 pe-lg-3 pe-0 pb-3 pb-lg-0 mb-3 mb-lg-0 col-12 col-lg-2 h-auto h-lg-100 ps flex-nowrap" id="v-pills-products-tab" role="tablist" aria-orientation="vertical">
                                    <?php for ($i = 1; $i <= 22; $i++) { ?>
                                        <button class="fw-bold text-nowrap nav-link <?= $i == 1 ? 'active' : '' ?>" id="v-pills-product-<?= $i ?>-tab" data-bs-toggle="pill" data-bs-target="#v-pills-product-<?= $i ?>" type="button" role="tab" aria-controls="v-pills-product-<?= $i ?>" aria-selected="<?= $i == 1 ? 'true' : 'false' ?>">Product <?= $i ?></button>
                                    <?php } ?>
                                </div>
                                <div class="tab-content col-12 col-lg-10" id="v-pills-products-tabContent">
                                    <?php for ($i = 1; $i <= 22; $i++) { ?>
                                        <div class="tab-pane fade <?= $i == 1 ? 'show active' : '' ?>" id="v-pills-product-<?= $i ?>" role="tabpanel" aria-labelledby="v-pills-product-<?= $i ?>-tab">...</div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class="h-100 tab-pane fade" id="nav-cat-brands" role="tabpanel" aria-labelledby="nav-cat-brands-tab">
                            <div class="d-flex flex-column flex-lg-row align-items-start container h-100 p-0">
                                <div class="nav row-gap-2 flex-row flex-lg-column nav-pills me-3 pe-lg-3 pe-0 pb-3 pb-lg-0 mb-3 mb-lg-0 col-12 col-lg-2 h-auto h-lg-100 ps flex-nowrap" id="v-pills-brands-tab" role="tablist" aria-orientation="vertical">
                                    <?php for ($i = 1; $i <= 22; $i++) { ?>
                                        <button class="fw-bold text-nowrap nav-link <?= $i == 1 ? 'active' : '' ?>" id="v-pills-brand-<?= $i ?>-tab" data-bs-toggle="pill" data-bs-target="#v-pills-brand-<?= $i ?>" type="button" role="tab" aria-controls="v-pills-brand-<?= $i ?>" aria-selected="<?= $i == 1 ? 'true' : 'false' ?>">Brand <?= $i ?></button>
                                    <?php } ?>
                                </div>
                                <div class="tab-content col-12 col-lg-10" id="v-pills-brands-tabContent">
                                    <?php for ($i = 1; $i <= 22; $i++) { ?>
                                        <div class="tab-pane fade <?= $i == 1 ? 'show active' : '' ?>" id="v-pills-brand-<?= $i ?>" role="tabpanel" aria-labelledby="v-pills-brand-<?= $i ?>-tab">...</div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="searcher">
                <i class="fas fa-search ms-2"></i>
                <?= get_search_form() ?>
            </div>
            <a class="ms-3 me-2 shopping-cart" style="font-size: 16px;" href="<?= wc_get_cart_url() ?>">
                <i class="fas fa-shopping-cart"></i>
            </a>
        </div>
        <div class="ms-lg-3 ms-0 d-flex flex-row align-items-center justify-content-center gap-4 mt-lg-0 mt-sm-2 mt-0">
            <a class="d-none shopping-cart" href="<?= wc_get_cart_url() ?>">
                <i class="fas fa-shopping-cart"></i>
            </a>
            <hr class="vr text-white d-none d-lg-block">
            <div class="contact-us-container d-flex flex-row align-items-center gap-1">
                <?php
                if (is_active_sidebar('jtc-widget-request-chat-and-call')) {
                    dynamic_sidebar('jtc-widget-request-chat-and-call');
                } else {
                ?>
                    <a class="btn btn-primary btn-whatsapp" href="https://wa.me/6285310007789" target="_blank"><span class="me-2">Chat us</span><i class="fa-brands fa-whatsapp"></i></a>
                    <a class="btn btn-primary" href="tel:+6281210007789"><span class="me-2">Call us</span><i class="fa-solid fa-phone-flip"></i></a>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>