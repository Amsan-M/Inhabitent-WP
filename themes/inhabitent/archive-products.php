<?php

/*
Template Name: products
*/

/**
 * The template for displaying home page.
 *
 * @package inhabitent
 */

 
?>

<?php get_header();  ?>

    <div class = "shop-menu">

        <h1> <?php the_title(); ?> </h1>

<nav class = "categories-menu"> 

<?php 


$terms = get_terms('product_type');
echo '<ul class = "product-type">';
foreach ($terms as $term){
    echo '<li class="type"><a href="'.get_term_link($term).'">'.$term->name.'</a></li>' ;
}  
echo '</ul>';


            ?>

   
<!-- <ul>
        <li><a href="/Inhabitent/do/" <h1> do </h1> </a></li>
        <li><a href="/Inhabitent/eat/" <h1> eat </h1> </a></li>
        <li><a href="/Inhabitent/sleep/" <h1> sleep </h1> </a></li>
        <li><a href="/Inhabitent/wear/" <h1> wear </h1> </a></li>
    </ul> -->

</div>

<div class = "products-gallery">
			
        <?php
        $args = array( 'post_type' => 'products', 'order' => 'ASC', 'posts_per_page' => -1  );
        $products = new WP_Query( $args ); // instantiate our object
        ?>

        <?php if ( $products->have_posts() ) : ?>
        <?php while ( $products->have_posts() ) : $products->the_post(); ?>



       <div class = "single-product">

           <div class = "product-image">

           <a href="<?php the_permalink(); ?>"  
           <?php get_template_part( 'template-parts/content', 'products' ); ?>

           </div> <!-- .product-image -->


           <div class = "product-info">

            <?php the_title(); ?> ................ $<?php echo CFS()->get( 'price' ); ?> </a>

            </div> <!-- .product-info --> 


        </div> <!-- .single-product -->
           


    <?php endwhile; ?>
    </div>
    <?php wp_reset_postdata(); ?>
    <?php else : ?>

        <h2>Nothing found!</h2>

    <?php endif; ?>
			




</div>
		


<?php get_footer(); ?>