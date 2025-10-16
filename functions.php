<?php
function flexx_enqueue_scripts() {
    // Theme CSS
    wp_enqueue_style('flexx-style', get_stylesheet_uri());
    wp_enqueue_style('flexx-main', get_template_directory_uri() . '/assets/css/main.css', [], '1.0');

    // Theme JS
    wp_enqueue_script('flexx-main-js', get_template_directory_uri() . '/assets/js/main.js', [], '1.0', true);
}
add_action('wp_enqueue_scripts', 'flexx_enqueue_scripts');
?>