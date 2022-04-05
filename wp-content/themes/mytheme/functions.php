<?php

function mytheme_theme_setup(){
    add_theme_support('custom-logo');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('home-featured', 680, 400, array('center,center'));
    add_theme_support('automatic-feed-links');

    register_nav_menus( array(
        'primary' => __('Primary Menu', mytheme)
    ));

}

add_action('after_setup_theme', 'mytheme_theme_setup');

function mytheme_scripts_enqueue(){

    wp_enqueue_style('style',get_stylesheet_uri());

    wp_enqueue_script('jquery');

    wp_enqueue_script('mytheme-browser', get_template_directory_uri().'assets/js/browser.min.js');
    wp_enqueue_script('mytheme-breakpoints', get_template_directory_uri().'assets/js/breakpoints.min.js');
    wp_enqueue_script('mytheme-util', get_template_directory_uri().'assets/js/util.js');
    wp_enqueue_script('mytheme-main', get_template_directory_uri().'assets/js/main.js');

}

add_action('wp_enqueue_scripts', 'mytheme_scripts_enqueue');

