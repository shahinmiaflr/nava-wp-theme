<?php get_header(); ?>

<div class="content-area">
    <div class="container">
        
                <?php while( have_posts() ): the_post(); ?>
                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1><br>
                <?php the_post_thumbnail(); ?>
                <?php the_content(); ?>
                
            
            <?php endwhile; ?>
        
    </div>
</div>

<?php get_template_part( 'footerwigetarea' ); ?>
<?php get_footer(); ?>