<?php
// FAQ data array
$faqs = [
    [
        'question' => 'How is AGT different from other courses?',
        'answer' => '<p>Three key differences:</p>
                     <p><strong>1. Real data:</strong> Insights from 150,000 Harvard applications, not guesswork.</p>
                     <p><strong>2. First principles:</strong> See exactly how applications are scored across all categories.</p>
                     <p><strong>3. Not one-size-fits-all:</strong> Learn frameworks to evaluate what works—then build something unmistakably you.</p>'
    ],
    [
        'question' => 'How is this different from a $15K counselor?',
        'answer' => '<p>AGT teaches you <strong>how the system works</strong>—not just what to do. While consultants hand you polished plans (often recycled templates), we teach you to think strategically.</p>
                     <p>Plus: 95% less cost, fully on-demand, and you keep control of your narrative.</p>'
    ],
    [
        'question' => 'I\'m a senior. Is it too late?',
        'answer' => '<p><strong>Not at all.</strong> Your first reader spends just 10-15 minutes on your application. How you tell your story matters more than what you did.</p>
                     <p>AGT helps you focus on the right theme, structure your story clearly, and make every word count. Presentation is everything.</p>'
    ],
    [
        'question' => 'Why Flagship over just Storyteller?',
        'answer' => '<p>Great storytelling starts <strong>before you write</strong>. You need to choose the right prompt, pick the right story, and understand how your overall profile reads.</p>
                     <p>Master Strategizer helps every part of your application work together—from activities list to recommenders. Don\'t just write well; make everything count.</p>'
    ],
    [
        'question' => 'My child hasn\'t started high school. Too early?',
        'answer' => '<p><strong>This is actually the perfect time.</strong> When you understand the game early, you don\'t play catch-up later.</p>
                     <p>Instead of signing up for every activity, you\'ll know what matters and why. By removing guesswork, you remove stresswork—building confidence and clear direction from day one.</p>'
    ],
    [
        'question' => 'How much time does this take?',
        'answer' => '<p><strong>2-3 hours per week</strong> at your own pace. No year-long contracts or slow weekly workshops.</p>
                     <p>You can blitz through it on a weekend or pace it over months. More importantly, AGT saves you time by showing exactly where to focus your efforts.</p>'
    ],
    [
        'question' => 'Will I get 1-1 support?',
        'answer' => '<p>AGT is designed for self-motivated students who want to learn and apply strategies independently.</p>
                     <p>If you need personalized support—picking activities, refining essays, or pressure-testing your narrative—you can <a href="https://calendly.com/admissionsgametheory" target="_blank" style="color: #667eea; text-decoration: underline;">book 1-on-1 sessions with Dr. Vivian</a> à la carte.</p>'
    ],
    [
        'question' => 'How does the 100% satisfaction guarantee work?',
        'answer' => '<p><strong>Simple:</strong> Complete the core modules within 7 days—if you\'re not satisfied, email us for a full refund.</p>
                     <p>We stand behind the course because we know it works. No complicated terms, no hoops to jump through.</p>'
    ]
];

// Split FAQs into two columns
$left_column = array_slice($faqs, 0, 4);
$right_column = array_slice($faqs, 4, 4);
?>

<!-- FAQ Section -->
<section class="faq-section" id="faq">
    <div class="faq-container">
        <div class="faq-header">
            <h2 class="faq-title">Frequently Asked Questions</h2>
            <p class="faq-subtitle">Quick answers to help you decide if AGT is right for your family</p>
        </div>

        <div class="faq-grid">
            <!-- Left Column -->
            <div class="faq-column">
                <?php foreach ($left_column as $index => $faq): ?>
                    <div class="faq-item">
                        <div class="faq-question" onclick="toggleFAQ(this)">
                            <span class="faq-question-text"><?php echo htmlspecialchars($faq['question']); ?></span>
                            <div class="faq-arrow">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="6 9 12 15 18 9"></polyline>
                                </svg>
                            </div>
                        </div>
                        <div class="faq-answer">
                            <div class="faq-answer-content">
                                <?php echo $faq['answer']; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Right Column -->
            <div class="faq-column">
                <?php foreach ($right_column as $index => $faq): ?>
                    <div class="faq-item">
                        <div class="faq-question" onclick="toggleFAQ(this)">
                            <span class="faq-question-text"><?php echo htmlspecialchars($faq['question']); ?></span>
                            <div class="faq-arrow">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="6 9 12 15 18 9"></polyline>
                                </svg>
                            </div>
                        </div>
                        <div class="faq-answer">
                            <div class="faq-answer-content">
                                <?php echo $faq['answer']; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="faq-footer">
            <p class="faq-footer-text">Still have questions?</p>
            <a href="mailto:support@admissionsgametheory.com" class="faq-footer-link">Email us at support@admissionsgametheory.com</a>
        </div>
    </div>
</section>