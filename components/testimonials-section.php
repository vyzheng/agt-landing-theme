<!-- Success Stories Section -->
<section class="testimonials-section" id="reviews">
    <div class="testimonials-container">
        <div class="testimonials-header">
            <h2 class="testimonials-title">Success Stories</h2>
            <p class="testimonials-subtitle">
                See how we help different families achieve their admissions goals
            </p>
        </div>

        <div class="testimonial-carousel">
            <div class="testimonial-content" id="testimonialContent">
                <!-- Content will be dynamically inserted here by JavaScript -->
            </div>

            <div class="carousel-navigation">
                <div class="nav-controls">
                    <button class="nav-arrow" onclick="previousSlide()">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="15 18 9 12 15 6"></polyline>
                        </svg>
                    </button>

                    <div class="nav-dots">
                        <button class="nav-dot active" onclick="goToSlide(0)"></button>
                        <button class="nav-dot" onclick="goToSlide(1)"></button>
                        <button class="nav-dot" onclick="goToSlide(2)"></button>
                    </div>

                    <button class="nav-arrow" onclick="nextSlide()">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </button>
                </div>

                <div class="slide-counter">
                    <span id="currentSlide">1</span> / 3
                </div>
            </div>
        </div>
    </div>
</section>