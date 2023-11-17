<?php get_header(); ?>

<article class="main-wrapper main-content">
    <div class="content-header-attach bg-dark-custom">
        <?= get_template_part('template-parts/splide-content-header-attach-fade-vr') ?>
        <div class="container d-flex flex-column gap-5 align-items-center justify-content-center h-100">
            <div class="content-header-attach-texts text-center">
                <h1 class="heading">Blog</h1>
                <hr class="hr-primary ms-auto me-auto">
                <h1 style="font-weight: 300;"><?= bloginfo('title') ?></h1>
                <h3 style="font-weight: 200;"><?= bloginfo('description') ?></h3>
            </div>
        </div>
    </div>
    <section class="content px-3 py-5 p-md-5">
        <?php
        if (have_posts()) {
            the_posts_pagination();
            while (have_posts()) {
                the_post();
                get_template_part('template-parts/content', 'archive');
            }
            the_posts_pagination();
        } else {
            echo "<h3>The Author has not written a post yet</h3>";
        }
        ?>
    </section>
</article>


<?php get_footer(); ?>