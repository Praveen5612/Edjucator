<?php
/**
 * Single Course Detail Page Template - Super Coders & Featured Courses
 *
 * @package Edjucator
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<div id="course-detail-view" class="course-detail-page" style="display: none;">
	<!-- Course Breadcrumbs & Header Hero -->
	<section class="coding-course-hero">
		<div class="header-container">
			<div class="course-breadcrumb" style="margin-bottom: 20px;">
				<a href="#" class="back-to-courses-btn" id="back-to-courses-link" style="color: #fef08a;">← Back to Home / All Courses</a>
				<span class="breadcrumb-sep" style="color: rgba(255,255,255,0.4);">/</span>
				<span style="color: #e9d5ff;">Super Coders</span>
				<span class="breadcrumb-sep" style="color: rgba(255,255,255,0.4);">/</span>
				<span class="current-course-name" style="color: #ffffff; font-weight: 700;">Coding Classes for Kids</span>
			</div>

			<div class="coding-hero-grid">
				<!-- Left Details -->
				<div class="coding-hero-info">
					<div class="coding-hero-badge">
						<span>⭐ 10,000+ students already registered with us. Are you ready to join them?</span>
					</div>

					<h1 class="coding-hero-title">Coding Classes for Kids - Introduce your child to the World of Coding</h1>
					<p class="coding-hero-subtitle">
						Help them build websites, apps and games with Edjucator's Super Teachers through 30-minute live 1-on-1 personalized classes.
					</p>

					<div class="course-quick-highlights" style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 16px; margin-top: 24px;">
						<div class="highlight-box" style="background: rgba(255,255,255,0.1); padding: 12px 16px; border-radius: var(--radius-md);">
							<span class="hl-icon" style="font-size: 1.5rem;">💻</span>
							<div class="hl-text" style="color: #ffffff;">
								<strong>1-to-1 Live Classes</strong>
								<span style="display: block; font-size: 0.8rem; color: #e9d5ff;">Personalized mentor focus</span>
							</div>
						</div>
						<div class="highlight-box" style="background: rgba(255,255,255,0.1); padding: 12px 16px; border-radius: var(--radius-md);">
							<span class="hl-icon" style="font-size: 1.5rem;">🎮</span>
							<div class="hl-text" style="color: #ffffff;">
								<strong>Learn by Building</strong>
								<span style="display: block; font-size: 0.8rem; color: #e9d5ff;">Apps, Games & AI Projects</span>
							</div>
						</div>
					</div>
				</div>

				<!-- Right Lead Capture Form Card -->
				<div class="coding-lead-card">
					<h3>Connect with us to know more</h3>
					<form id="coding-lead-form" onsubmit="event.preventDefault(); showToast('🎉 Request submitted! Our mentor will call you back on 987654321', 'success');">
						<div class="phone-input-group">
							<span class="phone-prefix">+91</span>
							<input type="tel" placeholder="Enter your phone number" required pattern="[0-9]{10}">
						</div>

						<div class="whatsapp-checkbox-wrap">
							<input type="checkbox" id="whatsapp-consent" checked>
							<label for="whatsapp-consent">Get course updates & demo link on WhatsApp 💬</label>
						</div>

						<button type="submit" class="btn-whatsapp-submit">
							<span>Connect with us</span>
						</button>
					</form>
				</div>
			</div>
		</div>
	</section>

	<!-- Endless Possibilities Section -->
	<section class="possibilities-section">
		<div class="header-container text-center">
			<h2 style="font-size: 2rem; font-weight: 800; color: var(--navy-dark);">Endless possibilities with our Online coding classes for kids</h2>
			<p style="color: var(--muted-text); margin-top: 8px;">Explore core tech domains introduced to young coders</p>

			<div class="possibilities-grid">
				<div class="possibility-card">
					<div class="possibility-icon">🎨</div>
					<h4>Web Design</h4>
					<p>Web design tutorial for kids to build custom responsive websites</p>
				</div>
				<div class="possibility-card">
					<div class="possibility-icon">🤖</div>
					<h4>Artificial Intelligence</h4>
					<p>Artificial intelligence tutorial with age-appropriate ML models</p>
				</div>
				<div class="possibility-card">
					<div class="possibility-icon">🐍</div>
					<h4>Python Programming</h4>
					<p>Python programming tutorial for apps, data & game development</p>
				</div>
				<div class="possibility-card">
					<div class="possibility-icon">🌐</div>
					<h4>IoT & Robotics</h4>
					<p>Online IoT classes for kids exploring connected smart technologies</p>
				</div>
			</div>
		</div>
	</section>

	<!-- Main Plans & Pricing Section -->
	<section class="plans-section" style="padding: 60px 0; background-color: #faf5ff;">
		<div class="header-container">
			<div class="text-center">
				<h2 style="font-size: 2.2rem; font-weight: 800; color: var(--navy-dark);">Let us help you with the Best Coding Course for your kids</h2>
				<p style="color: var(--slate-text); margin-top: 8px;">Select grade to view tailored 1-on-1 coding curriculum</p>

				<!-- Grade Selector Pills -->
				<div class="grade-selector-bar">
					<button type="button" class="grade-pill-btn active">Grade 1 - 2</button>
					<button type="button" class="grade-pill-btn">Grade 3 - 4</button>
					<button type="button" class="grade-pill-btn">Grade 5 - 6</button>
					<button type="button" class="grade-pill-btn">Grade 7 - 8</button>
				</div>
			</div>

			<!-- Pricing Cards Grid -->
			<div class="plans-pricing-grid">
				<!-- Card 1: Intro -->
				<div class="plan-card">
					<div>
						<div class="plan-header">
							<h3 class="plan-title">Introduction to Coding Fundamentals</h3>
							<span class="plan-classes-badge">48 Classes</span>
						</div>

						<ul class="plan-features-list">
							<li>Create Coding Fundamentals</li>
							<li>Learn STEM Integration</li>
							<li>Design App Development</li>
							<li>Build Game Design</li>
							<li>30 mins Live One to One Classes</li>
						</ul>
					</div>

					<div>
						<div class="plan-price-block">
							<div class="per-class-rate">₹875 per Class</div>
							<div class="total-price">₹41,999</div>
							<div class="emi-note">No cost EMI starts at ₹3500 /month</div>
						</div>

						<div style="margin-bottom: 16px;">
							<span style="font-size: 0.84rem; font-weight: 800; color: var(--navy-dark); display: block; margin-bottom: 8px;">What will your kid learn?</span>
							<div class="kid-learn-chips">
								<span class="kid-chip">Intro to Coding</span>
								<span class="kid-chip">Learn Animation</span>
								<span class="kid-chip">Game from scratch</span>
								<span class="kid-chip">Create Game</span>
							</div>
						</div>

						<button type="button" class="btn btn-primary btn-block" onclick="showToast('🎉 Redirecting to Intro Coding Enrollment...', 'success')">
							Buy Now
						</button>
					</div>
				</div>

				<!-- Card 2: Advanced -->
				<div class="plan-card featured-plan">
					<span class="plan-card-tag">MOST POPULAR</span>
					<div>
						<div class="plan-header">
							<h3 class="plan-title">Advanced Coding & Game Development</h3>
							<span class="plan-classes-badge" style="background-color: #dbeafe; color: #1e40af;">96 Classes</span>
						</div>

						<ul class="plan-features-list">
							<li>Master Coding Fundamentals</li>
							<li>Explore STEM Integration</li>
							<li>Develop Applications</li>
							<li>Create Engaging Games</li>
							<li>Dive into AI, AR/VR & 3D Modelling</li>
							<li>30 mins Live One-to-One Classes</li>
						</ul>
					</div>

					<div>
						<div class="plan-price-block" style="background-color: #eff6ff;">
							<div class="per-class-rate" style="color: #2563eb;">₹823 per Class</div>
							<div class="total-price">₹78,999</div>
							<div class="emi-note">No cost EMI starts at ₹4389 /month</div>
						</div>

						<div style="margin-bottom: 16px;">
							<span style="font-size: 0.84rem; font-weight: 800; color: var(--navy-dark); display: block; margin-bottom: 8px;">What will your kid learn?</span>
							<div class="kid-learn-chips">
								<span class="kid-chip">Advanced AI</span>
								<span class="kid-chip">3D Modelling</span>
								<span class="kid-chip">AR/VR Tech</span>
								<span class="kid-chip">App Development</span>
							</div>
						</div>

						<button type="button" class="btn btn-primary btn-block" onclick="showToast('🎉 Redirecting to Advanced Coding Enrollment...', 'success')">
							Buy Now
						</button>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Meet Our Teachers Section -->
	<section class="teachers-section">
		<div class="header-container">
			<div class="text-center">
				<h2 style="font-size: 2rem; font-weight: 800; color: var(--navy-dark);">Meet Our Super Teachers</h2>
				<p style="color: var(--muted-text); margin-top: 6px;">Handpicked computer science experts & educators by choice</p>
			</div>

			<div class="teachers-grid">
				<!-- Teacher 1 -->
				<div class="teacher-card">
					<div class="teacher-avatar-circle">PS</div>
					<h3 class="teacher-name">Priya Shrivastava</h3>
					<div class="teacher-qual">M.tech in Computer Science (6+ yrs exp)</div>
					<p class="teacher-quote">"Coding is becoming basic literacy in this digital age, and it is significant for kids to understand and utilize the technology around them."</p>
				</div>

				<!-- Teacher 2 -->
				<div class="teacher-card">
					<div class="teacher-avatar-circle" style="background: linear-gradient(135deg, #059669, #10b981);">AN</div>
					<h3 class="teacher-name">Aakanksha S Nagar</h3>
					<div class="teacher-qual">B.tech in Electronics & Comm. (4+ yrs exp)</div>
					<p class="teacher-quote">"At Edjucator our motto is Teacher by choice, which has given me an amazing opportunity to interact with students from all over the world."</p>
				</div>

				<!-- Teacher 3 -->
				<div class="teacher-card">
					<div class="teacher-avatar-circle" style="background: linear-gradient(135deg, #d97706, #f59e0b);">AC</div>
					<h3 class="teacher-name">Anu Chhabra</h3>
					<div class="teacher-qual">MCA, BCA, B.Ed (14+ yrs exp)</div>
					<p class="teacher-quote">"I believe in holistic development of learners and improving conceptual & logical thinking skills which imparts creativity in them."</p>
				</div>
			</div>

			<!-- Stats Counter Bar -->
			<div class="stats-counter-bar">
				<div class="stat-box">
					<div class="stat-number">12,400+</div>
					<div class="stat-label">Registered Students</div>
				</div>
				<div class="stat-box" style="border-left: 2px solid #f1f5f9; border-right: 2px solid #f1f5f9; padding: 0 40px;">
					<div class="stat-number">480,000+</div>
					<div class="stat-label">Classes Conducted</div>
				</div>
				<div class="stat-box">
					<div class="stat-number">4.9 ★</div>
					<div class="stat-label">Parent Rating</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Specialized Programs Grid (Phonics, Math, Spoken English) -->
	<section class="special-programs" style="padding: 60px 0; background-color: var(--white);">
		<div class="header-container">
			<div class="text-center" style="margin-bottom: 36px;">
				<h2 style="font-size: 2rem; font-weight: 800; color: var(--navy-dark);">More 1-on-1 Classes for Super Kids</h2>
			</div>

			<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 24px;">
				<div style="background-color: #eff6ff; border: 1px solid #bfdbfe; border-radius: var(--radius-md); padding: 24px; text-align: center;">
					<h3 style="font-size: 1.15rem; font-weight: 800; color: #1e40af;">Phonics-Based Reading Classes</h3>
					<p style="font-size: 0.84rem; color: #1d4ed8; margin: 6px 0 12px;">For Kids LKG - Grade 8 • See your child read independently</p>
					<button type="button" class="btn btn-sm btn-primary" onclick="showToast('Phonics Program Info requested', 'info')">KNOW MORE</button>
				</div>

				<div style="background-color: #f0fdf4; border: 1px solid #bbf7d0; border-radius: var(--radius-md); padding: 24px; text-align: center;">
					<h3 style="font-size: 1.15rem; font-weight: 800; color: #166534;">Math Classes for Kids</h3>
					<p style="font-size: 0.84rem; color: #15803d; margin: 6px 0 12px;">For Kids KG - Grade 8 • Give your child 2x faster learning</p>
					<button type="button" class="btn btn-sm btn-primary" style="background-color: #16a34a;" onclick="showToast('Math Classes Info requested', 'info')">KNOW MORE</button>
				</div>

				<div style="background-color: #fff7ed; border: 1px solid #ffedd5; border-radius: var(--radius-md); padding: 24px; text-align: center;">
					<h3 style="font-size: 1.15rem; font-weight: 800; color: #9a3412;">Spoken English Classes</h3>
					<p style="font-size: 0.84rem; color: #c2410c; margin: 6px 0 12px;">For Kids LKG - Grade 8 • Speak fluently and confidently</p>
					<button type="button" class="btn btn-sm btn-primary" style="background-color: #ea580c;" onclick="showToast('Spoken English Info requested', 'info')">KNOW MORE</button>
				</div>
			</div>
		</div>
	</section>

	<!-- Guarantee / WhatsApp Connect Banner -->
	<section style="background: linear-gradient(135deg, #15803d 0%, #16a34a 100%); color: var(--white); padding: 40px 0; text-align: center;">
		<div class="header-container">
			<h2 style="font-size: 1.8rem; font-weight: 800; color: #ffffff;">Want to help your Kid Prepare for the Future with Super Coders?</h2>
			<button type="button" class="btn" style="background-color: #ffffff; color: #16a34a; font-weight: 800; margin-top: 16px; padding: 12px 28px; border-radius: var(--radius-pill);" onclick="showToast('💬 Opening WhatsApp Chat with Supercoders Counselor...', 'success')">
				💬 Connect with us on WhatsApp
			</button>
		</div>
	</section>

	<!-- FAQs Section -->
	<section class="faq-section">
		<div class="header-container">
			<div class="text-center">
				<h2 style="font-size: 2rem; font-weight: 800; color: var(--navy-dark);">Frequently asked questions</h2>
			</div>

			<div class="faq-accordion-list">
				<div class="faq-item active">
					<div class="faq-header">
						<span>Which grades are coding classes for kids available for?</span>
						<span class="faq-toggle-icon">−</span>
					</div>
					<div class="faq-body">
						Supercoders has specialized courses for Grades 1–2, Grades 3–4, Grades 5–6 and Grades 7–8. Course content changes dynamically by grade group to ensure age-appropriate progression.
					</div>
				</div>

				<div class="faq-item">
					<div class="faq-header">
						<span>How many classes are included in Supercoders courses?</span>
						<span class="faq-toggle-icon">+</span>
					</div>
					<div class="faq-body">
						We offer two flexible course tracks: Introduction track with 48 classes and Advanced track with 96 classes.
					</div>
				</div>

				<div class="faq-item">
					<div class="faq-header">
						<span>Does Edjucator offer Python coding for kids?</span>
						<span class="faq-toggle-icon">+</span>
					</div>
					<div class="faq-body">
						Yes! Python programming is introduced for Grades 5–6 and advanced real-world Python with databases and game physics for Grades 7–8.
					</div>
				</div>

				<div class="faq-item">
					<div class="faq-header">
						<span>Are Supercoders classes one-to-one?</span>
						<span class="faq-toggle-icon">+</span>
					</div>
					<div class="faq-body">
						Yes, all live coding classes are 30-minute 1-on-1 personalized sessions with expert computer science teachers.
					</div>
				</div>

				<div class="faq-item">
					<div class="faq-header">
						<span>Does Supercoders include robotics and 3D modeling?</span>
						<span class="faq-toggle-icon">+</span>
					</div>
					<div class="faq-body">
						Yes, students explore connected IoT technologies, AR/VR simulation, 3D printing modeling, and AI chatbot creation based on their grade level.
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Grade-Wise Comprehensive Curriculum Summary Tables -->
	<section class="curriculum-section">
		<div class="header-container">
			<div class="text-center">
				<h2 style="font-size: 1.8rem; font-weight: 800; color: var(--navy-dark);">Supercoders Grade-wise Course Structure</h2>
			</div>

			<!-- Grades 1-2 -->
			<div class="grade-table-wrap">
				<h4>Vedantu / Edjucator Supercoders Courses for Grades 1–2</h4>
				<table class="curriculum-table">
					<thead>
						<tr>
							<th>Course</th>
							<th>Classes</th>
							<th>What the Course Includes</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><strong>Introduction to Coding Fundamentals</strong></td>
							<td>48 Classes</td>
							<td>Create Coding Fundamentals • STEM Integration • App Development • Build Game Design • 30-Min Live 1-on-1</td>
						</tr>
						<tr>
							<td><strong>Advanced Coding & Game Development</strong></td>
							<td>96 Classes</td>
							<td>Master Coding Fundamentals • STEM Integration • Develop Applications • AR/VR & 3D Modelling • 30-Min Live 1-on-1</td>
						</tr>
					</tbody>
				</table>
			</div>

			<!-- Grades 3-4 -->
			<div class="grade-table-wrap">
				<h4>Supercoders Courses for Grades 3–4</h4>
				<table class="curriculum-table">
					<thead>
						<tr>
							<th>Course</th>
							<th>Classes</th>
							<th>What the Course Includes</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><strong>Introduction to Game Creations</strong></td>
							<td>48 Classes</td>
							<td>Develop an App • Create a Game • Create Chatbots • Launch Web Pages • 30-Min Live 1-on-1</td>
						</tr>
						<tr>
							<td><strong>Advanced Game Dev & Interactive Coding</strong></td>
							<td>96 Classes</td>
							<td>Develop Advanced Games • Build Apps • Interactive Chatbots • 3D Printing & Modeling • 30-Min Live 1-on-1</td>
						</tr>
					</tbody>
				</table>
			</div>

			<!-- Grades 5-6 -->
			<div class="grade-table-wrap">
				<h4>Supercoders Courses for Grades 5–6 (Python Track)</h4>
				<table class="curriculum-table">
					<thead>
						<tr>
							<th>Course</th>
							<th>Classes</th>
							<th>What the Course Includes</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><strong>Introduction to Python</strong></td>
							<td>48 Classes</td>
							<td>Design Quiz App • Professional Website • Create 3D Models • Learn Python Code • 30-Min Live 1-on-1</td>
						</tr>
						<tr>
							<td><strong>Master Coding & App Development</strong></td>
							<td>96 Classes</td>
							<td>Interactive Quiz Apps • Build AI-Powered Apps • 3D Models & Web Apps • 30-Min Live 1-on-1</td>
						</tr>
					</tbody>
				</table>
			</div>

			<!-- Grades 7-8 -->
			<div class="grade-table-wrap">
				<h4>Supercoders Courses for Grades 7–8 (Advanced Data & Web)</h4>
				<table class="curriculum-table">
					<thead>
						<tr>
							<th>Course</th>
							<th>Classes</th>
							<th>What the Course Includes</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><strong>Master Apps, Games with Python</strong></td>
							<td>48 Classes</td>
							<td>Design Interactive Games • Product Gallery • Real World Data Projects • Advanced Python • 30-Min Live 1-on-1</td>
						</tr>
						<tr>
							<td><strong>Master Coding: Apps, Games & Web with Python</strong></td>
							<td>96 Classes</td>
							<td>E-Commerce Product Gallery • Databases Projects • Advanced Web Dev & Python • 30-Min Live 1-on-1</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</section>
</div>
