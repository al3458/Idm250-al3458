<?php
/* Template Name: Portfolio */
?>

<?php get_header('portfolio'); ?>


<?php while (have_posts()) : the_post(); ?>
<div class="content" style="">

    <div class="title">
    <h1 id="mainTitle" style=""><?php the_title(); ?> </h1>
    </div>

    <?php the_post_thumbnail(); ?>

    <div class="">
        <?php the_content(); ?>
    </div>

    <div class="main">
        <div class="one">
            <img class="block-image" src="https://andrewlenehan.com/idm-250/wp-content/uploads/2022/03/happysunshine.png" alt="happysunshineStudy">
            <div class="p1">
                <p>This case study highlights my work on the Happy Sunshine food truck application. This final product is fully functional on desktop and mobile! <br>
                <a target="blank" href="https://andrewlenehan.com/idm-216/">Click here to see it!</a></p>
            </div>

        </div>

        <div class="two">
            <div class="p2">
                <p>This case study shows my process from start to finish on improvements made to the Youtube subscriber notification bell. <br>
                <a href="https://andrewlenehan.com/idm-250/project-detail/">Click here to see it!</a></p>
            </div>
            <img class="block-image" src="https://andrewlenehan.com/idm-250/wp-content/uploads/2022/03/youtubeBell.png" alt="YoutubeBellStudy">

        </div>

        <div class="three">
            <img class="block-image" src="https://andrewlenehan.com/idm-250/wp-content/uploads/2022/03/MarvelZodiac.png" alt="ZodiacProject">
            <div class="p3">
                <p>This project is a Marvel Zodiac project. Input your birthday to see which Avenger you are or choose one yourself! <br>
                <a target="blank" href="https://andrewlenehan.com/idm-231--/">Click here to see it!</a></p>
            </div>
            
        </div>
    </div>
</div>
<?php endwhile; ?>


<?php get_footer(); ?>