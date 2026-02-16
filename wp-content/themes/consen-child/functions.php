<?php 

add_action( 'wp_enqueue_scripts', 'consen_enqueue_styles' );
function consen_enqueue_styles() {
    wp_enqueue_style( 'consen-parent-style', get_template_directory_uri() . '/style.css' );

}