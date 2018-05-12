<?php

/*
Template Name: products
*/

/**
 * The template for displaying home page.
 *
 * @package RED_Starter_Theme
 */

 
?>

<?php get_header();  ?>


<main id="shop-main" class="products-main" role="main">

			
        <?php
        $args = array( 'post_type' => 'products', 'order' => 'ASC', 'posts_per_page' => -1  );
        $products = new WP_Query( $args ); // instantiate our object
        ?>

        <?php if ( $products->have_posts() ) : ?>
        <?php while ( $products->have_posts() ) : $products->the_post(); ?>


        <div class = "single-product">

            
            <?php the_content(); ?>

            <div class = "product-info">

            <?php the_title(); ?>
            <?php echo CFS()->get( 'price' ); ?>

            </div> <!-- product-info -->

        </div> <!-- single-product -->  


    <?php endwhile; ?>

    <?php wp_reset_postdata(); ?>
    <?php else : ?>

        <h2>Nothing found!</h2>

    <?php endif; ?>
			


</main><!-- #main -->


		
		

		



		

	

<?php get_footer(); ?>