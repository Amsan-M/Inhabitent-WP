<?php
/**
 * The template for the footer.
 *
 * @package inhabitent
 */

?>

</div><!-- #content -->



	<footer id="colophon" class="site-footer" role="contentinfo">


		<div class="site-info">

			<?php if (is_active_sidebar ('footer-sidebar')):?>
			
				<?php dynamic_sidebar('footer-sidebar'); ?>
						
			<?php endif; ?>

		</div> <!--.site-info -->   		

		
		<div class= "footer-image"> </div>
					
					<!-- </div>.site-info -->			
				
	</footer><!-- #colophon -->


	</div><!-- #page -->

		<?php wp_footer(); ?>

</body>
</html>
