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

 <!-- ============================================  Shop categories section ============================================ -->


			<div class = "shop-section-title">
				<h1> shop stuff </h1>
			</div> <!--.shop-section-title-->
			

			<div class = "shop-categories">

				<div class = "shop-menu">

					 <!-- loop to display the button links and to the shopping categories  -->

						<?php 
						$terms = get_terms('product_type');
						echo '<ul class = "product-type">';
						foreach ($terms as $term){
						?>

					<li>

						<span class = "icon-categories-wrapper">

							<span class = "icon-wrapper"> <div class = "shop-icon"> </div></span>

								<div class = "category-description">

									<?php $description = term_description($term); ?>
									<p> <?php echo $description ?> </p>


									<span class = "button-wrapper">
									<button> <?php echo '<div class="type"><a href="'.get_term_link($term).'"> '.$term->name.'   stuff </a></div>' ;?></button>
									</span>
									
								</div>	<!-- .category-description -->		

						
						</span> <!--.icon-categories-wrapper  -->
						
						<?php }  ?>
				
					</li> 

              			<?php  echo '</ul>'; ?>

				</div> <!--.shop menu -->

			</div>   <!-- .shop-categories -->



<!-- ============================================ last posts section  =============================================== -->


			<div class ="latest-post-title"> 

				<h1> inhabitent journal </h1>

			</div>  <!-- latest-post-title -->

			<div class = "posts-wrapper">

			
				<div class = "last-posts">

					<!-- Loop to display the latest posts -->

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

								<?php red_starter_posted_on();?> / <?php comments_number('0 comment', '1 comment','% Comments'); ?> 
							

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


<!-- ====================   adventures section  ================================================= -->


			<div class = "latest-adventures-title">

				<h1> latest adventures  <h1>

			</div> <!--.latest-adventures-title-->

			<div class = "adventures-gallery-wrapper">

				<div class = "adventures-gallery">

				<!-- loop to display the adventures -->
				
					<?php
						$args = array( 'post_type' => 'adventures', 'order' => 'ASC', 'posts_per_page' => 4  );
						$adventures = new WP_Query( $args ); 
					?>
			
					<?php if ( $adventures ->have_posts() ) : ?>
					<?php while ( $adventures ->have_posts() ) : $adventures ->the_post(); ?>
				
			
					<div class = "single-adventure">

							<?php the_post_thumbnail( 'medium' ); ?>
							<a href="<?php the_permalink(); ?>" <p> <?php the_title(); ?> </p> <button type="button"> <p> read more </p> </button></h1> </a>
						
					</div> <!-- single-adventure -->
		
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
					<?php else : ?>
		
						<h2>Nothing found!</h2>
		
					<?php endif; ?>
				
		
					<div class = "adventure-page-button">
						<button type="button"><a href="/Inhabitent/all-adventures/" <h1> More Adventures</h1> </a> </button>
					</div><!-- adventure-page-button -->
			
		
				</div>  <!-- adventures gallery -->	

			</div> <!-- .adventures-gallery wrapper -->		
			
	
		</div> <!--.section-wrapper-->	

	</section>
			
	
		
	

<?php get_footer(); ?>