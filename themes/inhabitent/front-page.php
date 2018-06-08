<?php

/*
Template Name: homepage
*/

/**
 * The template for displaying home page.
 *
 * @package inhabitent 
 */

 
?>

<?php get_header();  ?>


	<main id="home-main" class="homepage-main" role="main">

		<div class = "banner-logo"> <div>

		



	</main><!-- #main -->

<section>
<div class = "section-wrapper">
 <!--       ===========================================                    Shop categories section             ================================================= -->

	<div class = "shop-categories">

		<div class = "shop-menu">

			<ul>
				
				<li> 
						
					<div class = "do-category"> 

							
						<div class = "do-icon">

							<img src="<?php echo esc_url( get_stylesheet_directory_uri() )?>/product-type-icons/do.svg">
							
						</div>


						<div class = "category-description">

							<p>Get back to nature with all the tools and toys you need to enjoy the great outdoors.</p>

							<button type="button"><a href="/Inhabitent/do/" <h1> do stuff</h1> </a> </button>

						</div>
							

					</div> 

						
				</li>



				<li> 

					<div class = "eat-category"> 

						<div class = "eat-icon">

							<img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/product-type-icons/eat.svg">
							
						</div>


						<div class = "category-description">

							<p> Nothing beats food cooked over a fire. We have all you need for good camping eats.</p>

							<button type="button"><a href="/Inhabitent/eat/" <h1> eat stuff</h1> </a> </button>

						</div>

					</div> 

						
				</li>


				<li> 
						
					<div class = "sleep-category"> 

						<div class = "sleep-icon">

							<img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/product-type-icons/sleep.svg">
		
						</div>


						<div class = "category-description">

							<p>Get a good night's rest in the wild in a home away from home that travels well.</p>
								
							<button type="button"><a href="/Inhabitent/sleep/" <h1> sleep stuff</h1> </a> </button>

						</div>

					</div> 

						
				</li>


					<li> 

						
						<div class = "wear-category"> 

							<div class = "wear-icon">

								<img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/product-type-icons/wear.svg">
							
							</div>


							<div class = "category-description">

								<p>From flannel shirts to toques, look the part while roughing it in the great outdoors.</p>

								<button type="button"><a href="/Inhabitent/wear/" <h1> wear stuff</h1> </a> </button>

							</div>

						</div> 

						
					</li>


			</ul>
		</div> <!-- shop menu -->
		</div>   <!-- shop-categories -->



<!--       ===========================================                   last posts section             ================================================= -->


	<div class ="latest-post-heading"> 

		<h1> inhabitent journal </h1>

	</div>  




	<div class = "posts-wrapper">

		
	<div class = "last-posts">

		<?php
		$args = array( 'post_type' => 'post', 'order' => 'ASC', 'posts_per_page' => 3);
		$posts = new WP_Query( $args ); 
		?>

		<?php if ( $posts->have_posts() ) : ?>
		<?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
	
		
		


			<div class = "single-thumbnail"> 
			
				<div class = "thumbnail-wrapper">
				<?php the_post_thumbnail( 'medium'); ?>
				</div>

				<div class = "single-thumbnail-meta"> 

					<div class = "post-info">

					<?php red_starter_posted_on(); ?> / 
					<?php comments_number('0 comment', '1 comment'); ?> 
					

					</div> <!-- post-info -->


					<div class = "post-title">
					<a href="<?php the_permalink(); ?>" <h1> <?php the_title(); ?> 
					</div> <!-- post-title -->

				<div class = "post-button"> </h1><button type="button"> <p> read entry </p></button>
			 </div> <!-- post-button--> </a>
					
				</div> <!-- single-thumbnail-meta -->

				<?php echo "<br>" ?>

				
				
			
			</div>	<!-- single-thumbnail -->
		
			
	

			<?php endwhile; ?>

			<?php wp_reset_postdata(); ?>
			<?php else : ?>

				<h2>Nothing found!</h2>

			<?php endif; ?>

		
	</div><!-- last posts -->

</div> <!-- posts-wrapper -->

	<!--       ===========================================                   adventures section             ================================================= -->


<div class = "adventures-gallery-wrapper">
	<div class = "adventures-gallery">
			
		<?php
		$args = array( 'post_type' => 'adventures', 'order' => 'ASC', 'posts_per_page' => 4  );
		$adventures = new WP_Query( $args ); // instantiate our object
		?>
	
		<?php if ( $adventures ->have_posts() ) : ?>
		<?php while ( $adventures ->have_posts() ) : $adventures ->the_post(); ?>
	
	
	
		<div class = "single-adventure">

			

			   
				<?php the_post_thumbnail( 'medium' ); ?>
				<a href="<?php the_permalink(); ?>" <p> <?php the_title(); ?> </p> <button type="button"> <p> read more </p> </button></h1> </a>
			
			</div>
        
			
		
			   
	
	
	<?php endwhile; ?>

	


	<?php wp_reset_postdata(); ?>
	<?php else : ?>
	
		<h2>Nothing found!</h2>
	
	<?php endif; ?>
	
	
				
	
	<div class = "adventure-page-button">
		<button type="button"><a href="/Inhabitent/all-adventures/" <h1> More Adventures</h1> </a> </button>
	</div>
	
	
	</div>
	</div> <!-- div gallery wrapper -->		
			
	
			
	
	</div> <!-- section-wrapper-->	
</section>
			
	
		
	

<?php get_footer(); ?>