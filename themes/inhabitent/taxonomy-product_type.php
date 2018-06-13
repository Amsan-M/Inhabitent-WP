<?php

/*
Template for product categories
*/

?>

<?php get_header();  ?>

<div id="primary" class="content-area">
    
        <main id="main" class="site-main" role="main"> 


            <?php 
            $taxonomy = get_queried_object();?>
            <h1><?php echo  $taxonomy->name ;?></h1>

            <?php $description = term_description(); ?>
            <p> <?php echo $description ?> </p>
        

        </main> <!-- .main-->

    <div class = "products-gallery">

    <?php while ( have_posts() ) : the_post(); ?>
        
   
            <div class = "single-product">

                <div class = "product-image">

                    <a href="<?php the_permalink(); ?>"  
                    <?php the_content(); ?>

                </div> <!-- .product-image -->

                <div class = "product-info">
                        
                    <?php the_title(); ?>.........$<?php echo CFS()->get( 'price' ); ?> </a>
                        
                </div> <!-- .product-info -->
        
            </div> <!--.single-product-->
      

	<?php endwhile; // End of the loop. ?>
        
	

</div><!-- #primary -->
</div>   


		
<?php get_footer(); ?>