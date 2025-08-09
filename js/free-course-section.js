// Free Course Section JavaScript

// Handle ActiveCampaign form customization after it loads
document.addEventListener('DOMContentLoaded', function() {
    // Wait for ActiveCampaign form to load
    setTimeout(function() {
        customizeActiveForm();
    }, 1000);
});

function customizeActiveForm() {
    // Find the form fields and add custom classes
    const form = document.querySelector('._form_1 form');
    if (form) {
        // Find name and email fields
        const fields = form.querySelectorAll('._field');
        if (fields.length >= 2) {
            fields[0].classList.add('_field-name');
            fields[1].classList.add('_field-email');
        }
        
        // Add unsubscribe note after submit button
        const submitButton = form.querySelector('button[type="submit"]');
        if (submitButton && !form.querySelector('.form-note')) {
            const note = document.createElement('p');
            note.className = 'form-note';
            note.textContent = 'Unsubscribe anytime';
            submitButton.parentNode.insertBefore(note, submitButton.nextSibling);
        }
    }
}

// Optional: Add calendar day click tracking
document.querySelectorAll('.calendar-day').forEach(function(day, index) {
    day.addEventListener('click', function() {
        // Track which day was clicked (for analytics)
        if (typeof gtag !== 'undefined') {
            gtag('event', 'calendar_day_click', {
                'event_category': 'engagement',
                'event_label': 'Day ' + (index + 1)
            });
        }
        
        // Optional: Add visual feedback
        this.style.transform = 'scale(0.98)';
        setTimeout(() => {
            this.style.transform = '';
        }, 200);
    });
});

// Handle instant access link click
const instantAccessLink = document.querySelector('.instant-access a');
if (instantAccessLink) {
    instantAccessLink.addEventListener('click', function(e) {
        // Track conversion intent
        if (typeof gtag !== 'undefined') {
            gtag('event', 'instant_access_click', {
                'event_category': 'conversion',
                'event_label': 'free_course_to_paid'
            });
        }
    });
}