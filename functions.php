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
    // Bootstrap 5.2.3 stylesheet
    wp_enqueue_style('alnur_bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css', array(), '5.2.3', 'all');

    //enqueue custom javascript
    wp_enqueue_script('alnur_js', get_template_directory_uri().'/assets/js/alnurjs.js', array('jquery'), '1.0.0', true);
    //Font awesome script
    wp_enqueue_script('alnur-fontawesome', 'https://kit.fontawesome.com/11d88d03e3.js', array('jquery'), '1.0.0', true);
    // Bootstrap 5 Popper
    wp_enqueue_script('alnur-bootstrap-popperjs', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js', array('jquery'), '2.11.6', true);
    wp_enqueue_script('alnur-bootstrap-popper', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js', array('jquery'), '5.2.3', true);
}

add_action('wp_enqueue_scripts', 'alnur_scripts');

/*
    ==================
    Activate Menus
    ==================
*/

// Add Menu function to admin panel
function alnur_basic_theme_setup() {
    add_theme_support('menus');
    register_nav_menus(array(
        'primary'   => 'Primary Header Navigation',
        'footer'    => 'Main Footer'
    ));
}

add_action('init', 'alnur_basic_theme_setup');

/*
    ==================
    ADebug and find out hook used on a page
    ==================
*/
// if ( is_admin() || ( is_user_logged_in() && current_user_can('manage_options') ) ) {

//     // Keywords to match against hook names (edit as needed)
//     $hook_filter_keywords = ['header', 'footer', 'template', 'enqueue', 'init'];

//     $GLOBALS['myplugin_filtered_hooks'] = [];

//     add_action('all', function($hook_name) use ($hook_filter_keywords) {
//         foreach ( $hook_filter_keywords as $keyword ) {
//             if ( stripos($hook_name, $keyword) !== false ) {
//                 $GLOBALS['myplugin_filtered_hooks'][] = $hook_name;
//                 break;
//             }
//         }
//     });

//     add_action('wp_footer', function() {
//         $unique_hooks = array_unique($GLOBALS['myplugin_filtered_hooks']);
//         if ( empty($unique_hooks) ) return;

//         echo '<div style="background: #fff; padding: 20px; border: 3px solid #333; margin: 20px; font-family: monospace; font-size: 12px; z-index: 9999;">';
//         echo '<h2>Filtered Hooks Running:</h2><ul>';
//         foreach ( $unique_hooks as $hook ) {
//             echo '<li>' . esc_html($hook) . '</li>';
//         }
//         echo '</ul></div>';
//     }, 1000);
// }
