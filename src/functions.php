<?php

add_action('wp_enqueue_scripts', 'index_scripts');

function index_scripts() {
    wp_enqueue_style('index1', get_parent_theme_file_uri( 'assets/css/index.css' ));
}