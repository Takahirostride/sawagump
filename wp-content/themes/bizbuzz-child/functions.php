<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
  wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . 'css/style.css', array('parent-style'));
}
?>
