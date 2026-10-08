/**
 * Main JavaScript file for Edjucator WordPress theme
 * Includes navigation, course filtering, course detail view switcher, Class 6-10 PDF Notes viewer, and Toast notifications
 */

document.addEventListener('DOMContentLoaded', function() {
    // 1. Toast Notification System
    const toastContainer = document.getElementById('toast-container');

    window.showToast = function(message, type = 'success', duration = 3500) {
        if (!toastContainer) return;

        const toast = document.createElement('div');
        toast.className = `toast-item toast-${type}`;
        
        let icon = '🎉';
        if (type === 'info') icon = '📞';
        if (type === 'warning') icon = '⚠️';
        if (type === 'error') icon = '❌';

        toast.innerHTML = `
            <span class="toast-icon">${icon}</span>
            <span class="toast-message">${message}</span>
            <button class="toast-close" onclick="this.parentElement.remove()">&times;</button>
        `;

        toastContainer.appendChild(toast);

        setTimeout(() => {
            toast.classList.add('toast-fade-out');
            setTimeout(() => toast.remove(), 300);
        }, duration);
    };

    // 2. Main Page Views & Navigation Switchers
    const mainHomepageView = document.getElementById('main-homepage-view');
    const courseDetailView = document.getElementById('course-detail-view');
    const classNotesView = document.getElementById('class-notes-view');

    function setActiveNavItem(target) {
        document.querySelectorAll('.nav-menu .menu-item').forEach(item => {
            item.classList.remove('active');
        });

        if (target instanceof HTMLElement) {
            const menuItem = target.closest('.menu-item');
            if (menuItem) menuItem.classList.add('active');
        } else if (typeof target === 'string') {
            document.querySelectorAll('.nav-menu > .menu-item > a').forEach(link => {
                if (link.textContent.toLowerCase().includes(target.toLowerCase())) {
                    const menuItem = link.closest('.menu-item');
                    if (menuItem) menuItem.classList.add('active');
                }
            });
        }
    }

    function hideAllViews() {
        if (mainHomepageView) mainHomepageView.style.display = 'none';
        if (courseDetailView) courseDetailView.style.display = 'none';
        if (classNotesView) classNotesView.style.display = 'none';
    }

    function showHomepage() {
        hideAllViews();
        if (mainHomepageView) mainHomepageView.style.display = 'block';
    }

    function openCourseDetail(courseTitle) {
        hideAllViews();
        if (courseDetailView) courseDetailView.style.display = 'block';
        setActiveNavItem('course');

        if (courseTitle) {
            document.querySelectorAll('.current-course-name, .course-main-title').forEach(el => {
                el.textContent = courseTitle;
            });
        }

        window.scrollTo({ top: 0, behavior: 'smooth' });
    }

    const backToCoursesLink = document.getElementById('back-to-courses-link');
    if (backToCoursesLink) {
        backToCoursesLink.addEventListener('click', function(e) {
            e.preventDefault();
            showHomepage();
            setActiveNavItem('course');
            const coursesSection = document.getElementById('courses-section');
            if (coursesSection) coursesSection.scrollIntoView({ behavior: 'smooth' });
        });
    }

    // 3. Class 6-10 & Subject Free PDF Notes Viewer Logic
    const classChips = document.querySelectorAll('.class-chip-btn');
    const subjectChips = document.querySelectorAll('.subject-chip-btn');
    const backFromNotesBtn = document.getElementById('back-from-notes-btn');

    let currentClass = '12';
    let currentSubject = 'chemistry';

    const chaptersData = {
        chemistry: [
            { num: 1, name: 'Solutions & Colligative Properties' },
            { num: 2, name: 'Electrochemistry & Conductance' },
            { num: 3, name: 'Chemical Kinetics & Rate Laws' },
            { num: 4, name: 'd and f Block Elements' },
            { num: 5, name: 'Coordination Compounds' },
            { num: 6, name: 'Haloalkanes and Haloarenes' }
        ],
        physics: [
            { num: 1, name: 'Electric Charges & Fields' },
            { num: 2, name: 'Electrostatic Potential & Capacitance' },
            { num: 3, name: 'Current Electricity' },
            { num: 4, name: 'Moving Charges & Magnetism' },
            { num: 5, name: 'Electromagnetic Induction' }
        ],
        biology: [
            { num: 1, name: 'Sexual Reproduction in Flowering Plants' },
            { num: 2, name: 'Human Reproduction' },
            { num: 3, name: 'Principles of Inheritance & Variation' },
            { num: 4, name: 'Molecular Basis of Inheritance' },
            { num: 5, name: 'Biotechnology: Principles & Processes' }
        ],
        maths: [
            { num: 1, name: 'Relations and Functions' },
            { num: 2, name: 'Inverse Trigonometric Functions' },
            { num: 3, name: 'Matrices and Determinants' },
            { num: 4, name: 'Continuity and Differentiability' },
            { num: 5, name: 'Integrals and Differential Equations' }
        ],
        science: [
            { num: 1, name: 'Chemical Reactions and Equations' },
            { num: 2, name: 'Acids, Bases and Salts' },
            { num: 3, name: 'Metals and Non-metals' },
            { num: 4, name: 'Life Processes' }
        ],
        sst: [
            { num: 1, name: 'The Rise of Nationalism in Europe' },
            { num: 2, name: 'Resources and Development' },
            { num: 3, name: 'Power Sharing (Civics)' }
        ],
        english: [
            { num: 1, name: 'The Last Lesson (Flamingo)' },
            { num: 2, name: 'Lost Spring: Stories of Stolen Childhood' },
            { num: 3, name: 'Deep Water & My Mother at Sixty-Six' }
        ]
    };

    function updateNotesContent() {
        const classLabel = document.getElementById('selected-class-label');
        const subjectLabel = document.getElementById('selected-subject-label');
        const titleHeading = document.getElementById('notes-title-heading');
        const chaptersHeading = document.getElementById('sidebar-chapters-heading');
        const chaptersList = document.getElementById('chapters-list-container');

        const subjectNames = { 
            chemistry: 'Chemistry',
            physics: 'Physics',
            biology: 'Biology',
            maths: 'Mathematics', 
            science: 'Science', 
            sst: 'Social Science', 
            english: 'English' 
        };
        const subName = subjectNames[currentSubject] || 'Chemistry';

        if (classLabel) classLabel.textContent = `Class ${currentClass}`;
        if (subjectLabel) subjectLabel.textContent = subName;
        if (titleHeading) titleHeading.textContent = `Class ${currentClass} ${subName} - Chapter-wise Free PDF Notes`;
        if (chaptersHeading) chaptersHeading.textContent = `Class ${currentClass} ${subName} Chapters`;

        const activeSubjectKey = chaptersData[currentSubject] ? currentSubject : 'chemistry';

        if (chaptersList && chaptersData[activeSubjectKey]) {
            chaptersList.innerHTML = '';
            chaptersData[activeSubjectKey].forEach((chap, idx) => {
                const li = document.createElement('li');
                li.className = `chap-nav-item ${idx === 0 ? 'active' : ''}`;
                li.setAttribute('data-chapter', chap.num);
                li.innerHTML = `
                    <span class="chap-num">Chapter ${chap.num}</span>
                    <span class="chap-name">${chap.name}</span>
                `;

                li.addEventListener('click', function() {
                    document.querySelectorAll('.chap-nav-item').forEach(el => el.classList.remove('active'));
                    this.classList.add('active');

                    const docTitle = document.getElementById('pdf-document-title');
                    if (docTitle) {
                        docTitle.textContent = `Class ${currentClass} ${subName} - Chapter ${chap.num}: ${chap.name} (Complete Revision Notes)`;
                    }
                    showToast(`📖 Loaded Class ${currentClass} ${subName} Chapter ${chap.num}`, 'info');
                });

                chaptersList.appendChild(li);
            });

            const firstChap = chaptersData[activeSubjectKey][0];
            const docTitle = document.getElementById('pdf-document-title');
            if (docTitle && firstChap) {
                docTitle.textContent = `Class ${currentClass} ${subName} - Chapter 1: ${firstChap.name} (Complete Revision Notes)`;
            }
        }
    }

    function openClassNotesView(cls = '12', sub = 'chemistry') {
        currentClass = cls;
        currentSubject = sub;
        hideAllViews();
        if (classNotesView) classNotesView.style.display = 'block';
        setActiveNavItem('study material');

        classChips.forEach(btn => {
            btn.classList.toggle('active', btn.getAttribute('data-class') === cls);
        });
        subjectChips.forEach(btn => {
            btn.classList.toggle('active', btn.getAttribute('data-subject') === sub);
        });

        updateNotesContent();
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }

    if (backFromNotesBtn) {
        backFromNotesBtn.addEventListener('click', function(e) {
            e.preventDefault();
            showHomepage();
            setActiveNavItem('home');
        });
    }

    // Top-Level Navbar Section Navigation & Active Highlight Handler
    document.querySelectorAll('.nav-menu > .menu-item > a').forEach(link => {
        link.addEventListener('click', function(e) {
            const text = this.textContent.trim().toLowerCase();

            if (text.includes('home')) {
                e.preventDefault();
                showHomepage();
                setActiveNavItem(this);
                window.scrollTo({ top: 0, behavior: 'smooth' });
            } else if (text.includes('course')) {
                e.preventDefault();
                showHomepage();
                setActiveNavItem(this);
                const sec = document.getElementById('courses-section');
                if (sec) sec.scrollIntoView({ behavior: 'smooth' });
            } else if (text.includes('study material')) {
                e.preventDefault();
                openClassNotesView('12', 'chemistry');
                setActiveNavItem(this);
            } else if (text.includes('exam')) {
                e.preventDefault();
                showHomepage();
                setActiveNavItem(this);
                const sec = document.getElementById('exams-section');
                if (sec) sec.scrollIntoView({ behavior: 'smooth' });
            } else if (text.includes('result')) {
                e.preventDefault();
                showHomepage();
                setActiveNavItem(this);
                const sec = document.getElementById('results-section');
                if (sec) sec.scrollIntoView({ behavior: 'smooth' });
            }
        });
    });

    classChips.forEach(btn => {
        btn.addEventListener('click', function() {
            classChips.forEach(c => c.classList.remove('active'));
            this.classList.add('active');
            currentClass = this.getAttribute('data-class');
            updateNotesContent();
            showToast(`Switched to Class ${currentClass} Notes`, 'info');
        });
    });

    subjectChips.forEach(btn => {
        btn.addEventListener('click', function() {
            subjectChips.forEach(s => s.classList.remove('active'));
            this.classList.add('active');
            currentSubject = this.getAttribute('data-subject');
            updateNotesContent();
            showToast(`Loaded ${this.textContent.trim()} Notes`, 'info');
        });
    });

    // Attach openClassNotesView to ALL Class 6-10 & Mega Menu links
    document.querySelectorAll('.open-class-notes-nav, a[href="#class-notes-view"], .resource-btn').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            openClassNotesView('12', 'chemistry');
            setActiveNavItem('study material');
            showToast('📚 Loaded NCERT Study Material & Solutions Viewer!', 'success');
        });
    });

    // Attach openCourseDetail to Featured Course & Submenu links
    document.querySelectorAll('.open-featured-course, .course-card-actions .btn, .sub-menu li a').forEach(btn => {
        btn.addEventListener('click', function(e) {
            if (this.classList.contains('open-class-notes-nav')) return;

            const card = this.closest('.course-card-item');
            let courseName = 'Coding Classes for Kids (Super Coders)';

            if (card) {
                const titleEl = card.querySelector('.course-card-title');
                if (titleEl) courseName = titleEl.textContent.trim();
            } else if (this.textContent) {
                courseName = this.textContent.trim();
            }

            if (this.classList.contains('open-featured-course') || (courseName && (this.textContent.includes('Details') || this.textContent.includes('Batch') || this.classList.contains('btn') || this.textContent.includes('Coding')))) {
                e.preventDefault();
                openCourseDetail(courseName);
                showToast(`🚀 Loaded Featured Course: ${courseName}`, 'success');
            }
        });
    });

    // Grade selector pills logic on Super Coders page
    document.querySelectorAll('.grade-pill-btn').forEach(pill => {
        pill.addEventListener('click', function() {
            document.querySelectorAll('.grade-pill-btn').forEach(p => p.classList.remove('active'));
            this.classList.add('active');
            showToast(`Filtered Supercoders curriculum for ${this.textContent.trim()}`, 'info');
        });
    });

    // 4. Accordion Toggle Logic
    document.querySelectorAll('.accordion-header, .faq-header').forEach(header => {
        header.addEventListener('click', function() {
            this.parentElement.classList.toggle('active');
        });
    });

    // 5. Header Actions & Mobile Navigation Toggle
    const talkExpertBtn = document.getElementById('talk-expert-btn');
    if (talkExpertBtn) {
        talkExpertBtn.addEventListener('click', function(e) {
            showToast('Calling Academic Expert: 987654321...', 'info', 4000);
        });
    }

    const headerBookDemoBtn = document.getElementById('header-book-demo-btn');
    if (headerBookDemoBtn) {
        headerBookDemoBtn.addEventListener('click', function() {
            showToast('Demo Class Reserved! Our Academic Counselor will contact you on 987654321.', 'success', 4000);
        });
    }

    const mobileToggle = document.getElementById('mobile-menu-toggle');
    const mainNav = document.getElementById('site-navigation');

    if (mobileToggle && mainNav) {
        mobileToggle.addEventListener('click', function() {
            const isExpanded = mobileToggle.getAttribute('aria-expanded') === 'true';
            mobileToggle.setAttribute('aria-expanded', !isExpanded);
            mainNav.classList.toggle('is-active');
        });
    }

    // 6. Course Filtering Tabs Logic
    const tabButtons = document.querySelectorAll('.course-tab-btn');
    const courseCards = document.querySelectorAll('.course-card-item');

    if (tabButtons.length > 0 && courseCards.length > 0) {
        tabButtons.forEach(button => {
            button.addEventListener('click', function() {
                tabButtons.forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');

                const filterValue = this.getAttribute('data-filter');

                courseCards.forEach(card => {
                    const cardCategory = card.getAttribute('data-category');

                    if (filterValue === 'all' || cardCategory === filterValue) {
                        card.style.display = 'flex';
                        card.style.animation = 'fadeIn 0.3s ease';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });
    }

    // 7. Global Network Status Monitor
    const offlineBanner = document.getElementById('global-offline-banner');
    const slowNetworkBanner = document.getElementById('global-slow-network-banner');

    function updateNetworkStatus() {
        if (!navigator.onLine) {
            if (offlineBanner) offlineBanner.style.display = 'block';
            if (slowNetworkBanner) slowNetworkBanner.style.display = 'none';
        } else {
            if (offlineBanner) offlineBanner.style.display = 'none';
            
            if (navigator.connection) {
                const effectiveType = navigator.connection.effectiveType;
                const rtt = navigator.connection.rtt;
                if (effectiveType === 'slow-2g' || effectiveType === '2g' || (rtt && rtt > 600)) {
                    if (slowNetworkBanner) slowNetworkBanner.style.display = 'block';
                } else {
                    if (slowNetworkBanner) slowNetworkBanner.style.display = 'none';
                }
            }
        }
    }

    window.addEventListener('online', updateNetworkStatus);
    window.addEventListener('offline', updateNetworkStatus);

    if (navigator.connection) {
        navigator.connection.addEventListener('change', updateNetworkStatus);
    }

    updateNetworkStatus();
});
