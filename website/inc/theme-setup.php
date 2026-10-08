<?php
/**
 * Theme Setup Functions
 *
 * @package Edjucator
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'edjucator_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 */
	function edjucator_setup() {
		// Dynamic document title tag support
		add_theme_support( 'title-tag' );

		// Enable support for Post Thumbnails on posts and pages
		add_theme_support( 'post-thumbnails' );

		// Custom logo support
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 100,
				'width'       => 300,
				'flex-height' => true,
				'flex-width'  => true,
			)
		);

		// Register Navigation Menus
		register_nav_menus(
			array(
				'primary' => __( 'Primary Menu', 'edjucator' ),
				'footer'  => __( 'Footer Menu', 'edjucator' ),
			)
		);

		// Switch default core markup to output valid HTML5
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'edjucator_setup' );
