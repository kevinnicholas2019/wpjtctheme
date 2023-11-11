<?php get_header(); ?>

<div class="main-wrapper">
    <header class="page-title theme-bg-light text-center gradient py-5">
        <h1 class="heading"><?php the_title(); ?></h1>
    </header>
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
</div>

<?php get_footer(); ?>