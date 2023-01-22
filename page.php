<?php get_header(); ?>

    <section class="content-section-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php while(have_posts()): the_post(); ?>
                        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                        <?php the_content(); ?>
                    
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>