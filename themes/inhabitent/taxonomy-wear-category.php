<?php

/*
Template Name: wear category
*/

?>



<?php get_header();  ?>
<?php
$wearcategory = new WP_Query( array (
  'post_type' => 'products',
  'product_type'  => 'wear',
  'posts_per_page' => -1
) );

 if ( $wearcategory->have_posts() ) : ?>
        <?php while ( $wearcategory->have_posts() ) : $wearcategory->the_post(); ?>



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
			


	

<?php get_footer(); ?>