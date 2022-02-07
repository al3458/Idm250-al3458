<?php
/* Template Name: Narrow */
?>

<?php get_header(); ?>

this is a custom narrow template.

<?php while (have_posts()) : the_post(); ?>
<div class="" style="width: 300px;">
    <h1 class="" style="width: 300px;"><?php the_title(); ?> </h1>

    <?php the_post_thumbnail(); ?>

    <div class="">
        <?php the_content(); ?>
    </div>
</div>
<?php endwhile; ?>


<?php get_footer(); ?>