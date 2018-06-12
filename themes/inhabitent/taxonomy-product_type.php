<?php

/*
Template Name: product-types
*/

?>



<?php get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?> 
            <div class = "single-product">
            
            <div class = "product-image">
            <a href="<?php the_permalink(); ?>"  
            <?php get_template_part( 'template-parts/content', 'products' ); ?>
            </div> 

            <div class = "product-info">
             <?php the_title(); ?>..............$<?php echo CFS()->get( 'price' ); ?> </a>
            </div>
         </div>
            
   
     </div>
     <?php wp_reset_postdata(); ?>
     <?php endwhile; ?>
    
 
 
     <?php// endif; ?>
             
 
 
 </div>	
 
 <?php get_footer(); ?>