<?php
function wpdevs_load_scripts()
{
    wp_enqueue_style('wpdevs-style', get_stylesheet_uri(), array(), '1.0', 'all');
    wp_enqueue_Script('dropdown', get_template_directory_uri() . '/modules/teste', array('jquery', '3.6.0', true));
}
add_Action('wp_enqueue_scripts', 'wpdevs_load_scripts');

register_nav_menus(
    array(
        'wp_devs_main_menu' => 'Main Menu',
        'wp_Devs_footer_menu' => 'Footer Menu'
    )
);


function wpdevs_config()
{
    register_nav_menus(
        array(
            'wp_devs_main_menu' => 'Main Menu',
            'wp_Devs_footer_menu' => 'Footer Menu'
        )
    );
    $args = array(

        'height' => 225,
        'width' => 1920
    );
    add_theme_support('custom-header', $args);
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array('width' => 200, 'height' => 110, 'flex-height' => true, 'flex-width' => true));
    add_theme_support('title-tag');
}


add_action('after_setup_theme', 'wpdevs_config', 0);




add_action('widgets_init', 'wpdevs_sidebars');

function wpdevs_sidebars()
{

    register_sidebar(

        array(
            'name' => 'Blog Sidebar',
            'id' => 'sidebar-blog',
            'description' => 'this is the blog Sidebar. You can add your widgets here',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>'
        )

    );
    register_sidebar(

        array(
            'name' => 'Services 1',
            'id' => 'services-1',
            'description' => 'this is the servico1. You can add your widgets here',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>'
        )

    );
    register_sidebar(

        array(
            'name' => 'Services 2',
            'id' => 'services-2',
            'description' => 'this is the servico2. You can add your widgets here',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>'
        )

    );
    register_sidebar(

        array(
            'name' => 'Services 3',
            'id' => 'services-3',
            'description' => 'this is the servico3. You can add your widgets here',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>'
        )

    );
    register_sidebar(

        array(
            'name' => 'Services 4',
            'id' => 'services-4',
            'description' => 'this is the servico3. You can add your widgets here',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>'
        )

    );
}



