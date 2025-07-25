// Toggle chapter function
function toggleChapter(header) {
    const chapterItem = header.parentElement;
    chapterItem.classList.toggle('active');
}

// Toggle Strategizer chapters
function toggleStrategizerChapters() {
    const hiddenChapters = document.querySelectorAll('.strategizer-hidden');
    const button = event.target;
    
    hiddenChapters.forEach(chapter => {
        chapter.classList.toggle('hidden');
    });
    
    if (button.textContent === 'Show All 14 Chapters') {
        button.textContent = 'Show Less';
    } else {
        button.textContent = 'Show All 14 Chapters';
    }
}

// Toggle Storyteller chapters
function toggleStorytellerChapters() {
    const hiddenChapters = document.querySelectorAll('.storyteller-hidden');
    const button = event.target;
    
    hiddenChapters.forEach(chapter => {
        chapter.classList.toggle('hidden');
    });
    
    if (button.textContent === 'Show All 8 Chapters') {
        button.textContent = 'Show Less';
    } else {
        button.textContent = 'Show All 8 Chapters';
    }
}

// Smooth scroll to syllabus section when clicking course CTAs
document.addEventListener('DOMContentLoaded', function() {
    // Add smooth scroll behavior to any links pointing to #syllabus
    const syllabusLinks = document.querySelectorAll('a[href="#syllabus"]');
    syllabusLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const syllabusSection = document.querySelector('.syllabus-section');
            if (syllabusSection) {
                syllabusSection.scrollIntoView({ 
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
});