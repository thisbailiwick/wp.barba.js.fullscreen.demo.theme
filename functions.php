<?php
add_action('wp_enqueue_scripts', 'wp_barbajs_load_files');
function wp_barbajs_load_files() {
	wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
	wp_enqueue_script('wp-barba-js-fullscreen-init', get_stylesheet_directory_uri() . '/main.js', ['barba-full-screen-barba-core'], '1.0', true);
}