<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/dist/styles/main.css' ?>">


    <?php
    //always put wp_head() just before the closing tag of your theme
    wp_head();
    ?>

    

</head>
<body>
    <img src="https://andrewlenehan.com/idm-250/wp-content/uploads/2022/01/logo.png" alt="logo" style="width: 100px; height: 70px; position: fixed; margin: 1%;">
    <?php
    // registered this menu in functions.php via register_theme_sidebar()
    wp_nav_menu(['theme_location' => 'primary_menu']);
?>
