<?php get_header(); ?>

<div class="container">
    <div id="primary">
        <div id="main">

            <h1>resultado de pesquisa de: <?php echo get_Search_query(); ?></h1>



            <?php
            while (have_posts()) :
                the_post();
            
                get_template_part('parts/content', 'search');

            endwhile;
            the_posts_pagination();
            ?>

        </div>
    </div>
</div>

<?php get_footer(); ?>