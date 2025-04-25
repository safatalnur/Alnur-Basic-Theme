<?php

/*
    ==================
    Include scripts
    ==================
*/

// Add stylesheets and javascripts
function alnur_scripts() {
    //enqueue custom alnur_style
    wp_enqueue_style('alnur_style', get_template_directory_uri().'/assets/css/alnurstyle.css', array(), '1.0.0', 'all');

    //enqueue custom javascript
    wp_enqueue_script('alnur_js', get_template_directory_uri().'/assets/js/alnurjs.js', array('jquery'), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'alnur_scripts');