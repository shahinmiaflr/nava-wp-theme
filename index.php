<?php get_header(); ?>
            
    <div class="dest-area">
        <div class="container">
            <?php get_template_part('destbar'); ?>
        </div>
    <section class="content-section-area">
        <div class="container">
            
                
                    <?php while(have_posts()): the_post(); ?>
                
                        <?php the_post_thumbnail(); ?>
                        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                        <?php the_excerpt(); ?>
                    
                    
                
                    <?php endwhile; ?>
            
        </div>
    </section>
    <div class="container">
        <?php 
            $myown_projects = new WP_Query(array(
                
                'post_type' => 'myprojects'
            ));
        
            if($myown_projects->have_posts()): while($myown_projects->have_posts()): 
            $myown_projects->the_post();
        ?>
        
       <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
       <h1><?php the_content(); ?></h1>
        
        <?php endwhile; endif; ?>
    </div>
   <?php get_template_part('footerwigetarea'); ?>
    
    <?php get_footer(); ?>