<div class="splide splide-content-header-attach-fade-vr position-absolute w-100 h-100" style="left: 0; top: 0;">
    <div class="splide__track position-absolute w-100 h-100" style="top: 0; z-index: -1;">
        <ul class="splide__list">
            <?php for ($i = 0; $i < 3; $i++) { ?>
                <li class="splide__slide">
                    <?= do_shortcode('[img-title title="splide_content_header_' . ($i + 1) . '" class="w-100 h-100 object-fit-cover object-position-center"]') ?>
                </li>
            <?php } ?>
        </ul>
    </div>
</div>