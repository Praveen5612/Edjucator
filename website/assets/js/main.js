/**
 * Main JavaScript file for Edjucator WordPress theme
 * Includes interactive navigation, course tab filtering, and Global Network State Monitor
 */

document.addEventListener('DOMContentLoaded', function() {
    // 1. Mobile navigation toggle logic
    const mobileToggle = document.getElementById('mobile-menu-toggle');
    const mainNav = document.getElementById('site-navigation');

    if (mobileToggle && mainNav) {
        mobileToggle.addEventListener('click', function() {
            const isExpanded = mobileToggle.getAttribute('aria-expanded') === 'true';
            mobileToggle.setAttribute('aria-expanded', !isExpanded);
            mainNav.classList.toggle('is-active');
        });
    }

    // 2. Vedantu-style Course Filtering Tabs Logic
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

    // 3. Global Target Selector Dropdown Listener
    const globalTargetSelect = document.getElementById('global-target-select');
    if (globalTargetSelect) {
        globalTargetSelect.addEventListener('change', function() {
            const selectedTarget = this.value;
            const targetTab = document.querySelector(`.course-tab-btn[data-filter="${selectedTarget}"]`);
            
            if (targetTab) {
                targetTab.click();
                const coursesSection = document.getElementById('courses-section');
                if (coursesSection) {
                    coursesSection.scrollIntoView({ behavior: 'smooth' });
                }
            }
        });
    }

    // 4. Global Network & Offline State Listener
    const offlineBanner = document.getElementById('global-offline-banner');
    const slowNetworkBanner = document.getElementById('global-slow-network-banner');

    function updateNetworkStatus() {
        if (!navigator.onLine) {
            if (offlineBanner) offlineBanner.style.display = 'block';
            if (slowNetworkBanner) slowNetworkBanner.style.display = 'none';
        } else {
            if (offlineBanner) offlineBanner.style.display = 'none';
            
            // Check for slow connection using Network Information API
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

    // Initial check
    updateNetworkStatus();
});
