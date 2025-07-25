// Email signup handler
function handleEmailSignup(event) {
    event.preventDefault();
    
    const form = event.target;
    const emailInput = form.querySelector('.email-input');
    const button = form.querySelector('.signup-button');
    const email = emailInput.value;
    const originalButtonText = button.textContent;
    
    // Show loading state
    button.textContent = 'Sending...';
    button.disabled = true;
    
    // Simulate API call (replace with your actual email service integration)
    setTimeout(() => {
        // Here you would normally send the email to your backend
        // For example:
        // fetch('/api/subscribe', {
        //     method: 'POST',
        //     headers: { 'Content-Type': 'application/json' },
        //     body: JSON.stringify({ email: email, course: 'free-7-day' })
        // })
        
        // Show success message
        const successMessage = document.createElement('div');
        successMessage.className = 'form-success show';
        successMessage.textContent = `Success! Check ${email} for your first lesson.`;
        
        // Replace form with success message
        form.style.display = 'none';
        form.parentElement.insertBefore(successMessage, form.nextSibling);
        
        // Optional: Log to console for testing
        console.log('Email subscribed:', email);
        
        // Optional: Track conversion
        if (typeof gtag !== 'undefined') {
            gtag('event', 'sign_up', {
                'event_category': 'engagement',
                'event_label': 'free_course'
            });
        }
        
    }, 1000);
}

// Optional: Add email validation
function validateEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
}

// Optional: Show/hide form based on localStorage (if user already signed up)
document.addEventListener('DOMContentLoaded', function() {
    const hasSignedUp = localStorage.getItem('free_course_signup');
    if (hasSignedUp) {
        const form = document.querySelector('.email-signup-form');
        if (form) {
            form.innerHTML = '<p style="color: #10b981; font-weight: 600;">You\'re already enrolled in the free course!</p>';
        }
    }
});