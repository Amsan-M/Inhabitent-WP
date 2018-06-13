<?php
/**
 * The template for displaying all single posts.
 *
 * @package inhabitent
 * 
 */

get_header(); ?>

	<div id="primary" class="content-area">

		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'single' ); ?>
				<?php// the_post_navigation(); ?>

				<div class = "social-media-buttons"> 

					<button type="button"> <i class="fab fa-facebook-f"></i> <p> like </p> </button><button type="button"> <i class="fab fa-twitter"></i>  <p>tweet </p> </button><button type="button"> <i class="fab fa-pinterest"></i> <p> pin </p> </button>

				</div>  <!-- social media buttons-->
				
				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

					

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
		
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
