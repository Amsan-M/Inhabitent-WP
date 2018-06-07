<?php
/**
 * Template part for displaying single adventures posts.
 *
 * @package inhabitent
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
		
		
        
	<?php if ( 'post' === get_post_type() ) : ?>
	<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
	
	<?php endif; ?>
	<!-- </header>.entry-header -->

	
    <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>      
	<?php red_starter_posted_by(); ?>




<?php the_content();?>
	


</article><!-- #post-## -->
