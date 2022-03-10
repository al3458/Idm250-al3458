<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/dist/styles/header-home-css.css' ?>">


    <?php
    //always put wp_head() just before the closing tag of your theme
    wp_head();
    ?>

    

</head>
<body>
<div class="main">
        <img src="https://andrewlenehan.com/idm-250/wp-content/uploads/2022/01/logo.png" alt="brandLogo" style="width: 100px; height: 70px; position: fixed; margin: 1%;">
        <div id="one">
            <a id="hme" href="javascript:void(0)">Home <hr style="width: 140px; border: 1px solid white;"> <p id="onep">Welcome to the website of Andrew Lenehan, User Experience Designer</p></a>
            
        </div>

        <div id="two" onmouseover="myFunction()" onmouseout="myThirdFunction()">
            <a id="cs" href="https://andrewlenehan.com/idm-250/portfolio/">Portfolio<hr style="width: 140px; border: 1px solid white;"> <p id="onep">See my thought process and progress on different projects</p></a>
        </div>

        <div id="three" onmouseover="myFunction2()" onmouseout="myThirdFunction2()">
            <a id="rsm" href="https://andrewlenehan.com/idm-250/resume/">Resume <hr style="width: 140px; border: 1px solid white;"> <p id="onep">Check my qualifications and see what I have to offer</p></a>
        </div>

        <div id="four" onmouseover="myFunction3()" onmouseout="myThirdFunction3()">
            <a id="cn" href="https://andrewlenehan.com/idm-250/connect/">Connect <hr style="width: 140px; border: 1px solid white;"> <p id="onep">Connect with me and start something great</p></a>
        </div>
    </div>
    <!-- <img src="https://andrewlenehan.com/idm-250/wp-content/uploads/2022/01/logo.png" alt="logo" style="width: 100px; height: 70px; position: fixed; margin: 1%;"> -->
    <?php
    // registered this menu in functions.php via register_theme_sidebar()
    wp_nav_menu(['theme_location' => 'primary_menu']);
?>
