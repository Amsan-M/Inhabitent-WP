<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package inhabitent
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<div class="entry-content">

	<header class="entry-header">
	 <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?> 
	</header> <!--.entry-header -->

	
	<?php 
	// the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php the_content(); ?>
		<!-- closing div for .entriy-content supposed to be here but moved to the wordpress wysiwyg of the about page to wrap entry title and entry img without entry text-->
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	
</article><!-- #post-## -->
