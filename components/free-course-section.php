<?php
// Free course syllabus data
$syllabus_days = [
    [
        'day' => 1,
        'title' => 'Why do Ivy Leagues reject perfect students?',
        'description' => 'Colleges think like VCs—you should too!'
    ],
    [
        'day' => 2,
        'title' => 'How Harvard really grades your application',
        'description' => 'The 1-5 scale that decides everything'
    ],
    [
        'day' => 3,
        'title' => 'You\'re studying too much and it\'s hurting your chances',
        'description' => 'Top grades get you considered, not selected'
    ],
    [
        'day' => 4,
        'title' => 'Why most ECs don\'t work',
        'description' => 'You need 1 activity that moves the needle, not 10'
    ],
    [
        'day' => 5,
        'title' => 'Why trying to be the next Eileen Gu could hurt your application',
        'description' => 'Sports could drag you down. Here\'s what to do instead'
    ],
    [
        'day' => 6,
        'title' => 'Don\'t copy that "successful" essay—here\'s why',
        'description' => 'Viral essays prioritize style over substance, which could hurt your personal score'
    ],
    [
        'day' => 7,
        'title' => 'You\'ve Learned the Game. Now Play to Win.',
        'description' => 'Stop guessing, start strategizing'
    ]
];
?>

<!-- Free Email Course Section -->
<section class="free-course-section" id="free-course">
    <div class="free-course-container">
        <div class="free-course-header">
            <div class="free-course-badge">
                <span>📧</span>
                Still not sure?
            </div>
            <h2 class="free-course-title">Free 7-Day Email Course</h2>
            <p class="free-course-subtitle">
                Discover the hidden admissions strategies from 150,000 Harvard applications—delivered daily to your inbox
            </p>
        </div>

<div class="_form_1"></div><script src="https://vivianzhengmedium88426.activehosted.com/f/embed.php?id=1&v=9" charset="utf-8"></script>

        <div class="syllabus-preview">
            <h3 class="syllabus-preview-title">What You'll Learn</h3>
            
            <div class="syllabus-days">
                <?php foreach ($syllabus_days as $day): ?>
                    <div class="syllabus-day">
                        <div class="day-number"><?php echo $day['day']; ?></div>
                        <div class="day-content">
                            <h4 class="day-title"><?php echo htmlspecialchars($day['title']); ?></h4>
                            <p class="day-description"><?php echo htmlspecialchars($day['description']); ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>