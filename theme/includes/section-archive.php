<?php if( have_posts() ): while( have_posts()): the_post(); ?>

    <section class="card mb-1 mt-2" >
        <a href="<?php the_permalink(); ?>" class="card-body"> 
            <h2><?php the_title();?></h2>
            <?php the_excerpt(); ?> 
            <div class="btn btn-success">Read more</div>
        </a>
    </section>

<?php endwhile; else: endif;?>