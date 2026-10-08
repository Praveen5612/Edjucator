<?php
/**
 * Site Footer with Updated Keywords & Navigation Links matching edjucator.in
 *
 * @package Edjucator
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<footer id="colophon" class="site-footer">
	<div class="footer-top">
		<div class="footer-container footer-grid">
			<!-- Brand Info Column -->
			<div class="footer-col footer-brand-col">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo-badge footer-logo" rel="home">
					<div class="logo-text-wrap">
						<span class="logo-main">Edju<span class="logo-accent">c</span>ator</span>
						<span class="logo-tagline">TEACH • INSPIRE • EMPOWER</span>
					</div>
				</a>
				<p class="footer-description">
					Best Online Education Platform providing 1-to-1 live interactive classes, competitive exam prep (JEE & NEET), NCERT solutions, and study material for Classes 1 to 12.
				</p>
				<div class="footer-social-links">
					<a href="#" class="social-link" aria-label="Facebook">
						<svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
					</a>
					<a href="#" class="social-link" aria-label="Instagram">
						<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
					</a>
					<a href="#" class="social-link" aria-label="YouTube">
						<svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-1.96C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 1.96A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-1.96 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.37z"/><polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02"/></svg>
					</a>
				</div>
			</div>

			<!-- Column 2: Popular Courses -->
			<div class="footer-col">
				<h4 class="footer-title">Popular Courses</h4>
				<ul class="footer-links">
					<li><a href="#courses-section">JEE Main & Advanced Master Batch</a></li>
					<li><a href="#courses-section">NEET UG Medical Achievers Batch</a></li>
					<li><a href="#courses-section">Class 10 CBSE Board Toppers</a></li>
					<li><a href="#courses-section">Class 12 Physics & Chemistry</a></li>
					<li><a href="#courses-section">Foundation Classes 6-9 Olympiad</a></li>
				</ul>
			</div>

			<!-- Column 3: Free Study Material -->
			<div class="footer-col">
				<h4 class="footer-title">Free Study Material</h4>
				<ul class="footer-links">
					<li><a href="#study-material-section">NCERT Solutions (Class 6-12)</a></li>
					<li><a href="#study-material-section">10+ Years PYQ Solved Papers</a></li>
					<li><a href="#study-material-section">Formula & Revision Notes</a></li>
					<li><a href="#study-material-section">All India Free Mock Tests</a></li>
					<li><a href="#scholarships-section">Scholarship Admission Test</a></li>
				</ul>
			</div>

			<!-- Column 4: Portals & Contact -->
			<div class="footer-col footer-contact-col">
				<h4 class="footer-title">Quick Links & Support</h4>
				<ul class="footer-links footer-support-links">
					<li><a href="#">🎓 Student Portal Login</a></li>
					<li><a href="#">👨‍🏫 Teacher Portal Login</a></li>
					<li><a href="#results-section">⭐ Student Reviews & Results</a></li>
					<li><a href="tel:18001234567">📞 Toll Free: 1800-123-4567</a></li>
					<li><a href="mailto:info@edjucator.in">✉️ Email: info@edjucator.in</a></li>
				</ul>
			</div>
		</div>
	</div>

	<!-- Footer Bottom -->
	<div class="footer-bottom">
		<div class="footer-container footer-bottom-inner">
			<p class="copyright-text">&copy; <?php echo esc_html( date( 'Y' ) ); ?> <strong>Edjucator</strong> (edjucator.in). All rights reserved.</p>
			<ul class="footer-legal-links">
				<li><a href="#">Privacy Policy</a></li>
				<li><a href="#">Terms of Service</a></li>
				<li><a href="#contact-section">Contact Us</a></li>
			</ul>
		</div>
	</div>
</footer>
