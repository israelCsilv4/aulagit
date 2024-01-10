<?php get_header() ?>
<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
<div id="content" class="site-content">
    <div id="primary" class="site-main">

        <section class="home-blog">
            <?php the_archive_title('<h1 class="archive-title text-center"', '</h1>'); ?>
            <?php the_archive_description('<div class="archive-description py-3 text-center">', '</div>') ?>
            <div class="container d-flex">
                <div class="col-8 archive-items">
                    <?php
                    if (have_posts()) :
                        while (have_posts()) : the_post();
                            get_template_part('parts/content');
                        endwhile;
                    ?>
                        <div class="wpdevs-pagination">
                            <div class="row justify-content-end">
                                <div class="col-6 d-flex justify-content-between">

                                    <div class="pages new"> <?php previous_posts_link("<< Newer posts "); ?></div>
                                    <div class="pages old"><?php next_posts_link("Older posts >>"); ?></div>
                                </div>
                            </div>
                        </div>
                    <?php



                    else :  ?>
                        <p>
                            Nada para mostrar.
                        </p>
                    <?php endif; ?>
                </div>
                <div class="col-4 pt-2 d-flex justify-content-end">

                    <?php get_sidebar(); ?>
                </div>

            </div>


        </section>

        <?php get_footer() ?>
    </div>
</div>