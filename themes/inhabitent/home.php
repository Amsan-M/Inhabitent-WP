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
<?php 
get_header();  ?>

<!-- <?php 
get_sidebar(); ?> -->

		<main id="home-main" class="homepage-main" role="main">

			<div class = "banner-logo"> <div>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	

<?php get_footer(); ?>