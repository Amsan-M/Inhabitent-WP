<?php

/*
Template Name: homepage
*/

/**
 * The template for displaying home page.
 *
 * @package RED_Starter_Theme
 */

 
?>

<?php get_header();  ?>


		<main id="home-main" class="homepage-main" role="main">

			<div class = "banner-logo"> <div>

				<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>


		</main><!-- #main -->


		<div class ="latest-post-heading"> 
			<h1> inhabitent journal </h1>
		</div>  



		
	<div class = "last-posts">

		<?php
		$args = array( 'post_type' => 'post', 'order' => 'ASC', 'posts_per_page' => 3 );
		$posts = new WP_Query( $args ); // instantiate our object
		?>

		<?php if ( $posts->have_posts() ) : ?>
		<?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
		<!-- Content of the queried post results goes here */  -->



		<div class = "single-thumbnail"> 
		
			<?php the_post_thumbnail( 'medium' ); ?>

			  <?php the_content(); ?>

			<div class = "single-thumbnail-meta"> 
				<?php red_starter_posted_on(); ?> 
				<?php comments_number('0 comment', '1 comment'); ?> 
				<?php red_starter_posted_by(); ?>
				<h1> <?php the_title(); ?> </h1>
			</div> <!-- single-thumbnail-meta -->

			<?php echo "<br>" ?>

			
			
		
		</div>	<!-- single-thumbnail -->
		
	

		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
		<?php else : ?>
			<h2>Nothing found!</h2>
		<?php endif; ?>

	</div><!-- last posts -->
	

<?php get_footer(); ?>