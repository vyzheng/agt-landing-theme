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
        'content-section.css',
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
        'content-section.php',
        'testimonials-section.php',
        'courses-section.php',
        'instructor-section.php',
        'syllabus-section.php',
        'faq-section.php',
        'free-course-section.php',
        'guarantee-section.php',
        'post-syllabus-cta-section.php',
        'final-unlock-section.php'
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