<?php


/*
Template Name: find us
*/

/**
 * The template for displaying find us page.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<?php get_sidebar(); ?> 
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>