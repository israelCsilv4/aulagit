<?php get_header() ?>

<div class="erro">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-12">
                <h1>
                     erro 404

                </h1>
                <p>
                    a página nao existe, cacete!
                </p>
            </div>
        </div>
    </div>
</div>

<div class="retorno">
    <?php get_search_form()?>
    <?php
    the_widget('WP_Widget_Recent_Posts',
    array(

        'title' => 'veja os ultimos posts',
        'number' => 2
    ))
    
    ?>
</div>
<?php get_footer() ?>