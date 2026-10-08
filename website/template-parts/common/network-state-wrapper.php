<?php
/**
 * Global Network State Wrapper
 * Includes offline and low network notification banners
 *
 * @package Edjucator
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_template_part( 'template-parts/common/offline-state' );
get_template_part( 'template-parts/common/slow-network-state' );
