<?php
/* Template Name: search */
?>


<?php get_header(); ?>

this is a custom search template.

<?php while (have_posts()) : the_post(); ?>
<div class="" style="">
    <h1 class="" style="width: 300px;"><?php the_title(); ?> </h1>

    <?php the_post_thumbnail(); ?>

    <div class="" style="width: 80%; margin:auto; line-height: 1.5; font-size:24px;">
        <?php the_content(); ?>
    </div>
</div>
<?php endwhile; ?>


<?php get_footer(); ?>