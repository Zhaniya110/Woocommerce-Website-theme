<?php

function load_stylesheets()
{
    wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', '', 1, 'all');
    wp_enqueue_style('stylesheet');

    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css', '', 'v5.3.0', 'all');
    wp_enqueue_style('bootstrap');

}

add_action('wp_enqueue_scripts', 'load_stylesheets');


function load_javascript()
{
    wp_register_script('custom', get_template_directory_uri() . '/app.js', 'jquery', 1, true);
    wp_enqueue_script('custom');

    wp_register_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js', 'jquery', 'v5.3.0', true);
    wp_enqueue_script('bootstrap');
}

add_action('wp_enqueue_scripts', 'load_javascript');


add_theme_support('menus');
add_theme_support('post-thumbnails');


register_nav_menus(
    array(
        'top-menu' => __('Top Menu', 'woocommerce-website'),
        'footer_menu' => __('Secondary Menu', 'woocommerce-website'),
    )
);


add_image_size('post_image', 1100, 300, true);

register_sidebar(
    array(

        'name' => __('Page Sidebar'),
        'id' => __('page-sidebar'),
        'class' => '',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    )



);


function mytheme_add_woocommerce_support()
{
    add_theme_support('woocommerce');
}

add_action('after_setup_theme', 'mytheme_add_woocommerce_support');