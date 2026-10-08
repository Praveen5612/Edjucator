<?php
/**
 * Header Navbar with Keywords & Clean Dropdowns matching edjucator.in theme
 *
 * @package Edjucator
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<header id="masthead" class="site-header">
	<!-- Top Bar / Target Selector Bar -->
	<div class="top-bar">
		<div class="header-container top-bar-inner">
			<div class="top-bar-left">
				<span class="top-bar-badge">NEW</span>
				<span class="top-bar-text">🔥 Admissions Open for 2026-27 Academic Batches (JEE, NEET, CBSE Boards)</span>
			</div>
			<div class="top-bar-right">
				<div class="target-select-dropdown">
					<label for="global-target-select" class="target-label">Target Exam:</label>
					<select class="target-select" id="global-target-select">
						<option value="all">All Targets & Classes</option>
						<option value="jee">JEE Main & Advanced</option>
						<option value="neet">NEET UG Medical</option>
						<option value="cbse-12">Class 12 Board Prep</option>
						<option value="cbse-10">Class 10 Board Prep</option>
						<option value="foundation">Classes 6 - 9 Foundation</option>
					</select>
				</div>
				<a href="tel:18001234567" class="top-bar-link">📞 Toll Free: 1800-123-4567</a>
			</div>
		</div>
	</div>

	<!-- Main Purple Navbar -->
	<div class="main-navbar">
		<div class="header-container navbar-inner">
			<!-- Brand Logo Badge -->
			<div class="site-branding">
				<?php if ( has_custom_logo() ) : ?>
					<?php the_custom_logo(); ?>
				<?php else : ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo-badge" rel="home">
						<div class="logo-text-wrap">
							<span class="logo-main">Edju<span class="logo-accent">c</span>ator</span>
							<span class="logo-tagline">TEACH • INSPIRE • EMPOWER</span>
						</div>
					</a>
				<?php endif; ?>
			</div>

			<!-- Mobile Menu Toggle Button -->
			<button class="mobile-menu-toggle" aria-expanded="false" aria-label="Toggle Navigation Menu" id="mobile-menu-toggle">
				<span class="hamburger-bar"></span>
				<span class="hamburger-bar"></span>
				<span class="hamburger-bar"></span>
			</button>

			<!-- Primary Navigation Menu -->
			<nav id="site-navigation" class="main-navigation">
				<?php
				if ( has_nav_menu( 'primary' ) ) {
					wp_nav_menu(
						array(
							'theme_location' => 'primary',
							'menu_id'        => 'primary-menu',
							'container'      => false,
							'menu_class'     => 'nav-menu',
						)
					);
				} else {
					// Vedantu navigation items
					?>
					<ul class="nav-menu fallback-menu">
						<li class="menu-item active"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
						<li class="menu-item has-dropdown">
							<a href="#courses-section">Courses <span class="dropdown-arrow">▾</span></a>
							<ul class="sub-menu">
								<li><a href="#courses-section">JEE Master Batches</a></li>
								<li><a href="#courses-section">NEET Medical Batches</a></li>
								<li><a href="#courses-section">Class 10 & 12 Board Prep</a></li>
								<li><a href="#courses-section">Classes 6-9 Foundation</a></li>
							</ul>
						</li>
						<li class="menu-item has-dropdown">
							<a href="#exams-section">Exams <span class="dropdown-arrow">▾</span></a>
							<ul class="sub-menu">
								<li><a href="#exams-section">JEE Main & Advanced</a></li>
								<li><a href="#exams-section">NEET UG Medical</a></li>
								<li><a href="#exams-section">CUET Entrance Test</a></li>
								<li><a href="#exams-section">Olympiads & NTSE</a></li>
							</ul>
						</li>
						<li class="menu-item has-dropdown">
							<a href="#study-material-section">Study Material <span class="dropdown-arrow">▾</span></a>
							<ul class="sub-menu">
								<li><a href="#study-material-section">NCERT Solutions</a></li>
								<li><a href="#study-material-section">Previous Year Papers (PYQ)</a></li>
								<li><a href="#study-material-section">Revision Formula Sheets</a></li>
								<li><a href="#study-material-section">Free Online Mock Tests</a></li>
							</ul>
						</li>
						<li class="menu-item"><a href="#results-section">Results</a></li>
						<li class="menu-item"><a href="#scholarships-section">Scholarships</a></li>
					</ul>
					<?php
				}
				?>
			</nav>

			<!-- Navbar Actions -->
			<div class="header-actions">
				<div class="header-search">
					<form role="search" method="get" class="header-search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
						<input type="search" class="search-field" placeholder="Search courses, NCERT..." value="<?php echo get_search_query(); ?>" name="s" />
						<button type="submit" class="search-submit" aria-label="Search">
							<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
						</button>
					</form>
				</div>
				<a href="#" class="btn btn-portal-teacher">Login</a>
				<a href="#" class="btn btn-portal-student">
					<span>Book Free Demo</span>
				</a>
			</div>
		</div>
	</div>
</header>
