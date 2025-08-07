<?php
// Simple landing page theme
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admissions Game Theory</title>
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" type="image/png">
    <?php
    // Load CSS files
    $css_files = array(
        'hero-section.css',
        //'research-section.css',          // NEW: research-section.css
        'stakes-section.css',
        'solution-section.css',
        'testimonials-section.css',      // This CSS file covers both testimonial sections
        'courses-section.css',
        'about-me-section.css',
        'syllabus-section.css',
        'faq-section.css',
        'free-course-section.css',
        'guarantee-section.css',
        'post-syllabus-cta-section.php', // Decision CTA (after syllabus)
        'final-unlock-section.css'
    );
    
    foreach ($css_files as $css) {
        echo '<link rel="stylesheet" href="' . get_template_directory_uri() . '/css/' . $css . '">';
    }
    ?>
</head>
<body>
    <?php
    // Include all components
    $components = array(
        'hero-section.php',
        //'research-section.php',              // NEW: research-section.php
        'stakes-section.php',                  // Stakes Section
        'solution-section.php',                // Solution Section
        'about-me-section.php',                // Meet Your Instructor
        'ethan-testimonial-section.php',       // Ethan's Success Story (Student)
        'yifei-testimonial-section.php',       // Yifei's Success Story (Parent)
        'courses-section.php',                 // Choose Your Course (pricing)
        'syllabus-section.php',                // Flagship Course Curriculum
        'post-syllabus-cta-section.php',       // Decision CTA (after syllabus)
        'guarantee-section.php',               // 100% Money-Back Guarantee
        'faq-section.php',                     // FAQ
        'free-course-section.php',             // Free 7-Day Email Course
        'final-unlock-section.php'             // Final Unlock CTA
    );
    
    foreach ($components as $component) {
        $file = get_template_directory() . '/components/' . $component;
        if (file_exists($file)) {
            include $file;
        }
    }
    ?>
    
    <!-- Load JS files -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/syllabus-section.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/faq-section.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/free-course-section.js"></script>
</body>
</html>