<?php
/* Template Name: search */
?>



<?php get_header('resume'); ?>

this is a custom search template.

<?php 

    $search_word = $_GET['s'];
    $post_type = $_GET['post_type'];

    $args = [
        's' => $search_word,
        'post_type' => $post_type,
    ]


    $search_query = new WP_Query($args)

?>

<h1>Search results for "<?php echo $search_word; ?>"</h1>

<?php while ($search_query->have_posts()) : $search_query->the_post();?>
<div class="works__column">
    <h2><a href="<?php the_permalink(); ?>"></a></h2>
</div>

<?php get_footer(); ?>