<?php if( have_posts() ): while( have_posts()): the_post(); ?>

    <?php 
    $fname = get_the_author_meta('first_name');
    $lname = get_the_author_meta('last_name');
    ?>
    <p> Written by: <?php echo $fname; ?> <?php echo $lname; ?> | Posted on: <?php echo get_the_date('l jS F, Y');?> </p>
    


    <?php the_content(); ?>


<?php endwhile; else: endif;?>