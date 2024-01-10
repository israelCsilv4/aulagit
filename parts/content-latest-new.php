<article class="latest-news">
    <h3>
        <?php if (has_post_thumbnail()):?>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        <?php endif ;?>
    </h3>
    <div class="d-flex">
        <div class="pe-3 pb-3">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(275, 275)); ?></a>
        </div>
        <div>
            <p>
                postado em <?php echo get_the_date(); ?>
            </p>
            <p> tags: <?php the_tags('', ','); ?></p>
        </div>
    </div>
    <div class="meta-info">
        <?php the_excerpt(); ?>
    </div>
</article>