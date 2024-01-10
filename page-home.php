<?php get_header() ?>


<div class="part-servicos py-5">

    <div class="container">
        <h2>
            Serviços
        </h2>
        <section class="services d-flex justify-content-between">
            <div class="services-item">
                <?php
                if (is_active_sidebar('services-1')) {
                    dynamic_sidebar('services-1');
                }
                ?>
            </div>
            <div class="services-item">
                <?php
                if (is_active_sidebar('services-2')) {
                    dynamic_sidebar('services-2');
                }
                ?>
            </div>
            <div class="services-item">
                <?php
                if (is_active_sidebar('services-3')) {
                    dynamic_sidebar('services-3');
                }
                ?>
            </div>
            <div class="services-item">
                <?php
                if (is_active_sidebar('services-4')) {
                    dynamic_sidebar('services-4');
                }
                ?>
            </div>
        </section>
    </div>
    <section class="home-blog">
        <div class="container">
            <?php

            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 3,
                'category__in' => array(7, 8, 9),

            );

            $postlist = new WP_Query($args);

            if ($postlist->have_posts()) :
                while ($postlist->have_posts()) : $postlist->the_post();
                get_template_part('parts/content', 'latest-new');
                endwhile;
                wp_reset_postdata();
            else :  ?>

                Nada para mostrar.

            <?php endif; ?>

        </div>
    </section>
</div>

<?php get_footer() ?>