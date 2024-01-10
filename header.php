<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/style.css">
</head>

<body <?php body_class(); ?>>


    <header>

<?php
 if (is_page('lading-page')):
    return;
else:
?>
        <div class="container">


            <nav class="col-12 home-menu py-4">

                <div class="row align-items-center">
                    <div class="col-4">
                        <?php
                        if (has_custom_logo()) {
                            the_custom_logo();
                        } else {
                        ?>
                            <a href="<?php echo home_url('/'); ?>"> <span><?php bloginfo('name'); ?></span></a>
                        <?php
                        }
                        ?>
                    </div>

                    <div class="col-8">
                        <?php wp_nav_menu(array('theme_location' => 'wp_devs_main_menu', 'depth' => 2)); ?>
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-4 d-flex justify-content-end">
                        <div class="searchbox">
                            <?php get_search_form(); ?>
                        </div>
                    </div>
                </div>


            </nav>

        </div>
        <?php endif;?>

    </header>