<?php
/**
 * Vedantu-style Course Selection Board & Tabs Template
 *
 * @package Edjucator
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<section id="courses-section" class="courses-board-section">
	<div class="header-container">
		<div class="section-title-wrapper text-center">
			<span class="section-tag">POPULAR BATCHES</span>
			<h2 class="section-heading">Explore Live Courses & Classroom Batches</h2>
			<p class="section-subheading">Choose your target exam or class to start learning with India’s top Master Teachers</p>
		</div>

		<!-- Filter Tabs Bar -->
		<div class="course-tabs-bar">
			<button class="course-tab-btn active" data-filter="all">All Courses</button>
			<button class="course-tab-btn" data-filter="jee">JEE Main & Advanced</button>
			<button class="course-tab-btn" data-filter="neet">NEET Medical</button>
			<button class="course-tab-btn" data-filter="cbse-10">Class 10 Board</button>
			<button class="course-tab-btn" data-filter="foundation">Foundation (Class 6-9)</button>
		</div>

		<!-- Course Cards Grid -->
		<div class="courses-grid" id="courses-grid-container">
			<!-- Course 1: JEE -->
			<div class="course-card-item" data-category="jee">
				<div class="course-card-badge badge-live">LIVE BATCH</div>
				<div class="course-card-header">
					<span class="course-target">Target: JEE Main & Advanced 2027</span>
					<h3 class="course-card-title">JEE Master 2-Year Complete Batch</h3>
					<div class="teacher-info">
						<div class="teacher-avatar">👨‍🏫</div>
						<div class="teacher-details">
							<span class="teacher-name">IITian Master Faculty Team</span>
							<span class="teacher-rating">★ 4.9 (12,400+ Students)</span>
						</div>
					</div>
				</div>
				<div class="course-card-body">
					<ul class="course-feature-list">
						<li><span class="check-icon">✓</span> 500+ Live Interactive Classes</li>
						<li><span class="check-icon">✓</span> 2-Teacher Model (Dedicated Doubt Experts)</li>
						<li><span class="check-icon">✓</span> Daily Practice Papers (DPP) & Solutions</li>
						<li><span class="check-icon">✓</span> All India Test Series (AITS)</li>
					</ul>
				</div>
				<div class="course-card-footer">
					<div class="course-price-wrap">
						<span class="price-current">₹24,999</span>
						<span class="price-original">₹49,999</span>
						<span class="price-discount">50% OFF</span>
					</div>
					<div class="course-card-actions">
						<a href="#" class="btn btn-outline btn-sm">Details</a>
						<a href="#" class="btn btn-primary btn-sm">Join Batch</a>
					</div>
				</div>
			</div>

			<!-- Course 2: NEET -->
			<div class="course-card-item" data-category="neet">
				<div class="course-card-badge badge-hot">HOT SELLER</div>
				<div class="course-card-header">
					<span class="course-target">Target: NEET Medical 2026</span>
					<h3 class="course-card-title">NEET Achievers 1-Year Dropper Batch</h3>
					<div class="teacher-info">
						<div class="teacher-avatar">👩‍⚕️</div>
						<div class="teacher-details">
							<span class="teacher-name">Dr. Sharma & Senior Doctors</span>
							<span class="teacher-rating">★ 4.95 (18,900+ Students)</span>
						</div>
					</div>
				</div>
				<div class="course-card-body">
					<ul class="course-feature-list">
						<li><span class="check-icon">✓</span> Complete Bio, Physics & Chem Syllabus</li>
						<li><span class="check-icon">✓</span> Instant 24/7 Doubt Resolution</li>
						<li><span class="check-icon">✓</span> 15,000+ NCERT Based Question Bank</li>
						<li><span class="check-icon">✓</span> Weekly Mock Tests with AIR Ranking</li>
					</ul>
				</div>
				<div class="course-card-footer">
					<div class="course-price-wrap">
						<span class="price-current">₹19,999</span>
						<span class="price-original">₹39,999</span>
						<span class="price-discount">50% OFF</span>
					</div>
					<div class="course-card-actions">
						<a href="#" class="btn btn-outline btn-sm">Details</a>
						<a href="#" class="btn btn-primary btn-sm">Join Batch</a>
					</div>
				</div>
			</div>

			<!-- Course 3: Class 10 -->
			<div class="course-card-item" data-category="cbse-10">
				<div class="course-card-badge badge-popular">POPULAR</div>
				<div class="course-card-header">
					<span class="course-target">Class 10 CBSE Board 2026</span>
					<h3 class="course-card-title">Class 10 Board Toppers Super 30</h3>
					<div class="teacher-info">
						<div class="teacher-avatar">👨‍🎓</div>
						<div class="teacher-details">
							<span class="teacher-name">Prof. Verma & Senior Educators</span>
							<span class="teacher-rating">★ 4.85 (9,200+ Students)</span>
						</div>
					</div>
				</div>
				<div class="course-card-body">
					<ul class="course-feature-list">
						<li><span class="check-icon">✓</span> Maths, Science, English & SST Covered</li>
						<li><span class="check-icon">✓</span> Chapter-wise NCERT Exemplar Solutions</li>
						<li><span class="check-icon">✓</span> 10 Years Past Solved Papers (PYQ)</li>
						<li><span class="check-icon">✓</span> Board Answer Writing Masterclasses</li>
					</ul>
				</div>
				<div class="course-card-footer">
					<div class="course-price-wrap">
						<span class="price-current">₹9,999</span>
						<span class="price-original">₹19,999</span>
						<span class="price-discount">50% OFF</span>
					</div>
					<div class="course-card-actions">
						<a href="#" class="btn btn-outline btn-sm">Details</a>
						<a href="#" class="btn btn-primary btn-sm">Join Batch</a>
					</div>
				</div>
			</div>

			<!-- Course 4: Foundation -->
			<div class="course-card-item" data-category="foundation">
				<div class="course-card-badge badge-live">FOUNDATION</div>
				<div class="course-card-header">
					<span class="course-target">Classes 8 & 9 Foundation</span>
					<h3 class="course-card-title">Olympiad & NTSE Early Starters</h3>
					<div class="teacher-info">
						<div class="teacher-avatar">🚀</div>
						<div class="teacher-details">
							<span class="teacher-name">Foundation Master Mentors</span>
							<span class="teacher-rating">★ 4.88 (6,500+ Students)</span>
						</div>
					</div>
				</div>
				<div class="course-card-body">
					<ul class="course-feature-list">
						<li><span class="check-icon">✓</span> Builds Strong Logical & Analytical Thinking</li>
						<li><span class="check-icon">✓</span> Mental Ability & Math Olympiad Prep</li>
						<li><span class="check-icon">✓</span> Interactive Quizzes & Leaderboards</li>
						<li><span class="check-icon">✓</span> Regular Parent-Teacher Feedback Meetings</li>
					</ul>
				</div>
				<div class="course-card-footer">
					<div class="course-price-wrap">
						<span class="price-current">₹11,999</span>
						<span class="price-original">₹23,999</span>
						<span class="price-discount">50% OFF</span>
					</div>
					<div class="course-card-actions">
						<a href="#" class="btn btn-outline btn-sm">Details</a>
						<a href="#" class="btn btn-primary btn-sm">Join Batch</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
