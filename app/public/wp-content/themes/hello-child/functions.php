<?php
// Enqueue styles của parent theme và child theme
function my_theme_enqueue_styles() {
    // Đầu tiên load style của parent theme
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    
    // Sau đó load style của child theme
    wp_enqueue_style( 'child-style', get_stylesheet_uri(), array('parent-style') );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
