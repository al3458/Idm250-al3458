<?php
/* Template Name: resume */
?>

<?php get_header('resume'); ?>

resume

<?php while (have_posts()) : the_post(); ?>
<div class="content" style="">
    <h1 class="" style=""><?php the_title(); ?> </h1>

    <?php the_post_thumbnail(); ?>

    <div class="">
        <?php the_content(); ?>
    </div>
</div>
<?php endwhile; ?>


<?php get_footer(); ?>