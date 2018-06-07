<?php
/*
Template Name: about
*/

/**
 * The template for displaying about page.
 *
 * @package inhabitent
 */
?>


<?php get_header();  ?>


	


		<!-- <main id="main" class="site-main" role="main"> -->

			<?php while ( have_posts() ) : the_post(); ?>


			<div class = "page-image">

				
				<?php echo CFS()->get( 'about_img' ); ?>

		

	              <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?> 
				
				
</div>

		 

			<!-- <div id="primary" class="content-area"> -->

				<?php the_content(); ?>

			<?php endwhile; // End of the loop. ?>

		</main>
	<!-- </div> -->



<?php get_footer(); ?>
