<?php
/**
 * Global 404 / Page Not Found State Component
 *
 * @package Edjucator
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$title = isset( $args['title'] ) ? $args['title'] : __( '404 - Page Not Found', 'edjucator' );
$message = isset( $args['message'] ) ? $args['message'] : __( 'The page or resource you are looking for does not exist or has been moved.', 'edjucator' );
?>

<div class="state-container state-not-found" id="state-not-found">
	<div class="state-number-badge">404</div>
	<h2 class="state-title"><?php echo esc_html( $title ); ?></h2>
	<p class="state-message"><?php echo esc_html( $message ); ?></p>
	<div class="state-actions">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary btn-sm">
			<?php esc_html_e( 'Back to Home', 'edjucator' ); ?>
		</a>
	</div>
</div>
