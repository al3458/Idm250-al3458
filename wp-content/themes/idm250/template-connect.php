<?php
/* Template Name: connect */
?>

<?php get_header('connect'); ?>

<?php while (have_posts()) : the_post(); ?>
<div class="content" style="">
    <div class="title">
    <h1 id="mainTitle" style=""><?php the_title(); ?> </h1>
    </div>

    <?php the_post_thumbnail(); ?>

    <div class="titledesc">
        <?php the_content(); ?>
    </div>

    <div id="socials">
            <div id="mail">
                <a id="noFloat1" href="mailto: al3458@drexel.edu" target="_blank"><img id="linkimg" src="https://andrewlenehan.com/idm-250/wp-content/uploads/2022/03/mail.svg" alt="mail_png"></a>
                <h2>Email</h2>
                <hr style="border: 1px solid white;">
                <a id="noFloat" href = "mailto: al3458@drexel.edu">al3458@drexel.edu</a>
            </div>

            <div id="instagram">
                <a id="noFloat1" href="https://andrewlenehan.com/idm-250/wp-content/uploads/2022/03/instagram.svg" target="_blank"><img id="linkimg2" src="https://andrewlenehan.com/idm-250/wp-content/uploads/2022/03/instagram.png" alt="instagram_png"></a>
                <h2>Instagram</h2>
                <hr style="border: 1px solid white;">
                <a id="noFloat" href="https://andrewlenehan.com/idm-250/wp-content/uploads/2022/03/instagram.svg">www.instagram.com/andrewjl2</a>
            </div>

            <div id="linkedin">
                <a id="noFloat1" href="https://andrewlenehan.com/idm-250/wp-content/uploads/2022/03/LinkedIn.svg" target="_blank"><img id="linkimg3" src="https://andrewlenehan.com/idm-250/wp-content/uploads/2022/03/LinkedIn.png" alt="linkedin_png"></a>
                <h2>LinkedIn</h2>
                <hr style="border: 1px solid white;">
                <a id="noFloat" href="https://andrewlenehan.com/idm-250/wp-content/uploads/2022/03/LinkedIn.svg">www.linkedin.com/in/andrew-lenehan-69414a1a1</a>
            </div>
        </div>
</div>
<?php endwhile; ?>


<?php get_footer(); ?>