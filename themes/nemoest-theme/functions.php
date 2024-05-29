<?php
function nemoest_add_stylesheet() {
    wp_enqueue_style('nemoest-stylesheet', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'nemoest_add_stylesheet');


