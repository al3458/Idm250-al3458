<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/dist/styles/detail.css' ?>">


    <?php
    //always put wp_head() just before the closing tag of your theme
    wp_head();
    ?>

    

</head>
<body>
<?php
    // registered this menu in functions.php via register_theme_sidebar()
    // wp_nav_menu(['theme_location' => 'primary_menu']);
?>
    <div class="topnav">
        <div class="navbar">
            <div id="logo">
                <a id="imglink" href="https://andrewlenehan.com/idm-250/"><img src="https://andrewlenehan.com/idm-250/wp-content/uploads/2022/01/logo.png" alt="Brand Logo" style="width: 100px; height: 70px;"></a>
                <hr style="height: 60px; border: 1px solid white;">
                <div id="names">
                    <h2>Andrew Lenehan</h2>
                    <p>User Experience Designer</p>
                </div>
            </div>

            <nav role="navigation" class="nav">
                <a class="navlinks" href="https://andrewlenehan.com/idm-250/" style="max-width: 940px;">Home</a>
                <a class="navlinks" href="https://andrewlenehan.com/idm-250/portfolio/" style="max-width: 940px;">Portfolio</a>
                <a class="navlinks" href="https://andrewlenehan.com/idm-250/resume/" style="max-width: 940px;">Resume</a>
                <a class="navlinks" href="https://andrewlenehan.com/idm-250/connect/" style="max-width: 940px;">Connect</a>
            </nav>

            <div id="menuToggle">
                <svg id="mainB" class="ham ham3" viewBox="0 0 100 100" width="80" onclick="this.classList.toggle('active')">
                    <path
                          class="line top"
                          d="m 70,33 h -40 c -11.092231,0 11.883874,13.496726 -3.420361,12.956839 -0.962502,-2.089471 -2.222071,-3.282996 -4.545687,-3.282996 -2.323616,0 -5.113897,2.622752 -5.113897,7.071068 0,4.448316 2.080609,7.007933 5.555839,7.007933 2.401943,0 2.96769,-1.283974 4.166879,-3.282995 2.209342,0.273823 4.031294,1.642466 5.857227,-0.252538 v -13.005715 16.288404 h 7.653568" />
                    <path
                          class="line middle"
                          d="m 70,50 h -40 c -5.6862,0 -8.534259,5.373483 -8.534259,11.551069 0,7.187738 3.499166,10.922274 13.131984,10.922274 11.021777,0 7.022787,-15.773343 15.531095,-15.773343 3.268142,0 5.177031,-2.159429 5.177031,-6.7 0,-4.540571 -1.766442,-7.33533 -5.087851,-7.326157 -3.321409,0.0092 -5.771288,2.789632 -5.771288,7.326157 0,4.536525 2.478983,6.805271 5.771288,6.7" />
                    <path
                          class="line bottom"
                          d="m 70,67 h -40 c 0,0 -3.680675,0.737051 -3.660714,-3.517857 0.02541,-5.415597 3.391687,-10.357143 10.982142,-10.357143 4.048418,0 17.88928,0.178572 23.482143,0.178572 0,2.563604 2.451177,3.403635 4.642857,3.392857 2.19168,-0.01078 4.373905,-1.369814 4.375,-3.392857 0.0011,-2.023043 -1.924401,-2.589191 -4.553571,-4.107143 -2.62917,-1.517952 -4.196429,-1.799562 -4.196429,-3.660714 0,-1.861153 2.442181,-3.118811 4.196429,-3.035715 1.754248,0.0831 4.375,0.890841 4.375,3.125 2.628634,0 6.160714,0.267857 6.160714,0.267857 l -0.178571,-2.946428 10.178571,0 -10.178571,0 v 6.696428 l 8.928571,0 -8.928571,0 v 7.142858 l 10.178571,0 -10.178571,0" />
                  </svg>
    
                  <ul id="menu">
                    <a id="firstL" href="../../index.html"><li>Home</li></a>
                    <a href="case_studies.html"><li>Portfolio</li></a>
                    <a href="../resume/resume.html"><li>Resume</li></a>
                    <a href="../connect/connect.html"><li>Connect</li></a>
                    <li><img id="logomenu" src="../../images/logo.png" alt=""></li>
                  </ul>
            </div>
        </div>
    </div>