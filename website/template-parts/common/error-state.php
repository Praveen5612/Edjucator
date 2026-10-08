<?php
/**
 * Global Error State Component
 *
 * @package Edjucator
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$title = isset( $args['title'] ) ? $args['title'] : __( 'Something Went Wrong', 'edjucator' );
$message = isset( $args['message'] ) ? $args['message'] : __( 'An unknown error occurred while attempting to load this data. Please check your connection and try again.', 'edjucator' );
?>

<div class="state-container state-error" id="state-error">
	<div class="state-icon-wrap icon-error">
		<svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
			<circle cx="12" cy="12" r="10"/>
			<line x1="12" y1="8" x2="12" y2="12"/>
			<line x1="12" y1="16" x2="12.01" y2="16"/>
		</svg>
	</div>
	<h3 class="state-title"><?php echo esc_html( $title ); ?></h3>
	<p class="state-message"><?php echo esc_html( $message ); ?></p>
	<button type="button" class="btn btn-primary btn-sm state-action-btn" onclick="window.location.reload();">
		<?php esc_html_e( 'Try Again', 'edjucator' ); ?>
	</button>
</div>
