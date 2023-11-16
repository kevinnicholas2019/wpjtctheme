<?php get_header(); ?>

<div class="main-wrapper">
    <header class="page-title theme-bg-light text-center gradient py-5">
        <h1 class="heading"><?php the_title(); ?></h1>
    </header>
    <article class="main-content">
        <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post();
                get_template_part('template-parts/content', 'archive');
            }
        }
        ?>
    </article>
</div>

<?php get_footer(); ?>