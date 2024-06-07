<?php

function load_stylesheets() {
    // Retrieving the compiled stylesheet
    wp_enqueue_style('my-styles', get_template_directory_uri() . '/dist/output.css');
}

// Adding the above function to Wordpress' add_action hook to be loaded
add_action('wp_enqueue_scripts', 'load_stylesheets');
