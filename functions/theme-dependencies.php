<?php 
//LOAD SCRIPTS
function enqueue_bkc_scripts() {
    wp_enqueue_script('Bootstrap-5.2', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js', array('jquery'), '', true);
    wp_enqueue_script('font-awesome-5', 'https://kit.fontawesome.com/42219cbebc.js', false, null, null, false);
    wp_enqueue_script('bkc-scripts', get_template_directory_uri() . '/assets/js/bkcScripts.min.js', array('jquery'), null, true, null);
}
add_action('wp_enqueue_scripts', 'enqueue_bkc_scripts');

//LOAD CSS
function enqueue_bkc_styles() {
    wp_enqueue_style('bootstrap-5.2', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css');
    wp_enqueue_style('bkc-styles', get_template_directory_uri() . '/assets/styles/bkcStyles.min.css');
    wp_enqueue_style('animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css', array(), null);
}
add_action('wp_enqueue_scripts', 'enqueue_bkc_styles');

// Register Custom Navigation Walker
require_once get_template_directory() . '/functions/class-wp-bootstrap-navwalker.php';
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'mape-theme' ),
    'secondary_menu' => __('Secondary Menu', 'mape-theme'),
    'footer_menu' => __( 'Footer Menu', 'mape-theme'),  
));

