<?php get_header();?>

<main class="container">
    <h1><?php the_title();?></h1>

    <?php get_template_part('includes/section', 'blogcontent');?>

</main>

<?php get_footer();?>