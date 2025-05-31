<?php get_header(); ?>

    <?php if(have_posts() ):
            while(have_posts() ): the_post(); ?>
                <h2><?php the_title(); ?></h2>
                <small>Posted on: <?php the_time('F j, Y')?> at <?php the_time('g:i A'); ?>, in <?php the_category();?></small>
                <p><?php the_content(); ?></p>
                <i><?php the_excerpt();?></i>
                <hr>
            <?php endwhile; ?>
    <?php endif;?>

<?php get_footer(); ?>