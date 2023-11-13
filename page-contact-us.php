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
        <div class="container p-3">
            <div class="row">
                <h1>KEVIN NICHOLAS</h1>
            </div>
        </div>
    </article>
</div>

<?php get_footer(); ?>