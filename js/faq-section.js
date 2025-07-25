// Toggle FAQ function
function toggleFAQ(element) {
    const faqItem = element.parentElement;
    const allItems = document.querySelectorAll('.faq-item');
    
    // Close all other items
    allItems.forEach(item => {
        if (item !== faqItem && item.classList.contains('active')) {
            item.classList.remove('active');
        }
    });
    
    // Toggle current item
    faqItem.classList.toggle('active');
}

// Optional: Close FAQ when clicking outside
document.addEventListener('click', function(event) {
    const faqSection = document.querySelector('.faq-section');
    if (faqSection && !event.target.closest('.faq-item')) {
        document.querySelectorAll('.faq-item.active').forEach(item => {
            item.classList.remove('active');
        });
    }
});