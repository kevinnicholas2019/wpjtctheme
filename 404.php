<?php get_header(); ?>

<div class="main-wrapper">
    <section class="content p-3 text-center d-flex flex-column gap-5">
        <header class="page-title theme-bg-light text-center gradient">
            <h4 class="heading">Oops!</h4>
        </header>
        <?= get_template_part('template-parts/unload') ?>
        <div>
            <h1 class="text-uppercase">Page not found</h1>
            <h6 class="text-center w-25 m-auto" style="min-width: 250px;">
                Sorry, the page you're looking for doesn't exist.
                If you think something is broken, report a problem.
            </h6>
        </div>
        <div>
            <a href="<?= home_url() ?>" class="btn btn-primary">Go Home</a>
            <a href="<?= get_permalink(get_page_by_path('contact-us')) ?>" class="btn btn-primary">Contact us</a>
        </div>
    </section>
</div>

<?php get_footer(); ?>