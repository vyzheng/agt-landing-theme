<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syllabus Section Preview</title>
    <link rel="stylesheet" href="syllabus-styles.css">
    <script>
        function toggleChapter(header) {
            const chapterItem = header.parentElement;
            chapterItem.classList.toggle('active');
        }

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
    </script>
</head>
<body>
    <!-- Syllabus Section -->
    <section class="syllabus-section">
        <div class="syllabus-container">
            <div class="syllabus-header">
                <h2 class="syllabus-title">Flagship Course Curriculum</h2>
                <p class="syllabus-subtitle">
                    Get both Master Strategizer + Master Storyteller. Click any chapter to explore lessons and see exactly what you'll learn.
                </p>
            </div>

            <!-- Master Strategizer Course -->
            <div class="course-block">
                <div class="course-header">
                    <span class="course-badge strategizer-badge">Part 1 of Flagship</span>
                    <h3 class="course-title">Master Strategizer</h3>
                    <p class="course-description">
                        Learn how every part of your application is evaluated. Build a clear personal brand and plan a winning strategy that leverages your strengths.
                    </p>
                </div>

                <div class="chapters-list">
                    <?php
                    // Master Strategizer chapters data
                    $strategizer_chapters = [
                        [
                            'number' => 1,
                            'type' => 'theory-chapter',
                            'title' => 'Game Theory A',
                            'subtitle' => 'Why perfect students fail and how Ivies think like VCs, not Fortune 500s',
                            'lessons' => [
                                [
                                    'number' => 1,
                                    'title' => 'Meet the players',
                                    'description' => 'Until you understand why Ivies act the way they do, the entire college application process will continue to feel rigged—against you.'
                                ],
                                [
                                    'number' => 2,
                                    'title' => 'How Ivies get scored by U.S. news: ranking demystified',
                                    'description' => 'Ivy colleges are chasing things you\'ll never find on your transcript—and if you don\'t know what they are, you\'re falling behind.'
                                ],
                                [
                                    'number' => 3,
                                    'title' => 'Why perfect students fail: Ivies think like VCs, not Fortune 500s',
                                    'description' => 'Think of your application as a pitch deck. Are you playing it safe or showing signs of breakout success?'
                                ],
                                [
                                    'number' => 4,
                                    'title' => 'College admissions is a signaling game',
                                    'description' => 'You\'re judged on how well you signal your potential—not just what you\'ve done.'
                                ]
                            ]
                        ],
                        [
                            'number' => 2,
                            'type' => 'theory-chapter',
                            'title' => 'Game Theory B',
                            'subtitle' => 'The hidden 1-5 scoring system that determines everything',
                            'lessons' => null // Placeholder for future content
                        ],
                        [
                            'number' => 7,
                            'type' => 'ec-chapter',
                            'title' => 'EC Research & Internships',
                            'subtitle' => 'What separates high-impact work from résumé filler',
                            'hidden' => true,
                            'lessons' => null // Placeholder for future content
                        ]
                    ];

                    // Render strategizer chapters
                    foreach ($strategizer_chapters as $chapter) {
                        $hiddenClass = isset($chapter['hidden']) && $chapter['hidden'] ? 'hidden strategizer-hidden' : '';
                        ?>
                        <div class="chapter-item <?php echo $chapter['type']; ?> <?php echo $hiddenClass; ?>">
                            <div class="chapter-header" onclick="toggleChapter(this)">
                                <div class="chapter-number"><?php echo $chapter['number']; ?></div>
                                <div class="chapter-info">
                                    <h4 class="chapter-title"><?php echo htmlspecialchars($chapter['title']); ?></h4>
                                    <p class="chapter-subtitle"><?php echo htmlspecialchars($chapter['subtitle']); ?></p>
                                </div>
                                <div class="chapter-toggle">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <polyline points="6 9 12 15 18 9"></polyline>
                                    </svg>
                                </div>
                            </div>
                            <div class="chapter-content">
                                <div class="chapter-inner">
                                    <div class="lessons-list">
                                        <?php if ($chapter['lessons']) : ?>
                                            <?php foreach ($chapter['lessons'] as $lesson) : ?>
                                                <div class="lesson-item">
                                                    <div class="lesson-header">
                                                        <span class="lesson-number">Lesson <?php echo $lesson['number']; ?></span>
                                                        <div class="lesson-content">
                                                            <h5 class="lesson-title"><?php echo htmlspecialchars($lesson['title']); ?></h5>
                                                            <p class="lesson-description"><?php echo htmlspecialchars($lesson['description']); ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        <?php else : ?>
                                            <p style="padding: 20px; color: #6b7280; font-style: italic;">Full lesson content coming soon...</p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>

                <button class="show-more-button" onclick="toggleStrategizerChapters()">Show All 14 Chapters</button>

                <!-- Course CTA -->
                <div class="course-cta-section">
                    <a href="#" class="cta-preview">Also available individually for $399 →</a>
                </div>
            </div>

            <!-- Bundle Divider -->
            <div class="bundle-divider">
                <div class="divider-line"></div>
                <span class="divider-text">both included in flagship</span>
            </div>

            <!-- Master Storyteller Course -->
            <div class="course-block">
                <div class="course-header">
                    <span class="course-badge storyteller-badge">Part 2 of Flagship</span>
                    <h3 class="course-title">Master Storyteller</h3>
                    <p class="course-description">
                        Craft compelling essays that win over admission officers. Discover the hidden grading rubric and master the winning frameworks for each prompt.
                    </p>
                </div>

                <div class="chapters-list">
                    <?php
                    // Master Storyteller chapters data
                    $storyteller_chapters = [
                        [
                            'number' => 15,
                            'title' => 'Essay Principles',
                            'subtitle' => 'The outsized role essays play and the secret to writing successful college essays',
                            'lessons' => [
                                [
                                    'number' => 1,
                                    'title' => 'Essays can make or break your most important application rating',
                                    'description' => 'Before handing in your application, make sure your essay can boost your application'
                                ],
                                [
                                    'number' => 2,
                                    'title' => 'Why most clever essays fail',
                                    'description' => 'Don\'t prioritize style over substance—it\'s a trap, but we have the solution'
                                ],
                                [
                                    'number' => 3,
                                    'title' => 'Why college essays are similar to marketing',
                                    'description' => 'Understand the first principles of marketing to get admissions officers\' buy-in quickly'
                                ],
                                [
                                    'number' => 4,
                                    'title' => 'How to be authentic, memorable and effective',
                                    'description' => 'Learn the proven 5-step framework to write essays that win over admissions officers'
                                ]
                            ]
                        ],
                        [
                            'number' => 16,
                            'title' => 'Essay 1A: Background or Identity',
                            'subtitle' => 'Turn your background into a powerful admissions-worthy story with specific problems and real impact',
                            'samples' => [
                                [
                                    'number' => 1,
                                    'title' => 'Don\'t just describe the problem, show how you solved it',
                                    'description' => 'Focus on action—not just adversity, to turn your background into a powerful admissions-worthy story.'
                                ],
                                [
                                    'number' => 2,
                                    'title' => 'How to fail immediately: skip the problem, gloss over the impact',
                                    'description' => 'Without specificity, a good story can fall short. Be clear about your why, what, and how.'
                                ],
                                [
                                    'number' => 3,
                                    'title' => 'How to fail immediately: Use broad judgments and sweeping generalizations',
                                    'description' => 'Big-picture reflections without a clear problem or real action make your essay sound smart—but forgettable'
                                ]
                            ],
                            'summary' => 'From lived experience to winning essay: Vague stories and philosophical reflections won\'t cut it. Specific problems and real-world impact win any day.'
                        ],
                        [
                            'number' => 20,
                            'title' => 'Essay 4: Expressing Gratitude',
                            'subtitle' => 'Focus on your growth, not just kindness—admission officers want to see transformation',
                            'hidden' => true,
                            'lessons' => null
                        ]
                    ];

                    // Render storyteller chapters
                    foreach ($storyteller_chapters as $chapter) {
                        $hiddenClass = isset($chapter['hidden']) && $chapter['hidden'] ? 'hidden storyteller-hidden' : '';
                        ?>
                        <div class="chapter-item <?php echo $hiddenClass; ?>">
                            <div class="chapter-header" onclick="toggleChapter(this)">
                                <div class="chapter-number"><?php echo $chapter['number']; ?></div>
                                <div class="chapter-info">
                                    <h4 class="chapter-title"><?php echo htmlspecialchars($chapter['title']); ?></h4>
                                    <p class="chapter-subtitle"><?php echo htmlspecialchars($chapter['subtitle']); ?></p>
                                </div>
                                <div class="chapter-toggle">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <polyline points="6 9 12 15 18 9"></polyline>
                                    </svg>
                                </div>
                            </div>
                            <div class="chapter-content">
                                <div class="chapter-inner">
                                    <div class="lessons-list">
                                        <?php if (isset($chapter['lessons']) && $chapter['lessons']) : ?>
                                            <?php foreach ($chapter['lessons'] as $lesson) : ?>
                                                <div class="lesson-item">
                                                    <div class="lesson-header">
                                                        <span class="lesson-number">Lesson <?php echo $lesson['number']; ?></span>
                                                        <div class="lesson-content">
                                                            <h5 class="lesson-title"><?php echo htmlspecialchars($lesson['title']); ?></h5>
                                                            <p class="lesson-description"><?php echo htmlspecialchars($lesson['description']); ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        <?php elseif (isset($chapter['samples'])) : ?>
                                            <?php foreach ($chapter['samples'] as $sample) : ?>
                                                <div class="lesson-item">
                                                    <div class="lesson-header">
                                                        <span class="lesson-number">Sample <?php echo $sample['number']; ?></span>
                                                        <div class="lesson-content">
                                                            <h5 class="lesson-title"><?php echo htmlspecialchars($sample['title']); ?></h5>
                                                            <p class="lesson-description"><?php echo htmlspecialchars($sample['description']); ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        <?php else : ?>
                                            <p style="padding: 20px; color: #6b7280; font-style: italic;">Full lesson content coming soon...</p>
                                        <?php endif; ?>
                                    </div>
                                    <?php if (isset($chapter['summary'])) : ?>
                                        <div class="chapter-summary">
                                            <div class="summary-label">Summary</div>
                                            <div class="summary-text"><?php echo htmlspecialchars($chapter['summary']); ?></div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>

                <button class="show-more-button" onclick="toggleStorytellerChapters()">Show All 8 Chapters</button>

                <!-- Course CTA -->
                <div class="course-cta-section">
                    <a href="#" class="cta-preview">Also available individually for $399 →</a>
                </div>
            </div>
        </div>
    </section>
</body>
</html>