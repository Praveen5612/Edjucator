<?php
/**
 * Asset Enqueuing Functions
 *
 * @package Edjucator
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Enqueue theme styles and scripts.
 */
function edjucator_enqueue_scripts() {
	// Main theme stylesheet
	wp_enqueue_style( 'edjucator-style', get_stylesheet_uri(), array(), '1.0.0' );

	// Custom CSS stylesheet
	wp_enqueue_style( 'edjucator-custom-style', get_template_directory_uri() . '/assets/css/custom.css', array( 'edjucator-style' ), '1.0.0' );

	// Main JavaScript file
	wp_enqueue_script( 'edjucator-main-script', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'edjucator_enqueue_scripts' );
