<?php get_header() ?>


<div id="content" class="site-content">
    <div id="primary" class="site-main">

        <section class="home-blog">
            <div class="container">
                <div class="page-items">
                    <?php
                    while (have_posts()) :
                        the_post();
                        get_template_part('parts/content', 'page');
                        if (comments_open() || get_comments_number()) {
                            comments_template();
                        }
                    endwhile;
                    ?>



        </section>

        <?php get_footer() ?>
    </div>
</div>