<?php get_header();
//Template name:Bez containeru ?>
     <?php while ( have_posts() ) : the_post(); ?>
            <h1 id="nahoru"><?php the_title(); ?></h1>
           
            

            <?php the_content(); ?>
        <?php endwhile; ?>
       
    
<?php get_footer(); ?>