<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/dist/styles/404.css' ?>">
    <title>Document</title>
    
    <?php
    //always put wp_head() just before the closing tag of your theme
    wp_head();
    ?>
</head>
<body>
    <div class="maindiv">
    <h1 class="numbers">404</h1>
    <h1 class="text">This page has spontaneously combusted...</h1>
    <h1 class="text">Just kidding, it never existed.</h1>
    <a href="">Go Back Home</a>
    </div>

</body>
</html>