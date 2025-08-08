// Toggle testimonial letter function
function toggleLetter(button) {
    const fullLetter = button.closest('.full-letter');
    const letterContent = fullLetter.querySelector('.letter-content');
    const isExpanded = button.classList.contains('expanded');
    
    if (isExpanded) {
        fullLetter.classList.remove('show');
        button.classList.remove('expanded');
        button.innerHTML = `
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <polyline points="6 9 12 15 18 9"></polyline>
            </svg>
            Expand to read the full thank you letter
        `;
    } else {
        fullLetter.classList.add('show');
        button.classList.add('expanded');
        button.innerHTML = `
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <polyline points="6 9 12 15 18 9"></polyline>
            </svg>
            Collapse
        `;
    }
}

// Optional: Add smooth scroll when expanding
document.addEventListener('DOMContentLoaded', function() {
    // You can add any initialization code here if needed
});