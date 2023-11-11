<div class="header-secondary bg-dark px-4 py-2 d-none d-lg-block">
    <div class="d-flex flex-md-row flex-column align-items-center container">
        <?= get_template_part('template-parts/toggler-lang') ?>
        <div class="social-list d-flex gap-2 ms-3 me-auto">
            <?php dynamic_sidebar('jtc-widget-socials') ?>
        </div>
        <div class="mt-3 mt-lg-0 d-flex flex-lg-row flex-column gap-1">
            <?php dynamic_sidebar('jtc-widget-auth') ?>
        </div>
    </div>
</div>