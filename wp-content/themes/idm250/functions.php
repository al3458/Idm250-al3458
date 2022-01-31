<?php

if (version_compare('5', phpversion(), '>')) {
    die('You must be using PHP 5 or greater.');
}

if (version_compare($GLOBALS['wp_version'], '5.4.2', '<')) {
    die('WP theme only work in WordPress 5.4.2 or later. Please upgrade your WP site');
}


function include_styles()
{
    //example of including an external link
    wp_enqueue_style('unique id or name like google-fonts', 'url to the file');

    //example of including a style local to your theme root
    wp_enqueue_style('idm250-css', get_template_directory_uri() . '/dist/styles/main.css');
}

// when wp perfoms this action, call our function
add_action('wp_enqueue_scripts', 'include_styles');


/**
 * include any scripts into the site the proper way
 */

 function include_js_files() {
     wp_enqueue_script('idm250-js', get_template_directory_uri() . '/dist/scripts/main.js', 
    [],
    false, 
    true); 
 }

 // when wp performs this action, call our function
 add_action('wp_enqueue_scripts', 'include_js_files');

 /**
  * 
  * @link https://developer.wordpress.org/reference/functions/register_nav_menus/
  * @return void
  */

  function register_theme_navigation()
  {
      register_nav_menus([
          'primary_menu' => 'Primary Menu',
          'footer_menu' => 'Footer Menu',
      ]);
  }

  add_action('after_setup_theme', 'register_theme_navigation');