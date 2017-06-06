<?php

 /**
  * Load Give's Child Theme styles.
  */
 function give_enqueue_child_theme_styles() {
     wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
     wp_enqueue_style( 'child-style', get_stylesheet_uri(), array('parent-style')  );
 }
 add_action( 'wp_enqueue_scripts', 'give_enqueue_child_theme_styles');

/**
 * Remove post format support.
 */
function give_remove_post_format_support() {
     remove_theme_support( 'post-formats' );
}

 add_action( 'after_setup_theme', 'give_remove_post_format_support', 11 );
