<?php

/**
 * The template for displaying journal page.
 * 
 * (default template, but as all pages heve their own custom templates only the blog post uses this template)
 *
 * @package RED_Starter_Theme
 */
?>
<?php get_header(); ?>

<?php  get_sidebar(); ?> 

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
