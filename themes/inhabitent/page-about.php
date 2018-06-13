<?php
/*
Template Name: about
*/

/**
 * The template for the about page.
 *
 * @package inhabitent
 */
?>


<?php get_header();  ?>


			<?php while ( have_posts() ) : the_post(); ?> 


			<div class = "page-image">

				

				<?php 
					$image = CFS()->get('image');
					echo '<img src="'.$image.'"/>';
				?>
		
	            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>   
				
				
			</div> <!--.page-image-->

				<?php the_content(); ?>

				<?php endwhile; ?>

		<!-- </main> -->




<?php get_footer(); ?>
