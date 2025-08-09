// Syllabus Dashboard JavaScript - Conflict-Free

// Toggle tab functionality
function toggleSyllabusDashTab(tabName) {
    // Hide all tab contents
    const tabContents = document.querySelectorAll('.syllabus-dash-tab-content');
    tabContents.forEach(tab => {
        tab.classList.remove('active');
    });
    
    // Remove active class from all tab buttons
    const tabButtons = document.querySelectorAll('.syllabus-dash-tab-button');
    tabButtons.forEach(button => {
        button.classList.remove('active');
    });
    
    // Show selected tab content
    const selectedTab = document.getElementById('syllabus-dash-' + tabName);
    if (selectedTab) {
        selectedTab.classList.add('active');
    }
    
    // Add active class to clicked button
    if (event && event.target) {
        event.target.classList.add('active');
    }
}

// Toggle accordion functionality
function toggleSyllabusDashAccordion(element) {
    const accordion = element.closest('.syllabus-dash-accordion');
    const wasOpen = accordion.classList.contains('open');
    
    // Close all accordions in the same panel
    const panel = accordion.closest('.syllabus-dash-course-panel');
    panel.querySelectorAll('.syllabus-dash-accordion.open').forEach(acc => {
        acc.classList.remove('open');
    });
    
    // Toggle the clicked accordion
    if (!wasOpen) {
        accordion.classList.add('open');
    }
}

// Initialize progress rings
function updateSyllabusDashProgressRing(percent, selector) {
    const ring = document.querySelector(selector);
    if (ring) {
        const radius = 32;
        const circumference = 2 * Math.PI * radius;
        const offset = circumference - (percent / 100) * circumference;
        ring.style.strokeDashoffset = offset;
    }
}

// Update navigation active state
function updateSyllabusDashActiveNav(navItem) {
    // Remove active class from all nav items
    document.querySelectorAll('.syllabus-dash-nav-item').forEach(item => {
        item.classList.remove('active');
    });
    
    // Add active class to clicked item
    navItem.classList.add('active');
}

// Update overall progress
function updateSyllabusDashProgress() {
    const totalLessons = document.querySelectorAll('.syllabus-dash-completion-dot').length;
    const completedLessons = document.querySelectorAll('.syllabus-dash-completion-dot.completed').length;
    const progressPercent = Math.round((completedLessons / totalLessons) * 100);
    
    // Update progress bar
    const progressFill = document.querySelector('.syllabus-dash-progress-fill');
    if (progressFill) {
        progressFill.style.width = progressPercent + '%';
    }
    
    // Update stats
    const statBoxes = document.querySelectorAll('.syllabus-dash-stat-box');
    if (statBoxes.length >= 2) {
        const completeStatValue = statBoxes[0].querySelector('.syllabus-dash-stat-value');
        const toGoStatValue = statBoxes[1].querySelector('.syllabus-dash-stat-value');
        
        if (completeStatValue) {
            completeStatValue.textContent = completedLessons;
        }
        if (toGoStatValue) {
            toGoStatValue.textContent = totalLessons - completedLessons;
        }
    }
    
    // Update progress details text
    const progressDetails = document.querySelector('.syllabus-dash-progress-details');
    if (progressDetails) {
        const remainingHours = Math.round((totalLessons - completedLessons) * 0.22); // Assuming ~13min per lesson
        progressDetails.textContent = `${progressPercent}% complete • ${remainingHours}h remaining`;
    }
    
    // Update progress rings for each panel
    updateSyllabusDashProgressRing(progressPercent, '.syllabus-dash-strategizer-panel .syllabus-dash-progress-ring-fill');
    updateSyllabusDashProgressRing(progressPercent * 0.43, '.syllabus-dash-storyteller-panel .syllabus-dash-progress-ring-fill'); // Adjust for second panel
}

// Initialize on page load
document.addEventListener('DOMContentLoaded', function() {
    // Handle navigation clicks
    document.querySelectorAll('.syllabus-dash-nav-item').forEach(item => {
        item.addEventListener('click', function(e) {
            e.preventDefault();
            updateSyllabusDashActiveNav(this);
            
            // You can add logic here to scroll to specific chapters
            // or filter content based on the selected navigation item
        });
    });
    
    // Handle lesson completion toggle
    document.querySelectorAll('.syllabus-dash-completion-dot').forEach(dot => {
        dot.addEventListener('click', function(e) {
            e.stopPropagation();
            this.classList.toggle('completed');
            updateSyllabusDashProgress();
        });
    });
    
    // Handle Get Full Access button click
    const accessBtn = document.querySelector('.syllabus-dash-access-btn');
    if (accessBtn) {
        accessBtn.addEventListener('click', function(e) {
            // Add any tracking or analytics here if needed
            console.log('Get Full Access clicked - Syllabus Dashboard');
        });
    }
    
    // Set initial progress ring values
    updateSyllabusDashProgressRing(35, '.syllabus-dash-strategizer-panel .syllabus-dash-progress-ring-fill');
    updateSyllabusDashProgressRing(15, '.syllabus-dash-storyteller-panel .syllabus-dash-progress-ring-fill');
    
    // Initialize overall progress
    updateSyllabusDashProgress();
    
    // Add hover effect to lessons
    document.querySelectorAll('.syllabus-dash-lesson-entry').forEach(lesson => {
        lesson.addEventListener('mouseenter', function() {
            this.style.transform = 'translateX(4px)';
        });
        
        lesson.addEventListener('mouseleave', function() {
            this.style.transform = 'translateX(0)';
        });
    });
    
    // Handle badge animations
    const badges = document.querySelectorAll('.syllabus-dash-promo-badge');
    badges.forEach((badge, index) => {
        badge.style.animationDelay = `${index * 0.2}s`;
    });
});

// Export functions for use in PHP if needed
if (typeof module !== 'undefined' && module.exports) {
    module.exports = {
        toggleSyllabusDashAccordion,
        updateSyllabusDashProgressRing,
        updateSyllabusDashActiveNav,
        updateSyllabusDashProgress
    };
}