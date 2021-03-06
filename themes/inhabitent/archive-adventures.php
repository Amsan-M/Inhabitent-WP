<?php

/*
Template Name: adventures
*/

/**
 * The template for the adventures archive page.
 *
 * @package inhabitent
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

				<span class = "adventure-wrapper">

	
					<div class = "adventure-image"> 

						<?php the_post_thumbnail( 'large' ); ?>

					</div> <!-- .adventure-image -->


					<div class = "adventure-link">

					<a href="<?php the_permalink(); ?>" <h1> <?php the_title(); ?> <br> </h1> <button type = "button"> read more </button> </a>

					</div> <!-- .adventure-link-->

				</span> 	
				

			</div> <!-- .single-adventure -->
	
		<?php endwhile; ?>


	</div> <!-- .all-adventures -->


		<?php wp_reset_postdata(); ?>
		<?php else : ?>
		
			<h2>Nothing found!</h2>
		
		<?php endif; ?>
				
	
<?php get_footer(); ?>
	
			
			
	