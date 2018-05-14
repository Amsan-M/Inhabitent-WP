<?php

/*
Template Name: eat category
*/

?>





<?php get_header();  ?>

<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
    </div><!-- #primary -->
    


<div class = "products">

<?php
$eatcategory = new WP_Query( array (
  'post_type' => 'products',
  'product_type'  => 'eat',
  'posts_per_page' => -1
) );

 if ( $eatcategory->have_posts() ) : ?>
        <?php while ( $eatcategory->have_posts() ) : $eatcategory->the_post(); ?>



        <div class = "single-product">


           <div class = "product-image">

                <a href="<?php the_permalink(); ?>"  
                <?php get_template_part( 'template-parts/content', 'single' ); ?>
           </div>

           <div class = "product-info">
                <?php the_title(); ?>
                <?php echo CFS()->get( 'price' ); ?> </a>
            </div>

        </div>
           


    <?php endwhile; ?>
    </div>
    <?php wp_reset_postdata(); ?>
    <?php else : ?>

        <h2>Nothing found!</h2>

    <?php endif; ?>
			
    


</div>
<?php get_footer(); ?>