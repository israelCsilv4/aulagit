<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <h1>
                        <?php the_title(); ?>
                    </h1>
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
                    </div>
                    <div class="meta-info">
                        <?php the_content(); ?>
                    </div>
                </article>