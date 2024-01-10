<article>
    <h3>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h3>
    <div class="d-flex">
        <div class="pe-3 pb-3">
           
            <?php if (has_post_thumbnail()):?>
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(275, 275)); ?></a>

            <?php endif ;?>
        </div>
        <div>
            <p>
                postado em <?php echo get_the_date(); ?>
            </p>
            <p> tags: <?php the_tags('', ','); ?></p>
            <p> author <?php the_author_posts_link('', ','); ?></p>
        </div>
    </div>
    <div class="meta-info">
        <?php the_excerpt(); ?>
    </div>
</article>