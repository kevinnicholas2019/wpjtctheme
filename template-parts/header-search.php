<div class="header-search bg-dark-custom">
    <div class="container d-flex flex-lg-row flex-column-reverse align-items-lg-center align-items-unset gap-3 gap-lg-0">
        <div class="d-flex flex-row align-items-center flex-fill">
            <div class="d-flex align-items-center dropdown dropdown-hovered pe-3" id="dropdownCategoryMenuLinkContainer">
                <a href="#" role="button" id="dropdownCategoryMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="d-lg-inline d-none">Category</span>
                    <i class="fas fa-list d-lg-none d-inline"></i>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownCategoryMenuLink" id="dropdownCategoryMenuLink2">
                    <ul class="list-unstyled container mb-0 ps">
                        <li>
                            <a class="dropdown-item" href="#">
                                Action
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                Another action
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                Something else here
                            </a>
                        </li>
                    </ul>
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