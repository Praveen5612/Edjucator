<?php
/**
 * Edjucator Theme Functions & Definitions
 *
 * @package Edjucator
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Include theme setup functions.
 */
require_once get_template_directory() . '/inc/theme-setup.php';

/**
 * Include asset enqueue functions.
 */
require_once get_template_directory() . '/inc/enqueue.php';

/**
 * Include helper functions.
 */
require_once get_template_directory() . '/inc/helpers.php';
