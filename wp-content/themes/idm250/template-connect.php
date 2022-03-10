<?php
/* Template Name: connect */
?>

<?php get_header('connect'); ?>

this is a custom connect template.

<?php while (have_posts()) : the_post(); ?>
<div class="content" style="">
    <h1 class="" style="width: 300px;"><?php the_title(); ?> </h1>

    <?php the_post_thumbnail(); ?>

    <div class="">
        <?php the_content(); ?>
    </div>
</div>
<?php endwhile; ?>


<?php get_footer(); ?>