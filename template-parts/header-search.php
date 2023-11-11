<div class="header-search bg-dark-custom pb-2">
    <div class="container d-flex flex-lg-row flex-column-reverse align-items-lg-center align-items-unset gap-3 gap-lg-0">
        <div class="d-flex flex-row align-items-center flex-fill">
            <div class="me-3">
                <a href="#" style="font-size: 16px;">
                    <span class="d-lg-inline d-none">Category</span>
                    <i class="fas fa-list d-lg-none d-inline"></i>
                </a>
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
                    <a class="btn btn-primary btn-whatsapp" href="#"><span class="me-2">Chat us</span><i class="fa-brands fa-whatsapp"></i></a>
                    <a class="btn btn-primary" href="#"><span class="me-2">Call us</span><i class="fa-solid fa-phone-flip"></i></a>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>