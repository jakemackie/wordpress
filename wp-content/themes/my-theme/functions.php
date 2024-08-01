<?php

function enqueue_styles () {

    wp_enqueue_style(
        'tailwind_build', 
        get_template_directory_uri() . '/dist/output.css', 
        array()
    );

}

add_action( 'wp_enqueue_scripts', 'enqueue_styles' );