<?php



function my_theme_enqueue_scripts() {
    wp_enqueue_script( 'js-stick', get_theme_file_uri().'/js/scrollfix.js');
    wp_enqueue_script( 'js-style', get_theme_file_uri().'/js/index.js');


}


add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_scripts' );
