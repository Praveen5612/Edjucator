<?php
/**
 * Vedantu Front Page Template (with Single Course Detail View & Class/Subject Notes View switchers)
 *
 * @package Edjucator
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<main id="primary" class="site-main">
	<!-- Main Homepage Content Wrapper -->
	<div id="main-homepage-view">
		<!-- Hero Section -->
		<section class="hero-section edtech-hero">
			<div class="header-container hero-inner">
				<div class="hero-content">
					<span class="hero-badge">🔥 INDIA'S LEADING LIVE LEARNING PLATFORM</span>
					<h1 class="hero-title">Live Online Classes & Exam Prep for Classes 6-12, JEE & NEET</h1>
					<p class="hero-description">
						Learn from India’s Top Master Teachers with 2-Teacher Live Interactive Classes, Instant 24/7 Doubt Resolution, and All India Test Series.
					</p>
					
					<!-- Target Selection Chips -->
					<div class="hero-target-chips">
						<span class="chips-title">Select your Goal:</span>
						<div class="chips-group">
							<a href="#courses-section" class="target-chip active">JEE Main & Adv</a>
							<a href="#courses-section" class="target-chip">NEET Medical</a>
							<a href="#courses-section" class="target-chip">Class 12 Board</a>
							<a href="#courses-section" class="target-chip">Class 10 Board</a>
							<a href="#courses-section" class="target-chip">Class 6-9 Foundation</a>
						</div>
					</div>

					<div class="hero-actions">
						<a href="#courses-section" class="btn btn-primary btn-hero">Explore Batches</a>
						<a href="#" class="btn btn-outline-purple btn-hero">Book Free Masterclass</a>
					</div>

					<!-- Trust Statistics -->
					<div class="trust-stats-row">
						<div class="trust-stat">
							<strong>10M+</strong>
							<span>Happy Students</span>
						</div>
						<div class="trust-stat">
							<strong>4.9 ★</strong>
							<span>App Rating</span>
						</div>
						<div class="trust-stat">
							<strong>95%+</strong>
							<span>Selection Rate</span>
						</div>
					</div>
				</div>
				
				<div class="hero-visual-card">
					<div class="live-class-card-preview">
						<div class="live-badge-pulse">● LIVE NOW</div>
						<div class="class-preview-image">
							<div class="teacher-live-badge">👨‍🏫 Master Teacher Session</div>
							<div class="class-topic">Physics: Electrostatics & Potential</div>
							<div class="student-doubts-badge">💬 1,420 Students Active</div>
						</div>
						<div class="class-card-details">
							<div class="class-meta">
								<span>⏱ 90 Mins Interactive</span>
								<span>⚡ Quiz & Leaderboard</span>
							</div>
							<a href="#" class="btn btn-primary btn-block">Join Live Demo Class</a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Courses Section (Vedantu Course Board) -->
		<?php get_template_part( 'features/courses/templates/course-tabs' ); ?>

		<!-- Competitive Exams & Test Series -->
		<?php get_template_part( 'features/exams/templates/exam-cards' ); ?>

		<!-- Results & Toppers Showcase -->
		<?php get_template_part( 'template-parts/home/results-banner' ); ?>

		<!-- Free Study Material & NCERT Solutions -->
		<?php get_template_part( 'features/study-material/templates/free-resources' ); ?>
	</div>

	<!-- Dedicated Single Course Detail View Template -->
	<?php get_template_part( 'features/courses/templates/single-course' ); ?>

	<!-- Dedicated Class 6-10 Free PDF Study Notes Viewer Template -->
	<?php get_template_part( 'features/study-material/templates/class-subject-notes' ); ?>
</main>

<?php
get_footer();
