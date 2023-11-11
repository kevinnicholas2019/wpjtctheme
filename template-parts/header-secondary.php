<div class="header-secondary bg-dark px-4 py-2 d-none d-lg-block">
    <div class="d-flex flex-md-row flex-column align-items-center container">
        <?= get_template_part('template-parts/toggler-lang') ?>
        <div class="social-list d-flex gap-2 ms-3 me-auto">
            <?php
            if (is_active_sidebar('jtc-widget-socials')) {
                dynamic_sidebar('jtc-widget-socials');
            } else {
            ?>
                <a href="#" class="bg-linkedin"><i class="fab fa-linkedin-in fa-fw"></i></a>
                <a href="#" class="bg-instagram"><i class="fab fa-instagram fa-fw"></i></a>
                <a href="#" class="bg-whatsapp"><i class="fab fa-whatsapp fa-fw"></i></a>
            <?php
            }
            ?>
        </div>
        <div class="mt-3 mt-lg-0 d-flex flex-lg-row flex-column gap-1">
            <?php
            if (get_option('users_can_register')) {
                if (is_active_sidebar('jtc-widget-auth')) {
                    dynamic_sidebar('jtc-widget-auth');
                } else {
            ?>
                    <a class="btn btn-primary-outline" href="#"><span class="me-1">Login</span><i class="fa-solid fa-right-to-bracket"></i></a>
                    <a class="btn btn-primary" href="#"><span class="me-1">Register</span></a>
            <?php
                }
            }
            ?>
        </div>
    </div>
</div>