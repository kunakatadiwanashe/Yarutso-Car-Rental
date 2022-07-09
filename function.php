<?php


function load_stylesheet(){

    wp_register_style('font', get_template-directory_uri() . './css/style.css', array(), 1, 'all');
    wp_enqueue_style('style');

}

add_action('wp_enqueue_scripts', 'load_stylesheet'); 



// <link rel="stylesheet" href="./css/style.css">