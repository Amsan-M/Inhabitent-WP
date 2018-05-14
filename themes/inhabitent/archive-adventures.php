<?php

/*
Template Name: adventures
*/

/**
 * The template for displaying adventure archive page.
 *
 * @package RED_Starter_Theme
 */

 
?>

<?php get_header();  ?>

<div class = "adventures-title">

<h1> <?php the_title(); ?> </h1>

</div>
 <div class = "all-adventures">
			
		<?php
		$args = array( 'post_type' => 'adventures', 'order' => 'ASC', 'posts_per_page' => -1  );
		$adventures = new WP_Query( $args ); // instantiate our object
		?>
	
		<?php if ( $adventures ->have_posts() ) : ?>
		<?php while ( $adventures ->have_posts() ) : $adventures ->the_post(); ?>
	
	
	
		<div class = "single-adventure">

			<div class = "adventure-image"> 

			   <?php the_post_thumbnail( 'large' ); ?>

			</div>

			<div class = "adventure-link">

			   <a href="<?php the_permalink(); ?>" <h1> <?php the_title(); ?> </h1> <button type = "button"> read more </button> </a>

			</div>

		</div>
			   
	
	
	<?php endwhile; ?>
	</div>


	<?php wp_reset_postdata(); ?>
	<?php else : ?>
	
		<h2>Nothing found!</h2>
	
	<?php endif; ?>
				
	
	
	
	<?php get_footer(); ?>
	
			
			
	