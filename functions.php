<?php

/**
 * Churhius Child Theme functions and definitions
 *
 */

function wf_version() {
	return '0.0.9';
}


if (!function_exists('churhius_child_enqueue_styles')) {

	add_action('wp_enqueue_scripts', 'churhius_child_enqueue_styles');

	function churhius_child_enqueue_styles() {
		$parent_style = 'churhius-style';

		$tdu = get_template_directory_uri();

		wp_enqueue_style($parent_style,	 $tdu  . '/style.css', array('font-linearicons', 'font-churhius-icons', 'font-fontello'));
		wp_enqueue_style('churhius-child-style', get_stylesheet_directory_uri() . '/style.css', array($parent_style), wf_version());

		if (is_rtl()) {
			wp_enqueue_style('churhius-child-style-rtl', get_stylesheet_directory_uri() . '/rtl.css');
		}
	}
}

function my_custom_scripts() {

	$tdu = get_stylesheet_directory_uri();
	wp_register_script('scripts_wf', $tdu . '/scripts.js',  array('jquery'), wf_version(), true);
	wp_enqueue_script('scripts_wf'); // Enqueue it!
}
add_action('wp_enqueue_scripts', 'my_custom_scripts');
