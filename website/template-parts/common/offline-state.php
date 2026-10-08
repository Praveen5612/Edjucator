<?php
/**
 * Global Offline / Disconnected State Banner Component
 *
 * @package Edjucator
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<div class="network-state-banner state-offline" id="global-offline-banner" style="display: none;">
	<div class="header-container banner-inner">
		<span class="banner-icon">📡</span>
		<span class="banner-text">You are currently offline. Please check your internet connection.</span>
		<button type="button" class="banner-close-btn" onclick="document.getElementById('global-offline-banner').style.display='none';">&times;</button>
	</div>
</div>
