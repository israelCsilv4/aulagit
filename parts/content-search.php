<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<h2>
    <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
</h2>
<?php if ('post' == get_post_type()) : ?>
    <div class="d-flex">
        <div class="pe-3 pb-3">
            <?php the_post_thumbnail(array(275, 275)); ?>
        </div>
        <div>
            <p>
                postado em <?php echo get_the_date(); ?>
            </p>
            <p> tags: <?php the_tags('', ','); ?></p>

        </div>
    <?php endif ?>
    <div class="meta-info">
        <?php the_excerpt(); ?>
    </div>
    </div>
</article>