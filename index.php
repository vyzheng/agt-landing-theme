<?php
// Simple landing page theme
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admissions Game Theory</title>
    <?php
    // Load CSS files
    $css_files = array(
        'hero-section.css',
        'research-section.css',          // NEW: research-section.css
        'testimonials-section.css',
        'courses-section.css',
        'instructor-section.css',
        'syllabus-section.css',
        'faq-section.css',
        'free-course-section.css',
        'guarantee-section.css',
        'post-syllabus-cta-section.css',
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
        'research-section.php',          // NEW: research-section.php
        'instructor-section.php',        // Meet Your Instructor
        'testimonials-section.php',      // Success Stories (reviews)
        'courses-section.php',           // Choose Your Course (pricing)
        'syllabus-section.php',          // Flagship Course Curriculum
        'post-syllabus-cta-section.php', // Decision CTA (after syllabus)
        'guarantee-section.php',         // 100% Money-Back Guarantee
        'faq-section.php',               // FAQ
        'free-course-section.php',       // Free 7-Day Email Course
        'final-unlock-section.php'       // Final Unlock CTA
    );
    
    foreach ($components as $component) {
        $file = get_template_directory() . '/components/' . $component;
        if (file_exists($file)) {
            include $file;
        }
    }
    ?>
    
    <!-- Load JS files -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/testimonials-section.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/syllabus-section.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/faq-section.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/free-course-section.js"></script>
</body>
</html>