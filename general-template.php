<?php
/*
Template Name: General Template
*/
?>
<?php get_header() ?>
<div id="content" class="site-content">
    <div id="primary" class="site-main">

        <section class="home-blog">
            <div class="container">
                <div class="general-tempalte">
                    <?php
                    if (have_posts()) :
                        while (have_posts()) : the_post();
                    ?>

                            <article>
                                <h1>
                                    testeee
                                </h1>

                                <p>
                                   foi postado em <?php echo get_the_date(); ?> 

                                </p>
                              


                            </article>
                        <?php
                        endwhile;
                    else :  ?>
                        <p>
                            Nada para mostrar.
                        </p>
                    <?php endif; ?>
                </div>
            </div>


        </section>

        <?php get_footer() ?>
    </div>
</div>