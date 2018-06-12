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
				$image = get_field('image');

				if( !empty($image) ): ?>
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
				
				<?php endif; ?>
		
	            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>   
				
				
			</div> <!--.page-image-->

				<?php the_content(); ?>

				<?php endwhile; ?>

		<!-- </main> -->




<?php get_footer(); ?>
