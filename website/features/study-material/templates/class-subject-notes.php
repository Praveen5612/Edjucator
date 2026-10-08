<?php
/**
 * Class & Subject Free PDF Study Notes & NCERT Solutions Viewer Template
 *
 * @package Edjucator
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<div id="class-notes-view" class="class-notes-page" style="display: none;">
	<!-- Sub-Nav Pills Bar (Matching Screenshot 2) -->
	<div class="study-material-subnav">
		<div class="header-container">
			<div class="subnav-pills-list">
				<span class="subnav-pill active" onclick="showToast('📚 Free Demo Reserved', 'info')">Book Online Demo</span>
				<span class="subnav-pill" onclick="showToast('Loaded Study Materials', 'info')">Study Materials ▾</span>
				<span class="subnav-pill" onclick="showToast('Loaded Sample Papers', 'info')">Sample Papers ▾</span>
				<span class="subnav-pill" onclick="showToast('Loaded PYQs', 'info')">Previous Year Question Papers ▾</span>
				<span class="subnav-pill" onclick="showToast('Loaded Exam Info', 'info')">Exam Info</span>
				<span class="subnav-pill" onclick="showToast('Loaded Syllabus', 'info')">Syllabus ▾</span>
			</div>
		</div>
	</div>

	<!-- Header Section -->
	<section class="notes-hero-header">
		<div class="header-container">
			<div class="course-breadcrumb">
				<a href="#" class="back-to-home-btn" id="back-from-notes-btn">← Back to Home</a>
				<span class="breadcrumb-sep">/</span>
				<span>NCERT Solutions</span>
				<span class="breadcrumb-sep">/</span>
				<span id="selected-class-label">Class 12</span>
				<span class="breadcrumb-sep">/</span>
				<span id="selected-subject-label" class="current-subject-badge">Chemistry</span>
			</div>

			<h1 class="notes-main-title" id="notes-title-heading">
				NCERT Solutions For Class 12 Chemistry - 2026-27
			</h1>
			<p class="notes-main-desc" id="notes-subject-desc">
				Chemistry becomes easier when concepts are understood with the right approach and regular practice. Class 12 Chemistry covers a wide range of topics, from chemical reactions to numerical problems and theoretical concepts.
			</p>

			<!-- Class & Subject Filter Selector Chips Container -->
			<div class="notes-filter-box">
				<!-- Step 1: Select Class Chips -->
				<div class="class-selector-wrap">
					<span class="selector-title">Select Class:</span>
					<div class="class-chips-group">
						<button type="button" class="class-chip-btn" data-class="6">Class 6</button>
						<button type="button" class="class-chip-btn" data-class="7">Class 7</button>
						<button type="button" class="class-chip-btn" data-class="8">Class 8</button>
						<button type="button" class="class-chip-btn" data-class="9">Class 9</button>
						<button type="button" class="class-chip-btn" data-class="10">Class 10</button>
						<button type="button" class="class-chip-btn" data-class="11">Class 11</button>
						<button type="button" class="class-chip-btn active" data-class="12">Class 12</button>
					</div>
				</div>

				<!-- Step 2: Select Subject Chips -->
				<div class="subject-selector-wrap">
					<span class="selector-title">Select Subject:</span>
					<div class="subject-chips-group">
						<button type="button" class="subject-chip-btn active" data-subject="chemistry">🧪 Chemistry</button>
						<button type="button" class="subject-chip-btn" data-subject="maths">📘 Mathematics</button>
						<button type="button" class="subject-chip-btn" data-subject="physics">⚛️ Physics</button>
						<button type="button" class="subject-chip-btn" data-subject="biology">🧬 Biology</button>
						<button type="button" class="subject-chip-btn" data-subject="english">✍️ English</button>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Main NCERT Content Layout -->
	<div class="header-container" style="padding: 32px 0;">
		<!-- Highlight Banner (Board Booster Highlight matching Screenshot 2) -->
		<div class="ncert-highlight-banner">
			<div class="ncert-banner-text">
				<h4>⚡ CLASS 12 BOARD SCOPE BOOSTER</h4>
				<p>Practice smart. Learn how to write structured answers for board exams with step-by-step solutions.</p>
			</div>
			<button type="button" class="btn btn-sm" style="background-color: #ea580c; color: var(--white);" onclick="showToast('Joined Board Practice Waitlist!', 'success')">
				Join the Waitlist ›
			</button>
		</div>

		<div class="notes-body-grid" style="display: grid; grid-template-columns: 1fr 300px; gap: 32px;">
			<!-- Main Left Content -->
			<div>
				<!-- Chapter-wise PDF Viewer Card -->
				<div class="pdf-viewer-main">
					<div class="pdf-viewer-card" style="background-color: var(--white); border-radius: var(--radius-md); border: 1px solid var(--purple-border); overflow: hidden;">
						<!-- Header Bar -->
						<div class="pdf-header-bar" style="padding: 20px; background-color: #faf5ff; border-bottom: 1px solid var(--purple-border); display: flex; justify-content: space-between; align-items: center;">
							<div>
								<span class="pdf-badge" style="background-color: var(--purple-main); color: var(--white); font-size: 0.72rem; font-weight: 800; padding: 3px 10px; border-radius: var(--radius-pill);">FREE NCERT PDF</span>
								<h2 class="pdf-current-title" id="pdf-document-title" style="font-size: 1.2rem; font-weight: 800; color: var(--navy-dark); margin-top: 4px;">
									Class 12 Chemistry - Chapter 1: Solutions (Complete NCERT Notes & Solutions)
								</h2>
							</div>
							<button type="button" class="btn btn-primary btn-sm" onclick="showToast('📥 Downloading Chapter PDF Notes...', 'success')">
								⬇ Download PDF
							</button>
						</div>

						<!-- Document Reader Simulation -->
						<div class="pdf-reader-frame" style="padding: 32px; background-color: #f1f5f9;">
							<div class="pdf-mock-page" style="background-color: var(--white); padding: 32px; border-radius: var(--radius-md); box-shadow: 0 4px 16px rgba(0,0,0,0.08);">
								<div class="pdf-document-header">
									<span class="doc-watermark">EDJUCATOR NCERT STUDY MATERIAL</span>
									<h3>Chapter 1: Solutions & Chemical Kinetics</h3>
									<div class="doc-meta">Curriculum 2026-27 • Verified by Senior Master Faculty</div>
								</div>

								<div class="pdf-document-content">
									<h4>1. Definition of Solutions & Concentration Terms</h4>
									<p>A solution is a homogeneous mixture of two or more substances whose composition can be varied within certain limits. Molarity (M), Molality (m), and Mole Fraction (\(X\)) are fundamental concentration terms for board numericals.</p>

									<h4>2. Raoult's Law & Ideal Solutions</h4>
									<p>According to Raoult’s law, for a solution of volatile liquids, the partial vapour pressure of each component of the solution is directly proportional to its mole fraction present in solution.</p>

									<div class="pdf-note-box">
										<strong>💡 Important Board Tip:</strong> Solved numerical problems on Colligative Properties carry 5 marks in CBSE Board examination!
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Sidebar Chapter Accordion List -->
				<div style="margin-top: 32px; background-color: var(--white); border-radius: var(--radius-md); border: 1px solid #e2e8f0; padding: 24px;">
					<h3 style="font-size: 1.2rem; font-weight: 800; color: var(--navy-dark); margin-bottom: 16px;" id="sidebar-chapters-heading">
						Download Chapter-wise NCERT Solutions for Class 12 Chemistry PDF
					</h3>

					<ul class="chapters-nav-list" id="chapters-list-container" style="display: flex; flex-direction: column; gap: 8px;">
						<li class="chap-nav-item active" data-chapter="1" style="padding: 12px 16px; background-color: var(--purple-subtle); border-radius: var(--radius-sm); cursor: pointer;">
							<span class="chap-num" style="font-weight: 800; color: var(--purple-main);">Chapter 1:</span>
							<span class="chap-name" style="font-weight: 600;"> Solutions & Colligative Properties</span>
						</li>
						<li class="chap-nav-item" data-chapter="2" style="padding: 12px 16px; background-color: #f8fafc; border-radius: var(--radius-sm); cursor: pointer;">
							<span class="chap-num" style="font-weight: 800; color: var(--slate-text);">Chapter 2:</span>
							<span class="chap-name"> Electrochemistry</span>
						</li>
						<li class="chap-nav-item" data-chapter="3" style="padding: 12px 16px; background-color: #f8fafc; border-radius: var(--radius-sm); cursor: pointer;">
							<span class="chap-num" style="font-weight: 800; color: var(--slate-text);">Chapter 3:</span>
							<span class="chap-name"> Chemical Kinetics</span>
						</li>
						<li class="chap-nav-item" data-chapter="4" style="padding: 12px 16px; background-color: #f8fafc; border-radius: var(--radius-sm); cursor: pointer;">
							<span class="chap-num" style="font-weight: 800; color: var(--slate-text);">Chapter 4:</span>
							<span class="chap-name"> d and f Block Elements</span>
						</li>
						<li class="chap-nav-item" data-chapter="5" style="padding: 12px 16px; background-color: #f8fafc; border-radius: var(--radius-sm); cursor: pointer;">
							<span class="chap-num" style="font-weight: 800; color: var(--slate-text);">Chapter 5:</span>
							<span class="chap-name"> Coordination Compounds</span>
						</li>
					</ul>
				</div>
			</div>

			<!-- Right Sidebar (Matching Screenshot 2 Sidebar Links) -->
			<aside>
				<!-- NCERT Solutions Class 12 List -->
				<div style="background-color: var(--white); border-radius: var(--radius-md); border: 1px solid #e2e8f0; padding: 20px; margin-bottom: 24px;">
					<h4 style="font-size: 0.85rem; font-weight: 800; color: var(--purple-main); text-transform: uppercase; margin-bottom: 12px;">NCERT SOLUTIONS FOR CLASS 12</h4>
					<ul style="display: flex; flex-direction: column; gap: 8px; font-size: 0.88rem;">
						<li><a href="#class-notes-view" class="open-class-notes-nav" style="color: var(--navy-dark); font-weight: 600;">NCERT Solutions for Class 12 Maths 🔖</a></li>
						<li><a href="#class-notes-view" class="open-class-notes-nav" style="color: var(--navy-dark); font-weight: 600;">NCERT Solutions for Class 12 Physics 🔖</a></li>
						<li><a href="#class-notes-view" class="open-class-notes-nav" style="color: var(--navy-dark); font-weight: 600;">NCERT Solutions for Class 12 Biology 🔖</a></li>
						<li><a href="#class-notes-view" class="open-class-notes-nav" style="color: var(--navy-dark); font-weight: 600;">NCERT Solutions for Class 12 English 🔖</a></li>
						<li><a href="#class-notes-view" class="open-class-notes-nav" style="color: var(--navy-dark); font-weight: 600;">NCERT Solutions for Class 12 Business Studies 🔖</a></li>
						<li><a href="#class-notes-view" class="open-class-notes-nav" style="color: var(--navy-dark); font-weight: 600;">NCERT Solutions for Class 12 Economics 🔖</a></li>
					</ul>
				</div>

				<!-- CBSE Class 12 Study Materials -->
				<div style="background-color: var(--white); border-radius: var(--radius-md); border: 1px solid #e2e8f0; padding: 20px;">
					<h4 style="font-size: 0.85rem; font-weight: 800; color: var(--purple-main); text-transform: uppercase; margin-bottom: 12px;">CBSE CLASS 12 STUDY MATERIALS</h4>
					<ul style="display: flex; flex-direction: column; gap: 8px; font-size: 0.88rem;">
						<li><a href="#class-notes-view" class="open-class-notes-nav" style="color: var(--slate-text);">Revision Notes for Class 12 🔖</a></li>
						<li><a href="#class-notes-view" class="open-class-notes-nav" style="color: var(--slate-text);">Important Questions for Class 12 🔖</a></li>
						<li><a href="#class-notes-view" class="open-class-notes-nav" style="color: var(--slate-text);">Class 12 Maths Formula 🔖</a></li>
						<li><a href="#class-notes-view" class="open-class-notes-nav" style="color: var(--slate-text);">Class 12 Sample Papers 2026 🔖</a></li>
					</ul>
				</div>
			</aside>
		</div>
	</div>
</div>
