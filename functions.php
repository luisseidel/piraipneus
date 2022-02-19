<?php

function custom_theme() {
    wp_enqueue_style( 'reset', get_template_directory_uri() . '/css/reset.css', false, '1.1', 'all');
    
    wp_enqueue_style('fontawesomecss', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css", array(), null);
    wp_enqueue_script('fontawesomejs', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js", array(), null);

    wp_enqueue_style('glidercss', "https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.css", array(), null);
    wp_enqueue_script('gliderjs', "https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.js", array(), null);

    wp_enqueue_style('style', get_stylesheet_uri(), array(), null);
    wp_enqueue_script('main', get_template_directory_uri().'/js/main.js', array(), null);
}
add_action("wp_enqueue_scripts", "custom_theme");

add_theme_support( 'post-thumbnails' );

function add_widget_Support() {
    register_sidebar(array(
        'name'          => 'Sidebar',
        'id'            => 'sidebar',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'add_Widget_Support');

function add_Main_Nav() {
    register_nav_menu('header-menu', __('Header Menu'));
}
// Hook to the init action hook, run our navigation menu function
add_action('init', 'add_Main_Nav');