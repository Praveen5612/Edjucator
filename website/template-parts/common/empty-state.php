<?php
/**
 * Global Empty State Component
 *
 * @package Edjucator
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$title = isset( $args['title'] ) ? $args['title'] : __( 'No Content Found', 'edjucator' );
$message = isset( $args['message'] ) ? $args['message'] : __( 'We couldn’t find any items matching your criteria. Try resetting your search or filters.', 'edjucator' );
$action_text = isset( $args['action_text'] ) ? $args['action_text'] : __( 'Reset Filters', 'edjucator' );
?>

<div class="state-container state-empty" id="state-empty">
	<div class="state-icon-wrap icon-empty">
		<svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
			<path d="M22 12h-4l-3 9L9 3l-3 9H2"/>
		</svg>
	</div>
	<h3 class="state-title"><?php echo esc_html( $title ); ?></h3>
	<p class="state-message"><?php echo esc_html( $message ); ?></p>
	<?php if ( ! empty( $action_text ) ) : ?>
		<button type="button" class="btn btn-primary btn-sm state-action-btn" onclick="window.location.reload();">
			<?php echo esc_html( $action_text ); ?>
		</button>
	<?php endif; ?>
</div>
