<?php
/**
 * The template for displaying all single products posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); 
?>


	<div id="primary" class="content-area">
 

    
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

            <?php 

 $price = CFS()->get( 'price' );
 $exerpt =CFS()->get( 'exerpt' );


echo "<p class=\"price\">Price: \${$price}</p>";
echo "<p class=\"product-exerpt\">{$exerpt}</p>";

?>

			<?php the_post_navigation(); ?>

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
