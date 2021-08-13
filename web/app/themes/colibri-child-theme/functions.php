<?php
/**
 * Colibri-child-theme Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package colibri-child-theme
 */

add_action( 'wp_enqueue_scripts', 'colibri_wp_parent_theme_enqueue_styles' );

/**
 * Enqueue scripts and styles.
 */
function colibri_wp_parent_theme_enqueue_styles() {
	wp_enqueue_style( 'colibri-wp-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'colibri-child-theme-style',
		get_stylesheet_directory_uri() . '/style.css',
		[ 'colibri-wp-style' ]
	);
}
