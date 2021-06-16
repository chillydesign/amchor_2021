<?php

/**
 * Churhius Child Theme functions and definitions
 *
 */

if (!function_exists('churhius_child_enqueue_styles')) {

	add_action('wp_enqueue_scripts', 'churhius_child_enqueue_styles');

	function churhius_child_enqueue_styles() {
		$parent_style = 'churhius-style';
		wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css', array('font-linearicons', 'font-churhius-icons', 'font-fontello'));
		wp_enqueue_style('churhius-child-style', get_stylesheet_directory_uri() . '/style.css?v=0.0.5', array($parent_style));

		if (is_rtl()) {
			wp_enqueue_style('churhius-child-style-rtl', get_stylesheet_directory_uri() . '/rtl.css');
		}
	}
}
