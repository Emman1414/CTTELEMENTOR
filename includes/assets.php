<?php


function wpcct_assets(){
    wp_enqueue_style('wpcct', get_template_directory_uri() . '/css/style.css', microtime());
}

add_action('wp_enqueue_scripts', 'wpcct_assets');