// Testimonial data
const testimonials = [
    {
        id: 1,
        title: "Student Success",
        headline: "From Self-Doubt to Columbia's Elite Rabi Scholar",
        badge: "🏆 I.I. Rabi Scholar",
        gradient: 'linear-gradient(135deg, #667eea 0%, #764ba2 100%)',
        emoji: '👨‍🎓',
        story: "Ethan was interviewed by Dr. Vivian as part of Columbia's official alumni interview program. Nervous and self-effacing, he downplayed his credentials. But Dr. Vivian saw a future scholar in the making. She wrote a glowing evaluation, and weeks later, Ethan wasn't just accepted—he was offered a spot in Columbia's I.I. Rabi Scholars Program, awarded to only ~10 freshmen per year.",
        quote: "I was accepted! Columbia offered me a spot in their I.I. Rabi Scholar Program. These students get funding to pursue their own research ideas, individualized advising, and even a lounge all to themselves!",
        author: "Ethan",
        role: "Columbia I.I. Rabi Scholar → Harvard PhD",
        outcome: ["Columbia I.I. Rabi Scholar", "Currently pursuing PhD in Chemistry at Harvard"]
    },
    {
        id: 2,
        title: "Parent Success",
        headline: "From Confusion to Clarity: A CEO's Journey",
        badge: "🎓 Caltech PhD",
        gradient: 'linear-gradient(135deg, #10b981 0%, #059669 100%)',
        emoji: '👨‍💼',
        story: "Yifei is a Caltech PhD and founder-CEO of Knitwise. Despite his academic success, he and his wife found themselves lost when planning their 5-year-old's path to college. The U.S. admissions system felt like a black box. Between running businesses and careers, they had no time for trial-and-error.",
        quote: "AGT took us from total noobs to surprisingly well-informed. For the first time, we understood how elite colleges actually evaluate applications. The $699 course was one of the highest-ROI purchases we've made as parents.",
        author: "Yifei",
        role: "Caltech PhD, CEO of Knitwise",
        outcome: ["Now confidently guiding son's education journey"]
    },
    {
        id: 3,
        title: "Family Balance",
        headline: "From Burnout to Balance: A Tech Family's Story",
        badge: "💻 Tech Leaders",
        gradient: 'linear-gradient(135deg, #f59e0b 0%, #d97706 100%)',
        emoji: '👩‍💻',
        story: "Yanli (TikTok manager) and her husband (Meta engineer) had their twins' calendar stacked in 30-minute blocks—academics, piano, swimming, Mandarin, chess, debate, robotics. Weeknights felt like war. The family was running on fumes, despite their best intentions.",
        quote: "AGT gave us permission to slow down. We now have our weeknights back. The girls have room to play and follow their curiosity. And we get to enjoy being a family again.",
        author: "Yanli",
        role: "Engineering Manager at TikTok",
        outcome: ["Family found sustainable balance and joy"]
    }
];

let currentSlideIndex = 0;
let autoPlayInterval;

function renderTestimonial(testimonial) {
    const testimonialContent = document.getElementById('testimonialContent');
    
    const outcomeHTML = testimonial.outcome.map(line => `
        <p class="outcome-line">
            <span class="outcome-arrow">→</span>
            ${line}
        </p>
    `).join('');

    testimonialContent.innerHTML = `
        <div class="testimonial-text">
            <div class="testimonial-category">
                <div class="category-dot" style="background: ${testimonial.gradient}"></div>
                <span class="category-label">${testimonial.title}</span>
            </div>

            <h3 class="testimonial-headline">${testimonial.headline}</h3>

            <p class="testimonial-story">${testimonial.story}</p>

            <div class="testimonial-quote-card">
                <div class="quote-box">
                    <span class="quote-mark">"</span>
                    <p class="quote-text">${testimonial.quote}</p>
                    <span class="quote-mark-end">"</span>
                    <div class="quote-pointer"></div>
                </div>
            </div>

            <div class="testimonial-outcome">
                ${outcomeHTML}
            </div>
        </div>

        <div class="testimonial-profile">
            <div class="profile-inner" style="background: ${testimonial.gradient}">
                <div class="profile-pattern"></div>
                <div class="profile-emoji">${testimonial.emoji}</div>
                <div class="profile-info">
                    <h4 class="profile-name">${testimonial.author}</h4>
                    <p class="profile-role">${testimonial.role}</p>
                </div>
                <div class="profile-badge">${testimonial.badge}</div>
                <div class="profile-decoration"></div>
            </div>
        </div>
    `;
}

function updateNavigation() {
    const dots = document.querySelectorAll('.nav-dot');
    dots.forEach((dot, index) => {
        if (index === currentSlideIndex) {
            dot.classList.add('active');
        } else {
            dot.classList.remove('active');
        }
    });
    
    document.getElementById('currentSlide').textContent = currentSlideIndex + 1;
}

function goToSlide(index) {
    currentSlideIndex = index;
    renderTestimonial(testimonials[currentSlideIndex]);
    updateNavigation();
    resetAutoPlay();
}

function nextSlide() {
    currentSlideIndex = (currentSlideIndex + 1) % testimonials.length;
    renderTestimonial(testimonials[currentSlideIndex]);
    updateNavigation();
    resetAutoPlay();
}

function previousSlide() {
    currentSlideIndex = (currentSlideIndex - 1 + testimonials.length) % testimonials.length;
    renderTestimonial(testimonials[currentSlideIndex]);
    updateNavigation();
    resetAutoPlay();
}

function startAutoPlay() {
    autoPlayInterval = setInterval(nextSlide, 5000);
}

function stopAutoPlay() {
    clearInterval(autoPlayInterval);
}

function resetAutoPlay() {
    stopAutoPlay();
    startAutoPlay();
}

// Initialize testimonials when DOM is loaded
function initializeTestimonials() {
    const testimonialContent = document.getElementById('testimonialContent');
    if (testimonialContent) {
        renderTestimonial(testimonials[0]);
        updateNavigation();
        startAutoPlay();

        // Pause on hover
        const carousel = document.querySelector('.testimonial-carousel');
        if (carousel) {
            carousel.addEventListener('mouseenter', stopAutoPlay);
            carousel.addEventListener('mouseleave', startAutoPlay);
        }
    }
}

// Try multiple ways to ensure the DOM is ready
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initializeTestimonials);
} else {
    // DOM is already loaded
    initializeTestimonials();
}

// Also try when window fully loads (as backup)
window.addEventListener('load', initializeTestimonials);