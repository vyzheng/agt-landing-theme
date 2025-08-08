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
    // Load CSS files with versioning (based on file modified time)
    $css_files = array(
        'hero-section.css',
        //'research-section.css',
        'stakes-section.css',
        'solution-section.css',
        'testimonials-section.css',
        'courses-section.css',
        'about-me-section.css',
        'syllabus-section.css',
        'faq-section.css',
        'free-course-section.css',
        'guarantee-section.css',
        'final-unlock-section.css'
    );

    $css_dir = get_template_directory() . '/css/';
    $css_url = get_template_directory_uri() . '/css/';

    foreach ($css_files as $css) {
        $file_path = $css_dir . $css;
        $version = file_exists($file_path) ? filemtime($file_path) : time(); // fallback to current time if missing
        echo '<link rel="stylesheet" href="' . $css_url . $css . '?v=' . $version . '">' . "\n";
    }
    ?>
</head>
<body>
    <?php
    // Include all components
    $components = array(
        'hero-section.php',
        //'research-section.php',
        'stakes-section.php',
        'solution-section.php',
        'about-me-section.php',
        'ethan-testimonial-section.php',
        'yifei-testimonial-section.php',
        'courses-section.php',
        'syllabus-section.php',
        'guarantee-section.php',
        'faq-section.php',
        'free-course-section.php',
        'final-unlock-section.php'
    );

    foreach ($components as $component) {
        $file = get_template_directory() . '/components/' . $component;
        if (file_exists($file)) {
            include $file;
        }
    }
    ?>

    <!-- Load JS files with versioning -->
    <?php
    $js_files = array(
        'syllabus-section.js',
        'faq-section.js',
        'free-course-section.js'
    );

    $js_dir = get_template_directory() . '/js/';
    $js_url = get_template_directory_uri() . '/js/';

    foreach ($js_files as $js) {
        $file_path = $js_dir . $js;
        $version = file_exists($file_path) ? filemtime($file_path) : time();
        echo '<script src="' . $js_url . $js . '?v=' . $version . '"></script>' . "\n";
    }
    ?>
</body>
</html>
