<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
    //always put wp_head() just before the closing tag of your theme
    wp_head();
    ?>
</head>
<body>

<div class="main">
<?php get_header('home'); ?>
<?php get_footer(); ?>
</div>

</body>
</html>
