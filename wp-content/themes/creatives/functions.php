<?php
add_theme_support('post-thumbnails');

function creativeLoadCSS()
{
    wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', array(), false, 'all');
    wp_enqueue_style('stylesheet');
    wp_register_script('fontawesome', 'https://kit.fontawesome.com/9d34ec166c.js', array());
    wp_enqueue_script('fontawesome');
}
add_action('wp_enqueue_scripts', 'creativeLoadCSS');

function creativeLoadWidgets()
{


}
add_action('widgets_init', 'creativeLoadWidgets');


?>