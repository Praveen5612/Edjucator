<?php
/**
 * Header Navbar with Direct Class 6-10 Notes Navigation Link
 *
 * @package Edjucator
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<header id="masthead" class="site-header">
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
					?>
					<ul class="nav-menu fallback-menu">
						<li class="menu-item active"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
						<li class="menu-item has-dropdown">
							<a href="#courses-section" class="nav-dropdown-link">Courses <span class="dropdown-arrow">▾</span></a>
							<ul class="sub-menu">
								<li><a href="#course-detail-view" class="open-featured-course">Coding Classes for Kids (Super Coders)</a></li>
								<li><a href="#courses-section">JEE Master Batches</a></li>
								<li><a href="#courses-section">NEET Medical Batches</a></li>
								<li><a href="#courses-section">Class 10 & 12 Board Prep</a></li>
							</ul>
						</li>
						<li class="menu-item has-dropdown has-mega-menu">
							<a href="#class-notes-view" class="nav-dropdown-link open-class-notes-nav">Free Study Material <span class="dropdown-arrow">▾</span></a>
							<div class="mega-menu-dropdown">
								<div class="mega-col mega-col-categories">
									<div class="mega-col-title">Categories</div>
									<ul class="mega-link-list">
										<li class="active"><a href="#class-notes-view" class="open-class-notes-nav">NCERT Solutions <span class="arrow">›</span></a></li>
										<li><a href="#class-notes-view" class="open-class-notes-nav">CBSE <span class="arrow">›</span></a></li>
										<li><a href="#class-notes-view" class="open-class-notes-nav">JEE Main <span class="arrow">›</span></a></li>
										<li><a href="#class-notes-view" class="open-class-notes-nav">JEE Advanced <span class="arrow">›</span></a></li>
										<li><a href="#class-notes-view" class="open-class-notes-nav">NEET <span class="arrow">›</span></a></li>
										<li><a href="#class-notes-view" class="open-class-notes-nav">Question and Answers <span class="arrow">›</span></a></li>
										<li><a href="#class-notes-view" class="open-class-notes-nav">Popular Book Solutions <span class="arrow">›</span></a></li>
										<li><a href="#class-notes-view" class="open-class-notes-nav">Subject wise Concepts <span class="arrow">›</span></a></li>
										<li><a href="#class-notes-view" class="open-class-notes-nav">ICSE & State Boards <span class="arrow">›</span></a></li>
										<li><a href="#class-notes-view" class="open-class-notes-nav">Worksheets <span class="arrow">›</span></a></li>
									</ul>
								</div>
								<div class="mega-col mega-col-subcat">
									<div class="mega-col-title">CBSE Prep</div>
									<ul class="mega-link-list">
										<li><a href="#class-notes-view" class="open-class-notes-nav">CBSE Important Questions <span class="arrow">›</span></a></li>
										<li><a href="#class-notes-view" class="open-class-notes-nav">CBSE Notes <span class="arrow">›</span></a></li>
										<li><a href="#class-notes-view" class="open-class-notes-nav">CBSE Sample Papers <span class="arrow">›</span></a></li>
										<li><a href="#class-notes-view" class="open-class-notes-nav">Previous Year Question Papers Class 12 <span class="arrow">›</span></a></li>
										<li><a href="#class-notes-view" class="open-class-notes-nav">Previous Year Question Papers Class 10 <span class="arrow">›</span></a></li>
										<li><a href="#class-notes-view" class="open-class-notes-nav">CBSE Syllabus <span class="arrow">›</span></a></li>
										<li><a href="#class-notes-view" class="open-class-notes-nav">CBSE Formulas <span class="arrow">›</span></a></li>
									</ul>
								</div>
								<div class="mega-col mega-col-items">
									<div class="mega-col-title">Class 10 Papers</div>
									<ul class="mega-link-list">
										<li><a href="#class-notes-view" class="open-class-notes-nav">CBSE Class 10 Maths PYQ</a></li>
										<li><a href="#class-notes-view" class="open-class-notes-nav">CBSE Class 10 Science PYQ</a></li>
										<li><a href="#class-notes-view" class="open-class-notes-nav">CBSE Class 10 English PYQ</a></li>
										<li><a href="#class-notes-view" class="open-class-notes-nav">CBSE Class 10 Social Science PYQ</a></li>
										<li><a href="#class-notes-view" class="open-class-notes-nav">CBSE Class 10 Hindi PYQ</a></li>
									</ul>
								</div>
							</div>
						</li>
						<li class="menu-item has-dropdown">
							<a href="#exams-section" class="nav-dropdown-link">Exams <span class="dropdown-arrow">▾</span></a>
							<ul class="sub-menu">
								<li><a href="#exams-section">JEE Main & Advanced</a></li>
								<li><a href="#exams-section">NEET UG Medical</a></li>
								<li><a href="#exams-section">CUET Entrance Test</a></li>
								<li><a href="#exams-section">Olympiads & NTSE</a></li>
							</ul>
						</li>
						<li class="menu-item"><a href="#results-section">Results</a></li>
					</ul>
					<?php
				}
				?>
			</nav>

			<!-- Header Actions -->
			<div class="header-actions">
				<a href="tel:987654321" class="talk-expert-link" id="talk-expert-btn">
					<span class="expert-icon">📞</span>
					<div class="expert-text">
						<span class="expert-label">Talk to Expert</span>
						<span class="expert-phone">987654321</span>
					</div>
				</a>
				<button type="button" class="btn btn-portal-student" id="header-book-demo-btn">
					<span>Book a Demo</span>
				</button>
			</div>
		</div>
	</div>
</header>
