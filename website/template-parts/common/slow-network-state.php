<?php
/**
 * Global Slow / Low Network State Banner Component
 *
 * @package Edjucator
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<div class="network-state-banner state-slow-network" id="global-slow-network-banner" style="display: none;">
	<div class="header-container banner-inner">
		<span class="banner-icon">⚠️</span>
		<span class="banner-text">Slow network connection detected. Video streams and interactive classes may buffer.</span>
		<button type="button" class="banner-close-btn" onclick="document.getElementById('global-slow-network-banner').style.display='none';">&times;</button>
	</div>
</div>
