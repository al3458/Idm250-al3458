<?php
/* Template Name: project detail */
?>

<?php get_header('detail'); ?>


<?php while (have_posts()) : the_post(); ?>
<div class="content" style="">

    <a class="return" href="https://andrewlenehan.com/idm-250/portfolio/">Go Back</a>

    <div class="title">
    <h1 id="mainTitle" style=""><?php the_title(); ?> </h1>
    </div>

    

    <div class="all">
        <?php the_content(); ?>
    </div>
</div>
<?php endwhile; ?>


<?php get_footer(); ?>