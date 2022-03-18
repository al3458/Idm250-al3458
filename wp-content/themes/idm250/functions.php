<?php
// Check Server PHP Version

// echo '<pre>';
// var_dump(phpversion());
// echo '</pre>';

if (version_compare('5', phpversion(), '>')) {
    die('You must be using PHP 5 or greater.');
}

if (version_compare($GLOBALS['wp_version'], '5.4.2', '<')) {
    die('WP theme only work in WordPress 5.4.2 or later. Please upgrade your WP site');
}

//Check WP Version



require get_template_directory() . '/includes/required.php';

/**
 * Theme initialization
 */
require get_template_directory() . '/includes/setup.php';

/**
 * Custom Post Types
 */
require get_template_directory() . '/includes/post-types.php';

/**
 * Custom Taxonomies
 */
require get_template_directory() . '/includes/taxonomies.php';
/**
 * Helper functions
 */
require get_template_directory() . '/includes/helpers.php';

?>