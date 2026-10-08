<?php
/**
 * Global Loading State Component
 *
 * @package Edjucator
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$loading_text = isset( $args['text'] ) ? $args['text'] : __( 'Loading content, please wait...', 'edjucator' );
?>

<div class="state-container state-loading" id="state-loading">
	<div class="loading-spinner-wrap">
		<div class="loading-spinner"></div>
	</div>
	<p class="state-text"><?php echo esc_html( $loading_text ); ?></p>
</div>
