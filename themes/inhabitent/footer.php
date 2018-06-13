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

			<span class = "copyright-wrapper">

				<p> copyright 	&copy; 2018 inhabitent</p>

			</span>

		</div> <!--.site-info -->   		

		
		<div class= "footer-image">
					
					<!-- </div>.site-info -->	
					
					
					</div>		
	</footer><!-- #colophon -->


	</div><!-- #page -->

		<?php wp_footer(); ?>

</body>
</html>
