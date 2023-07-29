<?php
/**
 * Portfolio Web Child functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Acme Themes
 * @subpackage Portfolio Web
 * 
 * @author Armin Hasanpour
 */

/**
 * Enqueue styles.
 */
function portfolioweb_child_styles()
{
	wp_enqueue_style(
		'child-style',
		get_stylesheet_directory_uri() . '/style.css',
		array(),
		'3.0.3'
	);
}
add_action('wp_enqueue_scripts', 'portfolioweb_child_styles');

// Load translation files from your child theme instead of the parent theme
function portfolioweb_locale() {
    load_child_theme_textdomain( 'portfolio-web', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'portfolioweb_locale' );

// Remove plugin slick css
function dequeue_slick() {
  wp_dequeue_style('slick');
  wp_deregister_style('slick');
}
add_action('wp_enqueue_scripts','dequeue_slick', 100);