<?php get_header(); ?>
<div>
    <div class="bg-primary-gradient position-relative mb-5" style="padding-top: 214px;">
        <div class="container">
            <header class="woocommerce-products-header mt-5 p-0">
                <?php if (apply_filters('woocommerce_show_page_title', true)) : ?>
                    <h1 class="woocommerce-products-header__title page-title text-white text-capitalize"><?php the_title(); ?></h1>
                <?php endif; ?>
            </header>

            <div class="w-100 position-relative shadow-sm" style="top: calc(54.08px / 2);">
                <div class="bg-white w-100 p-3 rounded">
                    <?php
                    /**
                     * Hook: woocommerce_before_main_content.
                     *
                     * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
                     * @hooked woocommerce_breadcrumb - 20
                     * @hooked WC_Structured_Data::generate_website_data() - 30
                     */
                    do_action('woocommerce_before_main_content');

                    /**
                     * Hook: woocommerce_after_main_content.
                     *
                     * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
                     */
                    do_action('woocommerce_after_main_content');
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container mb-5">
        <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post();
                get_template_part('template-parts/content', 'page');
            }
        }
        ?>
    </div>
</div>

<?php

get_footer();
