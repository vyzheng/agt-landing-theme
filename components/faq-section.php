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
        'question' => 'How is this different from a $X0K counselor?',
        'answer' => '<p>AGT teaches you <strong>how the system works</strong>—not just what to do. While consultants hand you polished plans (often recycled templates), we teach you to think strategically.</p>
                     <p>Plus: 95% less cost, fully on-demand, and you keep control of your narrative.</p>'
    ],
    [
        'question' => 'I\'m a senior. Is it too late?',
        'answer' => '<p><strong>Not at all.</strong> Your first reader spends just 10-15 minutes on your application. How you tell your story matters more than what you did.</p>
                     <p>AGT helps you focus on the right theme, structure your story clearly, and make every word count. Presentation is everything.</p>'
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
        'question' => 'I have other questions',
        'answer' => '<p>We stand behind the course because we know it works. No complicated terms, no hoops to jump through.</p>'
    ]
];

// Split FAQs into two columns
$left_column = array_slice($faqs, 0, 3);
$right_column = array_slice($faqs, 3, 3);
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

    </div>
</section>