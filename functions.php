<?php
//This file is used to change the behaviour of WordPress from the defaults
add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script'));
add_theme_support('title-tag');
add_theme_support('post-thumbnails', array(
    'post',
    'page',
    'custom-post-type-name',
));


function linked_assets()
{
    //Include all CSS or JS assets needed for this site
    wp_enqueue_style('main', get_stylesheet_uri());
    wp_enqueue_script('main-js', get_template_directory_uri() . '/main.js');
    // wp_enqueue_script('animation', 'https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js');

    // wp_register_script(
    //     'animation',
    //     'https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js',
    //     false,
    //     '1.0',
    //     true
    // );

    // wp_enqueue_script('animation');
}
add_action('wp_enqueue_scripts', 'linked_assets');



//Register Menu Areas
function my_menus()
{
    register_nav_menu('header-menu', 'Main Menu (Header)');
}
add_action('after_setup_theme', 'my_menus');


//Sidebars (Widget Areas)
function widgets()
{
    register_sidebar(array(
        'name' => 'footer_siderBar',
        'id' => 'footer_siderBar',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));
    register_sidebar(array(
        'name' => 'news_siderBar',
        'id' => 'news_siderBar',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));
    register_sidebar(array(
        'name' => 'front_siderBar',
        'id' => 'front_siderBar',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));
}
add_action('widgets_init', 'widgets');
